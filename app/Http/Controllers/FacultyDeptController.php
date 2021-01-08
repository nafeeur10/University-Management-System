<?php

namespace App\Http\Controllers;

use App\FacultyDept;
use App\HomeFaculty;
use Illuminate\Http\Request;

class FacultyDeptController extends Controller
{
    public function index()
    {
        $alldepts = FacultyDept::all();
        return view('admin.homepage.faculty.departments.index', compact('alldepts'));
    }

    
    public function create()
    {
        $allFaculty = HomeFaculty::all();
        return view('admin.homepage.faculty.departments.create', compact('allFaculty'));
    }

    
    public function store(Request $request)
    {
        $dept = new FacultyDept();

        if($files = $request->file('faculty_dept_image')) 
        {
            $facultyDeptImage = 'FacultyDepartment'.time().'.'.$files->getClientOriginalName();
            $files->move('images/faculty/dept', $facultyDeptImage);
            $dept->dept_faculty_image = $facultyDeptImage;
        }

        if($files = $request->file('dept_image')) 
        {
            $deptImage = 'Department'.time().'.'.$files->getClientOriginalName();
            $files->move('images/faculty/dept', $deptImage);
            $dept->dept_image = $deptImage;
        }

        $dept->dept_faculty = $request->faculty_selection;
        $dept->dept_name = $request->faculty_dept_title;
        $dept->dept_name_arabic = $request->faculty_dept_title_arabic;
        $dept->dept_short_description = $request->faculty_dept_short_description;
        $dept->dept_short_description_arabic = $request->faculty_dept_short_description_arabic;
        $dept->dept_main_description = $request->faculty_dept_description_append;
        $dept->dept_url = $this->sluggify($request->faculty_dept_title);
        $dept->dept_main_description_arabic = $request->faculty_dept_description_arabic_append;

        $dept->save();

        return response()->json([
            'success' => 'Department added successfully'
        ]);
    }

    function sluggify($url)
    {
        # Prep string with some basic normalization
        $url = strtolower($url);
        $url = strip_tags($url);
        $url = stripslashes($url);
        $url = html_entity_decode($url);

        # Remove quotes (can't, etc.)
        $url = str_replace('\'', '', $url);

        # Replace non-alpha numeric with hyphens
        $match = '/[^a-z0-9]+/';
        $replace = '-';
        $url = preg_replace($match, $replace, $url);

        $url = trim($url, '-');

        return $url;
    }

    
    public function show($id)
    {
        $dept_details = FacultyDept::findOrFail($id);
        return view('admin.homepage.faculty.departments.show', compact('dept_details'));
    }

    
    public function edit($id)
    {
        $allFaculty = HomeFaculty::all();
        $dept_details = FacultyDept::findOrFail($id);

        return view('admin.homepage.faculty.departments.edit', compact('allFaculty', 'dept_details'));
    }

    
    public function update($request, $id)
    {
        $dept = FacultyDept::findOrFail($id);

        if($files = $request->file('faculty_dept_image')) 
        {
            if(file_exists(public_path().'/images/faculty/dept/'.$dept->dept_faculty_image))
                unlink(public_path().'/images/faculty/dept/'.$dept->dept_faculty_image);

            $facultyDeptImage = 'FacultyDepartment'.time().'.'.$files->getClientOriginalName();
            $files->move('images/faculty/dept', $facultyDeptImage);
            $dept->dept_faculty_image = $facultyDeptImage;
        }

        if($files = $request->file('dept_image')) 
        {
            if(file_exists(public_path().'/images/faculty/dept/'.$dept->dept_image))
                unlink(public_path().'/images/faculty/dept/'.$dept->dept_image);

            $deptImage = 'Department'.time().'.'.$files->getClientOriginalName();
            $files->move('images/faculty/dept', $deptImage);
            $dept->dept_image = $deptImage;
        }

        $dept->dept_faculty = $request->faculty_selection;
        $dept->dept_name = $request->faculty_dept_title;
        $dept->dept_name_arabic = $request->faculty_dept_title_arabic;
        $dept->dept_short_description = $request->faculty_dept_short_description;
        $dept->dept_short_description_arabic = $request->faculty_dept_short_description_arabic;
        $dept->dept_main_description = $request->faculty_dept_description_append;
        $dept->dept_url = $this->sluggify($request->faculty_dept_title);
        $dept->dept_main_description_arabic = $request->faculty_dept_description_arabic_append;

        $dept->save();

        return response()->json([
            'success' => 'Department updated successfully'
        ]);
    }

    public function updatedept(Request $request)
    {
        return $this->update($request, $request->id);
    }

   
    public function destroy(FacultyDept $id)
    {
        $id->delete();
        return redirect()->route('admin.department.index')->with('success', 'Department Deleted Successfully');
    }

    public function getAllDept($id)
    {
        $all = FacultyDept::where('dept_faculty', $id)->get();
        return response()->json(
            ['alldepts' => $all ]
        );
    }

    public function getDeptDetails($id)
    {
        $dept = FacultyDept::where('dept_url', $id)->get();
        return response()->json(
            ['deptDetails' => $dept ]
        );
    }
}
