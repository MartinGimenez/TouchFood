@extends('admin.template.main')

@section('content')

@foreach($reportes_recaudacion_comidas as $recac)
			      	<tr>
			        	<td class="agrandarletra">{{ ucwords($reca->precio) }}</td>
@endforeach     	

@foreach($reportes_recaudacion_bebidas as $recab)
			      	<tr>
			        	<td class="agrandarletra">{{ ucwords($reca->precio) }}</td>
			        	
@endforeach




@endsection