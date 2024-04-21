<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlusController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::resource('pluses', PlusController::class);

