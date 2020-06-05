@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="display-4 mb-4">Elija una categoria</h1>
    <ul>
@forelse($categorias as $categoria)
        <li class="">
          <div class="card-img">
            <a href="{{route('jugar',['id' => $categoria->id])}}" class="btn btn-primary">{{$categoria->nombre}}
              <img class="card-img" src="../images/categorias/futbol2.jpg" alt="{{$categoria->nombre}}">
            </a>
          </div>
        </li>
        <li class="">
          <div class="card-img">
            <a href="{{route('jugar',['id' => $categoria->id])}}" class="btn btn-primary">{{$categoria->nombre}}
              <img class="card-img" src="../images/categorias/basquet.jpg" alt="{{$categoria->nombre}}">
            </a>
          </div>
        </li>
@empty
        <li>No hay categorias que mostrar</li>
@endforelse
    </ul>
</div>    
@endsection