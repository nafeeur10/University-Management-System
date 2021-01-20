<?php

namespace App\Http\Controllers;

use App\MultiMedia;
use Illuminate\Http\Request;

class MultiMediaController extends Controller
{
    public function index()
    {
        $allmultimedia = MultiMedia::all();
        return view('admin.homepage.multimedia.index', compact('allmultimedia'));
    }

    public function create()
    {
        return view('admin.homepage.multimedia.create');
    }

    public function store(Request $request)
    {
        $multimedia = new MultiMedia();

        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images/multimedia'),$imageName);

        $multimedia->href = 'images/multimedia/'.$imageName;
        $multimedia->save();

        return response()->json(['success'=>$imageName]);
    }

    public function show($multiMedia)
    {
        $multimedia = MultiMedia::findOrFail($multiMedia);
        return view('admin.homepage.multimedia.show', compact('multimedia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MultiMedia  $multiMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(MultiMedia $multiMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MultiMedia  $multiMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MultiMedia $multiMedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MultiMedia  $multiMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy($multiMedia)
    {
        if(file_exists(public_path().'/'.MultiMedia::findOrFail($multiMedia)->href)){
            unlink(public_path().'/'.MultiMedia::findOrFail($multiMedia)->href);
        }
        MultiMedia::findOrFail($multiMedia)->delete();
        return redirect()->route('admin.multimedia.index')->with('success', 'Image Deleted Successfully');
    }

    public function getMultimedia()
    {
        $allMultimedia = MultiMedia::all();
        return response()->json([
            'allMultimedia' => $allMultimedia
        ]);
    }
}
