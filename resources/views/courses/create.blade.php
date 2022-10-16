@extends('layouts.template')
@section('title', 'Create a course')
@section('content')
    <h1>Create course</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <label>
            Name:
            <br>
            <input type="text" name="name">
            <br>
        </label>
        <label>
            Description:
            <br>
            <textarea name="description" rows="5"></textarea>
            <br>
        </label>
        <label>
            Category:
            <br>
            <input type="text" name="category">
            <br>
        </label>
        <button type="submit">Save</button>
    </form>
@endsection
