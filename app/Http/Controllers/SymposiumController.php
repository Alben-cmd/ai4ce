<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Symposium;
use App\EventImage;
use Session;

class SymposiumController extends Controller
{
    public function submit(Request $request)
    {
    	$this->validate($request, [
    		'title_of_paper' => 'required',
            'author' => 'required',
            'cauthor' => 'required',
            'affiliation' => 'required',
            'email_cauthor' => 'required',
            'phone_cauthor' => 'required',
            'abstract' => 'required'
    	]);

    	// dd($request->abstract);

    	$filename = uniqid() . $request->abstract->getClientOriginalName(); 
		$request->abstract->move(public_path('/abstracts/'), $filename);
		
		Symposium::create([
			'title_of_paper' => $request->title_of_paper,
            'author' => $request->author,
            'cathour' => $request->cauthor,
            'affiliation' => $request->affiliation,
            'email_cauthor' => $request->email_cauthor,
            'phone_cauthor' => $request->phone_cauthor,
            'abstract' => $filename
		]);

		Session::flash('successMessage', 'Abstract submission successful, you will be contacted by the organisers for further action(s).');
		return redirect()->back();
    }

    public function dayone()
    {
        $eventImage = EventImage::all();
        return view('front.symposium_day1', compact('eventImage'));
    }
	
    public function daytwo()
    {
        $eventImage = EventImage::all();
        return view('front.symposium_day2', compact('eventImage'));
    }

    public function daythree()
    {
        $eventImage = EventImage::all();
        return view('front.symposium_day3', compact('eventImage'));
    }

     public function poster()
    {
        $eventImage = EventImage::all();
        return view('front.poster', compact('eventImage'));
    }	
}
