<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index() {
        return view('blogs.index', [
            'title' => 'Blogs',
            'blogs' => Blog::all()
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
            'photo' => 'image|file|max:5120'
        ]);

        // Generate unique slug
        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $count = 1;

        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        $validateData['slug'] = $slug;

        if ($request->file('photo')) {
            $validateData['photo'] = $request->file('photo')->store('blogs', 'public');
        }

        Blog::create($validateData);
        return redirect()->back()->with('success', 'New article has been added!');
    }

    public function delete($id) {
        Blog::find($id)->delete();
        return redirect()->back()->with('success', 'Article has been deleted!');
    }
}
