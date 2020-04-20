@extends('layouts.app')

@section('content')

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <body>

                    <div class="modal-dialog text-center container" style="opacity:0.8;">
                      <div class="col-sm-12 text-center">
                        <div class="modal-content">
                      <h1 style="vertical-align: inherit; color:red; font-family: 'Arial', serif;font-size:70px; ">DEPORTRIVIA</font></h1>
                    </div>
                    </div>
                    </div>
                    <br>


                      <div class="container">
                        <div class="row">

                        <div class= "d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm bg-primary border-top border border-dark rounded-lg" style="opacity:0.9;" >

                          <div class="homebox">
                          <div class="desc">
                            <p style="vertical-align: inherit; color: white; font-family: 'Magra', sans-serif; font-size:28px;" ><strong> Es un gran juego de preguntas y respuestas que te hace pensar, a la ves divertirte, y que demuestres todos tus conocimientos sobre diferentes deportes. Es una aplicacion que brinda una gran oportunidad de pasar una tarde excepcional con amigos o familia.</p>
                            </div>
                    </div>
                    </div>
                    </div><br><br><br>

                    <div class="modal-dialog text-center container" style="opacity:0.9;">
                      <div class="col-sm-12 text-center">
                        <div class="modal-content bg-primary border border-dark">
                      <p style="vertical-align: inherit; color:white; font-family: 'Magra', sans-serif;
                     font-size:38px; ">¿Cuanto sabes sobre deportes?</p>
                    </div>
                    </div>
                    </div>
                    <br>




                    <div class="container col-md-4 text-center lead bg-primary " style="opacity:0.9;"><br>
                    <button class="btn btn-danger p-4 border border-dark"  name="button"><strong><a style="color:whitesmoke" href="{{route('iniciar')}}">JUGAR</a></button><br><br>
                      <button class="btn btn-danger p-4 border border-dark" name="button"><strong>OPCIONES</button><br><br>
                      <button class="btn btn-danger p-4 border border-dark rounded-top" name="button"><strong>CREDITOS</button><br><br>
                      </div><br><br><br>
                      </div>

                    <br><br>
                      <footer>
                       <div class="text-center bg-dark" style="opacity:0.8; color:white;"> Copyrigth JUEGO. Todos los derechos son reservados.</div>
                       </footer>


                        <!-- Optional JavaScript -->
                        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>





                      </body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
