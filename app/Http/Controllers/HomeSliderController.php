<?php

namespace App\Http\Controllers;

use App\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }


        $sliders = HomeSlider::all();
        return view('admin.homepage.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }


        return view('admin.homepage.slider.create');
    }

    
    public function store(Request $request)
    {

        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $request->validate([
            'sliderMainImage' => 'required',
            'sliderFrontImage' => 'required',
            'name' => 'required',
            'button_text' => 'required',
            'button_link' => 'required',
        ]);

        $homeslider = new HomeSlider();

        if ($files = $request->file('sliderMainImage')) {
            $sliderMainImage = 'sliderMainImage'.time().'.'.$files->getClientOriginalExtension(); 
            $files->move(public_path('images/slider'), $sliderMainImage);
            $slider_image = $sliderMainImage;
        }

        $homeslider->slider_main_image = $slider_image;

        if ($files = $request->file('sliderFrontImage')) {
            $sliderTitleImage = 'sliderFrontImage'.time().'.'.$files->getClientOriginalExtension(); 
            $files->move(public_path('images/slider'), $sliderTitleImage);
            $slider_title_image = $sliderTitleImage;
        }

        $homeslider->slider_title_image = $slider_title_image;
        $homeslider->slider_label = $request->name;
        $homeslider->slider_button_text = $request->button_text;
        $homeslider->slider_button_link = $request->button_link;

        $homeslider->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $slider = HomeSlider::findOrFail($id);
        return view('admin.homepage.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $slider = HomeSlider::findOrFail($id);
        return view('admin.homepage.slider.edit', compact('slider'));
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

        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $slider = HomeSlider::findOrFail($id);
        if($files = $request->file('sliderMainImage')) {
            unlink(public_path('images/slider/'.$slider->slider_main_image));
            // insert new image
            $sliderMainImage = 'sliderMainImage'.time().'.'.$files->getClientOriginalExtension(); 
            $files->move(public_path('images/slider'), $sliderMainImage);
            $slider_image = $sliderMainImage;
            $slider->slider_main_image = $slider_image;
        }

        if ($files = $request->file('sliderFrontImage')) {
            unlink(public_path('images/slider/'.$slider->slider_title_image));
            $sliderTitleImage = 'sliderFrontImage'.time().'.'.$files->getClientOriginalExtension(); 
            $files->move(public_path('images/slider'), $sliderTitleImage);
            $slider_title_image = $sliderTitleImage;
            $slider->slider_title_image = $slider_title_image;
        }

        $slider->slider_title_image = $slider_title_image;
        $slider->slider_label = $request->name;
        $slider->slider_button_text = $request->button_text;
        $slider->slider_button_link = $request->button_link;

        $slider->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $slider = HomeSlider::findOrFail($id);
        $slider->delete();

        return redirect()->route('admin.slider.index');
    }

    public function getSliders()
    {
        $sliders = HomeSlider::all();
        return response()->json([
            'sliders' => $sliders
        ]);
    }
}
