@extends('Plantillas.puser')

@section('content')
	<div class="col-sm-12">
		<h3 align="left"><strong>Ajustes</strong></h3>
	</div>
	<hr>
    @include('flash::message')  
	@include('seller.form.form-settings')
	<hr>
@endsection
