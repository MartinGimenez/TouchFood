@extends('admin.template.main')

@section('content')

<link type="text/css" rel="stylesheet" href="{!! asset('css/admin.formularios.css') !!}"  media="screen,projection"/>

    
<div class="row">
    <div class="card">
        <div class="row">
            <h4 class="tituloscyp">Alta de mesas en el sistema</h4>
            <style type="text/css"> 
                            .tituloscyp {
                            text-align: center;
                            color: black;
                            font-family: Calibri;
                            font-size: 40px;
                            }
                        </style>
            <form class="col s12" method="POST" action="{{ route('user.register') }}">
            
                {!! csrf_field() !!}

                <style type="text/css"> 
                    .titulos {
                    text-align: left;
                    color: red;
                    font-family: Calibri;
                    font-size: 30px;
                    }
                </style>

                <style type="text/css"> 
                    .datos {
                    text-align: left;
                    color: black;
                    font-family: Calibri;
                    font-size: 40px;
                    }
                </style>

                <div class="input-field col s6">
                  <h4 class="titulos" for="name">Username</h4>
                  <input class="center datos" name="name" type="text" value="{{ old('name') }}" class="validate">
                </div>
                
                <div class="input-field col s6">
                  <h4 class="titulos" for="email">Email</h4>
                  <input class="center datos" name="email" type="email" value="{{ old('email') }}" class="validate">
                </div>

                <div class="input-field col s12">
                  <h4 class="titulos" for="capacidad">Capacidad</h4>
                  <input class="center datos" name="capacidad" type="text" value="{{ old('capacidad') }}" class="validate">
                </div>

                <div class="input-field col s12">
                  <h4 class="titulos">Estado</h4>
                  <div class="center datos">
                      <select name="estado" type="text">
                          <option value="" disabled selected>Elige una opción</option>
                          <option value="Ocupada">Ocupada</option>
                          <option value="Desocupada">Desocupada</option>
                      </select>
                  </div>
                </div>

                <div class="input-field col s12">
                  <h4 class="titulos" for="password">Password</h4>
                  <input name="password" type="password">
                </div>

                <div class="input-field col s12">
                  <h4 class="titulos" for="password_confirmation">Confirmar Password</h4>
                  <input name="password_confirmation" type="password">
                </div>

                <div class="col s12 center">
                <button class="white-text waves-effect waves-light btn-large red darken-2 z-depth-5 center" type="submit" >Agregar mesa<i class="material-icons right">send</i></button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

