<?php

namespace App\Http\Controllers;

use App\OurPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class OurPartnerController extends Controller
{
    public function index()
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $partners = OurPartner::all();
        return view('admin.homepage.partners.index', compact('partners'));
    }

    
    public function create()
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        return view('admin.homepage.partners.create');
    }

    public function show($id)
    {
        $partner = OurPartner::findOrFail($id);
        return view('admin.homepage.partners.show', compact('partner'));
    }

    public function edit($id)
    {
        $partner = OurPartner::findOrFail($id);
        return view('admin.homepage.partners.edit', compact('partner'));
    }

    public function getPartnerImage($id)
    {
        $ourPartnersimages = OurPartner::findOrFail($id)->partner_image;
        return response()->json([
            'images' => $ourPartnersimages,
        ]);
    }

    public function update(Request $request, $id)
    {
        $partner = OurPartner::findOrFail($id);

        $partner->partner_name = $request->partner_name;
        $partner->partner_link = $request->partner_link;

        if($files=$request->file('ourPartnersImages'))
        {
            unlink(public_path('images/partners/'.$partner->partner_image));
            foreach($files as $file)
            {
                $partnerImageName='partner-'.time().'.'.$file->getClientOriginalName();
                $file->move('images/partners',$partnerImageName);

                $partner->partner_image = $partnerImageName;
                break;
            }
        }

        $partner->save();
        return redirect()->route('admin.partners.index')->with('success', 'Updated Successfully!');
    }

    
    public function store(Request $request)
    {

        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $newPartner = new OurPartner();

        $newPartner->partner_name = $request->partner_name;
        $newPartner->partner_link = $request->partner_link;
        $newPartner->partner_image = 'partner.png';

        $newPartner->save();

        $lastRow = OurPartner::latest()->first();
        $lastID = $lastRow->id;


        if($files=$request->file('ourPartnersImages'))
        {
            foreach($files as $file)
            {
                $partnerImageName='partner-'.time().'.'.$file->getClientOriginalName();
                $file->move('images/partners',$partnerImageName);

                DB::table('our_partners')
                    ->where('id', $lastID)
                    ->update(['partner_image' => $partnerImageName ]);

                break;
            }
            return redirect()->back()->with('success', 'Added Image Successfully!');
        }
        else
        {
            return redirect()->back()->with('error', 'No New Image!');
        }
        
    }

    public function destroy($id)
    {
        $partner = OurPartner::findOrFail($id);
        if(file_exists(public_path('images/partners/'.$partner->partner_image)))
        unlink(public_path('images/partners/' . $partner->partner_image));
        $partner->delete();
        return redirect()->route('admin.partners.index')->with('success', 'Partner Deleted Successfully!');
    }

    public function deletePartnerImage($ourPartnerImageName)
    {
        DB::table('our_partners')->where('partner_image', $ourPartnerImageName)->delete();
        unlink(public_path('images/partners/'.$ourPartnerImageName));
        return response()->json([
            'success' => 'Delete Image Successfully'
        ]);
    }

    public function getAllPartner()
    {
        $allPartners = OurPartner::all();
        return response()->json([
            'partners' => $allPartners
        ]);
    }
}
