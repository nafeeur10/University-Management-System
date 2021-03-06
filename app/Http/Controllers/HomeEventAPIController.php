<?php

namespace App\Http\Controllers;

use App\HomeEvents;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class HomeEventAPIController extends Controller
{
    public function index()
    {
        $homepageEvents = HomeEvents::orderBy('id', 'desc')->take(5)->get();
        return response()->json([
            'homeevents' => $homepageEvents
        ]);
    }

    public function getEventImage($id)
    {
        $image = DB::table('home_events_images')->where('event_id', $id)->first();
        return response()->json([
            'image' => $image
        ]);
    }

    public function getEventDescription($id)
    {
        $eventDescription = HomeEvents::where('id', $id)->get();
        $eventImages = DB::table('home_events_images')->where('event_id', $id)->get();
        return response()->json([
            'eventDescription' => $eventDescription,
            'eventImages' => $eventImages
        ]);
    }

    public function getAll()
    {
        $allevents = HomeEvents::all();
        $eventImages = [];

        foreach($allevents as $event) {
            $id = $event->id;
            $image = DB::table('home_events_images')->where('event_id', $id)->first();
            array_push($eventImages, $image);
        }
        return response()->json([
            'events' => $allevents,
            'eventImages' => $eventImages
        ]);
    }
}
