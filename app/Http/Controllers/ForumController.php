<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function list(){
        $forum = Forum::all();

        return view('forum',[
            'forum' => $forum,
        ]);
    }

    public function store(){
        $forum = new Forum();
        $forum->name = request('name');
        $forum->question = request('question');
        $forum->save();

        return back();
    }
}
