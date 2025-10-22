<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    //

    public function view()
    {
        $events = Event::paginate(15);

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

        $validated['created_by'] = Auth::id();
        Event::create($validated);

        return Redirect()->route('admin.dashboard')->with('success', 'Event added successfully');
    }

    public function edit($id)
    {
        $event = Event::find($id);

        return view('admin.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);
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
        $event = Event::find($id);
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



        $image_gen = (uuid() . '.' . $request->file('image') . $file->getClientOriginalExtension());
        $file = $request->file();

        $extension = $file->getClientOriginalExtension();

        Event::create($validated);

        return Redirect()->route('user.dashboard')->with('success', 'Event added successfully');
    }

    public function userEventDetails($id) {
        $event = Event::find($id);
        return view('user.details', compact('event'));
    }

    public function userFaqs() {
        return view('user.faqs');
    }

    public function userAbout() {
        return view('user.about');
    }
}
