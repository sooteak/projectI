@extends('layout')
@section('content')


<div style="background-color: white">
<div id="image_map" style="text-align: center;">     
    <map name="map_example">        
        <area href="huayuan" id="huayuan" target="_blank" shape=poly coords="90,505, 315,265, 395,327, 168,572"> 
        <area href="studenthostel" id="studenthostel" target="_blank" shape=poly coords="443,178, 572,43, 640,113, 507,248">     
        <area href="ganen" id="ganen" target="_blank" shape=poly coords="650,120, 708,175, 594,301, 532,243"> 
        <area href="hall" id="hall" target="_blank" shape=poly coords="725,174, 813,250, 686,372, 616,293"> 
        <area href="main" id="main" target="_blank" shape=poly coords="500,343, 470,389, 706,540, 661,585"> 
        <area href="hospital" id="hospital" target="_blank" shape=poly coords="850,423, 880,448, 759,519, 790,549">  
        <area href="lecturehostel" id="lecturehostel" target="_blank" shape=poly coords="743,550, 779,549, 686,664, 657,631"> 
    </map>     
    <img src="image/suc map.png" alt="image map example" width=975 height=876 usemap="#map_example" style="margin: 50px">
</div>  
</div>
@endsection
