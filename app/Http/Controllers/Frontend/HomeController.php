<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $personalTrainingInstructors = Instructor::with('services')
            ->whereHas('services', function ($query) {
                $query->where('is_personal_training', true);
            })
            ->get();

        $classInstructors = Instructor::with('services')
            ->whereHas('services', function ($query) {
                $query->where('is_personal_training', false);
            })
            ->get();

        return view('frontend.home.index', [
            'title' => 'Home',
            'personalTrainingInstructors' => $personalTrainingInstructors,
            'classInstructors' => $classInstructors
        ]);
    }
}
