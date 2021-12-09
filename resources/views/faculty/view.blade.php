@extends('user.layout')

@section('title','Details for Course')

@section('content')
@endsection

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
{{-- <div class="container">
    @foreach($faculties as $faculty)
    <div class="row">
        <div class="col-6 offset-3">

        <img src="{{ asset('storage/' .$faculty->image) }}" class="w-100">

        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <div>
                <p>
                <span class="font-weight-bold">
                    <span class="text-dark">{{ $faculty->name }}</span>

                </span> {{ $faculty->department }}
                </p>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $faculty->curriculum_vitae }}
        </div>
    </div>
</div> --}}

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

@endforeach

