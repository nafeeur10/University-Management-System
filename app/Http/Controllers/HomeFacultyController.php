<?php

namespace App\Http\Controllers;

use App\HomeFaculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            'facultyHompageImage' => 'required',
            'facultyBannerImages' => 'required',
            'home_faculty_title' => 'required',
            'home_faculty_title_arabic' => 'required',
            'home_faculty_description' => 'required',
            'home_faculty_description_arabic' => 'required',
            'home_faculty_link' => 'required',
            'faculty_details_title' => 'required',
            'faculty_details_title_arabic' => 'required',
            'faculty_details_description' => 'required',
            'faculty_details_description_arabic' => 'required',
            'faculty_details_student_guide' => 'required',
            'faculty_details_organizational_structure' => 'required',
            'faculty_details_course' => 'required',
        ]);

        $faculty = new HomeFaculty();

        if($files = $request->file('facultyHompageImage')) {

            foreach($files as $file) {
                $facultyImageName = 'Faculty'.time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path('images/faculty'), $facultyImageName);
                $faculty->home_faculty_image = $facultyImageName;
                break;
            }
        }

        $faculty->home_faculty_title = $request->home_faculty_title;
        $faculty->home_faculty_title_arabic = $request->home_faculty_title_arabic;
        $faculty->home_faculty_description = $request->home_faculty_description;
        $faculty->home_faculty_description_arabic = $request->home_faculty_description_arabic;
        $faculty->home_faculty_link = $request->home_faculty_link;
        $faculty->faculty_details_title = $request->faculty_details_title;
        $faculty->faculty_details_title_arabic = $request->faculty_details_title_arabic;
        $faculty->faculty_details_description = $request->faculty_details_description;
        $faculty->faculty_details_description_arabic = $request->faculty_details_description_arabic;

        if($pdf = $request->file('faculty_details_student_guide')) {
            $faculty_details_student_guide_pdf = 'Student-Guide'.time().'.'.$pdf->getClientOriginalExtension();
            $pdf->move(public_path('pdf'), $faculty_details_student_guide_pdf);
            $faculty->faculty_details_student_guide = $faculty_details_student_guide_pdf;
        }

        if($pdf = $request->file('faculty_details_organizational_structure')) {
            $faculty_details_organizational_structure_pdf = 'Organizational-Structure'.time().'.'.$pdf->getClientOriginalExtension();
            $pdf->move(public_path('pdf'), $faculty_details_organizational_structure_pdf);
            $faculty->faculty_details_organizational_structure = $faculty_details_organizational_structure_pdf;
        }

        if($pdf = $request->file('faculty_details_course')) {
            $faculty_details_course_pdf = 'Course'.time().'.'.$pdf->getClientOriginalExtension();
            $pdf->move(public_path('pdf'), $faculty_details_course_pdf);
            $faculty->faculty_details_course = $faculty_details_course_pdf;
        }

        $faculty->save();

        $lastid = HomeFaculty::latest()->first();

        if($files = $request->file('facultyBannerImages')) {

            foreach($files as $file)
            {
                $facultyBannerImageName = 'FacultyBanner'.time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path('images/faculty/banner'), $facultyBannerImageName);
                
                DB::table('faculty_banner_images')->insert([
                    'faculty_id' => $lastid->id, 
                    'faculty_banner_image' => $facultyBannerImageName
                ]);
            }
        }
        
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

    public function getFacultyDetails($link)
    {
        $facultyDetails = HomeFaculty::where('home_faculty_link', $link)->first();
        $facultyID = $facultyDetails->id;
        $facultyBannerImages = DB::table('faculty_banner_images')->where('faculty_id', $facultyID)->get();
        return response()->json([
            'facultyDetails' => $facultyDetails,
            'bannerImages' => $facultyBannerImages
        ]);
    }
}
