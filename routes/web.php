<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public routes
Route::get('/', function () {
    return view('welcome');
});

// Authenticated routes with role-based access
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    
    // Admin routes
    Route::middleware('check.role:admin')->prefix('admin')->group(function () {
        Route::get('/dashboard', [EventController::class, 'adminDashboard'])->name('admin.dashboard');
        Route::get('/events', [EventController::class, 'index'])->name('admin.events.index');
        Route::get('/events/create', [EventController::class, 'create'])->name('admin.events.create');
        Route::post('/events', [EventController::class, 'store'])->name('admin.events.store');
        Route::get('/events/{event}', [EventController::class, 'show'])->name('admin.events.show');
        Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('admin.events.edit');
        Route::put('/events/{event}', [EventController::class, 'update'])->name('admin.events.update');
        Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('admin.events.destroy');
    });

    // User routes
    Route::middleware('check.role:user')->group(function () {
        Route::get('/dashboard', [EventController::class, 'userDashboard'])->name('dashboard');
        Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
        Route::post('/events', [EventController::class, 'userStore'])->name('events.store');
        Route::get('/submit-event', [EventController::class, 'userCreate'])->name('events.create');
    });
    
});