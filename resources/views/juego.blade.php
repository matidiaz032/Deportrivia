@extends('layouts.app')

@section('content')
<div id="contenedor" class="container">
     <div class="row">
        <div class="col-md-12">
           <div id="quiz-wrapper">
              <div class="categoria">
              <h3>{{$categorias->nombre}}</h3>
              </div>
            <form id="formulario" name="formulario" action="{{route('puntuacion')}}" method="post">
               @csrf
               <input type="hidden" name="categorias" value="{{$categorias->id}}">
              @foreach ($categorias->preguntas as $item)
              <h1>{{ $item->detalle }}</h1> 
               @foreach($item->respuestas->shuffle() as $respuesta)
               <h3>
                  <div class="form-group">
                     <div class="radio">
                     <input type="radio" name="{{$respuesta->pregunta_id}}" value="{{$respuesta->is_correct}}">
                        <label for="respuestas">{{$respuesta->respuesta}}</label>
                     </div>
                 </div>
               </h3>
               @endforeach    
               @endforeach
               
            <button type="submit" name="submit" id="boton" class="boton btn btn-primary">Enviar Respuesta</button> 
         </form>
           </div>
        </div> 
     </div>
</div>  
@endsection

<script src="{{ asset('/js/juego.js')}}"></script>