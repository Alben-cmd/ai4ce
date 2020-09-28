<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AcademicImmersion;

class AcademicImmersionController extends Controller
{
     public function index()
    {
       $posterImage = AcademicImmersion::all();
       return view('front.immersion', compact('posterImage'));
    }
}
