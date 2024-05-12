<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlusController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');
Route::resource('pluses', PlusController::class);
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
