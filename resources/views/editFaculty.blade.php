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
        <h3>Edit Faculty</h3>
        <form method="POST", action="{{ route('updateFaculty') }}" enctype="multipart/form-data">
            @CSRF

            @foreach($faculties as $faculty)
            <input type="hidden" class="form-control" id="id" name="id" value="{{$faculty->id}}">
            <div class="form-group">
                <label for="Image">Image</label><br>
                <img src="{{asset('image/')}}/{{$faculty->image}}" alt="" width="200"><br>


                <label for="Cname">Chinese Name</label>
                <input type="text" class="form-control" id="Cname" name="Cname" value="{{$faculty->Cname}}">

                <label for="Ename">English Name</label>
                <input type="text" class="form-control" id="Ename" name="Ename" value="{{$faculty->Ename}}">
            </div>
            <div class="form-group">
                <label for="Image">Image</label>
                <input type="file" class="form-control" id="faculty-image" name="faculty-image">
            </div>
            <div class="form-group">
                <label for="curriculum_vitae">Curriculum Vitae</label>
                <a href="{{ asset('curriculum_vitae/') }}/{{$faculty->curriculum_vitae}}"><i class="material-icons">curriculum_vitae</i></a>
                <input type="file" class="form-control" id="curriculum_vitae" name="curriculum_vitae">
            </div>

            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" class="form-control" id="department" name="department" value="{{$faculty->department}}">
            </div>

            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" id="position" name="position" value="{{$faculty->position}}">
            </div>
            <div class="form-group">
                <label for="ext_number">Ext No.</label>
                <input type="text" class="form-control" id="ext_number" name="ext_number" value="{{$faculty->ext_number}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$faculty->email}}">
            </div>

            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <br><br>
    </div>
</div>
@endsection