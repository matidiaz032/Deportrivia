@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
        <div class="col-md-12">
           <div id="quiz-wrapper">
              <h1>{{ $pregunta->detalle }}</h1>
              {!! Form::open() !!}
              @foreach($pregunta->respuesta->shuffle() as $respuesta)
              <h3>
                  <div class="form-group">
                      <div class="radio">
                          
                        {{Form::radio('result', $respuesta->is_correct)}}

                        {{Form::label('respuesta', $respuesta->respuesta)}}
                      </div>
                  </div>
              </h3>
              @endforeach
              {{Form::submit('Mandar Respuesta')}}
              {!! Form::close() !!}
           </div>
        </div> 
     </div>
</div>  
@endsection