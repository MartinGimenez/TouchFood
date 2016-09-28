@extends('app.template.main')

@section('content')
<div class="row">	
	<div class="col s6 ">
		<table class="highlight">
	    	<thead>
	        	<tr>
	             	<th>Comida</th>
	              	<th>Precio</th>
	              	
	          	</tr>
	       	</thead>
	        <tbody>
	        	@foreach($comidas as $comida)
	        	<tr>
	            	<td>{{ $comida->nombre }}</td>
	            	<td>{{ $comida->precio }}</td>
	          	</tr>
	        	@endforeach
	        </tbody>
	    </table>
	</div>
</div>
@endsection