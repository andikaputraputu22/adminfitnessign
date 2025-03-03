<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstructorController extends Controller
{
    public function index() {
        return view('instructors.index', [
            'title' => 'Instructors',
            'instructors' => Instructor::with('services')->get()
        ]);
    }

    public function create() {
        return view('instructors.create', [
            'title' => 'Add Instructor',
            'services' => Service::all()
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'service_id' => 'required|array',
            'service_id.*' => 'exists:services,id',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'description' => 'required',
            'photo' => 'image|file|max:5120'
        ]);

        if ($request->file('photo')) {
            $validateData['photo'] = $request->file('photo')->store('instructors');
        }

        $instructor = Instructor::create($validateData);
        $instructor->services()->attach($request->service_id);
        return redirect('/instructors')->with('success', 'New instructor has been added!');
    }

    public function delete($id) {
        $instructor = Instructor::find($id);
        if ($instructor->photo) {
            Storage::delete($instructor->photo);
        }
        $instructor->delete();
        return redirect()->back()->with('success', 'Instructor has been deleted');
    }
}
