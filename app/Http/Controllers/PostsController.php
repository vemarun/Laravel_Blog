<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;

class PostsController extends Controller
{
    //
	public function index(){
	
		$posts = Posts::all();
		
		return view('posts.index',compact('posts'));
}
}
