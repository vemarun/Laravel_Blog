<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable=['body','posts_id','user_id'];
	
    public function posts() 
	{
		return $this->belongsTo('App\posts');
	}
	
	public function user() 
	{
		return $this->belongsTo('App\User');
	}
}
