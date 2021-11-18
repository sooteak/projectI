@extends('layout')
@section('content')
<link rel="stylesheet" href="css/app.css">
<script 
src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

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
                    <div id="profile" style="padding: 30px;">
                    <h4>Email&SMS Notification</h4>
                        <p>Notification will only be sent after constant</p>
                    <br>
                    <label class="switch">
                            <input type="checkbox" id="cb1">
                        <span class="slider round"></span>
                    </label> Receive email when event is coming soon.
                    <br>
                    <label class="switch">
                            <input type="checkbox" id="cb2">
                        <span class="slider round"></span>
                    </label> Receive email when event is coming soon.
                    <br>
                    <div class="py-3 pb-4"> <button class="btn btn-primary mr-3" name="savebtn" onclick="save()">Save Changes</button> </div>
                    </div>
<script>
    function save() {	
        var checkbox = document.getElementById("cb1");
        localStorage.setItem("cb1", checkbox.checked);	
    }
    
    //for loading
    var checked = JSON.parse(localStorage.getItem("cb1"));
        document.getElementById("cb1").checked = checked;
    </script>
              
                    
               </div>
            </div>
        </div>
    </div>
</div>
        
@endsection