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

                <div class="input-field col s6">
                      <input name="name" type="text" value="{{ old('name') }}" class="validate">
                      <label for="name">Username</label>
                </div>
                
                <div class="input-field col s6">
                      <input name="email" type="email" value="{{ old('email') }}" class="validate">
                      <label for="email">Email</label>
                </div>

                <div class="input-field col s12">
                      <input name="capacidad" type="text" value="{{ old('capacidad') }}" class="validate">
                      <label for="capacidad">Capacidad</label>
                </div>

                <div class="input-field col s12">
                    <select name="estado" type="text">
                        <option value="" disabled selected>Elige una opción</option>
                        <option value="Ocupada">Ocupada</option>
                        <option value="Desocupada">Desocupada</option>
                    </select>
                    <label>Estado</label>
                </div>

                <div class="input-field col s12">
                      <input name="password" type="password">
                      <label for="password">Password</label>
                </div>

                <div class="input-field col s12">
                      <input name="password_confirmation" type="password">
                      <label for="password_confirmation">Confirmar Password</label>
                </div>

                <div class="col s12 center">
                <button class="white-text waves-effect waves-light btn-large red darken-2 z-depth-5 center" type="submit" >Agregar mesa<i class="material-icons right">send</i></button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

