<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Image;

class GalleryController extends Controller
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
       $galleries = Gallery::all();

        return view('admin.gallery', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_gallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gallery_image' => 'required|image',
            'gallery_caption' => 'required'
        ]);

        $path = public_path().'/gallery/';      
        $originalImage = $request->file('gallery_image');
        $image = Image::make($originalImage);
        $image->resize(1500, 1000);
        $image->save($path.time().$originalImage->getClientOriginalName()); 
        
        $gallery = new Gallery();

        $gallery->gallery_image=time().$originalImage->getClientOriginalName();   
        $gallery->gallery_caption = $request->gallery_caption;

        $gallery->save();       


        return redirect('/admin/gallery')->with('success', 'Image has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.update_gallery', compact('gallery'));
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
        
        $this->validate($request, array(
            'gallery_caption' => 'required',
            'gallery_image' => 'image'

            ));
         $gallery->gallery_caption = $request->input('gallery_caption');

         if ($request->hasFile('gallery_image')) {

             $filename = time(). '.' .request()->gallery_image->getClientOriginalExtension(); 
        request()->gallery_image->move(public_path('/gallery/'), $filename);

        $gallery->gallery_image=time().$filename->getClientOriginalName();

         }
         $gallery->save(); 

        return redirect('/admin/gallery')->with('success', 'Image has been Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Gallery::where('id', $id)->delete();

        return back()->with('success', ' Image has been Removed!');
    }
}
