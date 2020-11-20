<?php

namespace App\Http\Controllers;

use App\LatestNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LatestNewsAPIController extends Controller
{
    public function index()
    {
        $homepageNews = LatestNews::orderBy('id', 'desc')->take(3)->get();
        return response()->json([
            'latestNews' => $homepageNews
        ]);
    }

    public function getNewsImage($id)
    {
        $image = DB::table('latest_news_images')->where('latest_news_id', $id)->first();
        return response()->json([
            'image' => $image
        ]);
    }

    public function getNewsDescription($id)
    {
        $newsDescription = LatestNews::where('id', $id)->get();
        $newsImages = DB::table('latest_news_images')->where('latest_news_id', $id)->get();
        return response()->json([
            'newsDescription' => $newsDescription,
            'newsImages' => $newsImages
        ]);
    }

    public function getAll()
    {
        $allnews = LatestNews::all();
        $newsImages = [];

        foreach($allnews as $event) {
            $id = $event->id;
            $image = DB::table('latest_news_images')->where('latest_news_id', $id)->first();
            array_push($newsImages, $image);
        }
        return response()->json([
            'news' => $allnews,
            'newsImages' => $newsImages
        ]);
    }
}
