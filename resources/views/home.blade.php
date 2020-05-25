@extends('layouts.app')

@section('content')

  <body>
    <div class="modal-dialog text-center container">
      <div class="col-sm-12 text-center">
          <h1 class="titulo">
            <strong>
              Deportrivia
            </strong>
          </h1>
      </div>
    </div>

    <div class="container">
        <div style="opacity:0.9;" >
          <p style="color: black; font-family: 'Magra', sans-serif; font-size:24px;" >
            <strong> 
              Es un gran juego de preguntas y respuestas que te hace pensar, a la ves divertirte,
              y que demuestres todos tus conocimientos sobre diferentes deportes. 
              Es una aplicacion que brinda una gran oportunidad de pasar una tarde excepcional con amigos o familia.
            </strong>
          </p>
        </div>
      </div>

      <div class="modal-dialog text-center container" style="opacity:0.9;">
        <div class="col-sm-12 text-center">
          <p style="font-family: 'Magra', sans-serif; font-size:24px;">
            <strong>
              ¿Cuanto sabes sobre deportes?
            </strong>
          </p>
        </div>
      </div>

      <div class="container col-sm-2 text-center" style="opacity:0.9;">
        <a href="/iniciar">
          <button class="btn btn-danger p-4" type="button">
            JUGAR
          </button>
        </a>
      </div>

      <footer>
        <div class="text-center bg-dark" style="opacity:0.8; color:white;">
          Copyrigth JUEGO. Todos los derechos son reservados.
        </div>
      </footer>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</div>
@endsection
