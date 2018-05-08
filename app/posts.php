<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class posts extends Model
{
    //
	protected $table='posts';
	protected $fillable=['title','body','user_id'];
	
	public function comments(){
		
		return $this->hasMany('App\Comment');
	}
	
	public function user() 
	{
		return $this->belongsTo('App\User');
	}
	
	public function scopeFilter($query, $filters)
	{
		if (isset($filters['month'])){
		if($month=$filters['month']){
			$query->whereMonth('created_at',Carbon::parse($month)->month);
		}
		}
		
		if (isset($filters['year'])){
		if($year=$filters['year']){
			$query->whereYear('created_at',$year);
		}
		}
	}
}
