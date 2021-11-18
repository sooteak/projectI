@extends('layout')
@section('content')
<link rel="stylesheet" href="css/app.css">

<div class="container d-flex">	
    <div class="container">
        <br />
        <div class="row">
            <div class="col-sm-6 col-lg-3"  style="border: 0.2px grey ;border-radius: 10px;box-shadow:  2px 4px 4px 2px rgba(0,0,0,0.2);height: 600px;margin: 20px">
                <div class="panel panel-primary">
                    

                <div class="panel-body text-center">
                        <img src="/image/person-circle.svg" width="70px" height="70px" style="margin: 40px;">
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item liitem"><strong>Name</strong><br>
                            <span class="pull-right">{{ Auth::user()->name }}</span>
                        </li>
                        <li class="list-group-item liitem"><strong>Email</strong><br>
                            <span class="pull-right">{{ Auth::user()->email }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 col-lg-6 container-fuild"  style="border: 0.2px grey ;border-radius: 10px;box-shadow:  2px 4px 4px 2px rgba(0,0,0,0.2);height: 600px;margin: 20px">
                <div class="panel panel-primary">

                    <table>
                        <tr>
                            <th style="margin: 40px;padding: 20px"><a href="notification" data-target-id="notification">Notifications</a></th>
                            <th style="margin: 40px;padding: 20px"><a href="profile" data-target-id="profile">Personal Information</a></th>
                            <th style="margin: 50px;padding: 20px"><a href="password" data-target-id="password">Password</a></th>
                        </tr>
                    </table>
                    <hr>
                    <div class="wrapper mt-sm-5">
                        <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" style="width: 70px;height: 70px;border-radius: 6px;object-fit: cover;">
                            <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                            <input type="file"<p>Accepted file type .png. Less than 1MB</p>
                            </div>
                        </div>
                        <form method="POST">
                        <div class="py-2">
                            <div class="row py-2">
                                <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text" name="firstname" class="bg-light form-control" placeholder="Firstname"> </div>
                                <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text" name="lastname" class="bg-light form-control" placeholder="Lastname"> </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6"> <label for="email">Email Address</label> <input type="text" name="email" class="bg-light form-control" placeholder="Email"> </div>
                                <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input type="tel" name="phone" class="bg-light form-control" placeholder="Phone Number"> </div>
                            </div>
                        <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3" name="savebtn">Save Changes</button> <button class="btn border button" name="cancelbtn">Cancel</button> </div>
                    </div>
                        </form>
            </div>
        </div>
    </div>
</div>
        
@endsection