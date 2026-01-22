<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('frontend.blog.index', [
            'title' => 'Health Blog',
            'blogs' => Blog::latest()->get(),
        ]);
    }

    public function show($slug)
    {
        return view('frontend.blog.show', [
            'blog' => Blog::where('slug', $slug)->firstOrFail(),
        ]);
    }
}