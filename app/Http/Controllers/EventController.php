<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\View\View;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // ======================
    // ADMIN METHODS
    // ======================
    
    /**
     * Admin dashboard - matches route('admin.dashboard')
     */
    public function adminDashboard() 
    {
        $events = Event::orderBy('date', 'desc')->get();
        return view('admin.dashboard', compact('events'));
    }
    
    /**
     * Display listing of events for admin - matches route('admin.events.index')
     */
    public function index() 
    {
        $events = Event::orderBy('date', 'desc')->get();
        return view('admin.dashboard', compact('events')); // Use same view as dashboard
    }

    /**
     * Show create form - matches route('admin.events.create')
     */
    public function create() 
    {
        return view('admin.create');
    }

    /**
     * Store new event - matches route('admin.events.store')
     */
    public function store(Request $request) 
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
            'date' => 'required|date',
            'location' => 'required|max:255'
        ]);

        Event::create($validated);
        
        return redirect()->route('admin.dashboard')->with('success', 'Event added successfully');
    }

    /**
     * Show single event - matches route('admin.events.show') and route('events.show')
     */
    public function show(Request $request, Event $event) 
    {
        // Check user role and return appropriate view
        if (auth()->user()->role === 'admin') {
            return view('admin.show', compact('event'));
        }
        
        return view('events.show', compact('event'));
    }

    /**
     * Show edit form - matches route('admin.events.edit')
     */
    public function edit(Event $event) 
    {
        return view('admin.edit', compact('event'));
    }

    /**
     * Update event - matches route('admin.events.update')
     */
    public function update(Request $request, Event $event) 
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
            'date' => 'required|date',
            'location' => 'required|max:255',
        ]);

        $event->update($validated);
        
        return redirect()->route('admin.dashboard')->with('success', 'Event updated successfully');
    }

    /**
     * Delete event - matches route('admin.events.destroy')
     */
    public function destroy(Event $event) 
    {
        $event->delete();
        
        return redirect()->route('admin.dashboard')->with('success', 'Event deleted successfully');
    }

    // ======================
    // USER METHODS
    // ======================
    
    /**
     * User dashboard - matches route('dashboard')
     */
    public function userDashboard() 
    {
        $events = Event::orderBy('date')->get();
        return view('dashboard', compact('events'));
    }

    /**
     * Show create form for users - matches route('events.create')
     */
    public function userCreate() 
    {
        return view('events.create');
    }

    /**
     * Store user submitted event - matches route('events.store')
     */
    public function userStore(Request $request) 
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
            'date' => 'required|date|after_or_equal:today',
            'location' => 'required|max:255'
        ]);

        Event::create($validated);
        
        return redirect()->route('dashboard')->with('success', 'Event submitted successfully! 🎉');
    }
}