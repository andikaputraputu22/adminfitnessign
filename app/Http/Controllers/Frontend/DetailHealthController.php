<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailHealthController extends Controller
{
    public function index() {
        return view('frontend.detail_health.index', [
            'title' => 'Detail Health'
        ]);
    }
}
