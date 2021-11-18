<?php

namespace App\Http\Controllers;

use App\Events\NewObjectHasRegisteredEvent;
use App\Models\Course;
use App\Models\Faculty;
use Illuminate\Http\Request;
use NewCustomerHasRegisteredEvent;

class FacultyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $faculties = Faculty::all();

        return view('faculty.index',compact('faculties'));
    }

    public function create(){
        $courses = Course::all();
        $faculty = Faculty::all();



        return view('faculty.create',compact('courses','faculty'));
    }

    public function store(){

        // $data =  request()->validate([
        //     'name'=>'required',
        //     'email'=>'required|email'

        // ]);

        // $faculty= new Faculty();
        // $faculty->name = request('name');
        // $faculty->email = request('email');
        // $faculty->save();

        // $data =  request()->validate([
        //     'name'=>'required',
        //     'email'=>'required|email',
        //     'course_id' => 'required',
        //     'department' => 'required',
        //     'position'=> 'required',
        //     'ext_number' => 'required|digits:10',
        //     'curriculum_vitae' => 'required',


        // ]);
        $faculty = Faculty::create($this->validateRequest());

        event(new NewObjectHasRegisteredEvent($faculty));
        return redirect('faculties');



        return redirect('faculties');
    }

    public function show(Faculty $faculty){



        return view('faculty.show',compact('faculty'));
    }

    public function edit(Faculty $faculty){

        $courses = Course::all();
        return view('faculty.edit',compact('faculty','courses'));
    }
    public function update(Faculty $faculty){
        $faculty->update($this->validateRequest());

        return redirect('faculties/' .$faculty->id);
    }
    public function destroy(Faculty $faculty){
        $faculty->delete();

        return redirect('faculties');
    }

    public function validateRequest(){
        return request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'course_id' => 'required',
            'department' => 'required',
            'position'=> 'required',
            'ext_number' => 'required|digits:10',
            'curriculum_vitae' => 'required',
        ]);
    }
}
