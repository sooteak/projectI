@extends('dashboard.layout')

@section('title','Details for'. $faculty->name)

@section('content')
<div class="rol">

        <h1>Detail for {{ $faculty->name }}</h1>
        <p><a href="{{ route('faculties.edit', ['faculty' => $faculty]) }}">Edit</a></p>

        <form action="{{ route('faculties.destroy', ['faculty' => $faculty]) }}" method="POST">
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
            {{-- <a href="{{ $faculty->curriculum_vitae }}"><i class="material-icons">curriculum_vitae</i></a> --}}
            {{-- <a href="{{ asset('curriculum_vitae/' )}}/{{ $faculty->curriculum_vitae }}"><i class="material-icons">curriculum_vitae</i></a> --}}
            <a href="{{ asset($faculty->curriculum_vitae) }}"><i class="material-icons">curriculum_vitae</i></a>
        </p>
    </div>
</div>

@if ($faculty->image)
    <div class="row">
        <div class="col-12">
            <p><strong>Profile Image</strong></p>
            <img src="{{ asset('storage/' .$faculty->image) }}" alt="" class="img-thumbnail" width="300" height="300">
        </div>
    </div>
@endif


@endsection
