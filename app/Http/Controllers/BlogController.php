<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use Auth;

class BlogController extends Controller
{
    public function home(){

    	$blogPosts = BlogPost::all();
    	$with  = [
    		'posts' => $blogPosts
    	];
    	return view('blog')->with($with);

    }

    public function create(Request $request){

		$post = new BlogPost; 
		//dd(auth()->user()->id);
    	$post->user_id = auth()->user()->id;
    	$post->title = $request->title;
    	$post->body = $request->body; 
    	$post->save(); 
    	//dd($request);
    	return redirect('/blog');
    }
}
