@extends('dashboard.layout')

@section('title','Details for'. $club->name)

@section('content')
<div class="rol">

        <h1 >Detail for {{ $club->name }}</h1>
        <p><a href="/clubs/{{ $club->id }}/edit">Edit</a></p>

        <form action="/clubs/{{ $club->id }}" method="POST">
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


@endsection
