<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HotelController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/rooms', [PageController::class, 'rooms'])->name('rooms');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');

    Route::controller(BookingController::class)->prefix('bookings')->group(function () {
        Route::get('', 'index')->name('bookings');
        Route::get('create', 'create')->name('bookings.create');
        Route::post('store', 'store')->name('bookings.store');
        Route::get('show/{id}', 'show')->name('bookings.show');
        Route::get('edit/{id}', 'edit')->name('bookings.edit');
        Route::put('edit/{id}', 'update')->name('bookings.update');
        Route::delete('destroy/{id}', 'destroy')->name('bookings.destroy');
    });

    Route::controller(GuestController::class)->prefix('guests')->group(function () {
        Route::get('', 'index')->name('guests');
        Route::get('create', 'create')->name('guests.create');
        Route::post('store', 'store')->name('guests.store');
        Route::get('show/{id}', 'show')->name('guests.show');
        Route::get('edit/{id}', 'edit')->name('guests.edit');
        Route::put('edit/{id}', 'update')->name('guests.update');
        Route::delete('destroy/{id}', 'destroy')->name('guests.destroy');
    });

    Route::controller(RoomController::class)->prefix('rooms')->group(function () {
        Route::get('', 'index')->name('rooms');
        Route::get('create', 'create')->name('rooms.create');
        Route::post('store', 'store')->name('rooms.store');
        Route::get('show/{id}', 'show')->name('rooms.show');
        Route::get('edit/{id}', 'edit')->name('rooms.edit');
        Route::put('edit/{id}', 'update')->name('rooms.update');
        Route::delete('destroy/{id}', 'destroy')->name('rooms.destroy');
    });

    Route::controller(RoomTypeController::class)->prefix('room_types')->group(function () {
        Route::get('', 'index')->name('room_types');
        Route::get('create', 'create')->name('room_types.create');
        Route::post('store', 'store')->name('room_types.store');
        Route::get('show/{id}', 'show')->name('room_types.show');
        Route::get('edit/{id}', 'edit')->name('room_types.edit');
        Route::put('edit/{id}', 'update')->name('room_types.update');
        Route::delete('destroy/{id}', 'destroy')->name('room_types.destroy');
    });

    Route::controller(ServiceController::class)->prefix('services')->group(function () {
        Route::get('', 'index')->name('services');
        Route::get('create', 'create')->name('services.create');
        Route::post('store', 'store')->name('services.store');
        Route::get('show/{id}', 'show')->name('services.show');
        Route::get('edit/{id}', 'edit')->name('services.edit');
        Route::put('edit/{id}', 'update')->name('services.update');
        Route::delete('destroy/{id}', 'destroy')->name('services.destroy');
    });

    Route::controller(HotelController::class)->prefix('hotel')->group(function () {
        Route::get('', 'index')->name('hotel');
        Route::get('create', 'create')->name('hotel.create');
        Route::post('store', 'store')->name('hotel.store');
        Route::get('show/{id}', 'show')->name('hotel.show');
        Route::get('edit/{id}', 'edit')->name('hotel.edit');
        Route::put('edit/{id}', 'update')->name('hotel.update');
        Route::delete('destroy/{id}', 'destroy')->name('hotel.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    Route::get('/settings', [App\Http\Controllers\AuthController::class, 'settings'])->name('settings');
});
