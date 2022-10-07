@extends('layouts.template')
@section('title', $course->name . ' course')
@section('content')
    <h1>Welcome to {{ $course->name }} course</h1>
    <a href="{{ route('courses') }}">Back to courses</a>
    <p> <strong>Category: </strong>{{ $course->category }} </p>
    <p> {{ $course->description }} </p>
@endsection
