@extends('app.template.main')

@section('content')

    <!-- ESTO SON LAS IMAGENES QUE SE MUEVEN EN EL MEDIO -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>


@endsection



@extends('app.template.main')

@section('content')
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
                <table class="highlight">
            <thead>
                <tr>
                    <th>Comida</th>
                      <th>Precio</th>
                      <th>Ingredientes</th>
                  </tr>
              </thead>
              <tbody>
              @foreach($comidas as $comida)
              <tr>
                  <td>{{ ucwords($comida->nombre) }}</td>
                  <td>{{ ucwords($comida->precio) }}</td>
                  <td>{{ ucwords($comida->ingredientes) }}</td>
                </tr>
              @endforeach
              </tbody>
          </table>
          {!! $comidas->render() !!}
            </ul>
        </div>
    </div>

</div>


@endsection

