<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller{
    public function index(){
        $posts=Post::all();
        return response()->json($posts);
    }

    public function store(Request $request){

        $post=Post::create($request->all());
        return response()->json([
                'message'=>"regiistro insertasdo corectamente",
                'post'=>$post
        ],200);

    }

    public function update(Request $request,Post $post){

        $post->update($request->all());
        return response()->json([
            'message'=>"regiistro insertasdo corectamente",
            'post'=>$post

        ],200);



    }

    public function destroy(Post $post){
        $post->delete();
        return response()->json([
            'message'=>"regiistro eliminado corectamente",
            'post'=>$post

        ],200);


    }

    public function show(Post $post){
        return response()->json($post);
    }

    public function showPost(Post $post){
        $ultimas=Post::latest('id')->take(5)->get();
        return view('livewire.post-show', compact('post','ultimas'));
    }
}
