<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// update - Update listing
// destroy - Delete lisintg

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
