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
        <h3>Edit Club</h3>
        <form method="POST", action="{{ route('updateClub') }}" enctype="multipart/form-data">
            @CSRF

            @foreach($clubs as $club)
            <input type="hidden" class="form-control" id="id" name="id" value="{{$club->id}}">
            <div class="form-group">
                <label for="Image">Image</label><br>
                <img src="{{asset('image/')}}/{{$club->image}}" alt="" width="200"><br>


                <label for="Icon">Icon</label><br>
                <img src="{{asset('icons/')}}/{{$club->icon}}" alt="" width="100"><br>


                <label for="Title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$club->title}}">
            </div>
            <div class="form-group">
                <label for="Image">Image</label>
                <input type="file" class="form-control" id="club-image" name="club-image">
            </div>
            <div class="form-group">
                <label for=" Icon">Icon</label>
                <input type="file" class="form-control" id="club-icon" name="club-icon">
            </div>
            <div class="form-group">
                <label for="member">Member</label>
                <input type="number" class="form-control" id="member" name="member" value="{{$club->member}}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$club->description}}">
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="link" class="form-control" id="link" name="link" value="{{$club->link}}">
            </div>

            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <br><br>
    </div>
</div>
@endsection