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

        $this->storeImage($faculty);
        $this->storeFile($faculty);

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
        $this->storeImage($faculty);
        $this->storeFile($faculty);


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
            'curriculum_vitae' => 'sometimes|file',
            'image' => 'sometimes|file|image|max:5000',
        ]);
    }



    private function storeImage($faculty){
        if(request()->has('image')){
            $faculty->update([
                'image' =>request()->image->store('uploads','public'),
            ]);
        }

    }

    // private function storeAll($faculty){

    //     if(request()->has('faculty-image')!=''&& request()->has('curriculum_vitae')!=''){
    //         $faculty->update([
    //             'image' =>request()->image->store('uploads','public'),
    //             'curriculum_vitae' =>request()->curriculum_vitae->store('uploads','public'),
    //         ]);
    //     }

    // }

    private function storeFile($faculty){
        if(request()->has('curriculum_vitae')){
            $faculty->update([
                'curriculum_vitae' =>request()->file('curriculum_vitae')->move('curriculum_vitae',request()->file('curriculum_vitae')->getClientOriginalName()),
            ]);
        }

    }

}
