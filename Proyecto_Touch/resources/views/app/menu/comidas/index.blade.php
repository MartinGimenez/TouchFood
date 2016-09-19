@extends('app.template.main')

@section('content')
<div class="row">	

	<div class="col s12">
        <div class="card-panel red darken-2 z-depth-3"> 
            <ul class="collection with-header grey-text text-lighten-4">
                <div class="card">
                    <div class="card-image">
                        <!--img class="responsive-img" src="http://cdn.kiwilimon.com/pages/temporadas/dia-del-padre/header_diapadre2016.jpg"-->
                        <h1 class="card-title stroke">Comidas</h1>
                        <style type="text/css"> 
                            .stroke {
                            text-align: center;
                            color: white;
                            font-family: Georgia, serif;
                            font-size: 40px;
                            letter-spacing: 10;
                            text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;
                            }
                        </style>

                    </div>
                </div>
                <table class="highlight">
	    			<!--thead>

	        			<tr>
			             	<th>Comida</th>
			              	<th>Precio</th>
	              	
	          			</tr>
	       			</thead-->
	        		<tbody>
	        		@foreach($comidas as $comida)
	        		<tr>
		            	<!--td>{{ ucwords($comida->nombre) }}</td>
		            	<td>{{ ucwords($comida->precio) }}</td-->
		            	<div class="col s4">
					    	<h2 class="header">{{ ucwords($comida->nombre) }}</h2>
					    	<div class="card vertical">
						      		<div class="card-image">
						        		<img src="http://cdn.kiwilimon.com/pages/temporadas/dia-del-padre/header_diapadre2016.jpg">
						        		<a href="#">{{ ucwords($comida->precio) }}</a>
						      		</div>
						      	<div class="card-stacked">
							        <div class="card-content">
							        	<p>I am a very simple card. I am good at containing small bits of information.</p>
							        </div>
							        <div class="card-action">
							        	<a href="#">{{ ucwords($comida->precio) }}</a>
							        </div>
						      	</div>
					    	</div>
					  	</div>
	          		</tr>
	        		@endforeach
	        		</tbody>
	    		</table>
            </ul>
        </div>
    </div>

	<div class="col s11">
        <div class="col s4" align="center">
            <a href="{{ route('menu.categorias') }}" <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light btn-large red darken-2">Menú</button></a>
        </div>
        <div class="col s4" align="center">
            <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light btn-large red darken-2">Pedido</button>
        </div>
        <div class="col s4" align="center">
            <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light btn-large red darken-2">Pago</button>
        </div>
    </div>
</div>
@endsection