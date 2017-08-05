<?php

namespace sdc\Http\Controllers;

use sdc\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
      $news = News::all();
      return view('news/index')->withNews($news);
    }

    public function show($id) {
      $item = News::find($id);
      return view('news/show')->withItem($item);
    }
}
