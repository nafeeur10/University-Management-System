<?php

namespace App\Http\Controllers;

use App\CampusLife;
use Illuminate\Http\Request;

class CampusLifeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campuslifes = CampusLife::all();
        return view('admin.homepage.campuslife.index', compact('campuslifes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homepage.campuslife.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'campus_life_icon' =>'required',
            'campus_life_title' =>'required',
            'campus_life_title_arabic' =>'required',
            'campus_life_description' => 'required',
            'campus_life_description_arabic' => 'required'
        ]);

        $campuslife = new CampusLife();
        if($files = $request->file('campus_life_icon')) {
            $campusLifeIcon = 'CampusLife'.time().'.'.$files->getClientOriginalName();
            $files->move('images/campuslife/', $campusLifeIcon);
            $campuslife->campus_life_icon = $campusLifeIcon;
        }

        $campuslife->campus_life_title = $request->campus_life_title;
        $campuslife->campus_life_title_arabic = $request->campus_life_title_arabic;
        $campuslife->campus_life_home_description = $request->campus_life_description;
        $campuslife->campus_life_home_description_arabic = $request->campus_life_description_arabic;
        $campuslife->save();

        return redirect()->route('admin.campuslife.index')
        ->with('success', 'Campus Life added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CampusLife  $campusLife
     * @return \Illuminate\Http\Response
     */
    public function show(CampusLife $campusLife)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CampusLife  $campusLife
     * @return \Illuminate\Http\Response
     */
    public function edit(CampusLife $campusLife)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CampusLife  $campusLife
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CampusLife $campusLife)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CampusLife  $campusLife
     * @return \Illuminate\Http\Response
     */
    public function destroy(CampusLife $campusLife)
    {
        //
    }

    public function getCampusLife() {
        $campuslife = CampusLife::orderBy('id', 'desc')->take(3)->get();
        return response()->json([
            'campuslife' => $campuslife
        ]);
    }
}
