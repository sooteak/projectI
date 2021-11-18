@extends('layout')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<style>
    body{
        background: #7979798f;
    }
</style>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6" style="border-radius: 5px;background:white;margin-top:100px;padding:20px;margin-bottom: 100px;">
        <br><br>
        <h3>Edit Course</h3>
        <form method="POST", action="{{ route('updateCourse') }}" enctype="multipart/form-data">
            @CSRF

            @foreach($courses as $course)
            <input type="hidden" class="form-control" id="id" name="id" value="{{$course->id}}">
            <div class="form-group">
                <label for="Course Image">Image</label><br>
                <img src="{{asset('image/')}}/{{$course->image}}" alt="" width="200"><br>


                <label for="Course Icon">Icon</label><br>
                <img src="{{asset('icons/')}}/{{$course->icon}}" alt="" width="100"><br>

                <label for="Course Title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$course->title}}">
            </div>
            <div class="form-group">
                <label for="Course Image">Image</label>
                <input type="file" class="form-control" id="course-image" name="course-image">
            </div>
            <div class="form-group">
                <label for="Course Icon">Icon</label>
                <input type="file" class="form-control" id="course-icon" name="course-icon">
            </div>
            <div class="form-group">
                <label for="Course description">Course ID</label>
                <input type="text" class="form-control" id="courseID" name="courseID" value="{{$course->courseID}}">
            </div>

            <div class="form-group">
                <label for="Course description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$course->description}}">
            </div>
            <div class="form-group">
                <label for="Course prerequisites">Prerequisites</label>
                <input type="text" class="form-control" id="prerequisites" name="prerequisites" value="{{$course->prerequisites}}">
            </div>
            <div class="form-group">
                <label for="Course Teacher">Teacher</label>
                <input type="text" class="form-control" id="teacher" name="teacher" value="{{$course->teacher}}">
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <a href="{{$course->link}}"><i class="material-icons">Detail</i></a>
                <input type="link" class="form-control" id="link" name="link" value="{{$course->link}}">
            </div>

            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <br><br>
    </div>
</div>
@endsection