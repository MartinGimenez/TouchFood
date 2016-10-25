@extends('app.template.main')

@section('content')

<div class="row">
    <div class="col s12">

    	<div class="col s12">
			<div class="card-panel red darken-2 z-depth-3">
				<thead>
					<tr>
						<ul class="center">

						    <li><a class="tiempoyprecio_total">Este es su pedido, debe confirmarlo a continuación:</a></li>

						</ul>
					</tr>
				</thead>
			</div>
		</div>

      	<div class="card-panel red darken-2 z-depth-3">
			<table class="bordered responsive-table centered">

				

			    <thead >
			        <tr class="center">
			            <th data-field="name" class="tituloscyp">Comida</th>
			            <th data-field="precio" class="tituloscyp">Ingredientes</th>
			            <th data-field="precio" class="tituloscyp">Tiempo de cocción</th>
			            <th data-field="precio" class="tituloscyp">Precio</th>
			            <style type="text/css"> 
                            .tituloscyp {
                            text-align: center;
                            color: white;
                            font-family: Calibri;
                            font-size: 50px;
                            }
                        </style>
			        </tr>
			    </thead>

			    <tbody>
			    	@foreach($pedidoscomidas as $pedidocomida)
			      	<tr>
			        	<td class="agrandarletra">{{ ucwords($pedidocomida->nombre) }}</td>
			        	<td class="agrandarletra">$ {{ ucwords($pedidocomida->precio) }}</td>
			        	<td class="agrandarletra">$ {{ ucwords($pedidocomida->precio) }}</td>
			        	<td class="agrandarletra">$ {{ ucwords($pedidocomida->precio) }}</td>

			      	 	<td><a href="{{ route('menu.categorias') }}" class="btn tooltipped btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons">delete</i></a></td>	
			      		<style type="text/css"> 
                            .agrandarletra {
                            text-align: center;
                            color: white;
                            font-family: Calibri;
                            font-size: 25px;
                            }
                        </style>
			      	</tr>
			    	@endforeach
			   
			    	@foreach($pedidosbebidas as $pedidobebida)
			      	<tr>
			        	<td class="agrandarletra">{{ ucwords($pedidobebida->nombre) }}</td>
			        	<td class="agrandarletra">$ {{ ucwords($pedidobebida->precio) }}</td>
			        	<td class="agrandarletra">$ {{ ucwords($pedidobebida->precio) }}</td>
			        	<td class="agrandarletra">$ {{ ucwords($pedidobebida->precio) }}</td>		        	
			        	
			        	<td><a href="{{ route('menu.categorias') }}" class="btn tooltipped btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons">delete</i></a></td>
			      	</tr>
			    	@endforeach
			   
					@foreach($pedidospostres as $pedidopostre)
			  		<tr>
			  			<td class="agrandarletra">{{ ucwords($pedidopostre->nombre) }}</td>
			  			<td class="agrandarletra">$ {{ ucwords($pedidopostre->precio) }}</td>
			  			<td class="agrandarletra">$ {{ ucwords($pedidobebida->precio) }}</td>
			  			<td class="agrandarletra">$ {{ ucwords($pedidobebida->precio) }}</td>
			  			
			   		 	<td><a href="{{ route('menu.categorias') }}" class="btn tooltipped btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons">delete</i></a></td>	
			 	 	</tr>
					@endforeach
				</tbody>

			</table>  
		</div>
	</div>

	<div class="col s12">
      	<div class="card-panel red darken-2 z-depth-3">
			<thead>
			    <tr>
			       	<ul>

			            <li><a class="tiempoyprecio_total1">Su pedido tardará apróximadamente:</a></li>

			        </ul>
			        <style type="text/css"> 
                        .tiempoyprecio_total1 {
                            text-align: center;
                            color: white;
                            font-family: Calibri;
                            font-size: 40px;
                        }
                    </style>
			    </tr>
			</thead>
		</div>
	</div>

	<div class="col s12">
      	<div class="card-panel red darken-2 z-depth-3">
			<thead>
			    <tr>
			       	<ul class="center">

			       		<!-- 							AGREGAR LA RUTA PARA QUE VAYA A PAGOS									  -->

			            <a href="{{ route('menu.categorias') }}" <button class="tiempoyprecio_total" type="submit">¡Realizar pedido!</button></a>

			        </ul>
			        <style type="text/css"> 
                        .tiempoyprecio_total {
                            text-align: center;
                            color: white;
                            font-family: Calibri;
                            font-size: 60px;
                        }
                    </style>
			    </tr>
			</thead>
		</div>
	</div>

</div>      


@endsection
