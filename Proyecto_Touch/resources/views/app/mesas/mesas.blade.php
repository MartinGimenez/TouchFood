@extends('app.template.mainuno')

@section('content')

		<div class="card-panel red darken-2 z-depth-3">
			<table class="bordered responsive-table centered">
			    <thead >
			        <tr class="center">
			            <th data-field="name" class="tituloscyp">Número</th>
			            <th data-field="precio" class="tituloscyp">Capacidad</th>
			            <th data-field="precio" class="tituloscyp">Estado</th>
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


			        	<td><button style="float:center;" class="btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3" type="submit" name="action"><i class="material-icons right">delete</i></button> </td>
			        	

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

@endsection
