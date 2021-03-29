@extends('Templates.layout')

@section('content')
<div class="card" style="width: 800px; margin: 0 auto;">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->text}}</p>
      <div><span>Atuhor: <b>{{$post->author->name}}</b></span></div>
      <hr>
      <hr>
      <h4 style="text-align: center; margin-bottom: 25px;">Comments:</h4>
      @foreach ($post->comments as $comment)
          <div style="width: 500px; margin:0 auto">{{$comment->text}}</div>
          <hr>
      @endforeach
    </div>
</div>

@endsection
