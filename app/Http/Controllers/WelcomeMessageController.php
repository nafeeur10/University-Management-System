<?php

namespace App\Http\Controllers;

use App\WelcomeMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class WelcomeMessageController extends Controller
{
    public function index()
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $welcomeMessage = WelcomeMessage::all();
        return view('admin.homepage.welcome.index', compact('welcomeMessage'));
    }
    
    public function create()
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        return view('admin.homepage.welcome.create');
    }

    public function store(Request $request)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $request->validate([
            'welcome_message_title' => 'required',
            'welcome_message_title_arabic' => 'required',
            'welcome_description' => 'required',
            'welcome_description_arabic' => 'required',
            'welcome_signature' => 'required'
        ]);

        $tableWelcomeMessage = WelcomeMessage::all();
        $countWelcomeMessage = count($tableWelcomeMessage);
        if($countWelcomeMessage == 0)
        $welcomemessage = new WelcomeMessage();
        else
        $welcomemessage = WelcomeMessage::findOrFail(1);

        if($files = $request->file('welcome_signature')) {
            if(file_exists(public_path('images/signature/'.$welcomemessage->welcome_signature)))
            unlink(public_path('images/signature/'.$welcomemessage->welcome_signature));
            $signatureImageName = 'Signature'.time().'.'.$files->getClientOriginalExtension();
            $files->move(public_path('images/signature'), $signatureImageName);
            $welcomemessage->welcome_signature = $signatureImageName;
        }

        $welcomemessage->welcome_message_title = $request->welcome_message_title;
        $welcomemessage->welcome_message_title_arabic = $request->welcome_message_title_arabic;
        $welcomemessage->welcome_description = $request->welcome_description;
        $welcomemessage->welcome_description_arabic = $request->welcome_description_arabic;

        $welcomemessage->save();

        return redirect()->route('admin.welcomemessage.index')->with('success', 'Welcome Information added Successfully');
    }

    public function show($id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }
        $welcomemessage = WelcomeMessage::findOrFail($id);
        return view('admin.homepage.welcome.show', compact('welcomemessage'));
    }

    public function edit($id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }
        $welcomemessage = WelcomeMessage::findOrFail($id);
        return view('admin.homepage.welcome.edit', compact('welcomemessage'));
    }

    public function update(Request $request, $id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }
        $welcomemessage = WelcomeMessage::findOrFail($id);

        if($files = $request->file('welcome_signature')) {
            unlink(public_path('images/signature/'.$welcomemessage->welcome_signature));
            $signatureImageName = 'Signature'.time().'.'.$files->getClientOriginalExtension();
            $files->move(public_path('images/signature'), $signatureImageName);
            $welcomemessage->welcome_signature = $signatureImageName;
        }

        $welcomemessage->welcome_message_title = $request->welcome_message_title;
        $welcomemessage->welcome_message_title_arabic = $request->welcome_message_title_arabic;
        $welcomemessage->welcome_description = $request->welcome_description;
        $welcomemessage->welcome_description_arabic = $request->welcome_description_arabic;

        $welcomemessage->save();

        return redirect()->route('admin.welcomemessage.index')->with('success', 'Welcome Information updated Successfully');
    }

    public function destroy($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $welcomemessage = WelcomeMessage::findOrFail($id);
        $welcomemessage->delete();
        return redirect()->route('admin.welcomemessage.index')->with('success', 'Deleted Successfully');
    }

    public function getwelcomeinfo() {
        $welcomeinfo = WelcomeMessage::all();
        return response()->json([
            'welcomeinfo' => $welcomeinfo
        ]);
    }
}
