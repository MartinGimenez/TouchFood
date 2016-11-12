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
        <div class="container stroke nav-wrapper">
          <a>{{ $titulo or "Panel de Adm." }}</a>
        </div>

        <style type="text/css"> 
          .stroke {
          text-align: center;
          color: white;
          font-family: Calibri;
          font-size: 50px;
          }
        </style>

      </nav>

      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
      </div>
      <ul id="nav-mobile" class="side-nav fixed">  
        <div align="center">
        <li> <img class="responsive-img" src="{{asset('images/logo200x200.png')}}"></li>
        </div>
        <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Mesas<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('admin.mesas.index') }}">Listado</a></li>
                <li><a href="{{ route('mesas.register') }}">Agregar mesas</a></li>
                <li><a href="#!">Combinar mesas</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Comidas<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('admin.comidas.index') }}">Listado</a></li>
                <li><a href="{{ route('admin.comidas.create') }}">Agregar Comidas</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
       <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Bebidas<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('admin.bebidas.index') }}">Listado</a></li>
                <li><a href="{{ route('admin.bebidas.create') }}">Agregar Bebidas</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Postres<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('admin.postres.index') }}">Listado</a></li>
                <li><a href="{{ route('admin.postres.create') }}">Agregar Postres</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
        <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Pedidos<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('pedidoslistado') }}">Listado</a></li>
                <li><a href="#!">Agregar pedidos</a></li>
              </ul>
            </div>
          </li>
        </ul>

      
          <li class="contenedor-div">
            <li text-white><a href="{{ route('admin.logout') }}" <button type="button" class="white-text waves-effect waves-light btn-large red darken-2 z-depth-3">Cerrar sesión</button></a></li>
          </li>

          <!--         POP UPS          -->
          <!--div id="modal1" class="modal">
          <div class="modal-content">
            <h4 class="red-text">¿Desea salir?</h4>
            <p>Si continua podrá cerrar su sesión.</p>
          </div>
          <div class="modal-footer">
            <button href="{{ route('user.logout') }}" style="float:center;" class="btn waves-effect waves-light red darken-2" type="submit" name="action"> Aceptar <i class="material-icons right">done</i></button>
            <a href="#!" <button style="float:left;" class="btn waves-effect waves-light red darken-2" type="submit" name="action"> Cancelar <i class="material-icons right">error</i></button></a>
          </div>
        </div-->

        <style type="text/css">
          .contenedor-div{
          position:relative;
          }
          .salir{
          position:absolute;
          bottom:100px;
          right:100px;

          }
        </style>

      </li>
      </ul>
    </header>

    
    <main>
      <div class="col s12">
        <section>
          @yield('content')
          @include('flash::message')
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