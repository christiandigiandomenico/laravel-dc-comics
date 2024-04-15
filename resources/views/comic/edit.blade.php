@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="mb-4">Modifica il fumetto</h1>

    {{-- @dd($pasta) --}}

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Nome</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $comic->title }}" required>
          @error('title')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description') ?? $comic->description}}</textarea>
            @error('description')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="type" name="type" value="{{ old('thumb') ?? $comic->thumb}}">
            @error('thumb')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="src" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="src" name="src" value="{{ old('price') ?? $comic->price}}">
            @error('price')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="cooking-time" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="cooking-time" name="cooking-time" value="{{ old('series') ?? $comic->series}}">
            @error('series')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="weight" class="form-label">Data di Pubblicazione</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="weight" name="weight" value="{{ old('sale_date') ?? $comic->sale_date}}">
            @error('sale_date')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="cooking-time" class="form-label">Tipologia</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="cooking-time" name="cooking-time" value="{{ old('type') ?? $comic->type}}" required>
            @error('type')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="cooking-time" class="form-label">Artisti</label>
            <input type="text" class="form-control @error('artists') is-invalid @enderror" id="cooking-time" name="cooking-time" value="{{ old('artists') ?? $comic->artists}}">
            @error('artists')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="cooking-time" class="form-label">Scrittori</label>
            <input type="text" class="form-control @error('writers') is-invalid @enderror" id="cooking-time" name="cooking-time" value="{{ old('writers') ?? $comic->writers}}">
            @error('writers')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>
</div>

@endsection