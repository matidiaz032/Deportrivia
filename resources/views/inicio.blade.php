@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="display-4 mb-4">Elija una categoria</h1>
    <ul>
@forelse($categorias as $categoria)
        <li>
          <div class="card flex mt-3" style="width: 18rem;">
            <a href="{{route('jugar',['id' => $categoria->id])}}" class="btn btn-primary">{{$categoria->nombre}}
            <img class="card-img" src="images/categorias/{{$categoria->imagen}}" alt="{{$categoria->nombre}}">
              </a>
            <div class="card-body">
            <p class="card-text">{{$categoria->descripcion}}</p>
              <a href="{{route('jugar',['id' => $categoria->id])}}" class="btn btn-primary">Jugar</a>
            </div>
          </div>
        </li>
@empty
        <li>No hay categorias que mostrar</li>
@endforelse
    </ul>
</div>    
@endsection