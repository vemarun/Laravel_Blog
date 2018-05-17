@extends('layouts.master')
@section('content')
 <img src="images/main.jpeg" width="100%" height="100%" class="mt-5" alt="main">
  <div class="row mt-5">
		<div class="col-sm-8">
			<h3>Recent Posts</h3><hr>
			@foreach ($posts as $post)
				@include('posts.post')
			@endforeach
			{{$posts->links()}}
		</div>
		
		<div class="col-sm-4">
			<h3>Archives</h3><hr>
			<ol class="list-unstyled">
			@foreach($archives as $archive)
			<li>
			<a href="/?month={{$archive['month']}}&year={{$archive['year']}}">{{$archive['month'].' '.$archive['year']}}</a>
			</li>
			@endforeach
			</ol>
			</div>
	</div>
   
@endsection
