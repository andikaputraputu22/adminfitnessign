<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class DetailHealthController extends Controller
{
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('frontend.detail_health.index', [
            'title' => $blog->title,
            'blog' => $blog
        ]);
    }
}
