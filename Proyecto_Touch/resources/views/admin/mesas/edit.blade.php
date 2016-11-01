@extends('admin.template.main')

@section('content')


<h3> Modificar {{ $mesa->name }} </h3>

<form method="POST" action="{{ route('admin.mesas.update', $mesa->id) }}">
    {!! csrf_field() !!}

    <input type="hidden" name="_method" value="PUT">﻿
    
    <div>
        Name
        <input type="text" name="name" value="{{ $mesa->name }}">
    </div>

    <div>
        Capacidad
        <input type="text" name="capacidad" value="{{ $mesa->capacidad }}">
    </div>

    <div>
        Estado
        <input type="text" name="estado" value="{{ $mesa->estado }}">
    </div>

    <div>
        <button type="submit">Modificar</button>
    </div>

</form>

@endsection
