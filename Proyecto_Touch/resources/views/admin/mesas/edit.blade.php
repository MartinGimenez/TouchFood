@extends('admin.template.main')

@section('content')

<link type="text/css" rel="stylesheet" href="{!! asset('css/admin.formularios.css') !!}"  media="screen,projection"/>

<div class="row">
    <div class="card">
        <div class="row">
            <h4>Modificar {{ $mesa->name }}</h4>
            <form class="col s12" method="POST" action="{{ route('admin.mesas.update', $mesa->id) }}">
                
                {!! csrf_field() !!}
                
                <input type="hidden" name="_method" value="PUT">﻿

                <div class="input-field col s12">
                    Name
                    <input name="name" type="text" value="{{ $mesa->name }}">
                </div>
                
                <div class="input-field col s12">
                    Capacidad
                    <input name="capacidad" type="text" value="{{ $mesa->capacidad }}">
                </div>
        
                <div class="input-field col s12">
                    <select name="estado" type="text" value="{{ $mesa->estado }}">
                        <option value="" disabled selected>Elige una opción</option>
                        <option value="Ocupada">Ocupada</option>
                        <option value="Desocupada">Desocupada</option>
                    </select>
                    <label>Estado</label>
                </div>

                <div class="col s12 center">
                    <button class="white-text waves-effect waves-light btn-large red darken-2 center" type="submit" >Modificar mesa<i class="material-icons right">send</i></button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
