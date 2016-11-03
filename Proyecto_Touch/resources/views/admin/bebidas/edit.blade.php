@extends('admin.template.main')

@section('content')

<link type="text/css" rel="stylesheet" href="{!! asset('css/admin.formularios.css') !!}"  media="screen,projection"/>

<div class="row">
    <div class="card">
        <div class="row">
            <h4 class="tituloscyp">Modificar {{ $bebida->name }}</h4>
            <form class="col s12" method="POST" action="{{ route('admin.bebidas.update', $bebida->id_bebida) }}">
                
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
                    <input class="center datos" name="nombre" type="text" value="{{ $bebida->nombre }}">
                </div>
                
                <div class="input-field col s12">
                    <h4 class="titulos">Ingredientes</h4>
                    <input class="center datos" name="ingredientes" type="text" value="{{ $bebida->ingredientes }}">
                </div>
                <div class="input-field col s12">
                    <h4 class="titulos">Categoria</h4>
                    <input class="center datos" name="categoria" type="text" value="{{ $bebida->categoria }}">
                </div>
                <div class="input-field col s12">
                    <h4 class="titulos">Precio</h4>
                    <input class="center datos" name="precio" type="number" value="{{ $bebida->precio }}">
                </div>
        
                <div class="input-field col s12 center datos">
                    <h4 class="titulos">Celiaco</h4>
                    <div class="center datos">
                        <select name="estado" type="text" value="{{ $bebida->celiaco }}">
                            <option value="" disabled selected>Elige una opción</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="input-field col s12">
                    <h4 class="titulos">Tiempo de servicio</h4>
                    <input class="center datos" name="tiempo_servicio" type="text" value="{{ $bebida->tiempo_servicio }}">
                </div>

                <div class="col s12 center">
                    <button class="white-text waves-effect waves-light btn-large red darken-2 z-depth-5 center" style="float:left;" type="submit" >Atrás</button>
                    <button class="white-text waves-effect waves-light btn-large red darken-2 z-depth-5 center" style="float:right;" type="submit" >Modificar mesa</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection