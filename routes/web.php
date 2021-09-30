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
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/kursus', function () {
    return view('kursus', [
        "tittle" => "Course"
    ]);
});

Route::get('/forum', function () {
    return view('forum', [
        "tittle" => "Forum"
    ]);
});
