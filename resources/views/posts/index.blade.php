@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Author</th>
        <th scope="col">Image</th>
        <th scope="col">Post</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
          @foreach ($allPosts as $post)
              <tr>
                  <th scope="row">{{$post->id}}</th>
                  <td>{{$post->author}}</td>
                  <td><img src="{{$post->image}}" alt="image of {{$post->author}}"></td>
                  <td>{{$post->post_text}}</td>
                  <td>{{$post->date}}</td>
              </tr>
          @endforeach
    </tbody>
  </table>
</div>
@endsection