@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Tu puntaje fue {{$puntos}}</h1>
    <div>
      <a href="{{route('iniciar')}}"><button type="button" class="btn btn-warning">Volver a elegir una categoria</button></a>
    </div>
</div>
@endsection