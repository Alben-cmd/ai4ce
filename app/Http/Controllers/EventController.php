<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventImage;
use Image;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $events = Event::all();

        return view('admin.event', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.create_event');
    }

    public function create_event_image()
    {
      return view('admin.create_event_image');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function eventImageStore(Request $request)
    {
         $this->validate($request, [
            'event_image_name' => 'required|image',
            'event_image_caption' => 'required',
            'day' => 'required'
        ]);

        $path = public_path().'/event/';      
        $originalImage = $request->file('event_image_name');
        $image = Image::make($originalImage);
        $image->resize(1500, 1000);
        $image->save($path.time().$originalImage->getClientOriginalName()); 
        
        $eventimage = new EventImage();

        $eventimage->event_image_name=time().$originalImage->getClientOriginalName();  
        $eventimage->event_image_caption = $request->event_image_caption;
        $eventimage->event_id = $request->event_id;
        $eventimage->day = $request->day;

        $eventimage->save();       


        return back()->with('success', 'Image has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $event_data = Event::find($id);
        
        $event = EventImage::where('event_id',$id)->get();

        return view('admin.event_show', compact('event', 'event_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
