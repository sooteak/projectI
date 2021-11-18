@extends('dashboard.layout')

@section('title','Faculties List')

@section('content')
<div class="rol">
    <div class="col-12">
        <h1>Faculty</h1>
        <p><a href="faculties/create">Add New Faculty</a></p>
    </div>
</div>


@foreach($faculties as $faculty)
<div class="row">
    <div class="col-2">
        {{ $faculty->id }}
    </div>

    <div class="col-4">
        <a href="/faculties/{{ $faculty->id }}">{{ $faculty->name }}</a>
    </div>
    <div class="col-4">{{ $faculty->course->name }}</div>
</div>

@endforeach

@endsection
