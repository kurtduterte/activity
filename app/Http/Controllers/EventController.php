<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function view()
    {
        $events = Event::all();

        return view('admin.dashboard', compact('events'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:5|max:255',
            'description' => 'required|min:5|max:255',
            'date' => 'required',
            'location' => 'required|min:5|max:255',
        ]);

        Event::create($validated);

        return Redirect()->route('admin.dashboard')->with('success', 'Event added successfully');
    }

    public function edit($id)
    {
        $event = Event::findOrfail($id);

        return view('admin.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $validated = $request->validate([
            'title' => 'required|min:5|max:255',
            'description' => 'required|min:5|max:255',
            'date' => 'required|date',
            'location' => 'required|min:5|max:255',
        ]);

        $event->update($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Event updated successfully');
    }

    public function delete($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return Redirect()->route('admin.dashboard')->with('success', 'Event deleted');
    }

    public function trash()
    {
        $events = Event::onlyTrashed()->get();

        return view('admin.trash', compact('events'));
    }

    public function restore($id)
    {
        Event::withTrashed()->find($id)->restore();

        return Redirect()->route('admin.archived')->with('success', 'Event restored successfully');
    }

    public function destroy($id)
    {
        Event::withTrashed()->find($id)->forceDelete();

        return Redirect()->route('admin.archived')->with('success', 'Event deleted permanently');
    }

    public function userDashboard()
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
            'date' => 'required',
            'location' => 'required|min:5|max:255',
        ]);

        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'location' => $request->location,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('user.dashboard')->with('success', 'Event added successfully');
    }
}
