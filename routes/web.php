<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['reset' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::resource('property', App\Http\Controllers\PropertyController::class)->except(['destroy']);
    Route::prefix('realstate')->group(function () {
        Route::resource('aminity', App\Http\Controllers\AminityController::class)->except(['destroy','show']);
        Route::resource('nearlocation', App\Http\Controllers\NearestLocationController::class)->except(['destroy','show']);
        Route::resource('propertytype', App\Http\Controllers\PropertyTypeController::class)->except(['destroy','show']);
        Route::resource('deliveryunits', App\Http\Controllers\ListingDeliveryUnitController::class)->except(['destroy','show']);
        Route::resource('priority', App\Http\Controllers\ListingPriorityController::class)->except(['destroy','show']);
        Route::resource('status', App\Http\Controllers\ListingStatusController::class)->except(['destroy','show']);
        Route::resource('priorityunder', App\Http\Controllers\ListingPriorityUnderController::class)->except(['destroy','show']);
        Route::resource('listingtype', App\Http\Controllers\ListingTypeController::class)->except(['destroy','show']);
        Route::resource('listing', App\Http\Controllers\ListingController::class)->except(['destroy','show']);
    });
});
