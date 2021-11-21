@extends('dashboard.layout')

@section('title','Details for'. $course->name)

@section('content')
<div class="rol">

        <h1 >Detail for {{ $course->name }}</h1>
        <p><a href="{{ route('courses.edit', ['course' => $course]) }}">Edit</a></p>

        <form action="{{ route('courses.edit', ['course' => $course]) }}" method="POST">
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-danger">Delete</button>

        </form>
</div>

<div class="row">
    <div class="col-12">
        <p><strong>Name</strong><br>{{ $course->name }}</p>
        <p><strong>Prerequisities</strong><br>{{ $course->prerequisities }}</p>
        <p><strong>Description</strong><br>{{ $course->description }}</p>

    </div>
</div>

@if ($course->image)
    <div class="row">
        <div class="col-12">
            <p><strong>Background Image</strong></p>
            <img src="{{ asset('storage/' .$course->image) }}" alt="" class="img-thumbnail" width="300" height="300">
        </div>
    </div>
@endif


@endsection
