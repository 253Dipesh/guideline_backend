<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ActivityController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\GuideController;
use App\Http\Controllers\Backend\SlideController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('company', CompanyController::class)->names('company');
    Route::resource('slide', SlideController::class)->names('slide');
    Route::resource('about', AboutController::class)->names('about');
    Route::resource('activity', ActivityController::class)->names('activity');
    Route::resource('guide', GuideController::class)->names('guide');
    Route::resource('booking', BookingController::class)->names('guide/booking');
});

require __DIR__ . '/auth.php';
