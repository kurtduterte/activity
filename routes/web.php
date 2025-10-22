<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest.index');
});

Route::get('/about', function () {
    return view('guest.about');
});

Route::get('/events', function () {
    return view('guest.events');
});

Route::get('/gallery', function () {
    return view('guest.gallery');
});

Route::get('/faq', function () {
    return view('guest.faq');
});

Route::middleware('auth')->group(function () {
    Route::middleware('check.role:admin')->prefix('admin')->group(function () {
        Route::get('/dashboard', [EventController::class, 'view'])->name('admin.dashboard');
        Route::get('/dashboard/create', [EventController::class, 'create'])->name('admin.create');
        Route::post('/dashboard/store', [EventController::class, 'store'])->name('admin.store');
        Route::get('/dashboard/events/{id}/edit', [EventController::class, 'edit'])->name('admin.edit');
        Route::put('/dashboard/events/{id}', [EventController::class, 'update'])->name('admin.update');
        Route::get('/dashboard/events/{id}', [EventController::class, 'delete'])->name('admin.delete');
        Route::get('/trash', [EventController::class, 'trash'])->name('admin.archived');
        Route::get('/restore/{id}', [EventController::class, 'restore']);
        Route::get('/delete/{id}', [EventController::class, 'destroy']);
    });

    Route::middleware('check.role:user')->group(function () {
        Route::get('/dashboard', [EventController::class, 'userDashboard'])->name('user.dashboard');
        Route::get('/dashboard/create', [EventController::class, 'userCreate'])->name('user.create');
        Route::post('/dashboard/store', [EventController::class, 'userStore'])->name('user.store');
        Route::get('/events/{id}', [EventController::class, 'userEventDetails'])->name('user.details');
        Route::get('/faqs', [EventController::class, 'userFaqs'])->name('user.faqs');
        Route::get('/abouts', [EventController::class, 'userAbout'])->name('user.about');
    });

});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
