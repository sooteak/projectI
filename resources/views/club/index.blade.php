@extends('dashboard.layout')

@section('title','Clubs List')

@section('content')

<div class="rol">
    <div class="col-12">
        <h1>Club</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="clubs" method="POST">
            <div class="form-group">
                <label for="name" class="pr-4">Name:</label><br>
                <input type="text" name="name" value="{{ old('name') }}">
                <div>{{ $errors->first('name') }}</div>
            </div>

            <button type="submit">Add Club</button>

            @csrf
        </form>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-12">
        <ul>
            @foreach($clubs as $club)
            <li>{{ $club->name }}</li>
            @endforeach
        </ul>
    </div>
</div>


@endsection
