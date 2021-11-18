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
                        <h2 style="float:left">Faculty<b>List</b></h2>
                            <form action="{{ route('insertFaculty') }}" method="GET">
                            <button style="float: right;">Add</button>
                        </div>

                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>

                    <tr>
                        <th>Cname</th>
                        <th>Ename</th>
                        <th>Image</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Ext No.</th>
                        <th>Email</th>
                        <th>Curriculum Vitae </th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($faculties as $faculty)
                    <tr>

                        <td>{{$faculty->Cname}}</td>
                        <td>{{$faculty->Ename}}</td>
                        <td width="10%"><img src="{{ asset('image/') }}/{{$faculty->image}}" width="100" alt="" class="img-fluid"></td>
                        <td>{{$faculty->department}}</td>
                        <td>{{$faculty->position}}</td>
                        <td>{{$faculty->ext_number}}</td>
                        <td>{{$faculty->email}}</td>
                        <td>
                            <a href="{{ asset('curriculum_vitae/') }}/{{$faculty->curriculum_vitae}}"><i class="material-icons">curriculum_vitae</i></a>
                        </td>
                        <td>
                            <a href="{{route('deleteFaculty',['id'=>$faculty->cid])}}" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">Delete</i></a>
                        </td>
                        <td>
                            <a href="{{route('editFaculty',['id'=>$faculty->cid])}}" class="edit" title="edit" data-toggle="tooltip"><i class="material-icons">Edit</i></a>
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



