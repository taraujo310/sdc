<?php

namespace sdc\Http\Controllers;

use sdc\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index')->withNews($news);
    }

    public function show($id)
    {
        $item = News::find($id);
        return view('news.show')->withItem($item);
    }

    public function new()
    {
        $item = new News;
        return view('news.new')->withItem($item);
    }

    public function create(Request $request)
    {
        $params = $request->all();
        News::create($params);

        return redirect()->action('NewsController@index');
    }

    public function destroy($id)
    {
      News::destroy($id);
      return redirect()->action('NewsController@index');
    }
}
