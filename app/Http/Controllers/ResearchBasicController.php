<?php

namespace App\Http\Controllers;

use App\Research;
use App\ResearchBasic;
use Illuminate\Http\Request;

class ResearchBasicController extends Controller
{
    public function index()
    {
        $main_researchs = ResearchBasic::all();
        return view('admin.research.basic.index', compact('main_researchs'));
    }


    public function create()
    {
        return view('admin.research.basic.create');
    }


    public function store(Request $request)
    {
        $research_basic_info = new ResearchBasic();

        if($image = $request->file('research_details_image')) {
            $name = 'Research-Home'.time().$image->getClientOriginalName();
            $image->move(public_path('images/research'), $name);
            $research_basic_info->research_homepage_image = $name;
        }

        if($image = $request->file('research_main_image')) {
            $name = 'Research-Details'.time().$image->getClientOriginalName();
            $image->move(public_path('images/research'), $name);
            $research_basic_info->research_details_main_image = $name;
        }

        $research_basic_info->research_title = $request->research_title;
        $research_basic_info->research_title_arabic = $request->research_title_arabic;
        $research_basic_info->research_description = $request->research_description_append;
        $research_basic_info->research_description_arabic = $request->research_description_arabic_append;

        $research_basic_info->save();
        return response()->json([
            'success' => 'Research Basic Information Added Successfully!'
        ]);
        
    }


    public function show($researchBasic)
    {
        $research = ResearchBasic::findOrFail($researchBasic);
        return view('admin.research.basic.show', compact('research'));
    }


    public function edit($researchBasic)
    {
        $research = ResearchBasic::findOrFail($researchBasic);
        return view('admin.research.basic.edit', compact('research'));
    }

    public function updateresearch(Request $request)
    {
        return $this->update($request, $request->id);
    }

    public function update($request, $id)
    {
        $research_basic_info = ResearchBasic::findOrFail($id);

        if($image = $request->file('research_details_image')) {
            if(file_exists(public_path('images/research/'.$research_basic_info->research_homepage_image)))
            unlink(public_path('images/research/'.$research_basic_info->research_homepage_image));
            $name = 'Research-Home'.time().$image->getClientOriginalName();
            $image->move(public_path('images/research'), $name);
            $research_basic_info->research_homepage_image = $name;
        }

        if($image = $request->file('research_main_image')) {
            if(file_exists(public_path('images/research/'.$research_basic_info->research_details_main_image)))
            unlink(public_path('images/research/'.$research_basic_info->research_details_main_image));
            $name = 'Research-Details'.time().$image->getClientOriginalName();
            $image->move(public_path('images/research'), $name);
            $research_basic_info->research_details_main_image = $name;
        }

        $research_basic_info->research_title = $request->research_title;
        $research_basic_info->research_title_arabic = $request->research_title_arabic;
        $research_basic_info->research_description = $request->research_description_append;
        $research_basic_info->research_description_arabic = $request->research_description_arabic_append;

        $research_basic_info->save();
        return response()->json([
            'success' => 'Research Basic Information Updated Successfully!'
        ]);
    }

    public function destroy($researchBasic)
    {
        ResearchBasic::findOrFail($researchBasic)->delete();
        return redirect()->route('admin.research.index')->with('success', 'Research Deleted Successfully');
    }

    public function getHomePageResearch() {
        $research_homepage = ResearchBasic::where('id', 1)->first();
        return response()->json([
            'research_homepage' => $research_homepage
        ]);
    }
}
