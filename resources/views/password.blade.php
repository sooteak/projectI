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
                    <div id="password" style="padding: 30px;">
                    <h4>Change Password</h4>
                        <p>Edit your password to secure your account</p>
                    <br>
                    <div class="py-2">
                            <div class="row py-2">
                                <div class="col-md-6"> <label for="Current Password">Current Password</label> <input type="password" class="bg-light form-control" placeholder="Current Password"> </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6"> <label for="New Password">New Password</label> <input type="password" class="bg-light form-control" placeholder="New Password"> </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6"> <label for="Retype Password">Confirm Password</label> <input type="password" class="bg-light form-control" placeholder="Confirm Password"> </div>
                            </div>
                        <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3">Save Changes</button> <button class="btn border button">Cancel</button> </div>
                    </div>
            </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>
        
@endsection