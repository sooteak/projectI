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
    <div class="col-sm-6" style="border-radius: 5px;background:white;margin-top:100px;padding:20px;margin-bottom: 100px">
        <br><br>
        <h3>Create New Course</h3>
        <form method="POST", action="{{ route('addCourse') }}" enctype="multipart/form-data">

            @CSRF

            <div class="form-group">
                <label for="Course ID">Course ID</label>
                <input type="text" class="form-control" id="courseID" name="courseID">
            </div>
            <div class="form-group">
                <label for="Course title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="Course prerequisites">Prerequisites</label>
                <input type="text" class="form-control" id="prerequisites" name="prerequisites">
            </div>
            <div class="form-group">
                <label for="Course description">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
                <label for="Course teacher">Teacher</label>
                <input type="text" class="form-control" id="teacher" name="teacher">
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
                <label for="Course link">Link</label>
                <input type="link" class="form-control" id="link" name="link">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br>
    </div>
</div>
@endsection