@extends('admin.template.main')

@section('content')

<link type="text/css" rel="stylesheet" href="{!! asset('css/admin.formularios.css') !!}"  media="screen,projection"/>

<div class="row">
    <div class="card">
        <div class="row">
            <h4 class="tituloscyp">Modificar {{ $comida->name }}</h4>
            <form class="col s12" method="POST" action="{{ route('admin.comidas.update', $comida->id_plato) }}">
                
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
                    <input class="center datos" name="nombre" type="text" value="{{ $comida->nombre }}">
                </div>
                
                <div class="input-field col s12">
                    <h4 class="titulos">Ingredientes</h4>
                    <input class="center datos" name="ingredientes" type="text" value="{{ $comida->ingredientes }}">
                </div>

                <div class="input-field col s12">
                    <h4 class="titulos">Categoria</h4>
                    <div class="center datos">
                        <select name="categoria" type="text">
                            <option value="{{ $comida->categoria }}" disabled selected>{{ $comida->categoria }}</option>
                            <option value="pollos">Pollos</option>
                            <option value="carnes">Carnes</option>
                            <option value="cerdos">Cerdos</option>
                            <option value="Vegetales">Vegetales</option>
                            <option value="pescados">Pescados</option>
                            <option value="pastas">Pastas</option>
                            <option value="pizzas">Pizzas</option>
                            <option value="picadas">Picadas</option>
                            <option value="minutas">Minutas</option>
                            <option value="sopas">Sopas</option>
                            <option value="ensaladas">Ensaladas</option>
                            <option value="especiales">Especiales</option>
                            <option value="verduras">Verduras</option>
                        </select>
                    </div>
                </div>

                <div class="input-field col s12">
                    <h4 class="titulos">Precio</h4>
                    <input class="center datos" name="precio" type="text" value="{{ $comida->precio }}">
                </div>
        
                <div class="input-field col s12">
                    <h4 class="titulos">Celiaco</h4>
                     <div class="center datos">
                        <select name="celiaco" type="number">
                            <option value="" disabled selected>Elige una opción</option>
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="input-field col s12">
                    <h4 class="titulos">Tiempo de Coccion</h4>
                    <input class="center datos" name="tiempo_coccion" type="text" value="{{ $comida->tiempo_coccion }}">
                </div>

                <div class="col s12 center">
                    <button class="white-text waves-effect waves-light btn-large red darken-2 z-depth-5 center" style="float:right;" type="submit" >Modificar comida</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection