@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-sm-12 text-center">
<h1>Tu puntaje fue {{$puntos}}</h1>
<a href="{{route('iniciar')}}" style="color:black">Volver a elegir una categoria</a>
@endsection
