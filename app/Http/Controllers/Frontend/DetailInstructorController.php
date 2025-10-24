<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailInstructorController extends Controller
{
    public function index() {
        return view('frontend.detail_instructor.index', [
            'title' => 'Detail Instructor'
        ]);
    }
}
