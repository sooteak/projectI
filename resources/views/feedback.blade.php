@extends('user.layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/flatly/bootstrap.min.css">
    <title>Bootstrap Compatible Form Validator Examples</title>
    <script>

        function showMessage(){
            var message = "Thank you for you submission!";
            alert(message);
        }
        function validateform(){
            var name=document.myform.name.value;
            var email=document.myform.email.value;

            if (name==null || name==""){
                alert("Name can't be blank");
                return false;
            }
        }
    </script>



</head>
<body style="background-color:#7979798f">

    <div class="container" style="margin:150px auto;border-radius: 5px;background:white;padding: 20px">
        <h1>Feedback Form</h1>
        <p class="lead"></p>
        <form name="myform" method="post" onsubmit="return validateform()">
        <div class="form-group">
            <label for="name"><strong>Name*</strong></label> <input type="text" name="name" class="bg-light form-control" placeholder="name">
        </div>

        <div class="form-group">
            <label for="email"><strong>Email Address*</strong></label> <input type="text" name="email" class="bg-light form-control" placeholder="Email" pattern=".+@beststartupever\.com">
        </div>

        <div class="form-group">
            <form>
                <label for="cars"><strong>Feedback Type*</strong></label><br>
                <select id="cars" name="cars">
                    <option value="constructive">Constructive Feedback</option>
                    <option value="appreciative">Appreciative Feedback</option>
                    <option value="comment">Comment</option>
                </select>
            </form>
        </div>

        <div class="form-group">
            <label for="name"><strong>Details:</strong></label> <br>
            <textarea name="comment" form="form" placeholder="Enter text here..." rows="4" cols="100"></textarea> </div>
            <a href="home"><button type="button" class="btn btn-block btn-primary" onclick="showMessage()">Submit</button></a>
        </div>

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>


@endsection

