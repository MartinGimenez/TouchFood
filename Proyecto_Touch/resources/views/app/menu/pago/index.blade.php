@extends('app.template.main')

@section('content')

<div class="row">
    <div class="col s12">
    	<div class="col s12">
			<div class="card-panel red darken-2 z-depth-3">
				<thead>
					<tr>
						<ul class="center">

						    <li><a class="tiempoyprecio_total">Su cuenta final:</a></li>

						</ul>
					</tr>
				</thead>
			</div>
		</div>

      	<div class="card-panel red darken-2 z-depth-3">
			<table class="bordered  centered">
			    <thead>
			        <tr>
			            <th data-field="name" class="tituloscyp">Comida</th>
			            <th data-field="precio" class="tituloscyp">Precio</th>
			            <style type="text/css"> 
                            .tituloscyp {
                            text-align: center;
                            color: white;
                            font-family: Calibri;
                            font-size: 35px;
                            }
                        </style>
			        </tr>
			    </thead>

			    <tbody>
			    	@foreach($pedidoscomidas as $pedidocomida)
			      	<tr>
			        	<td class="agrandarletra">{{ ucwords($pedidocomida->nombre) }}</td>
			        	<td class="agrandarletra">$ {{ ucwords($pedidocomida->precio) }}</td>

			        	<style type="text/css"> 
                            .agrandarletra {
                            text-align: center;
                            color: white;
                            font-family: Calibri;
                            font-size: 20px;
                            }
                        </style>
			        	
			      	</tr>
			    @endforeach
			    
			    @foreach($pedidosbebidas as $pedidobebida)
			      	<tr>
			        	<td class="agrandarletra">{{ ucwords($pedidobebida->nombre) }}</td>
			        	<td class="agrandarletra">$ {{ ucwords($pedidobebida->precio) }}</td>
			        	
			      	</tr>
			    @endforeach
			   
				@foreach($pedidospostres as $pedidopostre)
			  		<tr>
			   	 		<td class="agrandarletra">{{ ucwords($pedidopostre->nombre) }}</td>
			   			<td class="agrandarletra">$ {{ ucwords($pedidopostre->precio) }}</td>
			   			
			   		
			 	 	</tr>
				@endforeach

				</tbody>
			</table>  
		</div>
	</div>

	<div class="col s12 center">
   
			<thead>
			    <tr>
			       	<ul>

			            <li><a class="tiempoyprecio_total">El total a pagar es: $ {{$suma}} </a></li>

			        </ul>
			        <style type="text/css"> 
                        .tiempoyprecio_total {
                            text-align: center;
                            color: white;
                            font-family: Calibri;
                            font-size: 40px;
                        }
                    </style>
			    </tr>
			</thead>
	
	</div>

	<div class="col s12">
      	
			   
			       	<ul  class="center">

			       		<!-- 							REALIZAR PAGOS									  -->

			            <a href="{{ route('pagado.index') }}" class="waves-effect waves-light btn-large red darken-2" type="submit">¡Realizar pago!</a>
			            
			        </ul>
			        <style type="text/css"> 
                        .tiempoyprecio_total1 {
                            text-align: center;
                            color: white;
                            font-family: Calibri;
                            font-size:60px;
                        }
                    </style>
			    
			
		
	</div>
	<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="pk_test_Ptvbrt1Bs5azOl6H4YEVlQ6U"
                        data-amount="{{$sumatarjeta}}"
                        data-description="Total a pagar: $ {{$suma}} "
                        data-label="Pagar con tarjeta de credito"
                        data-currency="ARS"
                        data-locale="auto"
                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                      </script>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>

</div>  

@endsection
