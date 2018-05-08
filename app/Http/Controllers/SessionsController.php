<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create(){
		if(auth()->check()){
			return redirect('/');
		}
		return view('sessions.login');
	}
	
	 public function destroy(){
		
		 auth()->logout();
		 
		 return redirect()->home();
	}
	
	 public function login_check(){
		 
		 $this->validate(request(),[
			 'email'=>'required|email',
			 'password'=>'required'
		 ]);
		 
		 if(! auth()->attempt(request(['email','password']))){
			 return back()->withErrors([
				 'message'=>'Incorrect login details. Please try again.'
			 ]);
		 }
		 
		 return redirect()->home();
	}
}
