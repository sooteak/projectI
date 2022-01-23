<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Faculty;
use Illuminate\Http\Request;
use App\Events\NewCustomerHasRegisteredEvent;
use App\Events\NewObjectHasRegisteredEvent;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{


    public function index(){

        $courses = Course::all();


        return view('course.index',compact('courses'));
    }

    public function create(){

        $course = new Course();

        return view('course.create',compact('course'));

    }

    public function store(){

        // $data =  request()->validate([
        //     'name'=>'required',
        //     'prerequisities' => 'required',
        //     'description' => 'required',


        // ]);

        $course = Course::create($this->validateRequest());

        $this->storeImage($course);

        event(new NewObjectHasRegisteredEvent($course));
        return redirect('courses');
    }
    public function show(Course $course){


        return view('course.show',compact('course'));
    }
    public function edit(Course $course){
        $courses = Course::all();
        return view('course.edit',compact('course','courses'));
    }

    public function update(Course $course){
        $course->update($this->validateRequest());
        $this->storeImage($course);

        return redirect('courses/' .$course->id);
    }
    public function destroy(Course $course){
        $course->delete();

        return redirect('courses');
    }
    private function validateRequest(){
        return request()->validate([

            'name'=>'required',
            'prerequisities' => 'required',
            'description' => 'required',
            'image' => 'sometimes|file|image|max:5000',
        ]);
    }

    private function storeImage($course){
        if(request()->has('image')){
            $course->update([
                'image' =>request()->image->store('uploads','public'),
            ]);

            $image = Image::make(public_path('storage/' .$course->image ));
            $image->save();

        }
    }
}
