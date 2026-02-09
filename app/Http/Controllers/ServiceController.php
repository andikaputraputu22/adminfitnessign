<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index() {
        return view('services.index', [
            'title' => 'Services',
            'services' => Service::all()
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'photo' => 'image|file|max:5120'
        ]);

        // Generate unique slug
        $slug = Str::slug($request->name);
        $originalSlug = $slug;
        $count = 1;

        while (Service::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        $validateData['slug'] = $slug;
        $validateData['is_personal_training'] = false;
        
        if ($request->file('photo')) {
            $validateData['photo'] = $request->file('photo')->store('services', 'public');
        }

        Service::create($validateData);
        return redirect()->back()->with('success', 'New service has been added!');
    }

    public function delete($id) {
        $service = Service::findOrFail($id);
        if ($service->photo && Storage::disk('public')->exists($service->photo)) {
            Storage::disk('public')->delete($service->photo);
        }
        $service->delete();
        return redirect()->back()->with('success', 'Service has been deleted!');
    }

    public function update(Request $request, $id) {
        $service = Service::find($id);
        if (!$service) {
            return redirect()->back()->with('failed', 'Update service failed!');
        }

        $service->update($request->all());
        return redirect()->back()->with('success', 'Service has been updated!');
    }
}
