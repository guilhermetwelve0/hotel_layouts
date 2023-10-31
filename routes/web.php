<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HospedeController;
use App\Http\Controllers\QuartosController;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(QuartosController::class)->prefix('quartos')->group(function () {
        Route::get('', 'index')->name('quartos');
        Route::get('create', 'create')->name('quartos.create');
        Route::post('store', 'store')->name('quartos.store');
        Route::get('show/{id}', 'show')->name('quartos.show');
        Route::get('edit/{id}', 'edit')->name('quartos.edit');
        Route::put('edit/{id}', 'update')->name('quartos.update');
        Route::delete('destroy/{id}', 'destroy')->name('quartos.destroy');
    });

    Route::controller(HospedeController::class)->prefix('hospede')->group(function () {
        Route::get('', 'index')->name('hospede');
        Route::get('create', 'create')->name('hospede.create');
        Route::post('store', 'store')->name('hospede.store');
        Route::get('show/{id}', 'show')->name('hospede.show');
        Route::get('edit/{id}', 'edit')->name('hospede.edit');
        Route::put('edit/{id}', 'update')->name('hospede.update');
        Route::delete('destroy/{id}', 'destroy')->name('hospede.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
