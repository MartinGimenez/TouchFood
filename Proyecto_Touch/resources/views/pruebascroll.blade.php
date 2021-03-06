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

      <a href="#!" class="brand-logo center">Touchfood</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down">
          <li><a href="{{ route('menu.categorias') }}" <button type="button" class="waves-effect waves-light btn-large red darken-2">Menú</button></a></li>
          <li><a href="#!" <button type="button" class="waves-effect waves-light btn-large red darken-2">Pedido</button></a></li>
          <li><a href="#!" <button type="button" class="waves-effect waves-light btn-large red darken-2">Pago</button></a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="{{ route('menu.categorias') }}" <button type="button" class="waves-effect waves-light btn-large red darken-2">Menú</button></a></li>
          <li><a href="#!" <button type="button" class="waves-effect waves-light btn-large red darken-2">Pedido</button></a></li>
          <li><a href="#!" <button type="button" class="waves-effect waves-light btn-large red darken-2">Pago</button></a></li>
        </ul>
      </div>
    </nav>
<div class="row">
  <div class="col s12">
        <div class="card-panel red darken-2 z-depth-3"> 
            <ul class="collection with-header grey-text text-lighten-4">
                <div class="card">
                    <div class="card-image">
                        <!--img class="responsive-img" src="http://cdn.kiwilimon.com/pages/temporadas/dia-del-padre/header_diapadre2016.jpg"-->
                        <h1 class="card-title stroke">Comidas</h1>
                        <style type="text/css"> 
                            .stroke {
                            text-align: center;
                            color: white;
                            font-family: Georgia, serif;
                            font-size: 40px;
                            letter-spacing: 10;
                            text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;
                            }
                        </style>

                    </div>
                </div>

    <div class="contenedor">
        <ul id="comidas" class="collection red darken-2">
          @foreach($comidas as $comida)
            <li class="collection-item avatar red darken-2">
              <img src="{{asset('images/Iconos/pizza.jpg')}}" alt="" class="circle">
              <span class="title">{{ ucwords($comida->nombre) }}</span>
              <p>${{ ucwords($comida->precio) }}<br>
              {{ ucwords($comida->ingredientes) }}
              </p>
              <a href="#!" class="secondary-content"><button class="btn waves-effect waves-light red darken-2" type="submit" name="action">Pedir
    <i class="material-icons right">send</i>
  </button></a>
            </li>
          @endforeach
        </ul>
      

      <span style="visibility: hidden;">
          {!! $comidas->render() !!}    
      </span>

      <div class="loading"></div>
    </div>
</ul>
</div>
</div>
</div>
  <!--      FOOTER        -->
    <footer class="page-footer red darken-2 z-depth-3">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Contáctanos</h5>
            <p class="grey-text text-lighten-4">Nos encantaría recibir sus opiniones, queremos mejorar para que usted disfrute.</p>
          </div>

          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Síguenos</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Facebook     </a><img src="http://latingsm.com/forum/images/misc/facebook-share.png" class="circle"><a class="grey-text text-lighten-3" href="http://www.facebook.com/touchfood.ar"> Touch Food</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Twitter     </a><img src="http://www.sportlife.es/img/header/twitter-mini.png" class="circle"><a class="grey-text text-lighten-3" href="http://www.twitter.com/touchfood_ar"> Touch Food</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Instagram     </a><img src="https://www.panasonic.com/content/panasonic/es/es/_jcr_content/footer/sociallinks.image3.png" class="circle"><a class="grey-text text-lighten-3" href="http://www.instagram.com/TouchFood_ARG"> Touch Food</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Gmail     </a><img src="https://davidcastellanos.files.wordpress.com/2009/05/gmail-logo.gif?w=460" class="circle"><a class="grey-text text-lighten-3"> TouchFood.ar@gmail.com</a></li>
              </ul>
          </div>
          <div class="col l6 s12">
            <h5 class="white-text">Tu comida a un toque</h5>
            <font FACE="Mistral" SIZE=10 COLOR="white" center><b>Touch</b></font>
            <font FACE="Mistral" SIZE=10 COLOR="white" center>Food</font>
            <p class="grey-text text-lighten-4"></p>
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









    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}" ></script>
    <script type="text/javascript" src="{!! asset('js/jquery.infinitescroll.min.js') !!}" ></script>
    <script src="{!! asset('js/init.js') !!}" ></script>
    <script>
      
    $('#comidas').infinitescroll({
        navSelector  : "ul.pagination",                
        nextSelector : "ul.pagination li:last-child a",
        itemSelector : "#comidas li.collection-item",
    loading: {
      finished: undefined,
      finishedMsg: "No se encontraron más comidas para mostrar",
      img: "{!! asset('images/ajax-loader.gif') !!}",
      msg: null,
      msgText: "Cargando...",
      selector: ".loading",
      speed: 'fast',
      start: undefined
      }
    });
</script>

    </body>
</html>