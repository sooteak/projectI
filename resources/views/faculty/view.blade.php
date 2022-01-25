@extends('user.layout')

@section('title','Details for Course')

@section('content')
@endsection

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

@foreach($faculties as $faculty)\
    <div class="row pt-5 offset-3">
        <div class="col-4 pb-4 d-flex">
            <a href="/faculties/{{ $faculty->id }}">
                <img src="{{ asset('storage/' .$faculty->image) }}" class="w-4">
            </a>
        </div>

        <div class="col-4 pb-4">
            <span class="font-weight-bold">
                <span class="text-dark">{{ $faculty->name }}</span>

            </span>
            <div>{{ $faculty->department }}</div>
            <div>{{ $faculty->email }}</div>
            <div>{{ $faculty->ext_number }}</div>
            <a href="{{ asset($faculty->curriculum_vitae) }}"><i class="material-icons">curriculum_vitae</i></a>
        </div>
    </div>

    <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="80%" color=#987cb9 SIZE=3>
@endforeach

