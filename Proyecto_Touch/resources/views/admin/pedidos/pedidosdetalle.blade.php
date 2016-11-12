@extends('admin.template.main')

@section('content')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.tablesorter.js"></script> 
	<div class="card-panel black-text">
			<table class="striped centered black-text" id="myTable">
			    <thead >
			        <tr class="center">
			            <th data-field="" class="tituloscyp black-text">Orden</th>
			            <th data-field="" class="tituloscyp black-text">Hora de Orden</th>
			            
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
			    	@foreach($pedidoscomidas as $pedidoc)
			      	<tr>
			        	<td class="agrandarletra">{{ ucwords($pedidoc->nombre) }}</td>
			        	<td class="agrandarletra">{{ ucwords($pedidoc->horac) }}</td>
			        	

			        	

			        	

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



			    	@foreach($pedidosbebidas as $pedidob)
			      	<tr>
			        	<td class="agrandarletra">{{ ucwords($pedidob->nombre) }}</td>
			        	<td class="agrandarletra">{{ ucwords($pedidob->horab) }}</td>
			        	

			        	

			        	

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



			    	@foreach($pedidospostres as $pedidop)
			      	<tr>
			        	<td class="agrandarletra">{{ ucwords($pedidop->nombre) }}</td>
			        	<td class="agrandarletra">{{ ucwords($pedidop->horap) }}</td>
			        	

			        	

			        	

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
