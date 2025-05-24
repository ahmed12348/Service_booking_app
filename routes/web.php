<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {

    // Admin Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::resource('services', ServiceController::class);
    
});

    Route::middleware(['auth'])->group(function () {
        Route::get('bookings/create', [BookingController::class, 'create'])->name('bookings.create');
        Route::post('bookings', [BookingController::class, 'store'])->name('bookings.store');
    });


