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
            'services' => Service::all()
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Service::create($validateData);
        return redirect()->back()->with('success', 'New service has been added!');
    }

    public function delete($id) {
        Service::find($id)->delete();
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
