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

Route::get('courses',[CourseController::class,'index'])->name('courses.index');
Route::get('course/create',[CourseController::class,'create'])->name('courses.create');
Route::post('courses',[CourseController::class,'store'])->name('courses.store');
Route::get('course/{id}',[CourseController::class,'show'])->name('courses.show');
// Route::get('/course/{course}/{category}', function ($course, $category) {
//     if ($category) {
//         return "Create a course $course, category $category";
//     } else {
//         return "Create a course $course";
//     }
//     return "Create a course";
// });

Route::get('/home',HomeController::class);