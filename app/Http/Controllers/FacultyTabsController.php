<?php

namespace App\Http\Controllers;

use App\FacultyTabs;
use App\HomeFaculty;
use Illuminate\Http\Request;

class FacultyTabsController extends Controller
{
    public function index()
    {
        $facultyTabs = FacultyTabs::all();
        return view('admin.homepage.faculty.tabs.index', compact('facultyTabs'));
    }

    public function create()
    {
        $allFaculty = HomeFaculty::all();
        return view('admin.homepage.faculty.tabs.create', compact('allFaculty'));
    }

    public function store(Request $request)
    {

        dd($request->all());

        $request->validate([
            'faculty_selection' => 'required',
            'faculty_tab_image' => 'required',
            'faculty_tab_title' => 'required',
            'faculty_tab_title_arabic' => 'required',
            'faculty_tab_description' => 'required',
            'faculty_tab_description_arabic' => 'required',
        ]);

        $facultyTab = new FacultyTabs();
        $facultyTab->faculty_id = $request->faculty_selection;

        if($files = $request->file('faculty_tab_image')) {
            $facultyTabImage = 'FacultyTab'.time().'.'.$files->getClientOriginalName();
            $files->move('images/faculty/tab', $facultyTabImage);
            $facultyTab->faculty_tab_image = $facultyTabImage;
        }

        $facultyTab->faculty_tab_title = $request->faculty_tab_title;
        $facultyTab->faculty_tab_title_arabic = $request->faculty_tab_title_arabic;
        $facultyTab->faculty_tab_description = $request->faculty_tab_description;
        $facultyTab->faculty_tab_description_arabic = $request->faculty_tab_description_arabic;

        $facultyTab->save();
        return redirect()
            ->route('admin.faculty_tabs.index')
            ->with('success', 'Faculty Tab Information added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FacultyTabs  $facultyTabs
     * @return \Illuminate\Http\Response
     */
    public function show(FacultyTabs $facultyTabs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FacultyTabs  $facultyTabs
     * @return \Illuminate\Http\Response
     */
    public function edit(FacultyTabs $facultyTabs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FacultyTabs  $facultyTabs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FacultyTabs $facultyTabs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FacultyTabs  $facultyTabs
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacultyTabs $facultyTabs)
    {
        //
    }
}
