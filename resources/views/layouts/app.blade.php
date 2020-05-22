<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="resources/sass/style.css" rel="stylesheet">
</head>
<body id='body'>
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-right">
        <div class="container-fluid">
          <a class="navbar-brand" href=""></a>
          <img src="{{ asset('../images/winners.svg')}}" width="40" height="35" class="d-inline-block align-top" alt="LogoJuego">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="">Deportrivia</a>
                    <ul class="navbar-nav mr-auto text-center mt-2 mt-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/home') }}">Inicio <span class="sr-only">(current)</span></a>
                      </li>
                      @guest
                      <li class="nav-item">
                             <a class="nav-link" href="{{ route('login') }}">Ingresar <span class="sr-only">(current)</span></a>
                       </li>
                          @if (Route::has('register'))
                          <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Registrarse <span class="sr-only">(current)</span></a>
                          </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->username }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                              </div>
                          </li>
                          <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <span class="sr-only">(current)</span>Cerrar Sesion{{-- {{ __('Logout') }} --}}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form></li>

                      @endguest
                      <a class="d-flex flex-row justify-content-center" href="/faqs"><button type="button" class="btn btn-outline-info">Preguntas Frecuentes</button></a>
                  </div>
                  <button id='tema'>CAMBIAR TEMA</button>

                  <p id="result">Usted tiene el tema </p>
        </div>

        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
