@extends('admin.template.main')

@section('content')

		<div class="card-panel black-text">
			<table class="striped centered black-text">
			    <thead >
			        <tr class="center">
			            <th data-field="name" class="tituloscyp black-text">Número</th>
			            <th data-field="precio" class="tituloscyp black-text">Capacidad</th>
			            <th data-field="precio" class="tituloscyp black-text">Estado</th>
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
			    	@foreach($mesas as $mesa)
			      	<tr>
			        	<td class="agrandarletra">{{ ucwords($mesa->name) }}</td>
			        	<td class="agrandarletra">{{ ucwords($mesa->capacidad) }}</td>
			        	<td class="agrandarletra">{{ ucwords($mesa->estado) }}</td>

			        	<td><a href="{{ route('admin.mesas.edit', $mesa->id) }}" class="btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3"><i class="material-icons right">assignment</i></a>
			        	</td>
			        	
			        	<td><a href="{{ route('admin.mesas.destroy', $mesa->id) }}" class="btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3"><i class="material-icons right">delete</i></a>
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