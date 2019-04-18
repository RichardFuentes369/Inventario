@extends('Plantillas.puser')

@section('content')
	<div class="col-sm-12">
		<h3 align="left"><strong>Productos de la categoria <br>
					@foreach ($category_name as $cn)
						{{ $cn -> category_name}}
					@endforeach</strong>
		</h3>
		<marquee>Si por alguna razón el proveedor quedo mal ingresado, debes eliminar el producto y volverlo a incluir</marquee>
	</div>
	<hr>  
	<div class="col-sm-12">
    	<div class="row">
      		<div class="col-sm-1"></div>
      		<div class="col-sm-10"> 
      			@include('seller.table.tabla-productos')
		  </div>
      	<div class="col-sm-1"></div> 
    	</div>
		<form action="{{ url('vendedor')}}/{{'inventarios'}}" method="Get">
			<button class="btn btn-link btn-sm" title="Volver">
				<i class="material-icons">undo</i>
			</button>
		</form>
  	</div>
	<hr>
@endsection
