<!DOCTYPE html>
  <html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{!! asset('css/materialize.min.css') !!}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{!! asset('css/admin.template.css') !!}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

  <body>
    <header>
      <nav class="top-nav red darken-2">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">{{ $titulo or 'Panel de Administración' }}</a></div>
        </div>
      </nav>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">  
        <div align="center">
        <li> <img class="responsive-img" src="{{asset('images/logo200x200.png')}}"></li>
        </div>
        <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Dropdown<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!">First</a></li>
                <li><a href="#!">Second</a></li>
                <li><a href="#!">Third</a></li>
                <li><a href="#!">Fourth</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
        <li><a href="#!">Comidas</a></li>
        <li><a class="waves-effect" href="#!">Mesas</a></li>
      </ul>
    </header>

    
    <main>
      <div class="col s12">
        <section>
          @yield('content')
        </section>
      </div>
    </main>
        
    <footer class="page-footer red darken-2 z-depth-3">
      <div class="container">
        <div class="row">

        <div class="col l4 s12">
            <h5 class="white-text">Tu comida a un toque</h5>
            <font FACE="Calibri" SIZE=10 COLOR="white" center>touch</font>
            <font FACE="Calibri" SIZE=10 COLOR="white" center><b>food</b></font>
            <p class="grey-text text-lighten-4"></p>
          </div>
          <div class="col l4 s12">
            <h5 class="white-text">Contáctanos</h5>
            <p class="grey-text text-lighten-4">Nos encantaría recibir sus opiniones, queremos mejorar para que usted disfrute.</p>
          </div>

          <div class="col l4 s12">
            <h5 class="white-text">Síguenos</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Facebook     </a><img src="http://latingsm.com/forum/images/misc/facebook-share.png" class="circle"><a class="grey-text text-lighten-3" href="http://www.facebook.com/touchfood.ar"> Touch Food</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Twitter     </a><img src="http://www.sportlife.es/img/header/twitter-mini.png" class="circle"><a class="grey-text text-lighten-3" href="http://www.twitter.com/touchfood_ar"> Touch Food</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Instagram     </a><img src="https://www.panasonic.com/content/panasonic/es/es/_jcr_content/footer/sociallinks.image3.png" class="circle"><a class="grey-text text-lighten-3" href="http://www.instagram.com/TouchFood_ARG"> Touch Food</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Gmail     </a><img src="https://davidcastellanos.files.wordpress.com/2009/05/gmail-logo.gif?w=460" class="circle"><a class="grey-text text-lighten-3"> TouchFood.ar@gmail.com</a></li>
              </ul>
          </div>

        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2016 Copyright 
        <a class="grey-text text-lighten-4 right" href="#!">Argentina <img src="http://www.abc.es/includes_comun/especiales/mundial-baloncesto/img/banderas/8178.jpg"></a>
        </div>
      </div>
    </footer>



    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}" ></script>
    <script src="{!! asset('js/init.js') !!}" ></script>
    <script src="{!! asset('js/init.sidenav.js') !!}" ></script>
  </body>
</html>