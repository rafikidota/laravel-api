<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
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

Route::get('/courses',[CourseController::class,'index']);
Route::get('/course/create',[CourseController::class,'create']);
Route::get('/course/{course}',[CourseController::class,'show']);

// Route::get('/course/{course}/{category}', function ($course, $category) {
//     if ($category) {
//         return "Create a course $course, category $category";
//     } else {
//         return "Create a course $course";
//     }
//     return "Create a course";
// });

Route::get('/home',HomeController::class);