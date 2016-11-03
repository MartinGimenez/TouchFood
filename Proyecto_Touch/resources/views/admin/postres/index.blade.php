@extends('admin.template.main')

@section('content')

<div class="card-panel black-text">
			<table class="striped centered black-text">
			    <thead >
			        <tr class="center">
			            <th data-field="name" class="tituloscyp black-text">Categoria</th>
			            
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
			    	@foreach($categorias_postres as $categoria_postre)
			      	<tr>
			        	<td class="agrandarletra">{{ ucwords($categoria_postre->categoria) }}</td>
			        	<form method="POST" action="{{ route('postres.listado') }}">
              			{!! csrf_field() !!}
              			<input type="hidden" name="categoria" value="{{$categoria_postre->categoria}}">	
			        	<td><button style="float:center;" class="btn-floating btn-large waves-effect waves-light red darken-3 z-depth-3" type="submit" name="action"><i class="material-icons right">view_headline</i></button> </td>
			        	</form>
			        
			        	

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