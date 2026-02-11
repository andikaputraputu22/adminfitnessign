<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;

class InstructorController extends Controller
{
    public function index(Service $service) {
        return view('frontend.instructor.index', [
            'title' => strtoupper($service->name),
            'instructors' => $service->instructors,
            'service' => $service
        ]);
    }
}
