<?php

namespace App\Http\Controllers;

use App\BreakingNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BreakingNewsController extends Controller
{
    public function newsList() 
    {
        $today = date('Y-m-d');
        $breakingnews = BreakingNews::where('news_start_date', '>=', $today)->get();
        return response()->json([
            'breakingnews' => $breakingnews
        ]);
    }

    public function index()
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $breakingNews = BreakingNews::all();
        return view('admin.homepage.breakingnews.index', compact('breakingNews'));
    }

    public function create()
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        return view('admin.homepage.breakingnews.create');
    }

    public function store(Request $request)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $request->validate([
            'name' => 'required'
        ]);

        $breakingnews = new BreakingNews();
        $breakingnews->news_title = $request->name;
        $breakingnews->news_title_arabic = $request->name_arabic;
        $breakingnews->news_main_link = $request->news_link;
        $breakingnews->news_start_date = $request->breaking_news_start_time;
        $breakingnews->news_end_date = $request->breaking_news_end_time;
        
        $breakingnews->save();
        return redirect()
                ->route('admin.breakingnews.index')
                ->with('success', 'News Added Successfully');
        
    }

    public function show($id)
    {
        $breakingnews = BreakingNews::findOrFail($id);
        return view('admin.homepage.breakingnews.show', compact('breakingnews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $breakingnews = BreakingNews::findOrFail($id);
        return view('admin.homepage.breakingnews.edit', compact('breakingnews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $breakingnews = BreakingNews::findOrFail($id);

        $breakingnews->news_title = $request->name;
        $breakingnews->news_title_arabic = $request->name_arabic;
        $breakingnews->news_main_link = $request->news_link;
        $breakingnews->news_start_date = $request->breaking_news_start_time;
        $breakingnews->news_end_date = $request->breaking_news_end_time;

        $breakingnews->save();
        return redirect()->route('admin.breakingnews.index')->with('success', 'Breaking news updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('user_manage')) {
            return abort(401);
        }

        $breakingnews = BreakingNews::findOrFail($id);
        $breakingnews->delete();

        return redirect()->route('admin.breakingnews.index')->with('success', 'Breaking News Deleted Successfully');
    }
}
