@extends('dashboard.layout')

@section('title','Add New Club')

@section('content')
<div class="rol">
    <div class="col-12">
        <h1>Add New Club</h1>
    </div>
</div>

<div class="rol">
    <div class="col-12">
        <form action="{{ route('clubs.store') }}" method="POST" enctype="multipart/form-data">
            @include('club.form')


            <button type="submit btn btn-primary">Add Club</button>


        </form>
    </div>
</div>



@endsection
