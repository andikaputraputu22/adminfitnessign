<?php

namespace App\Http\Controllers\Api;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\Instructor;
use App\Models\Order;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Midtrans\Config;
use Midtrans\Snap;

class PaymentController extends Controller
{
    public function createTransaction(Request $request) {
        $user = auth('api')->user();

        $validator = Validator::make($request->all(), [
            'instructor_id' => 'required|exists:instructors,id',
            'service_id' => 'required|exists:services,id',
            'amount' => 'required|numeric|min:1000',
            'order_datetime' => 'required|date_format:Y-m-d H:i:s'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }
        
        $orderDateTime = Carbon::parse($request->order_datetime);
        $isBooked = Order::where('instructor_id', $request->instructor_id)
            ->where('order_datetime', $orderDateTime)
            ->exists();
        
        if ($isBooked) {
            return response()->json([
                'success' => false,
                'message' => 'Instructor not available at this time'
            ], 400);
        }

        $instructor = Instructor::find($request->instructor_id);
        $service = Service::find($request->service_id);
        
        if (!$instructor || !$service) {
            return response()->json([
                'success' => false,
                'message' => 'Instructor or service not found'
            ], 404);
        }

        DB::beginTransaction();

        try {
            $order = Order::create([
                'order_id' => 'ORDER-FITNESSIGN-' . time(),
                'user_id' => $user->id,
                'service_id' => $service->id,
                'instructor_id' => $instructor->id,
                'customer_name' => $user->name,
                'customer_email' => $user->email,
                'customer_phone' => $user->phone,
                'amount' => $request->amount,
                'order_datetime' => $orderDateTime,
                'status' => OrderStatus::PENDING
            ]);

            Config::$serverKey = config('services.midtrans.server_key');
            Config::$isProduction = config('services.midtrans.is_production');
            Config::$isSanitized = true;
            Config::$is3ds = true;

            $transaction = [
                'transaction_details' => [
                    'order_id' => $order->order_id,
                    'gross_amount' => $order->amount
                ],
                'customer_details' => [
                    'first_name' => $user->name,
                    'email' => $user->email,
                    'phone' => $user->phone
                ],
                'item_details' => [
                    [
                        'id' => $service->id,
                        'price' => $service->price,
                        'quantity' => 1,
                        'name' => $service->name
                    ]
                ]
            ];

            $snapToken = Snap::getSnapToken($transaction);

            if (!$snapToken) {
                throw new \Exception('Failed to get token');
            }

            $order->update([
                'snap_token' => $snapToken
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'snap_token' => $snapToken
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
