@extends('dashboard.layout')

@section('title','Club List')

@section('content')
<div class="rol">
    <div class="col-12">
        <h1>Club</h1>
        <p><a href="{{ route('clubs.create') }}">Add New Club</a></p>
    </div>
</div>


@foreach($clubs as $club)
<div class="row">
    <div class="col-2">
        {{ $club->id }}
    </div>

    <div class="col-2">
        {{ $club->category }}
    </div>
    <div class="col-4">
        <a href="/clubs/{{ $club->id }}">{{ $club->name }}</a>
    </div>
    <div class="col-4">
        <a href="{{ $club->link }}">{{ $club->link }}</a>
    </div>
</div>



@endforeach

@endsection
