<!DOCTYPE html>
  <html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{!! asset('css/materialize.min.css') !!}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{!! asset('css/admin.formularios.css') !!}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style type="text/css">
  html, body { height: 100%; margin: 0; padding: 0; }
  #map { height: 50%; }
</style>
    </head>

    <body>

  <body class="grey lighten-5">

    <!--      ENCABEZADO      -->
    <nav>
      <div class="nav-wrapper red darken-2 z-depth-3">
        <a href="{{ route('bienvenida') }}" class="brand-logo center"><font FACE="Calibri" SIZE=10 COLOR="white" center>touch<b>food</b></font></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('user.logout') }}" <button type="button" class="waves-effect waves-light btn-large red darken-2">Salir</button></a></li>
        <!--li><a href="{{ route('user.login') }}" <button type="button" class="waves-effect waves-light btn-large red darken-2">Salir</button></a></li-->
        </ul>
        <ul class="left hide-on-med-and-down">
          <!--a class="btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3"><i class="material-icons">replay</i></a-->
          <!--li><a href="">{{ Auth::user()->name }}</a></li-->
          <li><a href="{{ route('menu.categorias') }}" <button type="button" class="waves-effect waves-light btn-large red darken-2">Menú</button></a></li>
          <li><a href="{{ route('pedido.index') }}" <button type="button" class="waves-effect waves-light btn-large red darken-2">Pedido</button></a></li>
          <li><a href="{{ route('pagos.index') }}" <button type="button" class="waves-effect waves-light btn-large red darken-2">Pago</button></a></li>
          
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <!--li><a href="">{{ Auth::user()->name }}</a></li-->
          <li><a href="{{ route('menu.categorias') }}" <button type="button" class="waves-effect waves-light btn-large red darken-2">Menú</button></a></li>
          <li><a href="#!" <button type="button" class="waves-effect waves-light btn-large red darken-2">Pedido</button></a></li>
          <li><a href="#!" <button type="button" class="waves-effect waves-light btn-large red darken-2">Pago</button></a></li>
          <li><a href="{{ route('user.logout') }}" <button type="button" class="waves-effect waves-light btn-large red darken-2">Salir</button></a></li>
        </ul>
      </div>
    </nav>


    <ul id="slide-out" class="side-nav">
      <li><div class="userView">
        <img class="background" src="{{ asset('images/M/Fondo.jpeg')}}">
        <a href="#!user"><img class="circle" src="{{ asset('images/M/M3.jpg')}}"></a>
        <!--a href="#!name"><span class="white-text name">Usted es</span></a-->
        <a class= "white-text" href="">{{ Auth::user()->name }}<!--span class="white-text email">Bienvenido</span--></a>
      </div></li>
      <li><a href="{{ route('bienvenida') }}" class="red-text"><i class="material-icons red-text">view_carousel</i>Ir a la pantalla principal</a></li>
      <font FACE="Calibri" SIZE=10 COLOR="red" center>touch</font>
      <font FACE="Calibri" SIZE=10 COLOR="red" center><b>food</b></font>
      <li><div class="divider"></div></li>
      <li><a class="subheader">Configuración</a></li>
      <li><a class="subheader">Acerca de nosotros</a></li>
      <li><a class="waves-effect red-text" href="#!">Ayuda</a></li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons red-text">trending_flat</i></a>


    <div class="row">
      <div class="card">
        <div class="row">
        <div class="input-field col s12 m6 offset-m3 l6 offset-l3">
        <img class="responsive-img" src="{{asset('images/grupo1.jpeg')}}">
        </div>
          <div class="input-field col s12">
            <h1 class="titulos">Objetivos</h1>
            <h1 class="descripcion">Touchfood tiene como objetivo la autogestión del cliente enfocado en dos tipos de usuario, los cuales son:
              ·El cliente: Que se manejara con un logueo de la propia mesa que ocupe, donde pueda realizar pedidos y pagar directamente desde la app.
              ·El administrador: El cual tendrá el control de las mesas, platos (comidas,bebidas y postres), pedidos y llevar una cuenta de los reportes.</h1>
            <style type="text/css"> 
              .titulos {
                text-align: left;
                color: red;
                font-family: Calibri;
                font-size: 70px;
                letter-spacing: 10;
                }
            </style>
            <style type="text/css"> 
              .descripcion {
                text-align: left;
                color: grey;
                font-family: Calibri;
                font-size: 25px;
                letter-spacing: 10;
                }
            </style>
          </div>
          
          <div class="input-field col s12">  
            <h1 class="titulos">Alcance</h1>
            <h1 class="descripcion">La aplicación estará destinada a ofrecer servicios que sirvan para la optimización del negocio de restaurantes,
            reduciendo tiempos de espera para el cliente y otorgándoles mayor control de gestión a los administradores.</h1>
          </div>

          <div class="input-field col s12">  
            <h1 class="titulos">Integrantes</h1>
            <h1 class="descripcion">
              <ul>
                <li>Armanno Matias Nahuel</li> 
                <li>Navarro Gabriel</li>
                <li>Garcia Leonardo</li>
                <li>Martin Gimenez</li>
                <li>Aguirre Iván Gabriel</li>
                <li>Leguizamon Gonzalo</li> 
                <li>Cabado Leonel</li>
              </ul>
            </h1>
          </div>

          <div class="input-field col s12">    
            <h1 class="titulos">Tecnologias utilizadas</h1>
            <h1 class="descripcion">
              <ul>
                <li><b>Servidor:</b> Apache brindado por XAMPP</li>
                <li><b>Framework MVC:</b> Laravel.</li>
                <li><b>Back End:</b> Lenguaje PHP.</li>
                <li><b>Base de datos:</b> Mysql gestionadas desde el motor PHPmyadmin y el workspace.</li>
                <li><b>Front End:</b> Framework Materialize, el cual utiliza las tecnologías (CSS3, HTML5, Javascript, Jquery).</li>
                <li><b>Test:</b> PHP Unit, Selenium.</li>
                <li><b>Documentación:</b> SRS IEE 830.</li>
              </ul>
            </h1>
          </div>
        </div>

      </div>

    </div>
                <h1 class="titulos">Lugar de trabajo</h1>
            <div id="map"></div>
            <script type="text/javascript">
              var map;
              var myLatLng = {lat: -34.774420, lng: -58.267559};

              function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.774420, lng: -58.267559},
                zoom: 16
              });
                var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Universidad Nacional Arturo Jauretche'
  });
  

              }
            </script>



          </div>

  <!--      FOOTER        -->
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
    <!--    FIN     DEL     FOOTER-->


    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuAV3VFgdpfHg_AdX3mDVgY0W5bJQX7bM&callback=initMap">
    </script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}" ></script>
    <script src="{!! asset('js/init.js') !!}" ></script>
    </body>
</html>