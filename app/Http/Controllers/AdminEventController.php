<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;

class AdminEventController extends Controller
{
    //
    public function index()
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

        $uploaded_image = $request->file('image');
        $extension = $uploaded_image->getClientOriginalExtension();
        $image_name = hexdec(uniqid()).'.'.$extension;
        $image_loc = 'image/events/';

        $image = ImageManager::gd()->read($uploaded_image)->resize(1000, 500)->save($image_loc.$image_name);

        $validated['user_id'] = Auth::id();
        $validated['image_url'] = $image_loc.$image_name;
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
            'new_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $current_image = $event->image_url;

        $image_loc = 'image/events/';

        $image = $request->file('new_image');

        unlink($current_image);

        $extension = $image->getClientOriginalExtension();
        $image_name = hexdec(uniqid()).'.'.$extension;

        $image->move($image_loc, $image_name);

        $validated['image_url'] = $image_loc.$image_name;

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
}
