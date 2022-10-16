<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id', 'desc')->paginate();
        return view('courses.index', compact('courses'));
    }
    public function create()
    {
        return view('courses.create');
    }
    public function show($id)
    {
        $course = Course::find($id);
        return view('courses.show', compact('course'));
        // return view('courses.show', ['course' => $course]);
    }
    public function store(Request $request)
    {
        $course = new Course();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;
        $course->save();
        return redirect()->route('courses.show',$course);
    }
}
