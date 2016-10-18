@extends('app.template.main')

@section('content')

    



  <div class="row">
    <div class="col s12">
      <div class="card-panel red darken-2 z-depth-3"> 
        <div class="contenedor">
          <ul id="comidas" class="collection red darken-2 white-text">
            @foreach($comidas as $comida)
            <li class="collection-item avatar red darken-2">
      
              @if($categoria == "pollos")
              <img src="{{asset('images/Iconos/pollos.jpg')}}" alt="" class="circle">
              @endif
              @if($categoria == "carnes")
              <img src="{{asset('images/Iconos/carnes.jpg')}}" alt="" class="circle">
              @endif
              @if($categoria == "cerdos")
              <img src="{{asset('images/Iconos/cerdos.jpg')}}" alt="" class="circle">
              @endif
              @if($categoria == "vegetales")
              <img src="{{asset('images/Iconos/vegetales.jpg')}}" alt="" class="circle">
              @endif
              @if($categoria == "pescados")
              <img src="{{asset('images/Iconos/pescados.jpg')}}" alt="" class="circle">
              @endif
              @if($categoria == "pastas")
              <img src="{{asset('images/Iconos/pastas.jpg')}}" alt="" class="circle">
              @endif
              @if($categoria == "pizzas")
              <img src="{{asset('images/Iconos/pizzas.jpg')}}" alt="" class="circle">
              @endif
              @if($categoria == "picadas")
              <img src="{{asset('images/Iconos/picadas.jpg')}}" alt="" class="circle">
              @endif
              @if($categoria == "minutas")
              <img src="{{asset('images/Iconos/minutas.jpg')}}" alt="" class="circle">
              @endif
              @if($categoria == "sopas")
              <img src="{{asset('images/Iconos/sopas.jpg')}}" alt="" class="circle">
              @endif
              @if($categoria == "ensaladas")
              <img src="{{asset('images/Iconos/ensaladas.jpg')}}" alt="" class="circle">
              @endif
              @if($categoria == "especiales")
              <img src="{{asset('images/Iconos/especiales.jpg')}}" alt="" class="circle">
              @endif
              @if($categoria == "verduras")
              <img src="{{asset('images/Iconos/verduras.jpg')}}" alt="" class="circle">
              @endif

              <span class="title">{{ ucwords($comida->nombre) }}</span>
              <p>${{ ucwords($comida->precio) }}<br>
              {{ ucwords($comida->ingredientes) }}
              </p>
              @if($tipo=="comidas")
              <form method="POST" action="{{ route('pedidoscomidas') }}">
              {!! csrf_field() !!}
              <input type="hidden" name="id_plato" value="{{$comida->id_plato}}">
              <div class="secondary-content"><a class="waves-effect waves-light btn modal-trigger" href="#{{$comida->id_plato}}">Pedir</a>
              </form>
              @endif

               @if($tipo=="bebidas")
              <form method="POST" action="{{ route('pedidosbebidas') }}">
              {!! csrf_field() !!}
              <input type="hidden" name="id_bebida" value="{{$comida->id_bebida}}">
              <div class="secondary-content"><a class="waves-effect waves-light btn modal-trigger" href="#{{$comida->id_bebida}}">Pedir</a>
              </form>
              @endif

               @if($tipo=="postres")
              <form method="POST" action="{{ route('pedidospostres') }}">
              {!! csrf_field() !!}
              <input type="hidden" name="id_postre" value="{{$comida->id_postre}}">
              <div class="secondary-content"><a class="waves-effect waves-light btn modal-trigger" href="#{{$comida->id_postre}}">Pedir</a>
              </form>
              @endif
              

              @if ($tipo=="comidas")
              <div id="{{$comida->id_plato}}" class="modal">
                <div class="modal-content">
                  <h4>Confirmación</h4>
                  <p>¿Desea pedir {{ ucwords($comida->nombre) }}? </p>
                </div>
                <div class="modal-footer">
                  <button class="btn waves-effect waves-light red darken-2" type="submit" name="action"> Pedir <i class="material-icons right">send</i></button>
                </div>
              </div>
              @endif
              @if ($tipo=="bebidas")
              <div id="{{$comida->id_bebida}}" class="modal">
                <div class="modal-content">
                  <h4>Confirmación</h4>
                  <p>¿Desea pedir {{ ucwords($comida->nombre) }}? </p>
                </div>
                <div class="modal-footer">
                  <button class="btn waves-effect waves-light red darken-2" type="submit" name="action"> Pedir <i class="material-icons right">send</i></button>
                </div>
              </div>
              @endif
              @if ($tipo=="postres")
              <div id="{{$comida->id_postre}}" class="modal">
                <div class="modal-content">
                  <h4>Confirmación</h4>
                  <p>¿Desea pedir {{ ucwords($comida->nombre) }}? </p>
                </div>
                <div class="modal-footer">
                  <button class="btn waves-effect waves-light red darken-2" type="submit" name="action"> Pedir <i class="material-icons right">send</i></button>
                </div>
              </div>
              @endif


              </form>
            </li>
          @endforeach
          </ul>
      
        <!--  <span style="visibility: hidden;">
            {//!! $comidas->render() !!}    
          </span>

          <div class="loading"></div> -->
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
