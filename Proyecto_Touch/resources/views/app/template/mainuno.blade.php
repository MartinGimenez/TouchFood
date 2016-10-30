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

  <body class="red darken-3">

    <!--      ENCABEZADO      -->
    <nav>
      <div class="nav-wrapper red darken-2 z-depth-3">
        <a href="{{ route('bienvenida') }}" class="brand-logo center"><font FACE="Calibri" SIZE=10 COLOR="white" center>touch<b>food</b></font></a>
      </div>
    </nav>


          <section>
            @yield('content')
          </section>



    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}" ></script>
    <script src="{!! asset('js/init.js') !!}" ></script>
    </body>
</html>