<?php

namespace sdc\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
      return '<h1>Street Dance Connection Brasil</h1>';
    }
}
