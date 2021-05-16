<?php

namespace App\Http\Controllers;

use App\Models\Post;
use http\Env\Response;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    public function store(Post $post, Request $request){
       // dd($post->likedBy($request->user()));
        if($post->likedBy($request->user())) {
            return Response(null, 409);
        }

        $post->likes()->create([
            'user_id' => $request->user()->id
        ]);

        return back();
    }
}
