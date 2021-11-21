@extends('dashboard.layout')

@section('title','Add New Faculty')

@section('content')
<div class="rol">
    <div class="col-12">
        <h1>Add New Faculty</h1>
    </div>
</div>

<div class="rol">
    <div class="col-12">
        <form action="{{ route('faculties.store') }}" method="POST" enctype="multipart/form-data">

            @include('faculty.form')

            <button type="submit btn btn-primary">Add Faculty</button>

        </form>
    </div>
</div>



@endsection
