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
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <label for="author">Autore :</label>
        <input type="text" name="author" id="author">
        <label for="post_text">Post :</label>
        <textarea  name="post_text" id="post_text"></textarea>
        <label for="image">Immagine :</label>
        <input type="text" name="image" id="image">
        <label for="date">Data :</label>
        <input type="date" name="date" id="date">
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="category_id">Options</label>
                </div>
                <select class="custom-select" id="category_id" name="category_id">
                    <option selected>Choose...</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Invia">
    </form>
    
</div>
@endsection