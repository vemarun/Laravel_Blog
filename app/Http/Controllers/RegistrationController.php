<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
	
	
    public function create(){
		if(auth()->check()){
			return redirect('/');
		}
		return view('sessions.register');
		
	}
	
	public function store(){
		
		// 1. validate form data
		
		$this->validate(request(),[
		'name'=>'required',
		'email'=>'required|unique:users|email',
		'password'=>'required|confirmed'
		]);
		
		// 2. Insert data into users table
		
		$user=User::create([
						'name' => request('name'),
						'email' => request('email'),
						'password' => bcrypt(request('password'))
					]);
		
		// 3. Sign in user
		auth()->login($user);
		
		// 4. redirect user to user's dashbboard
		return redirect()->home();
		
	}
}
