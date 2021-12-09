<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Faculty;
use App\Models\Course;

class ViewController extends Controller
{
    public function viewClub(){
        $clubs = Club::all();
        return view('club.view',compact('clubs'));
    }

    public function viewCourse(){
        $courses = Course::all();
        return view('course.view',compact('courses'));

    }
    public function viewFaculty(){
        $faculties = Faculty::all();
        return view('faculty.view',compact('faculties'));

    }
}
