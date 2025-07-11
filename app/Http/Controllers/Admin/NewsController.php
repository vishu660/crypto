<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all(); // or paginate, or whatever you need
        return view('backend.pages.news', ['news' => $news]);
    }

    public function create()
    {
        return view('backend.pages.news');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'nullable',
        ]);

        News::create($request->only('title', 'content'));

        return redirect()->route('news.index')->with('success', 'News Added!');
    }

    public function edit($id)
    {
        $editNews = News::findOrFail($id);
        $news = News::all();
        return view('backend.pages.news', compact('news', 'editNews'));
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->update($request->only(['title', 'content']));
        return redirect()->route('news.index')->with('success', 'News updated!');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return back()->with('success', 'News Deleted!');
    }
}
