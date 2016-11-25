@extends('admin.template.main')

@section('content')

<link type="text/css" rel="stylesheet" href="{!! asset('css/admin.formularios.css') !!}"  media="screen,projection"/>

<div class="row">
    <div class="card">
        <div class="row">
            <h4 class="tituloscyp">Agregar comidas</h4>
 <style type="text/css"> 
                            .tituloscyp {
                            text-align: center;
                            color: black;
                            font-family: Calibri;
                            font-size: 40px;
                            }
                        </style>

<form method="POST" action="{{ route('admin.comidas.store') }}">
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

    <div class="input-field col s12">
        <h4 class="titulos">Nombre</h4>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
    </div>

    <div class="input-field col s12">
        <h4 class="titulos">Ingredientes</h4>
        <input type="text" name="ingredientes" value="{{ old('ingredientes') }}">
    </div>

    <div class="input-field col s12">
        <h4 class="titulos">Categoria</h4>
        <div class="center datos">
            <select name="estado" type="text">
                <option value="" disabled selected>Elige una opción</option>
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
        <input type="number" name="precio" value="{{ old('precio') }}">
    </div>

    <div class="input-field col s12">
        <h4 class="titulos">Celiaco</h4>
        <div class="center datos">
            <select name="estado" type="text">
                <option value="" disabled selected>Elige una opción</option>
                <option value="1">Si</option>
                <option value="0">No</option>
            </select>
        </div>
    </div>

    <div class="input-field col s12">
        <h4 class="titulos">Tiempo de Cocción</h4>
        <input class="validate" placeholder="hh:mm:ss" type="text" name="tiempo_coccion" value="{{ old('tiempo_coccion') }}">
    </div>
    <div class="center input-field col s12">
        <button class="white-text waves-effect waves-light btn-large red darken-2 z-depth-5 center" type="submit" >Registrar<i class="material-icons right">send</i></button>
    </div>

</form>
</div>
</div>
</div>
@endsection