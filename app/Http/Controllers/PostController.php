<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
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
        $users = User::get()->sortByDesc('created_at' )->take(3);
        $posts = Post::get()->sortByDesc('created_at'); // collection
        return view('index', [
            'posts' => $posts,
            'users' => $users]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'post' => 'required'
        ]);

        $request->user()->posts()->create($request->only('post'));
        return back();


//        $request->user()->posts()->create([
//            'post' => $request->post
//        ]);
//        auth()->user()->posts()->create();
//        Post::create([
//            'user_id' => auth()->user()->id,
//            'post' => $request->post
//        ]);
    }

    public function destroy(Post $post){

//        if (!$post->ownedBy(auth()->user)){
//            dd('no');
//        }
        $this->authorize('delete', $post);
        $post->delete();

        return back();
    }
}
