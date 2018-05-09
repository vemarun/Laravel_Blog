<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;

class PostsController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('auth')->except(['index','show']);
	}
    
	public function index(){
		
		$archives=posts::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
		->groupBy('year','month')
		->orderByRaw('min(created_at) desc')
		->get()
		->toArray();
	
		$posts = Posts::take(5)->latest()
			->filter(request(['month','year']))
			->get();
		
		return view('posts.index',compact('posts','archives'));
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
			'body'=> request('body'),
			'user_id'=> auth()->user()->id
		]);
		
		return redirect('/');
		
}
}
