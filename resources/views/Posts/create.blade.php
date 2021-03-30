@extends('Templates.layout')

@section('content')
<div class="myform-container">
    <form class="needs-validation" action="{{route('posts.store')}}" method="post" novalidate>
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="author_id">Author</label>
            <select class="form-control" id="author_id" name="author_id">
                @foreach ($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>
                @endforeach
            </select>
          </div>
        <div class="form-group my-form">
            <label for="title">Title</label>
            <input  class="form-control" type="text" name="title" placeholder="Nome" value="" >
        </div>
        <div class="form-group">
            <label for="text">Body</label>
            <textarea class="form-control" id="text" name="text" rows="6"></textarea>
        </div>
        <div class="form-group">
            <label for="tags[]">Tags</label>
            <select name="tags[]" multiple class="form-control" id="tags[]">
              @foreach ($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
              @endforeach
            </select>
          </div>
        <button class="btn btn-primary" type="submit" value="Invia">Invia</button>
    </form>
</div>
@endsection
