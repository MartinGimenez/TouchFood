
<div class="row">	
	<div class="col s6 ">
		<table class="highlight">
	    	<thead>
	        	<tr>
	             	<th>numero</th>
	              	<th>capacidad</th>
	              	
	          	</tr>
	       	</thead>
	        <tbody>
	        	@foreach($mesas as $mesa)
	        	<tr>
	            	<td>{{ $mesa->numero_mesa }}</td>
	            	<td>{{ $mesa->capacidad }}</td>
	            	<td>{{ $mesa->estado}}</td>
	          	</tr>
	        	@endforeach
	        </tbody>
	    </table>
	</div>
</div>










