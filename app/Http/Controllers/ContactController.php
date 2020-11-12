<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $result = Contact::all();
        $contact = $result[0];
        return view('admin.contact.index', compact('contact'));
    }


    public function store(Request $request)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        //dd($request->all());

        $contact = Contact::find(1);
        $flag_map = false;
        $flag_qr = false;

        if($files = $request->file('contact_map_image')) {}
        else {
            $request->merge(['contact_map_image' => $contact->map_image]);
            $flag_map = true;
        }


        if ($files = $request->file('contact_map_qr_image')) {}
        else {
            $request->merge(['contact_map_qr_image' => $contact->qr_image]);
            $flag_qr = true;
        }

        //dd($request->all());

        $this->validate($request, [
            'contact_phone' => 'required',
            'contact_fax' => 'required',
            'contact_mobile' => 'required',
            'contact_address' => 'required',
            'contact_address_arabic' => 'required',
            'contact_map_image' => 'required',
            'contact_map_address' => 'required',
            'contact_map_qr_image' => 'required'
        ]);
        
        $contact->phone = $request->contact_phone;
        $contact->fax = $request->contact_fax;
        $contact->mobile = $request->contact_mobile;
        $contact->mobile_optional1 = $request->contact_mobile_optional1;
        $contact->mobile_optional2 = $request->contact_mobile_optional2;
        $contact->address = $request->contact_address;
        $contact->address_arabic = $request->contact_address_arabic;


        $map_image = null;
        if ($files = $request->file('contact_map_image')) {
            $mapImage = 'map'.time().'.'.$files->getClientOriginalExtension(); 
            $files->move(public_path('images/contact'), $mapImage);
            unlink(public_path('images/contact/'.$contact->map_image));
            $map_image = $mapImage;
        }
        if(!$flag_map) {
            $contact->map_image = $map_image;
        }
        $contact->map_address = $request->contact_map_address;

        $qr_image = null;
        if ($files = $request->file('contact_map_qr_image')) {
            $qrImage = 'qr'.time().'.'.$files->getClientOriginalExtension(); 
            $files->move(public_path('images/contact'), $qrImage);
            unlink(public_path('images/contact/'.$contact->qr_image));
            $qr_image = $qrImage;
        }

        if(!$flag_qr) {
            $contact->qr_image = $qr_image;
        }

        $contact->save();

        return redirect()->back()->with('success', 'Contact Updated Successfully'); 
        
    }

    public function contactus()
    {
        $contact = Contact::where('id', 1)->first();
        return response()->json([
            'contact' => $contact
        ]);
    }

    public function getSocialMedias()
    {
        $contact = DB::table('contact_social_links')->get();
        return response()->json([
            'social_medias' => $contact
        ]);
    }

    public function social()
    {

        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $socialContacts = DB::table('contact_social_links')->get();
        return view('admin.contact.social', compact('socialContacts'));
    }

    public function social_store(Request $request)
    {

        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        DB::table('contact_social_links')->insertOrIgnore([
            [
                'title' => $request->social_title,
                'icon' => $request->social_icon,
                'link' => $request->social_link,
            ],
        ]);

        return redirect()->back()->with('success', 'Social Media Added Successfully!'); 
    }

    public function social_show($id)
    {

        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $social_media_details = DB::table('contact_social_links')->where('id', $id)->first();
        return view('admin.contact.show_social_media', compact('social_media_details'));
    }

    public function social_edit($id) 
    {

        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $social_media_details = DB::table('contact_social_links')->where('id', $id)->first();
        return view('admin.contact.edit_social_media', compact('social_media_details'));
    }

    public function social_update(Request $request, $id)
    {

        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $request->validate([
            'social_title' => 'required',
            'social_icon' => 'required',
            'social_link' => 'required|url',
        ]);

        DB::table('contact_social_links')->where('id', $id)->update([
            'title' => $request->social_title,
            'icon' => $request->social_icon,
            'link' => $request->social_link,
        ]);

        return redirect()->back()->with('success', 'Social Media Updated Successfully!'); 
    }

    public function social_destroy($id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        DB::table('contact_social_links')->where('id', $id)->delete();
   
        return redirect()->route('admin.contact.social');
    }
}
