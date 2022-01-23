@extends('user.layout')

@section('title','Details for Club')

@section('content')

<!-- About-->
<section class="about-section text-center" id="about" style="background: #7979798f;">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-white mb-4">Clubs & Societies</h2>
                    <p class="text-white-50">
                        Activities ranging from indoor to outdoor activities, cultural, social, religious and adventure clubs will enable students to mingle and work together in teams.

                    </p>
            </div>
        </div>

    </div>
</section>


<div>

    <div class="mt-4 pt-5">
        <div class="row">
            <div class="col-4">
                <img class="img-fluid" src="../images/Student Union.png" alt="..."  width="220" height="146">
            </div>
            <div class="col-8">
                <h3>Student Union/ Student Society</h3>
                <ul>
                    @foreach($category01 as $category)
                        <li><a href="{{ $category->link }}">{{ $category->name }}</a></li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>


    <div class="mt-4 pt-5">
        <div class="row">
            <div class="col-4">
                <img class="img-fluid" src="../images/Sport Society.png" alt="..." width="220" height="146">
            </div>
            <div class="col-8">
                <h3>Sport Society</h3>
                <ul>
                    @foreach($category02 as $category)
                        <li><a href="{{ $category->link }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="mt-4 pt-5">
        <div class="row">
            <div class="col-4">
                <img class="img-fluid" src="../images/Performance Society.png" alt="..." width="220" height="146">
            </div>
            <div class="col-8">
                <h3>Performance Society</h3>
                <ul>
                    @foreach($category03 as $category)
                        <li><a href="{{ $category->link }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="mt-4 pt-5">
        <div class="row">
            <div class="col-4">
                <img class="img-fluid" src="../images/Charity Society.png" alt="..." width="220" height="146">
            </div>
            <div class="col-8">
                <h3>Religion / Charity Society</h3>
                <ul>
                    @foreach($category04 as $category)
                        <li><a href="{{ $category->link }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="mt-4 pt-5">
        <div class="row">
            <div class="col-4">
                <img class="img-fluid" src="../images/Language.png" alt="..." width="220" height="146">
            </div>
            <div class="col-8">
                <h3>Language / Cultural / Art</h3>
                <ul>
                    @foreach($category05 as $category)
                        <li><a href="{{ $category->link }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="mt-4 pt-5">
        <div class="row">
            <div class="col-4">
                <img class="img-fluid" src="../images/Residence Self-Regulatory.png" alt="..." width="220" height="146">
            </div>
            <div class="col-8">
                <h3>Others</h3>
                <ul>
                    @foreach($category06 as $category)
                        <li><a href="{{ $category->link }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    @endsection
