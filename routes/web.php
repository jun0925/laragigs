<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/listings', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim amet deserunt molestiae culpa ipsum? Harum, ipsum commodi labore omnis voluptatum numquam inventore quod, vero ducimus esse reiciendis error corporis expedita?'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim amet deserunt molestiae culpa ipsum? Harum, ipsum commodi labore omnis voluptatum numquam inventore quod, vero ducimus esse reiciendis error corporis expedita?'
            ],
        ],
    ]);
});