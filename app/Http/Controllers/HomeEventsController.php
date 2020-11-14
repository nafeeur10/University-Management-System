<?php

namespace App\Http\Controllers;

use App\HomeEvents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeEventsController extends Controller
{
    
    public function index()
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }
        $events = HomeEvents::all();
        return view('admin.homepage.events.index', compact('events'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
