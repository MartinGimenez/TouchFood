@extends('admin.template.main')

@section('content')
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.tablesorter.js"></script> 
	<div class="card-panel black-text">
			<table class="striped centered black-text tablesorter" id="myTable">
			    <thead >
			        <tr class="center">
			            <th data-field="id_pedido" class="tituloscyp black-text">Pedido</th>
			            <th data-field="numero_mesa" class="tituloscyp black-text">Mesa</th>
			            <th data-field="estado" class="tituloscyp black-text">Estado</th>
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
			    	@foreach($pedido as $pedido)
			      	<tr>
			        	<td class="agrandarletra">{{ ucwords($pedido->id_pedido) }}</td>
			        	<td class="agrandarletra">{{ ucwords($pedido->numero_mesa) }}</td>
			        	<td class="agrandarletra">{{ ucwords($pedido->estado) }}</td>

			        	

			        	
			        	<form method="POST" action="{{ route('pedidoslistadodetalle') }}">
              			{!! csrf_field() !!}
              			<input type="hidden" name="id_pedido" value="{{$pedido->id_pedido}}">	
			        	<td><button style="float:center;" class="btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3" type="submit" name="action"><i class="material-icons right">view_headline</i></button> </td>
			        	</form>
			        
			        	<td><a href="{{ route('admin.pedidoslistado.destroy', $pedido->id_pedido) }}" class="btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3"><i class="material-icons right">delete</i></a>
			        	</td>
			        	

			      		<style type="text/css"> 
                            .agrandarletra {
                            text-align: center;
                            color: white;
                            font-family: Calibri;
                            font-size: 20px;
                            color:rgba(0,0,0,0.71);
                            }
                        </style>
                        
			      	</tr>
			    	@endforeach

			    	</tbody>

			    	</table>

			    	</div>
			    

@endsection
