<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        return view('services.index', [
            'title' => 'Services',
            'services' => Service::with('category')->get(),
            'categories' => Category::all()
        ]);
    }
}
