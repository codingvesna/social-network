<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index() {
        //dd(auth()->user());
        // dd(auth()->user()->posts()) // HasMany
       // dd(auth()->user()->posts); //Collection
        return view('index');
    }

    public function store(Request $request){
        $this->validate($request, [
            'post' => 'required'
        ]);

//        $request->user()->posts()->create([
//            'post' => $request->post
//        ]);
        $request->user()->posts()->create($request->only('post'));
        return back();

//        auth()->user()->posts()->create();
//        Post::create([
//            'user_id' => auth()->user()->id,
//            'post' => $request->post
//        ]);
    }
}
