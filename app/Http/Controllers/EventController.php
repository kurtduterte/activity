<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\View\View;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function view() {
        $events = Event::all();

        return view('admin.dashboard', compact('events'));
    }

    public function create() {
        return view('admin.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title'=> 'required|max:255',
            'description'=> 'required|max:255',
            'date'=> 'required',
            'location'=> 'required|max:255'
        ]);

        Event::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'date'=>$request->date,
            'location'=>$request->location,
            'created_at'=>Carbon::now()
        ]);

        return Redirect()->route('admin.dashboard')->with('success', 'Event added successfully');
    }
}
