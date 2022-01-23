<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Faculty;
use App\Models\Course;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function viewClub(){
        // $clubs = Club::all();
        $category01 = Club::where('category',0)->get();
        $category02 = Club::where('category',1)->get();
        $category03 = Club::where('category',2)->get();
        $category04 = Club::where('category',3)->get();
        $category05 = Club::where('category',4)->get();
        $category06 = Club::where('category',5)->get();
        return view('club.view',[
            'category01' => $category01,
            'category02' => $category02,
            'category03' => $category03,
            'category04' => $category04,
            'category05' => $category05,
            'category06' => $category06,
        ]);
        // return view('club.view',compact('clubs'));
    }

    public function viewCourse(){
        $course = Course::all();
        // $course=DB::table('courses')->paginate(9);//apply SQL select * from categories
        // $course = Course::latest()->take(3)->get();

        Return view('course.view')->with('course',$course);

        // return view('',compact(''));

    }
    public function viewFaculty(){
        $faculties = Faculty::all();
        return view('faculty.view',compact('faculties'));

    }
}
