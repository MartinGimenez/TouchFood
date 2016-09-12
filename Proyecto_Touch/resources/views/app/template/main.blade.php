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

  <nav>
    <div class="nav-wrapper red lighten-1">
      <a href="#!" class="brand-logo right">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="left hide-on-med-and-down">
        <li><a href="{{ route('menu.categorias') }}">Menú</a></li>
        <li><a href="badges.html">Pedido</a></li>
        <li><a href="collapsible.html">Pago</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Menú</a></li>
        <li><a href="badges.html">Pedido</a></li>
        <li><a href="collapsible.html">Pago</a></li>
      </ul>
    </div>
  </nav>

  <section>
    @yield('content')
  </section>

  <footer class="page-footer red lighten-1">
    <div class="container">
     		<div class="row">
        		<div class="col l4 s12">
          		<h5 class="white-text">Sobre nosotros</h5>
          		<p class="grey-text text-lighten-4">Restaurante_test es una novedosa propuesta gastronómica. Ideal para todo el público que desee comer de la mejor manera. ¡Te esperamos!</p>
        		</div>
            <div class="col l4 s12">
              <h5 class="white-text">Contáctanos</h5>
              <p class="grey-text text-lighten-4">+54 11 1234-5678</p>
            </div>
        		<div class="col l4 s12">
          		<h5 class="white-text">Siguenos</h5>
          		<ul>
                <li><a class="grey-text text-lighten-3" href="#!">Facebook     </a><img src="images/facebook_icono.png" class="circle"></li>
                <li><a class="grey-text text-lighten-3" href="#!">Twitter     </a><img src="images/twitter_icono.jpg" class="circle"></li>
                <li><a class="grey-text text-lighten-3" href="#!">Instagram     </a><img src="images/instagram_icono.png" class="circle"></li>
          		</ul>
        		</div>
      	</div>
    	</div>
    	<div class="footer-copyright">
      	<div class="container">
      		© 2016 Copyright 
      		<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      	</div>
    	</div>
  </footer>



    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}" ></script>
    <script src="{!! asset('js/init.js') !!}" ></script>
    </body>
</html>