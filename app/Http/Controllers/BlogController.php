<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.index', [
            'title' => 'Blogs',
            'blogs' => Blog::all()
        ]);
    }

    public function store(Request $request)
    {
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

    public function delete($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->photo && Storage::disk('public')->exists($blog->photo)) {
            Storage::disk('public')->delete($blog->photo);
        }
        $blog->delete();
        return redirect()->back()->with('success', 'Article has been deleted!');
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return redirect()->back()->with('failed', 'Update article failed!');
        }

        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
            'photo' => 'nullable|image|file|max:5120'
        ]);

        if ($request->title !== $blog->title) {
            $slug = Str::slug($request->title);
            $originalSlug = $slug;
            $count = 1;

            while (Blog::where('slug', $slug)->where('id', '!=', $id)->exists()) {
                $slug = $originalSlug . '_' . $count++;
            }

            $validatedData['slug'] = $slug;
        }

        if ($request->file('photo')) {
            if ($blog->photo && Storage::disk('public')->exists($blog->photo)) {
                Storage::disk('public')->delete($blog->photo);
            }

            $validatedData['photo'] = $request->file('photo')->store('blogs', 'public');
        }

        $blog->update($validatedData);
        return redirect()->back()->with('success', 'Article has been updated!');
    }
}
