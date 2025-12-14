<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;

class TrainerController extends Controller
{
    public function index(Service $service) {
        return view('frontend.trainer.index', [
            'title' => strtoupper($service->name),
            'instructors' => $service->instructors
        ]);
    }
}
