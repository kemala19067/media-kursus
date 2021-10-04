<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Models\course;

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
        "title" => "Home"
    ]);
});



Route::get('/courses', [CourseController::class, 'index']);
//halaman single course
Route::get('courses/{course:slug}', [CourseController::class, 'show']);

Route::get('/kuis', function () {
    return view('kuis', [
        "title" => "Quiz"
    ]);
});

Route::get('/forum', function () {
    return view('forum', [
        "title" => "Forum"
    ]);
});
