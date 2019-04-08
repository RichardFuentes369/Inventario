@extends('Plantillas.puser')

@section('content')
	@if(Auth::check() == true) 	
	<div class="col-sm-12">
		<h3 align="left" style="color: red"><center><strong>¡Aviso!</strong></center></h3>
	</div>
	<hr>
		<center>
			<h2>Por tu seguridad y la de la empresa <br> recuerda siempre cerrar tu session <br> cuando no te encuentres frente a la monitor
			</h2>
			<form action="{{ url('index') }}/{{ ('Logout') }}">
				<button class="btn btn-danger">Salir</button> <br><br>		
			</form>
		</center>
	<hr>
	@else
		@include('home.form.form-login')
	@endif
@endsection