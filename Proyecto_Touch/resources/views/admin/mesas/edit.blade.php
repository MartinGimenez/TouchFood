@extends('admin.template.main')

@section('content')

<link type="text/css" rel="stylesheet" href="{!! asset('css/admin.formularios.css') !!}"  media="screen,projection"/>

<div class="row">
    <div class="card">
        <div class="row">
            <h4 class="tituloscyp">Modificar {{ $mesa->name }}</h4>
            <form class="col s12" method="POST" action="{{ route('admin.mesas.update', $mesa->id) }}">
                
                    <style type="text/css"> 
                        .tituloscyp {
                        text-align: center;
                        color: black;
                        font-family: Calibri;
                        font-size: 40px;
                        }
                    </style>


                {!! csrf_field() !!}
                
                <input type="hidden" name="_method" value="PUT">﻿

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
                
                <div class="input-field col s12">
                    <h4 class="titulos">Nombre</h4>
                    <input class="center datos" name="name" type="text" value="{{ $mesa->name }}">
                </div>
                
                <div class="input-field col s12">
                    <h4 class="titulos">Capacidad</h4>
                    <input class="center datos" name="capacidad" type="text" value="{{ $mesa->capacidad }}">
                </div>
        
                <div class="input-field col s12 center datos">
                    <h4 class="titulos">Estado</h4>
                    <div class="center datos">
                        <select name="estado" type="text" value="{{ $mesa->estado }}">
                            <option value="" disabled selected>Elige una opción</option>
                            <option value="Ocupada">Ocupada</option>
                            <option value="Desocupada">Desocupada</option>
                        </select>
                    </div>
                </div>

                <div class="col s12 center">
                    <button class="white-text waves-effect waves-light btn-large red darken-2 z-depth-5 center" style="float:right;" type="submit" >Modificar mesa</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
