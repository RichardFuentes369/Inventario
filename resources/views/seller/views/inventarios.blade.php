@extends('Plantillas.puser')

@section('content')
	<div class="col-sm-12">
		<h3 align="left"><strong>Inventario</strong></h3>
	</div>
	<hr>
	@include('seller.table.tabla-inventarios')
	<hr>
@endsection