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
      		<div class="col-sm-2"></div>
      		<div class="col-sm-8"> 
      			@include('admin.table.tabla-productos')
		  </div>
      	<div class="col-sm-2"></div> 
    	</div>
  	</div>
	<hr>
@endsection
