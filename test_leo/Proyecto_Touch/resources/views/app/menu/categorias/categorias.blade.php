@extends('app.template.main')

@section('content')
<div class="row">
	<div class="col s4">	
	<ul class="collection with-header">
    	<li class="collection-header"><h4>Comidas</h4></li>
	    @foreach($categorias_comidas as $categoria_comidas)
	    <li class="collection-item"><div>{{ $categoria_comidas->categoria }}<a href="comidas/{{$categoria_comidas->categoria }}" class="secondary-content"><i class="material-icons">send</i></a></div></li>	          	
	    @endforeach
	</ul>
	</div>
	<div class="col s4">	
	<ul class="collection with-header">
    	<li class="collection-header"><h4>Bebidas</h4></li>
	    @foreach($categorias_bebidas as $categoria_bebidas)
	    <li class="collection-item"><div>{{ $categoria_bebidas->categoria }}<a href="bebidas/{{$categoria_bebidas->categoria }}" class="secondary-content"><i class="material-icons">send</i></a></div></li>	          	
	    @endforeach
	</ul>
	</div>
	<div class="col s4">	
	<ul class="collection with-header">
    	<li class="collection-header"><h4>Postres</h4></li>
	    @foreach($categorias_postres as $categoria_postres)
	    <li class="collection-item"><div>{{ $categoria_postres->categoria }}<a href="postres/{{$categoria_postres->categoria }}" class="secondary-content"><i class="material-icons">send</i></a></div></li>	          	
	    @endforeach
	</ul>
	</div>
</div>
@endsection