@extends('layouts.app')

@section('content')
<div class="container">
<div class="d-flex justify-content-center">
  {!! $allPosts->links() !!}
</div>
    <div class="row ">
    @foreach($allPosts as $post)
            <div class="card col-md-3" style="width: 18rem;">
                <img class="card-img-top" src="{{ $post->image }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->author }}</h5>
                    <p class="card-text">{{ $post->post_text }}</p>
                    @if(Auth::check())
                        <a href="{{route('posts.show',['post'=>$post->id])}}"><button type="button" class="btn btn-primary"><i class="bi bi-zoom-in"></i></button></a>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning"><i class="bi bi-pencil"></i></button></a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
