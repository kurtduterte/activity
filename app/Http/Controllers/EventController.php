<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function index()
    {
        $events = Event::paginate(10);

        return view('user.dashboard', compact('events'));
    }

    public function userCreate()
    {
        return view('user.create');
    }

    public function userStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:5|max:255',
            'description' => 'required|min:5|max:255',
            'location' => 'required|min:5|max:255',
            'date' => 'required',
        ]);

        $validated['user_id'] = auth()->id();

        Event::create($validated);

        return Redirect()->route('user.dashboard')->with('success', 'Event added successfully');
    }

    public function userEventDetails($id)
    {
        $event = Event::find($id);

        return view('user.details', compact('event'));
    }

    public function userFaqs()
    {
        return view('user.faqs');
    }

    public function userAbout()
    {
        return view('user.about');
    }
}
