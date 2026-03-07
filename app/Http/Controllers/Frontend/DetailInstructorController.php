<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;

class DetailInstructorController extends Controller
{
    public function index($slug)
    {
        $instructor = Instructor::where('slug', $slug)
                    ->with('services')
                    ->firstOrFail();

         $service = $instructor->services->first();

        $certificates = $instructor->certificate
            ? array_map('trim', explode(',', $instructor->certificate))
            : [];

        $specialists = $instructor->specialist
            ? array_map('trim', explode(',', $instructor->specialist))
            : [];

        return view('frontend.detail_instructor.index', [
            'title' => $instructor->name,
            'service' => $service,
            'instructor' => $instructor,
            'certificates' => $certificates,
            'specialists' => $specialists
        ]);
    }
}
    