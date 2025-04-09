<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PreEnrollController;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/course-details', function () {
    return view('course-details');
});

Route::get('/instructors', function () {
    return view('instructors');
});

Route::get('/instructor-details', function () {
    return view('instructor-details');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/why-us', function () {
    return view('why-us');
});

Route::get('/pre-enroll', [PreEnrollController::class, 'index'])->name('pre-enroll');

Route::view('/', 'home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/settings', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/settings', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/settings', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('profile.dashboard');

    // Logout route
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

require __DIR__.'/auth.php';
