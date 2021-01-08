<?php

namespace App\Http\Controllers;

use App\DeptStaff;
use App\FacultyDept;
use Illuminate\Http\Request;

class DeptStaffController extends Controller
{
    public function index()
    {
        $allStaff = DeptStaff::all();
        return view('admin.staff.index', compact('allStaff'));
    }

    public function create()
    {
        $allDept = FacultyDept::all();
        return view('admin.staff.create', compact('allDept'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'dept_selection' => 'required',
            'staff_name' => 'required',
            'staff_name_arabic' => 'required',
            'staff_designation' => 'required',
            'staff_designation_arabic' => 'required',
            'staff_resume' => 'required',
        ]);

        $newStaff = new DeptStaff();
        $newStaff->dept_id = $request->dept_selection;
        $newStaff->staff_name = $request->staff_name;
        $newStaff->staff_name_arabic = $request->staff_name_arabic;
        $newStaff->staff_designation = $request->staff_designation;
        $newStaff->staff_designation_arabic = $request->staff_designation_arabic;

        if($files = $request->file('staff_resume')) 
        {
            $staffResume = 'Staff'.time().'.'.$files->getClientOriginalName();
            $files->move('images/staff/', $staffResume);
            $newStaff->staff_resume = $staffResume;
        }

        $newStaff->save();
        return redirect()->route('admin.staff.index')->with('success', 'Staff Added Successfully!');
    }

    public function show(DeptStaff $staff)
    {
        $deptStaff = DeptStaff::findOrFail($staff->id);
        return view('admin.staff.show', compact('deptStaff'));
    }

    public function edit($id)
    {
        $allDept = FacultyDept::all();
        $staff = DeptStaff::findOrFail($id);
        return view('admin.staff.edit', compact('staff', 'allDept'));
    }

    public function update(Request $request, $deptStaff)
    {
        $request->validate([
            'dept_selection' => 'required',
            'staff_name' => 'required',
            'staff_name_arabic' => 'required',
            'staff_designation' => 'required',
            'staff_designation_arabic' => 'required'
        ]);

        $newStaff = DeptStaff::findOrFail($deptStaff);

        $newStaff->dept_id = $request->dept_selection;
        $newStaff->staff_name = $request->staff_name;
        $newStaff->staff_name_arabic = $request->staff_name_arabic;
        $newStaff->staff_designation = $request->staff_designation;
        $newStaff->staff_designation_arabic = $request->staff_designation_arabic;

        if($files = $request->file('staff_resume')) 
        {
            $staffResume = 'Staff'.time().'.'.$files->getClientOriginalName();
            $files->move('images/staff/', $staffResume);
            $newStaff->staff_resume = $staffResume;
        }

        $newStaff->save();
        return redirect()->route('admin.staff.index')->with('success', 'Staff Updated Successfully!');
    }

    public function destroy($deptStaff)
    {
        $staff = DeptStaff::find($deptStaff);
        $staff->delete();
        return redirect()->route('admin.staff.index')->with('success', 'Staff Deleted Successfully');
    }

    public function getAllStaff($id)
    {
        $allstaff = DeptStaff::where('dept_id', $id)->get();
        return response()->json([
            'allstaff' => $allstaff
        ]);
    }
}
