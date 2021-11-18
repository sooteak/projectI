@extends('dashboard.layout')

@section('title','Courses List')

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Course</h1>
        <p><a href="courses/create">Add New Course</a></p>
    </div>
</div>



@foreach($courses as $course)
<div class="row">
    <div class="col-2">
        {{ $course->id }}
    </div>

    <div class="col-4">
        <a href="/courses/{{ $course->id }}">{{ $course->name }}</a>
    </div>
</div>

@endforeach


@endsection
