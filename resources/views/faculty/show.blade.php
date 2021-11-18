@extends('dashboard.layout')

@section('title','Details for'. $faculty->name)

@section('content')
<div class="rol">

        <h1>Detail for {{ $faculty->name }}</h1>
        <p><a href="/faculties/{{ $faculty->id }}/edit">Edit</a></p>

        <form action="/faculties/{{ $faculty->id }}" method="POST">
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-danger">Delete</button>

        </form>
</div>

<div class="row">
    <div class="col-12">
        <p><strong>Name</strong><br>{{ $faculty->name }}</p>
        <p><strong>Course</strong><br>{{ $faculty->course->name }}</p>
        <p><strong>Department</strong><br>{{ $faculty->department }}</p>
        <p><strong>Position</strong><br>{{ $faculty->position }}</p>
        <p><strong>Ext No.</strong><br>{{ $faculty->ext_number }}</p>
        <p><strong>Email</strong><br>{{ $faculty->email }}</p>
        <p><strong>Curriculum Vitae</strong><br>
            <a href="{{ asset('curriculum_vitae/' )}}/{{ $faculty->curriculum_vitae }}"><i class="material-icons">curriculum_vitae</i></a>
        </p>
    </div>
</div>


@endsection
