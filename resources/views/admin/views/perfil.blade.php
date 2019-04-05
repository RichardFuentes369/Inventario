@extends('Plantillas.puser')

@section('content')
	<div class="col-sm-12">
		<h3 align="left"><strong>{{ Auth::user()->name }} {{ Auth::user()->lastname }}</strong></h3>
	</div>
	<hr>
	@include('admin.form.form-profile')
	<hr>
@endsection
