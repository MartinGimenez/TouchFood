@extends('app.template.main')

@section('content')



      	<div class="card-panel red darken-2 z-depth-3">
			<table class="bordered responsive-table centered">

				

			    <thead >
			        <tr class="center">
			            <th data-field="name" class="tituloscyp">Comida</th>
			            <th data-field="precio" class="tituloscyp">Tiempo de cocción</th>
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
			        	<td class="agrandarletra">$ {{ ucwords($pedidocomida->tiempo_coccion) }}</td>
			        	<td class="agrandarletra">$ {{ ucwords($pedidocomida->precio) }}</td>

			      	 	<td><a href="{{ route('menu.categorias') }}" class="btn tooltipped btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons">delete</i></a></td>	
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
			        	<td class="agrandarletra">$ {{ ucwords($pedidobebida->tiempo_servicio) }}</td>
			        	<td class="agrandarletra">$ {{ ucwords($pedidobebida->precio) }}</td>		        	
			        	
			        	<td><a href="{{ route('menu.categorias') }}" class="btn tooltipped btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons">delete</i></a></td>
			      	</tr>
			    	@endforeach
			   
					@foreach($pedidospostres as $pedidopostre)
			  		<tr>
			  			<td class="agrandarletra">{{ ucwords($pedidopostre->nombre) }}</td>
			  			<td class="agrandarletra">$ {{ ucwords($pedidobebida->tiempo_preparacion) }}</td>
			  			<td class="agrandarletra">$ {{ ucwords($pedidobebida->precio) }}</td>
			  			
			   		 	<td><a href="{{ route('menu.categorias') }}" class="btn tooltipped btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons">delete</i></a></td>	
			 	 	</tr>
					@endforeach
				</tbody>

			</table>  
		</div>
	</div>



@endsection
