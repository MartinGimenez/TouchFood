@extends('admin.template.main')

@section('content')

<form method="POST" action="{{ route('admin.comidas.store') }}">
    {!! csrf_field() !!}

    <div>
        Nombre
        <input type="text" name="nombre" value="{{ old('nombre') }}">
    </div>

    <div>
        ingredientes
        <input type="text" name="ingredientes" value="{{ old('ingredientes') }}">
    </div>

    <div>
        categoria
       <input type="text" name="categoria" value="{{ old('categoria') }}">
    </div>

    <div>
        precio
        <input type="number" name="precio" value="{{ old('precio') }}">
    </div>

    <div>
        celiaco
        <input type="number" name="celiaco" value="{{ old('celiaco') }}">
    </div>
    <div>
        tiempo coccion
        <input type="time" name="tiempo_coccion" value="{{ old('tiempo_coccion') }}">
    </div>
    <div>
        <button type="submit">Register</button>
    </div>

</form>

@endsection