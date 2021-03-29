@extends('Templates.layout')

@section('content')
<div class="card" style="width: 500px; margin: 0 auto;">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->text}}</p>
      <h5>Author: {{$post->author->name}}</h4>
      <hr>
      <hr>
      <h4>Comments:</h4>
      @foreach ($post->comments as $comment)
          <div>{{$comment->text}}</div>
          <hr>
      @endforeach
    </div>
</div>

@endsection
