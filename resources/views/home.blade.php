@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@foreach ($filteredPosts as $post)
    <h2>{{$post->author}}</h2>
    <img src="{{$post->image}}" alt="">
    <p>{{$post->post_text}}</p>
    <span>{{$post->date}}</span>
@endforeach
@endsection
