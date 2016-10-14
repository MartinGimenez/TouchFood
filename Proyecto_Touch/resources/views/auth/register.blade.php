
<form method="POST" action="{{ route('auth.register') }}">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Numero de mesa
        <input type="text" name="numero_mesa" value="{{ old('numero_mesa') }}">
    </div>

    <div>
        Capacidad
        <input type="text" name="capacidad" value="{{ old('capacidad') }}">
    </div>

    <div>
        Estado
        <input type="text" name="estado" value="{{ old('estado') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>

</form>


