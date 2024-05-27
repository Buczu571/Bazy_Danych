<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BiletyController;
use App\Http\Controllers\Admin\UsersManagerController;
use App\http\controllers\TicketsController;
use App\models\Tickets;
use App\http\controllers\UsersmngrController;
use App\models\Usersmngr;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::resource('/admin/tickets', TicketsController::class);
Route::resource('/admin/usersmngr', UsersmngrController::class);


//user
Route::middleware(['auth', 'userMiddleware'])->group(function(){

    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('bilety', [BiletyController::class, 'index'])->name('user.bilety');
});

//admin
Route::middleware(['auth', 'adminMiddleware'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});
require __DIR__.'/auth.php';