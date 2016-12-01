<!DOCTYPE html>
	<html>
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{!! asset('css/materialize.min.css') !!}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

  <body>
 
    <div class="row center black">
      <div class="col s4">
      </div>
      <div class="col s4">
            <img class="responsive-img" src="{{ asset('images/touchfoodlogo2.png')}}">
            <a href="{{ route('pedido.agregar') }}" class="waves-effect waves-light btn-large red darken-4">Haz click para comenzar</a>
            <a href="{{ route('user.logout') }}" class="waves-effect waves-light btn-large grey darken-3">Salir</a>
      </div>
      <div class="col s4">
      </div>
    </div>
    



    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}" ></script>
    <script src="{!! asset('js/init.js') !!}" ></script>
    </body>
</html>