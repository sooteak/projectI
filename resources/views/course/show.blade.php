@extends('dashboard.layout')

@section('title','Details for'. $course->name)

@section('content')
<div class="rol">

        <h1 >Detail for {{ $course->name }}</h1>
        <p><a href="/courses/{{ $course->id }}/edit">Edit</a></p>

        <form action="/courses/{{ $course->id }}" method="POST">
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


@endsection
