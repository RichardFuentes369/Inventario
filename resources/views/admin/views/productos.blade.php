@extends('Plantillas.puser')

@section('content')
	<div class="col-sm-12">
		<h3 align="left"><strong>Productos de la categoria <br>
					@foreach ($category_name as $cn)
						{{ $cn -> category_name}}
					@endforeach</strong>
		</h3>
	</div>
	<hr>  
	<div class="col-sm-12">
    	<div class="row">
      		<div class="col-sm-12"> 
				@include('flash::message')	
      			@include('admin.table.tabla-productos')
		  </div>
    	</div>
		<form action="{{ url('administrador')}}/{{'inventarios'}}" method="Get">
			<button class="btn btn-link btn-sm" title="Volver">
				<i class="material-icons">undo</i>
			</button>
		</form>
  	</div>
	<hr>
@endsection
