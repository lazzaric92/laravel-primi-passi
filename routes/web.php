<?php

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
    $user = "Darkness";
    return view('pages.home', compact("user"));
});

Route::get('/about', function () {
    $user = "Darkness";
    return view('pages.about', compact("user"));
});
