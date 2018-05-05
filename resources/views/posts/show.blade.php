@extends('layouts.master')


@section('content')
<div class="col-sm-8 mt-5">
<h1>{{$post->title}}</h1>
<p class="text-muted">{{$post->updated_at->diffForHumans()}}</p>
<p>{{$post->body}}</p>

<hr>
<div class="comments">
<ul class="list-group">
	@foreach($post->comments as $comment)
	<li class="list-group-item bg-light">
	<strong>
		{{$comment->created_at->diffForHumans()}} :&nbsp;
	</strong>
		{{ $comment->body}}
	</li>
	@endforeach
	</ul>
</div>
<hr>
<div class="card">
<div class="card-body">
	<h4 class="card-title">Leave a comment</h4>
	<div class="card-text">
		<form method="post" action="/posts/{{$post->id}}/comments">
		@csrf
		<div class="form-group">
			<textarea name="body" placeholder="Comment goes here" class="form-control" required></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Add Comment</button>
		</div>
		</form>
	</div>
	</div>
</div>
@include('layouts.errors')
</div>
@endsection