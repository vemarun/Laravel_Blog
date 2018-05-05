<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    //
	protected $table='posts';
	protected $fillable=['title','body'];
	
	public function comments(){
		
		return $this->hasMany('App\Comment');
	}
}
