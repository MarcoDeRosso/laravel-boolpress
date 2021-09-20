@extends('layouts.app')

@section('content')
<div class="container ">
<a href="{{route('posts.index')}}"><button type="button"  class="btn btn-secondary"><- Torna indietro</button></a>
   <h1>{{$post->author}}</h1>
   <div class="d-flex justify-content-between align-items-center">
      <p>{{$post->post_text}}</p>
      <img src="{{$post->image}}" />
   </div>
</div>
@endsection

