<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getInstructors(Request $request) {
        $serviceId = $request->query('service_id');
        if (!$serviceId) {
            return response()->json([
                'success' => false,
                'message' => 'Id service is required'
            ], 400);
        }

        $service = Service::with('instructors')->find($serviceId);
        if (!$service) {
            return response()->json([
                'success' => false,
                'message' => 'Service not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $service->instructors->makeHidden('pivot')
        ], 200);
    }

    public function getCategory($id) {
        $category = Category::with('services')->find($id);
        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Category not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $category
        ], 200);
    }
}
