@extends('app.template.main')

@section('content')

    <!-- ESTO SON LAS IMAGENES QUE SE MUEVEN EN EL MEDIO -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="images/1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="stroke">Bienvenidos a TouchFood</h3>
          <h5 class="stroke">Nos especializamos en hacer que usted se sienta más cómodo.</h5>
          <a href="{{ route('menu.categorias') }}" <button type="button" class="waves-effect waves-light btn-large red darken-2">Menú</button></a>
        </div>
      </li>
      <li>
        <img src="images/2.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3 class="stroke">Realiza tu pedido!</h3>
          <h5 class="stroke">Puedes ver las comidas que estan esperando por ti</h5>
        </div>
      </li>
      <li>
        <img src="images/3.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3 class="stroke">Clickea en Menú</h3>
          <h5 class="stroke">Para comenzar el pedido.</h5>
        </div>
      </li>
      <li>
        <img src="images/4.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="stroke">Esperamos que disfrutes nuestro servicio!</h3>
          <h5 class="stroke">Nos esforzamos para que su experiencia sea la más agradable.</h5>
        </div>
      </li>
    </ul>
     <style type="text/css"> 
        .stroke {
        
        color: white;
        font-family: Calibri;
        font-size: 40px;
        letter-spacing: 10;
        text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;
        }
      </style>
  </div>


@endsection




