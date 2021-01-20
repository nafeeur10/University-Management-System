<?php

namespace App\Http\Controllers;

use App\ResearchLink;
use Illuminate\Http\Request;

class ResearchLinkController extends Controller
{
    public function index()
    {
        $research_links = ResearchLink::all();
        return view('admin.research.link.index', compact('research_links'));
    }

    public function create()
    {
        return view('admin.research.link.create');
    }

    public function store(Request $request)
    {
        $research_link = new ResearchLink();

        if($research_file = $request->file('research_file')) {
            $name = 'Research-Link' . time() . $research_file->getClientOriginalName();
            $research_file->move(public_path('file/research'), $name);
            $research_link->research_link_upload = $name;
        }

        $research_link->research_link_url = $request->research_link;
        $research_link->research_title = $request->research_title;
        $research_link->research_title_arabic = $request->research_title_arabic;

        $research_link->save();
        return redirect()->route('admin.research-link.index')->with('success', 'Research Link added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ResearchLink  $researchLink
     * @return \Illuminate\Http\Response
     */
    public function show(ResearchLink $researchLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ResearchLink  $researchLink
     * @return \Illuminate\Http\Response
     */
    public function edit(ResearchLink $researchLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ResearchLink  $researchLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResearchLink $researchLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ResearchLink  $researchLink
     * @return \Illuminate\Http\Response
     */
    public function destroy($researchLink)
    {
        $id = ResearchLink::findOrFail($researchLink);

        if(file_exists(public_path('file/research/' . $id->research_link_upload)))
        unlink(public_path('file/research/' . $id->research_link_upload));
        
        ResearchLink::findOrFail($researchLink)->delete();
        return redirect()->route('admin.research-link.index')->with('success', 'Research Link deleted successfully');
    }

    public function getResearchLink()
    {
        $research_link = ResearchLink::whereNotNull('research_link_url')->get();
        return response()->json([
            'research_links' => $research_link
        ]);
    }

    public function getResearchPdf()
    {
        $research_pdf = ResearchLink::whereNotNull('research_link_upload')->get();
        return response()->json([
            'research_pdfs' => $research_pdf
        ]);
    }
}
