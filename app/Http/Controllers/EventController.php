<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::all();
        return view('events.event', compact('event'));
    }

    public function show($id)
    {
        $event = Event::find($id);
        return view('events.detail_event', compact('event'));
    }
}
