@extends('admin.template.main')

@section('content')

<link type="text/css" rel="stylesheet" href="{!! asset('css/admin.formularios.css') !!}"  media="screen,projection"/>

    <div class="card">
        <div class="row">
            <h4 class="tituloscyp">Agregar postres</h4>
 <style type="text/css"> 
                            .tituloscyp {
                            text-align: center;
                            color: black;
                            font-family: Calibri;
                            font-size: 40px;
                            }
                        </style>
<form method="POST" action="{{ route('admin.postres.store') }}">
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
        <input class="center datos" type="text" name="ingredientes" value="{{ old('ingredientes') }}">
    </div>

    <div class="input-field col s12">
    <h4 class="titulos">Categoria</h4>
        <div class="center datos">
        <select name="categoria" type="text">
            <option value="" disabled selected>Elige una opción</option>
            <option value="postres">Postres</option>
            <option value="cafeteria">Cafeteria</option>
        </select>
        </div>
    </div>

    <div class="input-field col s12">
        <h4 class="titulos">Precio</h4>
        <input class="center datos" type="text" name="precio" value="{{ old('precio') }}">
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
        <h4 class="titulos">Tiempo de Preparación</h4>
        <input class="center datos validate" placeholder="hh:mm:ss" type="text" name="tiempo_coccion" value="{{ old('tiempo_preparacion') }}">
    </div>
    <div class="center input-field col s12">
        <button class="white-text waves-effect waves-light btn-large red darken-2 z-depth-5 center" type="submit" >Registrar<i class="material-icons right">send</i></button>
    </div>

</form>
</div>
</div>
</div>
@endsection