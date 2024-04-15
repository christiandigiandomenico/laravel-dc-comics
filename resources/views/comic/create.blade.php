@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1>Aggiungi un fumetto</h1>


    {{-- nel form scriviamo il nome della rotta come action --}}
    {{-- indichiamo anche il metodo POST per la richiesta --}}
    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Nome</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" required>
          @error('title')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>
            @error('description')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="src" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="src" name="src" value="{{old('thumb')}}">
            @error('thumb')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}">
            @error('price')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series')}}" required>
            @error('series')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di Vendita</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
            @error('sale_date')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type')}}">
            @error('type')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" value="{{old('artists')}}">
            @error('artists')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" value="{{old('writers')}}">
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