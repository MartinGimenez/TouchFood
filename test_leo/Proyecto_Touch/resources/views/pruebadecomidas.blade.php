@extends('app.template.main')

@section('content')


@foreach($comidas as $comida)
<div class="row">
	<div class="col s4">
		<div class="card small">
			<div class="card-image waves-effect waves-block waves-light">
		      	<img class="activator" src="images/logo2.jpg">
		    </div>
		    <div class="card-content">
		    	 	<span class="card-title activator grey-text text-darken-4">{{ $comida->nombre }}<i class="material-icons right">more_vert</i></span>
		     	<p><a href="#">This is a link</a></p>
		    </div>
		</div>
	</div>
	@endforeach
</div>

{!! $comidas->render() !!}
@endsection

