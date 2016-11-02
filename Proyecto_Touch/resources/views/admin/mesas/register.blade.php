@extends('admin.template.main')

@section('content')

<form method="POST" action="{{ route('user.register') }}">
    {!! csrf_field() !!}

    <div>
        Nombre
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Capacidadsss
        <input type="text" name="capacidad" value="{{ old('capacidad') }}">
    </div>

    <div>
        Estadoddddddddddddddddd
        <input type="text" name="estado" value="{{ old('estado') }}">
    </div>

    <div>
        Passworddddddddddddddddddd
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Registrar</button>
        <!--li><a href="#!" <button type="button" class="waves-effect waves-light btn-large red darken-2">Pago</button></a></li-->
    </div>

</form>

@endsection
