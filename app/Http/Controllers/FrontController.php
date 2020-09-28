<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\EventImage;

class FrontController extends Controller
{
    public function aboutUs()
    {
    	return view('front.about');
    }

    public function research()
    {
    	return view('front.activities.research');
    }

    public function capacityBuilding()
    {
    	return view('front.activities.capacity-building');
    }

    public function acado()
    {
    	return view('front.activities.acadoprenuership');
    }

    public function curriculum()
    {
    	return view('front.activities.curriculum');
    }

    public function contactUs()
    {
    	return view('front.contact');
    }

    public function openGallery()
    {   
        $gallery = Gallery::all();

        return view('front.gallery', compact('gallery'));
    }

    public function symposium()
    {
        $eventImage = EventImage::all();
        return view('front.symposium_activities', compact('eventImage'));
    }

    public function expectedProjest()
    {
        return view('front.expected_project');
    }


    public function conference_1st()
    {
        return view('front.conference_1st');
    }

    public function pitching()
    {
        return view('front.product_pitching');
    }
}
