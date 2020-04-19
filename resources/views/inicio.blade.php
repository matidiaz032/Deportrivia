@extends('layouts.app')
@section('content')
    <h1>Elija una categoria</h1>
    <ul>
@forelse($categorias as $categoria)
   <li> <a href="{{route('jugar',['id' => $categoria->id])}}">{{$categoria->nombre}}</a></li>
@empty
    <li>No hay categorias que mostrar</li>
@endforelse
    </ul>
@endsection