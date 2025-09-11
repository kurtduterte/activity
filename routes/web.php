<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware('auth')->group(function () {
    Route::middleware('check.role:admin')->prefix('admin')->group(function () {
        Route::get('/dashboard', [EventController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/dashboard/create', [EventController::class, 'create'])->name('admin.create');
        Route::post('/dashboard/store', [EventController::class, 'store'])->name('admin.store');
        Route::put('/dashboard/events/{id}', [EventController::class, 'update'])->name('admin.edit');
        Route::delete('/dashboard/events/{id}',[EventController::class, 'delete'])->name('admin.delete');
    });

    Route::middleware('check.role:user')->group(function () {
        Route::get('/dashboard', [EventController::class, 'dashboard'])->name('user.dashboard');
        Route::get('/dashboard/create', [EventController::class, 'create'])->name('user.create');
        Route::post('/dashboard/store', [EventController::class, 'store'])->name('user.store');
    });




// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
