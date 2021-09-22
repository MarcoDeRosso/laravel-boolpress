@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  {!! $allPosts->links() !!}
</div>

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
                    <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$post->id}}"><i class="bi bi-trash"></i></button>
                    <div class="modal fade" id="exampleModal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Attenzione!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Sei sicuro di voler eliminare l'elemento?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Torna indietro</button>
                            <form action="{{route('posts.destroy', $post)}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" data-target="#exampleModal{{$post->id}}" class="btn btn-danger">Elimina</button>
                            </form>
                            </div>
                          </div>
                        </div>
                      </div>
                  </td>
              </tr>
          @endforeach
    </tbody>
  </table>
</div>
@endsection