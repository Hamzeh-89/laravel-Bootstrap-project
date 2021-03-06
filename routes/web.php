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

Route::get('layout', function () {
    return view('layout');
});

Route::get('manage_admin', function () {
    return view('manage_admin');
});

Route::get('manage_citizen', function () {
    return view('manage_citizen');
});

Route::get('manage_cases', function () {
    return view('manage_cases');
});