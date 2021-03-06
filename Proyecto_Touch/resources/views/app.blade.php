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

  <body class="red darken-3">

<!--      ENCABEZADO      -->
  <nav>
    <div class="nav-wrapper red darken-2 z-depth-3">
      <font FACE="Mistral" SIZE=10 COLOR="white" center><b>Touch</b></font>
      <font FACE="Mistral" SIZE=10 COLOR="white" center>Food</font>
      <img src="images/IconoPrincipal4.jpg">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <!--ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul-->
    </div>
  </nav>
<!-- FIN      DEL     ENCABEZADO-->

 <div class="row">
    <div class="section red darken-3">
      <div class="col s7">
        <div class="col s6">
          <h2 class="header white-text text-darken-3 lighten-3">Bienvenidos a TouchFood</h2>
          <p class="white-text text-darken-3 lighten-3">Nos especializamos en hacer que usted se sienta más cómodo.</p>
        </div>

        <div class="col s6">
          <h1></h1>
        </div>
        <div class="col s6">
          <img src="images/IconoPrincipal3.jpg">
        </div>
      </div>

      <div class="col s4">
          <h3 class="grey-text text-lighten-5" align="center">Su cuenta</h3>
          <h5 class="grey-text text-lighten-5" align="center">Inicia sesión para acceder a su perfil</h5>
          <div class="card red darken-1">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="email" type="email" class="validate white-text text-lighten-4 right">
                <label class="grey-text text-lighten-4 right" for="email">Introduce tu correo electronico</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix"></i>
                <input id="password" type="password" class="validate white-text text-lighten-4 right">
                <label class="grey-text text-lighten-4 right" for="password">Contraseña</label>
              </div>        
            </div>
            <div class="col s12" align="center">
                  <a class="waves-effect waves-light btn-large red darken-2">Ingresar</a>
            </div>
            <div class="col s12">
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Olvide mi contraseña</a><a class="grey-text text-lighten-3" href="https://www.facebook.com/TouchFood_ARG"></a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Crear cuenta</a><a class="grey-text text-lighten-3" href="https://www.facebook.com/TouchFood_ARG"></a></li>
                </ul>
            </div>
            <div class="card-action" align="center">
              <a href="#" class="grey-text text-lighten-3">Olvide mi contraseña</a>
            </div>
          </div>
          <div class="col s12" align="center">
            <ul>
              <li><a href="#" class="grey-text text-lighten-3">Crear cuenta</a></li>
              <li><font FACE="arial" SIZE=2 COLOR="white" center>TouchFood te ayuda a tener un mejor servicio y comodidad para tus clientes.</font></li>
            </ul>
          </div>
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
                      <li><a class="grey-text text-lighten-3" href="#!">Facebook     </a><img src="images/Iconos/facebook_icono.png" class="circle"><a class="grey-text text-lighten-3" href="https://www.facebook.com/TouchFood_ARG"> TouchFood_ARG</a></li>
                      <li><a class="grey-text text-lighten-3" href="#!">Twitter     </a><img src="images/Iconos/twitter_icono.jpg" class="circle"><a class="grey-text text-lighten-3" href="https://www.twitter.com.com/TouchFood_ARG"> TouchFood_ARG</a></li>
                      <li><a class="grey-text text-lighten-3" href="#!">Instagram     </a><img src="images/Iconos/instagram_icono.png" class="circle"><a class="grey-text text-lighten-3" href="https://www.instagram.com/TouchFood_ARG"> TouchFood_ARG</a></li>
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