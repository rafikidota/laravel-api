<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return "Welcome to courses";
    }
    public function create()
    {
        return "Create a course";
    }
    public function show($course)
    {
        return "Welcome to $course course";
    }
}
