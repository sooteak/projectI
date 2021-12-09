<?php

namespace App\Http\Controllers;

use App\Events\NewObjectHasRegisteredEvent;
use Illuminate\Http\Request;
use App\Models\Club;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;


class ClubController extends Controller
{



    public function index(){

        $clubs = Club::all();

        return view('club.index',compact('clubs'));
    }

    public function create(){

        $club = new Club();

        return view('club.create',compact('club'));

    }

    public function store(){

        // $data =  request()->validate([
        //     'name'=>'required',
        //     'description'=> 'required',
        //     'member' =>'required',

        // ]);

        // Club::create($data);
        // return back();
        $club = Club::create($this->validateRequest());

        $this->storeImage($club);

        event(new NewObjectHasRegisteredEvent($club));
        return redirect('clubs');
    }

    public function show(Club $club){

        return view('club.show',compact('club'));
    }

    public function edit(Club $club){

        return view('club.edit',compact('club'));
    }
    public function update(Club $club){
        $club->update($this->validateRequest());
        $this->storeImage($club);

        return redirect('clubs/' .$club->id);
    }
    public function destroy(Club $club){
        $club->delete();

        return redirect('clubs');
    }

    // public function view(){
    //     $clubs = Club::all();
    //     return view('club.view',compact('clubs'));
    // }


    private function validateRequest(){
        return request()->validate([
            'name'=>'required',
            'description'=> 'required',
            'member' =>'required',
            'image' => 'sometimes|file|image|max:5000'
        ]);
    }

    private function storeImage($club){
        if(request()->has('image')){
            $club->update([
                'image' => request()->image->store('uploads','public'),
                // dd($club)
            ]);

            ;
        }

    }




}
