<form method="POST" action="login">
    {!! csrf_field() !!}

    <div>
        usuario
        <input type="text" name="usuario" value="{{ old('usuario')}}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>