@extends('dashboard.layout')

@section('title','Edit Details for'. $faculty->name)

@section('content')
<div class="rol">
    <div class="col-12">
        <h1>Edit Details for {{ $faculty->name }}</h1>
    </div>
</div>

<div class="rol">
    <div class="col-12">
        <form action="{{ route('faculties.update', ['faculty' => $faculty]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('faculty.form')
            <button type="submit btn btn-primary">Save Faculty</button>

        </form>
    </div>
</div>



@endsection
