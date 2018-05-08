@extends('layouts.master')

@section('content')
<div class="col-sm-8">
<form method="post" action="/register">
	@csrf
	<h2>Register</h2>
	<div class="form-group">
    <label for="Name">Name</label>
    <input type="Name" class="form-control" id="name" placeholder="Enter Name" name="name" required>
    </div>
  
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
  </div>
  
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
  </div>
  
  <div class="form-group">
    <label for="password confirmation">Password Confirmation</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-Enter Password" required>
  </div>
  
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Register</button>
	</div>
</form>
@include('layouts.errors')
	
	
</div>


@endsection