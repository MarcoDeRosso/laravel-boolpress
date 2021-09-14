@extends('layouts.app')

@section('content')
<div class="container ">
   <h1>{{$post->author}}</h1>
   <div class="d-flex justify-content-between align-items-center">
      <p>{{$post->post_text}}</p>
      <img src="{{$post->image}}" />
   </div>
   <a href="{{route('posts.index')}}"><- Torna indietro</a>
</div>
@endsection
