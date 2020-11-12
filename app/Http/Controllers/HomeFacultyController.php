<?php

namespace App\Http\Controllers;

use App\HomeFaculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeFacultyController extends Controller
{
    public function index()
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $faculties = HomeFaculty::all();
        return view('admin.homepage.faculty.index', compact('faculties'));
    }

    public function create()
    {
        return view('admin.homepage.faculty.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'home_faculty_image' => 'required',
            'home_faculty_title' => 'required',
            'home_faculty_title_arabic' => 'required',
            'home_faculty_description' => 'required',
            'home_faculty_description_arabic' => 'required',
            'home_faculty_link' => 'required',
        ]);

        $faculty = new HomeFaculty();
        if($files = $request->file('home_faculty_image')) {
            $facultyImageName = 'Faculty'.time().'.'.$files->getClientOriginalExtension();
            $files->move(public_path('images/faculty'), $facultyImageName);
            $faculty->home_faculty_image = $facultyImageName;
        }
        $faculty->home_faculty_title = $request->home_faculty_title;
        $faculty->home_faculty_title_arabic = $request->home_faculty_title_arabic;
        $faculty->home_faculty_description = $request->home_faculty_description;
        $faculty->home_faculty_description_arabic = $request->home_faculty_description_arabic;
        $faculty->home_faculty_link = $request->home_faculty_link;

        $faculty->save();
        return redirect()->route('admin.faculty.index')->with('success', 'Faculty Added Successfully');
    }

    
    public function show($id)
    {
        $faculty = HomeFaculty::findOrFail($id);
        return view('admin.homepage.faculty.show', compact('faculty'));
    }


    public function edit($id)
    {
        $faculty = HomeFaculty::findOrFail($id);
        return view('admin.homepage.faculty.edit', compact('faculty'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'home_faculty_title' => 'required',
            'home_faculty_title_arabic' => 'required',
            'home_faculty_description' => 'required',
            'home_faculty_description_arabic' => 'required',
            'home_faculty_link' => 'required',
        ]);

        $faculty = HomeFaculty::findOrFail($id);
        if($files = $request->file('home_faculty_image')) {
            $facultyImageName = 'Faculty'.time().'.'.$files->getClientOriginalExtension();
            $files->move(public_path('images/faculty'), $facultyImageName);
            $faculty->home_faculty_image = $facultyImageName;
        }
        
        $faculty->home_faculty_title = $request->home_faculty_title;
        $faculty->home_faculty_title_arabic = $request->home_faculty_title_arabic;
        $faculty->home_faculty_description = $request->home_faculty_description;
        $faculty->home_faculty_description_arabic = $request->home_faculty_description_arabic;
        $faculty->home_faculty_link = $request->home_faculty_link;

        $faculty->save();
        return redirect()->route('admin.faculty.index')->with('success', 'Faculty Updated Successfully');
    }

    
    public function destroy($id)
    {
        $faculty = HomeFaculty::findOrFail($id);
        $faculty->delete();
        return redirect()->route('admin.faculty.index')->with('success', 'Faculty Deleted Successfully');
    }

    public function getAllFaculty() {
        $faculties = HomeFaculty::all();
        return response()->json([
            'faculties' => $faculties
        ]);
    }
}
