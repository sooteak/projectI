@extends('layout')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<style>
    body{
        background: #7979798f;
    }
</style>
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{Session::get('success')}}
    </div>
@endif
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6" style="border-radius: 5px;background:white;margin-top:100px;padding:20px;margin-bottom: 100px;width:60%">
        <br><br>

        <div class="table-wrapper">
            <div class="table-title">
                <div class="row" >
                    <div class="col-sm-12" >
                        <div>
                        <h2 style="float:left">Course<b>List</b></h2>
                            <form action="{{ route('insertCourse') }}" method="GET">
                            <button style="float: right;">Add</button>
                        </div>

                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Course Id</th>
                        <th>Image</th>
                        <th>Icon</th>
                        <th>Prerequisites</th>
                        <th>Description</th>
                        <th>Teacher </th>
                        <th>Link</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                    <tr>

                        <td>{{$course->title}}</td>
                        <td>{{$course->courseID}}</td>
                        <td width="10%"><img src="{{ asset('images/') }}/{{$course->image}}" width="100" alt="" class="img-fluid"></td>
                        <td width="10%"><img src="{{ asset('icons/') }}/{{$course->icon}}" width="100" alt="" class="img-fluid"></td>
                        <td>{{$course->prerequisites}}</td>
                        <td>{{$course->description}}</td>
                        <td>{{$course->teacher}}</td>
                        <td><a href="{{$course->link}}">Detail</a></td>
                        <td>
                            <a href="{{route('deleteCourse',['id'=>$course->cid])}}" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">Delete</i></a>
                        </td>
                        <td>
                            <a href="{{route('editCourse',['id'=>$course->cid])}}" class="edit" title="edit" data-toggle="tooltip"><i class="material-icons">Edit</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <div class="col-sm-3"></div>
</div>
@endsection



