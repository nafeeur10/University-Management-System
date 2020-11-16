<?php

namespace App\Http\Controllers;

use App\HomeEvents;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
