<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Created</title>
</head>
<body>
  <h1>Ciao Admin!</h1>
  <span>Hai Creato un nuovo post con l'id {{$post->id}}!</span>
  <div>
    <h2>{{$post->title}}</h2>
    <p>{{$post->text}}</p>
    <div><img src="{{$post->img}}" alt=""></div>
    <h3>{{$post->author->name}}</h3>
    <p>
        @foreach ($post->tags as $tag)
            <i>{{$tag->tag_name}}</i>
        @endforeach
    </p>
  </div>
</body>
</html>
