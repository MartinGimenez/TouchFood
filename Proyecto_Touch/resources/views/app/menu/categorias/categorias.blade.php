@extends('app.template.main')

@section('content')
<div class="row">
	<!--div class="col s1">
		<img src="https://loscervantinos.files.wordpress.com/2014/03/mancare.jpg">
	</div-->

    <div class="col s5">
        <div class="card-panel red darken-2 z-depth-3"> 
            <ul class="collection with-header grey-text text-lighten-4">
                <div class="card ">
                    <div class="card-image">
                        <img class="responsive-img" src="http://cdn.kiwilimon.com/pages/temporadas/dia-del-padre/header_diapadre2016.jpg">
                        <h1 class="card-title stroke">Comidas</h1>
                        <style type="text/css"> 
                            .stroke {
                            text-align: center;
                            color: white;
                            font-family: Calibri;
                            font-size: 40px;
                            letter-spacing: 10;
                            text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;
                            }
                        </style>

                    </div>
                </div>
                <li class="collection-header red darken-2"></li>
                <style type="text/css"> 
                            .strok1 {
                            text-align: left;
                            color: white;
                            font-family: Calibri;
                            font-size: 20px;
                            }
                        </style>
                   @foreach($categorias_comidas as $categoria_comidas)
                   <li class="collection-item red darken-1 strok1"><div> {{ ucwords($categoria_comidas->categoria) }}<a href="comidas/{{$categoria_comidas->categoria }}" class="grey-text text-lighten-4 right"><i class="material-icons">view_headline</i></a></div></li>             
                @endforeach
            </ul>
        </div>
    </div>

    <div class="col s6">
    	<div class="card-panel red darken-2 z-depth-3">	
			<ul class="collection with-header grey-text text-lighten-4">
			 	<div class="card">
    				<div class="card-image">
    					<img class="responsive-img" src="http://www.palaciooriental.es/images/bebidas.jpg">
    					<h1 class="card-title stroke">Bebidas</h1>
    				</div>
    			</div>
    			<li class="collection-header red darken-2"></li>
	    		@foreach($categorias_bebidas as $categoria_bebidas)
	   			<li class="collection-item red darken-1 strok1"><div>{{ ucwords($categoria_bebidas->categoria) }}<a href="bebidas/{{$categoria_bebidas->categoria }}" class="grey-text text-lighten-4 right"><i class="material-icons">view_headline</i></a></div></li>	          	
	    		@endforeach
			</ul>
        </div>
    </div>

    <div class="col s6">
        <div class="card-panel red darken-2 z-depth-3"> 
            <ul class="collection with-header grey-text text-lighten-4">
                <div class="card">
                    <div class="card-image">
                        <img class="responsive-img" src="http://portal.exprexcaffe.com.br/wp-content/uploads/2009/08/tortas-500x200.jpg">
                        <h1 class="card-title stroke">Postres y cafeteria</h1>
                    </div>
                </div>
                <li class="collection-header red darken-2"></li>
                @foreach($categorias_postres as $categoria_postres)
                <li class="collection-item red darken-1 strok1"><div>{{ ucwords($categoria_postres->categoria) }}<a href="postres/{{$categoria_postres->categoria }}" class="grey-text text-lighten-4 right"><i class="material-icons">view_headline</i></a></div></li>             
                @endforeach
            </ul>
            </ul>
        </div>
    </div>



</div>

@endsection