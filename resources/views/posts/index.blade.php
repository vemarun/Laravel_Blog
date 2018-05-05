@extends('layouts.master')
@section('content')
 <img src="images/main.jpeg" width="100%" height="100%" class="mt-5">
  <div class="row mt-5">
		<div class="col-sm-8">
			<h3>Recent Posts</h3><hr>
			@foreach ($posts as $post)
				@include('posts.post')
			@endforeach
		</div>
		<div class="col-sm-4">
			<h3>Archives</h3>
			</div>
	</div>
   
@endsection
