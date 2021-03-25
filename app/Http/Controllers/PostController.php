<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index() 
    {
        return view('posts.index');
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'title' => 'required|max:25',
            'body' => 'required|min:5|max:255'
        ]);

        $request->user()->posts()->create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return back()->with('message', 'Your blogpost has been saved successfully');

    }



}
