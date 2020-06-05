@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

              <div class="form_top"><h1>Registrarse</h1></div>
              {{-- <form id='register' method='post' enctype="multipart/form-data"> --}}

                <div class="card-body">
                    <form class="formulario" id='register' method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Nombre de Usuario</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="username form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="email form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pais" class="col-md-4 col-form-label text-md-right">Pais</label>

                            <div class="col-md-6" id="contenido">
                                <select class="form-control" id="pais" name="pais" value="{{ old('pais') }}">
                                    <option value=""></option>
                                </select>
                                
                                @error('pais')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="provincia" class="col-md-4 col-form-label text-md-right">Provincia</label>

                        <div class="col-md-6" id="">
                            <select class="form-control" id="provincias" name="provincia" value="{{ old('provincia') }}">
                                <option value=""></option>
                            </select> 
                            
                            @error('provincia')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="password form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="password-confirm form-control" name="password_confirmation" autocomplete="new-password">
                            
                                @error('password-confirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">Foto de Perfil: </label>

                            <div class="col-md-6">
                                <label class="txt custom-file-label" for="customFileLang"></label>
                                <input type="file" name="avatar" class="txt custom-file-input" id="customFileLang" lang="es" value="{{ old('avatar') }}">
                            
                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div> 

                        <div class="form-group row">    
                            <label class="col-md-8 form-check-label text-md-right" for="invalidCheck2">
                              Acepta los terminos y condiciones.
                            </label>

                            <div class="col-md-2">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection

<script src="{{ asset('/js/registro.js')}}"></script>
