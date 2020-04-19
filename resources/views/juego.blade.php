@extends('layouts.app')

@section('content')
<div id="contenedor" class="container">
     <div class="row">
        <div class="col-md-12">
           <div id="quiz-wrapper">
              <div class="categoria">
                 @foreach ($categorias as $categoria)
              <h3>{{$categoria->nombre}}</h3>
              </div>
              @endforeach
            <form id="formulario" name="formulario" action="{{route('respuesta.usuario')}}" method="post">
              @foreach ($preguntas as $item)
              <h1>{{ $item->detalle }}</h1>
   
               @csrf
               @foreach($item->respuestas as $respuesta)
               <h3>
                  <div class="form-group">
                     <div class="radio">
                     <input type="radio" name="{{$respuesta->pregunta_id}}" id="{{$respuesta->id}}" value="{{$respuesta->is_correct}}">
                        <label for="respuestas">{{$respuesta->respuesta}}</label>
                     </div>
                 </div>
               </h3>
               @endforeach

               {{-- @if ($response == 1)
                   <div class="alert">
                      <h2>Respuesta Correcta</h2>
                   </div>
               @endif --}}    
               @endforeach
               
            <button type="submit" id="boton" class="boton btn btn-primary">Enviar Respuesta</button> 
         </form>
           </div>
        </div> 
     </div>
</div>  
@endsection

<script src="{{ asset('/js/juego.js')}}"></script>