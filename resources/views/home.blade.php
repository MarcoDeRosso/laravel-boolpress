@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
    @foreach($allPosts as $post)
            <div class="card col-md-3" style="width: 18rem;">
                <img class="card-img-top" src="{{ $post->image }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->author }}</h5>
                    <p class="card-text">{{ $post->post_text }}</p>
                    @if(Auth::check())
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-success">Edit</a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
