<?php

namespace App\Http\Controllers;

use App\HomeEvents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        return view('admin.homepage.events.create');
    }

    
    public function store(Request $request)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $request->validate([
            'event_title' => 'required',
            'event_title_arabic' => 'required',
            'event_description_arabic' => 'required',
            'event_description_arabic' => 'required',
            'event_date' => 'required',
            'event_start_time' => 'required',
            'event_end_time' => 'required',
        ]);

        $newEvent = new HomeEvents();
        $newEvent->event_title = $request->event_title;
        $newEvent->event_title_arabic = $request->event_title_arabic;
        $newEvent->event_description = $request->event_description;
        $newEvent->event_description_arabic = $request->event_description_arabic;
        $newEvent->event_date = $request->event_date;
        $newEvent->event_start_time = $request->event_start_time;
        $newEvent->event_end_time = $request->event_end_time;

        $newEvent->save();

        $latestEvent = DB::table('home_events')
                        ->latest()
                        ->first();

        $latestId = $latestEvent->id;

        if($this->saveEventImagesInDB($latestId, $request, 1)) {
            return redirect()->route('admin.events.index')->with('success', 'Event added successfully');
        }
        else {
            return redirect()->back()->with('error', 'Please insert image');
        }
    }

    public function saveEventImagesInDB($id, $request, $storeOrUpdate)
    {
        if($storeOrUpdate == 2) {
            $imageList = DB::table('home_events_images')->where('event_id', $id)->get();
            if(count($imageList) > 0) {
                foreach($imageList as $image) {
                    unlink(public_path('images/event/'.$image->event_image));
                }
            }
            DB::table('home_events_images')->where('event_id', $id)->delete();
        }
        if($files=$request->file('eventimages'))
        {
            foreach($files as $file)
            {
                $eventImageName=$id.time().'.'.$file->getClientOriginalName();
                $file->move('images/event',$eventImageName);
                DB::table('home_events_images')->insert([
                    'event_id' => $id, 
                    'event_image' => $eventImageName
                ]);
            }
            return true;
        }
        else
        {
            return false;
        }
    }

    
    public function show($id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }
        $event = HomeEvents::findOrFail($id);
        $eventimages = DB::table('home_events_images')->where('event_id', $id)->get();
        return view('admin.homepage.events.show', compact('event', 'eventimages'));
    }

    
    public function edit($id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }
        $event = HomeEvents::findOrFail($id);
        return view('admin.homepage.events.edit', compact('event'));
    }

    public function getImages($id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $eventimages = DB::table('home_events_images')->where('event_id', $id)->get();
        return response()->json([
            'images' => $eventimages,
        ]);
    }

    
    public function update(Request $request, $id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }
        $request->validate([
            'event_title' => 'required',
            'event_title_arabic' => 'required',
            'event_description_arabic' => 'required',
            'event_description_arabic' => 'required',
            'event_date' => 'required',
            'event_start_time' => 'required',
            'event_end_time' => 'required',
        ]);

        $newEvent = HomeEvents::findOrFail($id);
        $newEvent->event_title = $request->event_title;
        $newEvent->event_title_arabic = $request->event_title_arabic;
        $newEvent->event_description = $request->event_description;
        $newEvent->event_description_arabic = $request->event_description_arabic;
        $newEvent->event_date = $request->event_date;
        $newEvent->event_start_time = $request->event_start_time;
        $newEvent->event_end_time = $request->event_end_time;

        $newEvent->save();

        if($this->saveEventImagesInDB($id, $request, 2)) {
            return redirect()->route('admin.events.index')->with('success', 'Event Updated successfully');
        }
        else {
            return redirect()->back()->with('error', 'Please insert image');
        }
    }

    
    public function destroy($id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }
        $event = HomeEvents::findOrFail($id);
        $imageList = DB::table('home_events_images')->where('event_id', $id)->get();
        if(count($imageList) > 0) {
            foreach($imageList as $image) {
                unlink(public_path('images/event/'.$image->event_image));
            }
        }
        DB::table('home_events_images')->where('event_id', $id)->delete();
        $event->delete();

        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
