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

  <body class="grey darken-3">

    <nav>
      <div class="nav-wrapper red darken-2 z-depth-3">
        <a href="{{ route('bienvenida') }}" class="brand-logo center"><font FACE="Calibri" SIZE=10 COLOR="white" center>touch<b>food</b></font></a>
      </div>
    </nav>




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
                <li><a class="grey-text text-lighten-3" href="#!">Facebook     </a><img src="images/Iconos/facebook_icono.png" class="circle"><a class="grey-text text-lighten-3" href="https://www.facebook.com/TouchFood_ARG"> TouchFood_ARG</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Twitter     </a><img src="images/Iconos/twitter_icono.jpg" class="circle"><a class="grey-text text-lighten-3" href="https://www.twitter.com.com/TouchFood_ARG"> TouchFood_ARG</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Instagram     </a><img src="images/Iconos/instagram_icono.png" class="circle"><a class="grey-text text-lighten-3" href="https://www.instagram.com/TouchFood_ARG"> TouchFood_ARG</a></li>
              </ul>
          </div>
          <div class="col l6 s12">
            <h5 class="white-text">Tu comida a un toque</h5>
            <font FACE="Calibri" SIZE=10 COLOR="white" center>touch</font>
            <font FACE="Calibri" SIZE=10 COLOR="white" center><b>food</b></font>
            <p class="grey-text text-lighten-4"></p>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2016 Copyright 
          <a class="grey-text text-lighten-4 right" href="#!">Argentina <img src="images/Iconos/argentina.jpg"></a>
        </div>
      </div>
    </footer>
    <!--    FIN     DEL     FOOTER-->


    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}" ></script>
    <script src="{!! asset('js/init.js') !!}" ></script>
    
  </body>
</html>