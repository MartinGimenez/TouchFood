@extends('admin.template.main')

@section('content')
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.tablesorter.js"></script> 
	<div class="card-panel black-text">
			<table class="striped centered black-text" id="myTable">
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
			    	@foreach($pedidos as $pedido)
			      	<tr>
			        	<td class="agrandarletra">{{ ucwords($pedido->id_pedido) }}</td>
			        	<td class="agrandarletra">{{ ucwords($pedido->numero_mesa) }}</td>
			        	<td class="agrandarletra">{{ ucwords($pedido->estado) }}</td>

			        	<td>
							<!-- Modal Trigger -->
							<a class="modal-trigger waves-effect waves-light red darken-3 btn" href="#modal1">Detalle</a>

							<!-- Modal Structure -->
							<div id="modal1" class="modal modal-fixed-footer">
							<div class="modal-content">
							  <h4>Detalle del pedido</h4>
							  <p>Acá va la tablacon el detalle</p>
							</div>
							<div class="modal-footer">
							  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
							</div>
							</div>
						</td>


			        	<td><a href="{{ route('admin.pedidos.edit', $pedido->id_pedido) }}" class="btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3"><i class="material-icons right">assignment</i></a>
			        	</td>
			        	
			        	<td><a href="{{ route('admin.pedidos.destroy', $pedido->id_pedido) }}" class="btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3"><i class="material-icons right">delete</i></a>
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
<script >
$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
</script>

<script>
$(document).ready(function() {
	$("myTable").tableSorter({
		//sortColumn: 'pedido'	//Índice de la columna o nombre (en minúsculas) que hemos dado a la columna, para ordenar.
	});
});
</script>