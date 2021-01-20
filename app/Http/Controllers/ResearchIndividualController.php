<?php

namespace App\Http\Controllers;

use App\ResearchIndividual;
use Illuminate\Http\Request;

class ResearchIndividualController extends Controller
{
    public function index()
    {
        $research_individuals = ResearchIndividual::all();
        return view('admin.research.individual.index', compact('research_individuals'));
    }

    public function create()
    {
        return view('admin.research.individual.create');
    }

    public function store(Request $request)
    {
        $research = new ResearchIndividual();

        if($indv_image = $request->file('research_individual_image')) {
            $imageName = 'Research-Individual'. time() . $indv_image->getClientOriginalName();
            $indv_image->move(public_path('images/research/individual'), $imageName);
            $research->research_individual_image = $imageName;
        }

        $research->research_individual_title = $request->research_individual_title;
        $research->research_individual_title_arabic = $request->research_individual_title_arabic;
        $research->research_individual_description = $request->research_individual_description_append;
        $research->research_individual_description_arabic = $request->research_individual_description_arabic_append;

        $research->save();

        return response()->json([
            'success' => 'Research Information Added Successfully!'
        ]);
    }

    public function show($researchIndividual)
    {
        $research = ResearchIndividual::findOrFail($researchIndividual);
        return view('admin.research.individual.show', compact('research'));        
    }

    public function edit($researchIndividual)
    {
        $research = ResearchIndividual::findOrFail($researchIndividual);
        return view('admin.research.individual.edit', compact('research'));
    }

    public function updateri(Request $request)
    {
        return $this->update($request, $request->id);
    }

    public function update($request, $researchIndividual)
    {
        $research = ResearchIndividual::findOrFail($researchIndividual);
        
        if($indv_image = $request->file('research_individual_image')) {
            if(file_exists(public_path('images/research/individual/'.$research->research_individual_image))) {
                unlink(public_path('images/research/individual/'.$research->research_individual_image));
            }
            $imageName = 'Research-Individual'. time() . $indv_image->getClientOriginalName();
            $indv_image->move(public_path('images/research/individual'), $imageName);
            $research->research_individual_image = $imageName;
        }

        $research->research_individual_title = $request->research_individual_title;
        $research->research_individual_title_arabic = $request->research_individual_title_arabic;
        $research->research_individual_description = $request->research_individual_description_append;
        $research->research_individual_description_arabic = $request->research_individual_description_arabic_append;

        $research->save();

        return response()->json([
            'success' => 'Research Information Updated Successfully!'
        ]);
    }

    public function destroy($researchIndividual)
    {
        ResearchIndividual::findOrFail($researchIndividual)->delete();
        return redirect()->route('admin.research-individual.index')->with('success', 'Research Deleted Successfully');
    }

    public function getResearchIndividual()
    {
        $research_individual = ResearchIndividual::all();
        return response()->json([
            'research_individual' => $research_individual
        ]);
    }
}
