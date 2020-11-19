<?php

namespace App\Http\Controllers;

use App\LatestNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class LatestNewsController extends Controller
{
    public function index()
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }
        $latest_news = LatestNews::all();
        return view('admin.homepage.news.index', compact('latest_news'));
    }

    public function create()
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }
        return view('admin.homepage.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'news_home_title' => 'required',
            'news_home_title_arabic' => 'required',

            'news_single_title' => 'required',
            'news_single_title_arabic' => 'required',

            'news_description' => 'required',
            'news_description_arabic' => 'required',

            'news_slider_description' => 'required',
            'news_slider_description_arabic' => 'required',

            'news_date' => 'required',

            'latestNewsImages' => 'required'
        ]);

        $newNews = new LatestNews();
        $newNews->news_home_title = $request->news_home_title;
        $newNews->news_home_title_arabic = $request->news_home_title_arabic;

        $newNews->news_single_title = $request->news_single_title;
        $newNews->news_single_title_arabic = $request->news_single_title_arabic;

        $newNews->news_description = $request->news_description;
        $newNews->news_description_arabic = $request->news_description_arabic;

        $newNews->news_slider_description = $request->news_slider_description;
        $newNews->news_slider_description_arabic = $request->news_slider_description_arabic;

        $newNews->news_date = $request->news_date;

        $newNews->save();

        $latestNews = DB::table('latest_news')
                        ->latest()
                        ->first();

        $latestId = $latestNews->id;

        if($this->saveLatestNewsImagesInDB($latestId, $request, 1)) {
            return redirect()->route('admin.latest_news.index')->with('success', 'Latest News added successfully');
        }
        else {
            return redirect()->back()->with('error', 'Please insert image');
        }
    }

    public function saveLatestNewsImagesInDB($id, $request, $storeOrUpdate)
    {
        if($files=$request->file('latestNewsImages'))
        {
            foreach($files as $file)
            {
                $latestNewsImageName=$id.time().'.'.$file->getClientOriginalName();
                $file->move('images/news',$latestNewsImageName);
                DB::table('latest_news_images')->insert([
                    'latest_news_id' => $id, 
                    'latest_news_image' => $latestNewsImageName
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
        $news = LatestNews::findOrFail($id);
        $latestNewsImages = DB::table('latest_news_images')->where('latest_news_id', $id)->get();
        return view('admin.homepage.news.show', compact('news', 'latestNewsImages'));
    }

    
    public function edit($id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }
        $news = LatestNews::findOrFail($id);
        return view('admin.homepage.news.edit', compact('news'));
    }

    public function getImages($id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $newsimages = DB::table('latest_news_images')->where('latest_news_id', $id)->get();
        return response()->json([
            'images' => $newsimages,
        ]);
    }

    public function update(Request $request, $id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $request->validate([
            'news_home_title' => 'required',
            'news_home_title_arabic' => 'required',

            'news_single_title' => 'required',
            'news_single_title_arabic' => 'required',

            'news_description' => 'required',
            'news_description_arabic' => 'required',

            'news_slider_description' => 'required',
            'news_slider_description_arabic' => 'required',

            'news_date' => 'required',
        ]);

        $newNews = LatestNews::findOrFail($id);
        $newNews->news_home_title = $request->news_home_title;
        $newNews->news_home_title_arabic = $request->news_home_title_arabic;

        $newNews->news_single_title = $request->news_single_title;
        $newNews->news_single_title_arabic = $request->news_single_title_arabic;

        $newNews->news_description = $request->news_description;
        $newNews->news_description_arabic = $request->news_description_arabic;

        $newNews->news_slider_description = $request->news_slider_description;
        $newNews->news_slider_description_arabic = $request->news_slider_description_arabic;

        $newNews->news_date = $request->news_date;

        $newNews->save();

        if($this->saveLatestNewsImagesInDB($id, $request, 2)) {
            return redirect()->route('admin.latest_news.index')->with('success', 'Latest News Updated successfully');
        }
        else {
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }
        $news = LatestNews::findOrFail($id);
        $imageList = DB::table('latest_news_images')->where('latest_news_id', $id)->get();
        if(count($imageList) > 0) {
            foreach($imageList as $image) {
                unlink(public_path('images/news/'.$image->latest_news_image));
            }
        }
        DB::table('latest_news_images')->where('latest_news_id', $id)->delete();
        $news->delete();

        return redirect()->back()->with('success', 'Deleted Successfully');
    }

    public function deleteLatestNewsImage($newsImageName)
    {
        DB::table('latest_news_images')->where('latest_news_image', $newsImageName)->delete();
        unlink(public_path('images/news/'.$newsImageName));
        return response()->json([
            'success' => 'Delete Image Successfully'
        ]);
    }
}
