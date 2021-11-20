@extends('dashboard.layout')

@section('title','Add New Course')

@section('content')
<div class="rol">
    <div class="col-12">
        <h1>Add New Course</h1>
    </div>
</div>

<div class="rol">
    <div class="col-12">
        <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
            @include('course.form')


            <button type="submit btn btn-primary">Add Course</button>


        </form>
    </div>
</div>



@endsection
