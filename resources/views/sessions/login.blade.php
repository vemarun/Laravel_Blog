@extends('layouts.master')

@section('content')
<div class="col-sm-8">
<form method="post" action="/login_check">
	@csrf
	<h2>Login</h2>

  
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
  </div>
  
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
  </div>
  
  
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Login</button>
	</div>
</form>
@include('layouts.errors')
	
	
</div>

<h3>Not registered ? </h3><a href="/register">Register here</a>


@endsection