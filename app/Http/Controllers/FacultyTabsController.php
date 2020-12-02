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
        $facultyTab = new FacultyTabs();
        $facultyTab->faculty_id = $request->faculty_selection;

        if($files = $request->file('faculty_tab_image')) 
        {
            $facultyTabImage = 'FacultyTab'.time().'.'.$files->getClientOriginalName();
            $files->move('images/faculty/tab', $facultyTabImage);
            $facultyTab->faculty_tab_image = $facultyTabImage;
        }

        $facultyTab->faculty_tab_title = $request->faculty_tab_title;
        $facultyTab->faculty_tab_title_arabic = $request->faculty_tab_title_arabic;
        $facultyTab->faculty_tab_description = $request->faculty_tab_description_append;
        $facultyTab->faculty_tab_description_arabic = $request->faculty_tab_description_arabic_append;

        $facultyTab->save();
        return response()->json([
            'success' => 'Faculty Tab Information Added Successfully'
        ]);
    }

    public function show(FacultyTabs $facultyTabs)
    {
        //
    }

    public function edit(FacultyTabs $facultyTabs)
    {
        //
    }

    public function update(Request $request, FacultyTabs $facultyTabs)
    {
        //
    }

    
    public function destroy(FacultyTabs $facultyTabs)
    {
        //
    }

    public function getTabInfo($faculty) {
        $id = HomeFaculty::where('home_faculty_link', $faculty)->first()->id;
        $tabInformation = FacultyTabs::where('faculty_id', $id)->get();
        return response()->json([
            'tabInfo' => $tabInformation
        ]);
    }
}
