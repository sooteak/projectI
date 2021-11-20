<?php

namespace App\Http\Controllers;

use App\Events\NewObjectHasRegisteredEvent;
use App\Models\Course;
use App\Models\Faculty;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\File as HttpFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;
use NewCustomerHasRegisteredEvent;

class FacultyController extends Controller
{



    public function index(){

        $faculties = Faculty::all();

        return view('faculty.index',compact('faculties'));
    }

    public function create(){
        $courses = Course::all();
        $faculty = new Faculty();



        return view('faculty.create',compact('courses','faculty'));
    }

    public function store(){

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

    private function validateRequest(){
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

    // private function storeFile($faculty)
    // {
    //     if (request()->has('file')) {
    //         $faculty->update([
    //             'file' => request()->file->store('uploads', 'public'),
    //         ]);

    //         $file = FacadesFile::make(public_path('storage/' . $faculty->file));
    //         $file->save();
    //     }
    // }


}
