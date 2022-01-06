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
        <p><strong>Category</strong><br>
            {{ $club->category }}
        </p>
        <p><strong>Link</strong><br>{{ $club->link }}</p>

    </div>
</div>

@endsection
