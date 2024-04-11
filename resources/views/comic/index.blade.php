@extends('layouts.app')

@section('content')

<h1>DC Comics</h1>
  
<div class="container">
@foreach ($comics as $comic)
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$comic->title}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{$comic->series}}</h6>
      <p class="card-text">{{$comic->description}}</p>
      <a href="{{route('comics.show', $comic->id)}}" class="card-link">Visualizza</a>
    </div>
  </div>
@endforeach
</div>

<div class="button-align">
<button class="btn btn-primary button-element"><a href="{{route('comics.create')}}">Aggiungi un fumetto</a></button>
</div>

@endsection