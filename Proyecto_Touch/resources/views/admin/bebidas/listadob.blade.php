@extends('admin.template.main')

@section('content')

<div class="card-panel black-text">
			<table class="striped centered black-text responsive-table">
			    <thead >
			        <tr class="center">
			            <th data-field="name" class="tituloscyp black-text">Nombre</th>
			            <th data-field="precio" class="tituloscyp black-text">Ingredientes</th>
			            <th data-field="precio" class="tituloscyp black-text">Precio</th>
			            <th data-field="precio" class="tituloscyp black-text">Demora</th>
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
			    	@foreach($bebidas as $bebida)
			      	<tr>
			        	<td class="agrandarletra">{{ ucwords($bebida->nombre) }}</td>
			        	<td class="agrandarletra">{{ ucwords($bebida->ingredientes) }}</td>
			        	<td class="agrandarletra">${{ ucwords($bebida->precio) }}</td>
			        	<td class="agrandarletra">{{ ucwords($bebida->tiempo_servicio) }}</td>

			        	<td><a href="{{ route('admin.bebidas.edit', $bebida->id_bebida) }}" class="btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3"><i class="material-icons right">assignment</i></a>
			        	</td>

			        	<td><a href="{{ route('admin.bebidas.destroy', $bebida->id_bebida) }}" class="btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3"><i class="material-icons right">delete</i></a>
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