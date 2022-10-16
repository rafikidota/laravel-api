@extends('layouts.template')
@section('title', 'Courses')
@section('content')
    <h1>Welcome to courses</h1>
    <a href="{{ route('courses.create') }}">Create course</a>
    <hr>
    <ul>
        @foreach ($courses as $course)
            <li>
                <a href="{{ route('courses.show',$course->id) }}">{{ $course->name }}</a>
            </li>
        @endforeach
    </ul>
    {{ $courses->links() }}
@endsection
