@extends('layouts.master')


@section('content')
<h2>Create a post</h2>
<hr>
@include('layouts.errors')
<form method="post" action="/posts">
 @csrf

  <div class="form-group">
    <label for="title">Title</label>
    <input type="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter title" name="title">
   
  </div>
  
  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body"></textarea>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Publish</button>
</form>


@endsection