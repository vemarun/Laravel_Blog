<a href="posts/{{$post->id}}">
<h2> {{$post->title}} </h2>
</a>
<p class="text-dark">
<a href="#">{{$post->user->name}}</a> on {{$post->created_at->toFormattedDateString() }}</p>

<p> {{$post->body}}</p>
<hr>
