<a href="posts/{{$post->id}}">
<h2> {{$post->title}} </h2>
</a>
<p class="text-dark">{{$post->created_at->diffForHumans() }}</p>
<p> {{$post->body}}</p>
<hr>
