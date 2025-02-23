<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Service;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index() {
        return view('instructors.index', [
            'title' => 'Instructors',
            'instructors' => Instructor::with('service')->get()
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
            'service_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'description' => 'required',
            'photo' => 'image|file|max:5120'
        ]);

        if ($request->file('photo')) {
            $validateData['photo'] = $request->file('photo')->store('instructors');
        }

        Instructor::create($validateData);
        return redirect('/instructors')->with('success', 'New instructor has been added!');
    }
}
