@extends('app.template.main')

@section('content')

<div class="row">
    <div class="col s12">
      	<div class="card-panel red darken-2 z-depth-3">
			<table class="bordered responsive-table centered">
			    <thead>
			        <tr>
			            <th data-field="name">Comida</th>
			            <th data-field="precio">Precio</th>
			        </tr>
			    </thead>

			    <tbody>
			    	@foreach($pedidoscomidas as $pedidocomida)
			      	<tr>
			        	<td>{{ $pedidocomida->nombre }}</td>
			        	<td>{{ $pedidocomida->precio }}</td>
			        	
			        	
			      	</tr>
			    @endforeach
			    
			    @foreach($pedidosbebidas as $pedidobebida)
			      	<tr>
			        	<td>{{ $pedidobebida->nombre }}</td>
			        	<td>{{ $pedidobebida->precio }}</td>
			        	
			      	</tr>
			    @endforeach
			   
				@foreach($pedidospostres as $pedidopostre)
			  		<tr>
			   	 		<td>{{ $pedidopostre->nombre }}</td>
			   			<td>{{ $pedidopostre->precio }}</td>
			   			
			   		
			 	 	</tr>
				@endforeach

				</tbody>
			</table>  
		</div>
	</div>
</div>  

El total a pagar es :{{$suma}}   

<a href="{{ route('pagado.index') }}" class="waves-effect waves-light btn-large red darken-4">Pagar</a>


@endsection
