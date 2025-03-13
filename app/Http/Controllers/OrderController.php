<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::with(['user', 'service', 'instructor'])->get();
        return view('orders.index', [
            'title' => 'Orders',
            'orders' => $orders,
            'orderStatus' => OrderStatus::class
        ]);
    }
}
