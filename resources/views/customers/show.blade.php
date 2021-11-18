@extends('layouts.app')

@section('title','Details for'.$customer->name)

@section('content')
    <div class="rol">
        <div class="col-12">
            <h1>Detail for {{ $customer->name }}</h1>
            <p><a href="/customers/{{ $customer->id }}/edit">Edit</a></p>

            <form action="/customers/{{ $customer->id }}" method="POST">
                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-danger">Delete</button>

            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <strong>Name</strong><p>{{ $customer->name }}</p>
            <strong>Email</strong><p>{{ $customer->email }}</p>
            <strong>Company</strong><p>{{ $customer->company->name }}</p>
        </div>
    </div>

@endsection
