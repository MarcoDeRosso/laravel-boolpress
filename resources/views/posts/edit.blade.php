@extends('layouts.app')

@section('content')
<div class="container posts-container">
<a href="{{route('posts.index')}}"><button type="button"  class="btn btn-secondary"><- Torna indietro</button></a>
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="d-flex justify-content-between align-items-center" action="{{route('posts.update', $post)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="author">Autore :</label>
        <input type="text" name="author" id="author" value="{{$post->author}}">
        <label for="post_text">Post :</label>
        <textarea  name="post_text" id="post_text">{{$post->post_text}}</textarea>
        <label for="image">Immagine :</label>
        <input type="text" name="image" id="image" value="{{$post->image}}">
        <label for="date">Data :</label>
        <input type="date" name="date" id="date" value="{{$post->date}}">
        <input class="btn btn-primary" type="submit" value="Invia">
    </form>
    
</div>
@endsection