<?php

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

Route::get('Dylan', function () {
    return view('welcome');
});
Route::get('About', function () {
    return "<h1>This is the about page<h1>";
});
