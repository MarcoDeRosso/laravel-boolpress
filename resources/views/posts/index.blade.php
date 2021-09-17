@extends('layouts.app')

@section('content')
<div class="container posts-container">
<a href="{{route('posts.create')}}"><button type="button"  class="btn btn-success">Crea un nuovo Post!</button></a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Author</th>
        <th scope="col">Image</th>
        <th scope="col">Post</th>
        <th scope="col">Date</th>
        <th scope="col">Actions</th>
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
                  <td><a href="{{route('posts.show',['post'=>$post->id])}}"><button type="button" class="btn btn-primary"><i class="bi bi-zoom-in"></i></button></a>
                    <a href="{{route('posts.edit', $post)}}"><button type="button" class="btn btn-warning"><i class="bi bi-pencil"></i></button></a>
                    <form action="{{route('posts.destroy', $post)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                  </td>
              </tr>
          @endforeach
    </tbody>
  </table>
</div>
@endsection