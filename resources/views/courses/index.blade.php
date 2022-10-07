@extends('layouts.template')
@section('title', 'Courses')
@section('content')
    <h1>Welcome to courses</h1>
    <a href="{{ route('course.create') }}">Create course</a>
    <hr>
    <ul>
        @foreach ($courses as $course)
            <li>{{ $course->name }}</li>
        @endforeach
    </ul>
    {{ $courses->links() }}
@endsection
