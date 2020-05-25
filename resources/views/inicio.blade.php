@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Elija una categoria</h1>
    <ul>
@forelse($categorias as $categoria)    
        <li class="container">
            <a href="{{route('jugar',['id' => $categoria->id])}}">{{$categoria->nombre}}
            <img src="../images/futbol2.jpg" alt="{{$categoria->nombre}}">
            </a>
        </li>
@empty
        <li>No hay categorias que mostrar</li>
@endforelse
    </ul>
</div>    
@endsection