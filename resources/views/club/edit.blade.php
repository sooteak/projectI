@extends('dashboard.layout')

@section('title','Edit Details for'. $club->name)

@section('content')
<div class="rol">
    <div class="col-12">
        <h1>Edit Details for {{ $club->name }}</h1>
    </div>
</div>

<div class="rol">
    <div class="col-12">
        <form action="/clubs/{{ $club->id }}" method="POST">
            @method('PATCH')
            @include('club.form')
            <button type="submit btn btn-primary">Save Club</button>

        </form>
    </div>
</div>



@endsection
