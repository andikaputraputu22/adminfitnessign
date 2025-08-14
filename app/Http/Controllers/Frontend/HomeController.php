<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home page
    public function index() {
        return view('frontend.home.index', [
            'title' => 'Home'
        ]);
    }

    // About page
    public function about() {
        return view('frontend.about.index', [
            'title' => 'About'
        ]);
    }
}
