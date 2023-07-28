<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/company", [ApiController::class, 'getCompanyInfo'])->name('company.info');
Route::get("/activities", [ApiController::class, 'getActivities'])->name('activities.info');
Route::get("/activity/{id}", [ApiController::class, 'getActivity'])->name('activities.show');
Route::get("/slides", [ApiController::class, 'getSlides'])->name('slide.info');
Route::get("/about", [ApiController::class, 'getAbout'])->name('about.info');
Route::get("/guides", [ApiController::class, 'getGuides'])->name('guide.info');
Route::post("/booking", [ApiController::class, 'booking'])->name('booking.store');
