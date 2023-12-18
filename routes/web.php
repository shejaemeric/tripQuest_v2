<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DestinationsController;

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
});

require __DIR__.'/auth.php';


//Website Routes


//flights
Route::get("flights/search",[FlightsController::class,'searchFlights'])->name('flights.search');
Route::post("flights/save",[FlightsController::class,'saveFlights'])->name('flights.save');
Route::delete("flights/unsave",[FlightsController::class,'unsaveFlights'])->name('flights.unsave');
Route::get("flights/saved",[FlightsController::class,'getSavedFlights'])->name('flights.getSaved');

//destinations
Route::get("destinations/top",[DestinationsController::class,'getTopDestinations'])->name('destinations.top');
Route::get("destinations/{country}",[DestinationsController::class,'getOneDestination'])->name('destinations.one');
Route::post("destinations/save/{country}",[DestinationsController::class,'saveDestination'])->name('destinations.save');
Route::get("destinations/unsave/{id}",[DestinationsController::class,'unsaveDestination'])->name('destinations.unsave');
Route::get("destinations/saved",[DestinationsController::class,'getSavedDestination'])->name('destinations.getSaved');
