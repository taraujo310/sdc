<?php

namespace sdc\Http\Controllers;

use Illuminate\Http\Request;
use sdc\Event;

class EventsController extends Controller
{
    public function index()
    {
      $events = Event::all();
      return view('events.index', ["events" => $events]);
    }

    public function show($id)
    {
      $event = Event::find($id);
      return view('events.show', ["event" => $event]);
    }

    public function umNomeQueAindaNaoSei()
    {
      $event = Event::activeEvent();
      return view('events.show', ["event" => $event]);
    }
}
