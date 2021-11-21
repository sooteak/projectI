@extends('dashboard.layout')

@section('title','Details for'. $club->name)

@section('content')
<div class="rol">

        <h1 >Detail for {{ $club->name }}</h1>
        <p><a href="{{ route('clubs.edit', ['club' => $club]) }}">Edit</a></p>

        <form action="{{ route('clubs.destroy', ['club' => $club]) }}" method="POST">
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-danger">Delete</button>

        </form>
</div>

<div class="row">
    <div class="col-12">
        <p><strong>Name</strong><br>{{ $club->name }}</p>
        <p><strong>Description</strong><br>{{ $club->description }}</p>
        <p><strong>Member</strong><br>{{ $club->member }}</p>

    </div>
</div>

@if ($club->image)
    <div class="row">
        <div class="col-12">
            <p><strong>Icon Image</strong></p>
            <img src="{{ asset('storage/' .$club->image) }}" alt="" class="img-thumbnail" width="300" height="300">
        </div>
    </div>
@endif


@endsection
