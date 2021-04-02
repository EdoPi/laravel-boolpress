@extends('Templates.layout')

    @section('content')
        <div class="my-container">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Author</th>
                    <th scope="col">Tags</th>
                    <th scope="col">Pic</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                  <tr>
                      <th scope="row">{{$post->id}}</th>
                      <td>{{$post->title}}</td>
                      <td><span style="widht: 50px">{{$post->text}}</span></td>
                      <td>{{$post->author->name}}</td>
                      <td>
                          @foreach ($post->tags as $tag)
                              {{$tag->tag_name}}
                          @endforeach
                      </td>
                      <td><img src="{{$post->img}}" alt="" style="height:50px"></td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    @endsection
