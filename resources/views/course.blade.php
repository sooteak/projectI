@extends('layout')
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="/jquery/jquery-1.8.3.min.js"></script>
<script>
$(document).ready(function(){
	var w = 400;
	$(".faculty_arrow_right").click(function(){
		$(".faculty_list").stop().animate({scrollLeft:$(".faculty_list").scrollLeft()+ w},w*3,function(){});
	});
	$(".faculty_arrow_left").click(function(){
		$(".faculty_list").stop().animate({scrollLeft:$(".faculty_list").scrollLeft()- w},w*3,function(){});
	});
});

</script>
<style type="text/css">
body {
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
}
.faculty_slider {
	position: relative;
	padding-right: 40px;
	padding-left: 40px;
	font-size: 14px;
	font-family: Tahoma, Geneva, sans-serif;
	line-height: 20px;
}
.faculty_arrow_left {
	position: absolute;
	top: 150px;
	left: 0px;
	cursor: pointer;
}
.faculty_arrow_right {
	position: absolute;
	top: 150px;
	right: 0px;
	cursor: pointer;
}
.faculty_list {
	position: relative;
	overflow-x: hidden;
	white-space: nowrap;
}
.faculty {
	display: inline-block;
	overflow: hidden;
	margin-right: 10px;
	width: 220px;
	height: 396px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	/* background-color: #E5E5E5; */
    background-color: 	#b0c4de;
    -webkit-animation: random 10s infinite;
    animation: random 30s infinite;
	white-space: normal;

}
.card:hover{
    transform: rotateY(180deg);
}

.faculty_name {
	padding: 10px;
	height: 30px;
	font-weight: bold;
	font-size: 12px;
	line-height: 16px;
}
.faculty_introduction {
	padding-top: 10px;
	padding-right: 15px;
	padding-bottom: 10px;
	padding-left: 15px;
	height: 130px;
	font-size: 12px;
	line-height: 16px;
}
.faculty_link {
	position: relative;
	padding: 10px;
	height: 30px;
	color: #FFF;
}
.faculty_link a:link {
	margin-bottom: 0px;
	color: #FFF;
	text-decoration: none;
}
.faculty_link a:visited {
	color: #FFF;
	text-decoration: none;
}
.faculty_link a:hover {
	color: #CEFFFF;
	text-decoration: none;
}
.front{
    position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 10px;

}
.card{
    position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 10px;
        transform-style: preserve-3d;
        transition: all 2.5s ease;
}
.back{
    position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 10px;
        backface-visibility: hidden;
        overflow: hidden;
        background: #fafafa;
        color: #333;
        text-align: center;
        transform: rotateY(180deg);
}
/* .img{
    width: 100%;
} */
@keyframes  random {
    25% { background-color: #e6e6fa; }
    75% { background-color: #f0fff0; }
}

.title{
    color: #111;
    font-family: 'Helvetica Neue', sans-serif;
    font-size: 3;
    color: #d54d7b;
    font-family: "Great Vibes", cursive;
    font-size: 25px; line-height: 160px; font-weight: normal;
    margin-bottom: 0px;
    margin-top: 90px;
    text-align: center;
    text-shadow: 0 1px 1px #fff;
}
</style>
</head>

<body>
<div class="faculty_slider">
  <div class="faculty_arrow_left"><img src="/image/arrow_left.png" width="30" height="60" /></div>
  <div class="faculty_arrow_right"><img src="/image/arrow_right.png" width="30" height="60" /></div>
  <div class="faculty_list" >
  @foreach($courses as $course)
    <div class="faculty">
        <div class="card">
            <div class="front">
                <div class="title">{{$course->title}}</div>
            </div>
            <div class="back">
            <div class="faculty_image"><img src="{{asset('image/')}}/{{$course->image}}" width="220" height="146" /></div>
                <div class="faculty_name">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="38" valign="top"><img src="{{asset('icons/')}}/{{$course->icon}}" width="30" height="30" /></td>
                            <td width="153">{{$course->title}}</td>
                        </tr>
                    </table>
                </div>
                <div class="faculty_introduction"> {{$course->description}} </div>
                <div class="faculty_link" style="background-color: #0099FF">
                    <!-- <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td  text-align="center"><a href="https://www.southern.edu.my/fbm/" target="_blank">了解详情>></a></td>
                        </tr>
                    </table> -->
                    <div  text-align="center"><a href="{{$course->link}}" target="_blank">了解详情>></a></div>
                </div>
            </div>
        </div>
    </div>

    @endforeach
  </div>
</div>
</body>
</html>
@endsection








