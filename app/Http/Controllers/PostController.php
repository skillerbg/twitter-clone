<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
   public function create(){
       return view('post');
   }

   public function store(Request $request){

        $request->validate([
            'content' => 'required'
        ]);
        $post= Post::create([
            'content'=> $request->input('content'),
            'author_id' => Auth::user()->id
        ]);
      dd($post);

        return redirect ('/post');

   }
}
