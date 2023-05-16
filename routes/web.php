<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicBarController;
use App\Http\Controllers\AuthController;

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



Route::get('/', [AuthController::class, 'userLogin'])->name('userLogin');
Route::get('/register', [AuthController::class, 'registration']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/playlist', [MusicBarController::class, 'show']);
    Route::get('/home', [MusicBarController::class, 'home']);
    Route::get('/request-sent', [MusicBarController::class, 'success']);
    Route::get('/profile-settings', [MusicBarController::class, 'profile']);
    Route::get('/booking-requests/{id}', [MusicBarController::class, 'bookingRequest'])->name('booking-requests');
});
