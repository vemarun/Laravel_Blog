<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\posts;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Posts $post ){
		
			$this ->validate(request(),[
			'body'=>'required'
		]);
		
		Comment::create([
			'body'=> request('body'),
			'posts_id'=>$post->id
		]);
		
		return back();
	}
}
