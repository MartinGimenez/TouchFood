<html>
    <head class="red darken-3">
        <title>Touchfood</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{!! asset('css/materialize.min.css') !!}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                margin-bottom: 40px;
            }

            .quote {
                font-size: 24px;
            }

            a {
                color: #222;
                text-decoration: none;
                font-size: 20px;
                font-weight: bold;
            }
        </style>
    </head>
    <body class="red darken-3">
        <div class="container red darken-3">
            <div class="content red darken-3">
                <h5 class="white-text">Tu comida a un toque</h5>
                <div class="stroke">touch<b>food</b></div>


                <a class="white-text stroke1" target="_blank" href="{{ action('Auth\AuthController@getLogin') }}">Usuario</a> <a class="white-text stroke1">|</a> <a class="white-text stroke1" target="_blank" href="{{ action('Auth\AdminController@getLogin') }}">Administrador</a>



                



                <style type="text/css"> 
                    .stroke {
                    color: white;
                    font-family: Calibri;
                    font-size: 80px;
                    }

                 <style type="text/css"> 
                    .stroke1 {
                    color: white;
                    font-family: Calibri;
                    font-size: 20px;
                    }   

            </style>
            </div>
        </div>
    </body>
</html>
