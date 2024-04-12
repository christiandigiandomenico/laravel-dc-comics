@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="mb-4">Modifica il fumetto</h1>

    {{-- @dd($pasta) --}}

    <form action="{{route('comic.update', comic->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Nome</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description" rows="4">{{$comic->description}}</textarea>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="type" name="type" value="{{$comic->thumb}}">
        </div>

        <div class="mb-3">
            <label for="src" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="src" name="src" value="{{$comic->price}}">
        </div>

        <div class="mb-3">
            <label for="cooking-time" class="form-label">Serie</label>
            <input type="text" class="form-control" id="cooking-time" name="cooking-time" value="{{$comic->series}}">
        </div>

        <div class="mb-3">
            <label for="weight" class="form-label">Data di Pubblicazione</label>
            <input type="text" class="form-control" id="weight" name="weight" value="{{$comic->sale_date}}">
        </div>

        <div class="mb-3">
            <label for="cooking-time" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="cooking-time" name="cooking-time" value="{{$comic->type}}">
        </div>

        <div class="mb-3">
            <label for="cooking-time" class="form-label">Artisti</label>
            <input type="text" class="form-control" id="cooking-time" name="cooking-time" value="{{$comic->artists}}">
        </div>

        <div class="mb-3">
            <label for="cooking-time" class="form-label">Scrittori</label>
            <input type="text" class="form-control" id="cooking-time" name="cooking-time" value="{{$comic->writers}}">
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>
</div>

@endsection