<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    public function index(){

        $clubs = Club::all();

        return view('club.index',compact('clubs'));
    }

    public function store(){

        $data =  request()->validate([
            'name'=>'required'

        ]);

        Club::create($data);
        return back();
    }

}
