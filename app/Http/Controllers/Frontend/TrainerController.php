<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index($id) {
        return view('frontend.trainer.index', [
            'title' => strtoupper($id)
        ]);
    }
}
