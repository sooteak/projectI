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
        <h3>Create New Faculty</h3>
        <form method="POST", action="{{ route('addFaculty') }}" enctype="multipart/form-data">

            @CSRF

            <div class="form-group">
                <label for="Faculty Cname">Chinese Name</label>
                <input type="text" class="form-control" id="Cname" name="Cname">
            </div>
            <div class="form-group">
                <label for="Faculty Ename">English Name</label>
                <input type="text" class="form-control" id="Ename" name="Ename">
            </div>
            <div class="form-group">
                <label for="Faculty department">Department</label>
                <input type="text" class="form-control" id="department" name="department">
            </div>
            <div class="form-group">
                <label for="Faculty position">Position</label>
                <input type="text" class="form-control" id="position" name="position">
            </div>
            <div class="form-group">
                <label for="Faculty ext_number">Ext No.</label>
                <input type="number" class="form-control" id="ext_number" name="ext_number">
            </div>
            <div class="form-group">
                <label for="Faculty email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="Faculty Image">Image</label>
                <input type="file" class="form-control" id="faculty-image" name="faculty-image">
            </div>
            <div class="form-group">
                <label for="curriculum_vitae">Curriculum Vitae</label>
                <input type="file" class="form-control" id="curriculum_vitae" name="curriculum_vitae">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br>
    </div>
</div>
@endsection