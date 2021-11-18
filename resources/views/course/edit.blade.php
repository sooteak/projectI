@extends('dashboard.layout')

@section('title','Edit Details for'. $course->name)

@section('content')
<div class="rol">
    <div class="col-12">
        <h1>Edit Details for {{ $course->name }}</h1>
    </div>
</div>

<div class="rol">
    <div class="col-12">
        <form action="/courses/{{ $course->id }}" method="POST">
            @method('PATCH')
            @include('course.form')
            <button type="submit btn btn-primary">Save Course</button>


        </form>
    </div>
</div>



@endsection
