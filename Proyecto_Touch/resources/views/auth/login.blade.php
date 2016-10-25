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
      <div class="nav-wrapper red darken-2 z-depth-3 center">
        <font FACE="Calibri" SIZE=10 COLOR="white" center>touch</font>
        <font FACE="Calibri" SIZE=10 COLOR="white" center><b>food</b></font>
        <p class="grey-text text-lighten-4"></p>
      </div>
    </nav>


<div class="container">
  <div class="row">
    <div class="col s6">
      <h3 class="grey-text text-lighten-5" align="center">Registra la mesa al sistema</h3>
      <div class="card red darken-4">
        <div class="row">
          <form method="POST" action="{{ route('auth.login') }}">
            {!! csrf_field() !!}
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input type="text" name="name" value="{{ old('name') }}" class="validate white-text text-lighten-4 right">
              <label class="grey-text text-lighten-4 right" for="name">Username</label>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix">vpn_key</i>
              <input type="password" name="password" id="password" class="validate white-text text-lighten-4 right">
              <label class="grey-text text-lighten-4 right" for="password">Password</label>
            </div>

            <div class="input-field col s12">
              <input type="checkbox" name ="remember" id="test5" />
              <label for="test5">Recordar cuenta</label>
            </div>

            <div class="col s12" align="center">
              <button class="waves-effect waves-light btn-large red darken-2" type="submit">Login</button>
            </div>
          </form>
                <div class="col s12" align="center">
        <ul>
          <li><a href="#" class="grey-text text-lighten-3">Registrar mesa</a></li>
          <li><font FACE="arial" SIZE=2 COLOR="white" center>TouchFood te ayuda a tener un mejor servicio y comodidad para tus clientes.</font></li>
        </ul>
      </div>
    
        </div>
      </div>
    </div>
    <div class="col s6">
          <br>
          <img class="responsive-img" src="{{asset('images/touchfoodlogo2.png')}}">
    </div>
  </div>
</div>


        <!--              FIN   DEL   LOGIN             -->



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


    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}" ></script>
    <script src="{!! asset('js/init.js') !!}" ></script>
    
  </body>
</html>