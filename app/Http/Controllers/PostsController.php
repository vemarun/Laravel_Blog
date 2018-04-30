<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;

class PostsController extends Controller
{
    
	public function index(){
	
		$posts = Posts::latest()->get();
		
		return view('posts.index',compact('posts'));
}
	public function create(){
	
		
		
		return view('posts.create');
}
	
	public function show($id){
	
		$post = Posts::find($id);
		//return($posts);
		
		return view('posts.show',compact('post'));
}
	
	public function store(){
	
		//$post= new Posts;
		//$post->title=request('title');
		//$post->body=request('body');
		
		//$post->save();
		$this ->validate(request(),[
			'title' =>'required | min:8',
			'body'=>'required'
		]);
		Posts::create([
			'title'=> request('title'),
			'body'=> request('body')
		]);
		
		return redirect('/');
		
}
}
