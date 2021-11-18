@extends('layout')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

<style>
    .card mb-3{
        display: inline-block;
        overflow: hidden;
        margin-right: 10px;
        width: 220px;
        height: 396px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
    }
</style>
<div class="grid" style="margin:5% 5%;">
  <div class="g-col-6 g-col-md-4"  >
  @foreach($faculties as $faculty)
    <div class="card mb-3" >
    <div class="row g-0" style="border-style: outset;">

        <div class="col-md-4">
        <img src="{{asset('image/')}}/{{$faculty->image}}" width="220" height="330" />
        </div>

        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Name:{{$faculty->Cname}}</h5><br>{{$faculty->Ename}}
                <p class="card-text">Department: {{$faculty->department}}</p>
                <p class="card-text">Position: {{$faculty->position}}</p>
                <p class="card-text">Ext No.: {{$faculty->ext_number}}</p>
                <p class="card-text">Email: {{$faculty->email}}</p>
                <p class="card-text"><a href="{{ asset('curriculum_vitae/') }}/{{$faculty->curriculum_vitae}}"><i class="material-icons">curriculum_vitae</i></a></p>
            </div>
        </div>

    </div>
    </div>
    @endforeach
  </div>
</div>
@endsection

