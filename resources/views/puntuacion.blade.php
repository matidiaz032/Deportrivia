@extends('layouts.app')
@section('content')
<h1>Tu puntaje fue {{$puntos}}</h1>
<a href="{{route('iniciar')}}">Volver a elegir una categoria</a>
@endsection