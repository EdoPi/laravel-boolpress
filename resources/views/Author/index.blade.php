
    @extends('Templates.layout')

    @section('content')
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Bio</th>
            <th scope="col">Picture</th>
            <th scope="col">WebSite</th>
            <th class="post" scope="col">Posts</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
            <tr>
                <th scope="row">{{$author->id}}</th>
                <td>{{$author->name}}</td>
                <td>{{$author->email}}</td>
                <td>{{$author->authorDetail->bio}}</td>
                <td><img src="{{$author->authorDetail->pic}}" style="height: 100px" alt=""></td>
                <td>{{$author->authorDetail->website}}</td>
                <td>
                    <ul>
                        @foreach ($author->posts as $key => $item)
                        <li style="text-align: left"><a style="font-size: 10px" href="/posts/{{$key+1}}">{{$item->title}}</a></li>
                        @endforeach

                    </ul>
                </td>
                <td></td>
              </tr>
            @endforeach
        </tbody>
      </table>

    @endsection

