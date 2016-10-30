@extends('app.template.main')

@section('content')



      	<div class="card-panel red darken-2 z-depth-3">
			<table class="bordered responsive-table centered">

				

			    <thead >
			        <tr class="center">
			            <th data-field="name" class="tituloscyp">Comida</th>
			            <th data-field="precio" class="tituloscyp">Demora</th>
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
			        	<td class="agrandarletra"> {{ ucwords($pedidocomida->tiempo_coccion) }}</td>
			        	<td class="agrandarletra">$ {{ ucwords($pedidocomida->precio) }}</td>

			        	<form method="POST" action="{{ route('pedidoscancelacionc') }}">
              			{!! csrf_field() !!}
              			<input type="hidden" name="id_plato" value="{{$pedidocomida->id_plato}}">	
			        	<td><button style="float:center;" class="btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3" type="submit" name="action"><i class="material-icons right">delete</i></button> </td>
			        	</form>

			      	 	
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
			        	<td class="agrandarletra"> {{ ucwords($pedidobebida->tiempo_servicio) }}</td>
			        	<td class="agrandarletra">$ {{ ucwords($pedidobebida->precio) }}</td>	

			        	<form method="POST" action="{{ route('pedidoscancelacionb') }}">
              			{!! csrf_field() !!}
              			<input type="hidden" name="id_bebida" value="{{$pedidobebida->id_bebida}}">	
			        	<td><button style="float:center;" class="btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3" type="submit" name="action"><i class="material-icons right">delete</i></button> </td>
			        	</form>



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
			   
					@foreach($pedidospostres as $pedidopostre)
			  		<tr>
			  			<td class="agrandarletra">{{ ucwords($pedidopostre->nombre) }}</td>
			  			<td class="agrandarletra"> {{ ucwords($pedidopostre->tiempo_preparacion) }}</td>
			  			<td class="agrandarletra">$ {{ ucwords($pedidopostre->precio) }}</td>
			  			
			   		 	<form method="POST" action="{{ route('pedidoscancelacionp') }}">
              			{!! csrf_field() !!}
              			<input type="hidden" name="id_postre" value="{{$pedidopostre->id_postre}}">	
			        	<td><button style="float:center;" class="btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3" type="submit" name="action"><i class="material-icons right">delete</i></button> </td>
			        	</form>



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
				</tbody>

			</table>  
		</div>
	</div>



@endsection
