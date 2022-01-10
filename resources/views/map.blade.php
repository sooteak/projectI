@extends('user.layout')
@section('content')

<div style="background-color: white">
<div id="image_map" style="text-align: center;margin-top: 90px">
    <map name="map_example">
        <area href="huayuan" id="huayuan" target="_blank" shape=poly coords="90,505, 315,265, 395,327, 168,572">
        <area href="studenthostel" id="studenthostel" target="_blank" shape=poly coords="443,178, 572,43, 640,113, 507,248">
        <area href="ieb" id="ieb" target="_blank" shape=poly coords="650,120, 708,175, 594,301, 532,243">
        <area href="hall" id="hall" target="_blank" shape=poly coords="725,174, 813,250, 686,372, 616,293">
        <area href="main" id="main" target="_blank" shape=poly coords="500,343, 470,389, 706,540, 661,585">
        <area href="medical" id="medical" target="_blank" shape=poly coords="850,423, 880,448, 759,519, 790,549">
    </map>
    <img src="images/suc map.png" alt="image map example" width=975 height=876 usemap="#map_example" style="margin: 50px">
</div>
</div>
@endsection
