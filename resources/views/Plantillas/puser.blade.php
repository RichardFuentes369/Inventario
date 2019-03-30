<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body class="index">
	
	<div class="banner">
		<div class="col-sm-12 navbar navbar-dark bg-dark">
	  		<a class="navbar-brand font-tittle" href="{{ url('administrador') }}/{{ 'perfil' }}">INVENTARIO</a>
		   	<sub style="color: white; float: right;margin-top: 40px">Javier Ricardo Baron Fuentes</sub>
		</div>
	</div>

	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<br><br>
				<div class="card">
				  <div class="card-header">
				  	<div class="col-sm-12">
					  	<div class="row">
					  		<div class="col-sm-6" align="left">
					  			@if(Auth::user()->category == 'admin')
					  			<label for="login"><b>Adminitrador:<br>{{ Auth::user()->name }} {{ Auth::user()->lastname }}</b></label>
					  			@else
					  			<label for="login"><b>Vendedor:<br>{{ Auth::user()->name }} {{ Auth::user()->lastname }}</b></label>
					  			@endif
					  		</div>
					  		<div class="col-sm-6" align="right">
					  		    <label for="login"><b>{{ Auth::user()->companies->business_name }}</b></label><br>
					  		</div>
					  	</div>				  		
				  	</div>
				  </div>
				  <div class="card-body">
				  	<div class="form-group">
				  		@if(Auth::user()->category == 'admin')
				  		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; border-radius: 16px">
						    <div class="collapse navbar-collapse">
							    <ul class="navbar-nav mr-auto">
							      	<li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							        		Cuenta
							        	</a>
							        	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							          		<a class="dropdown-item" href="{{ url('administrador') }}/{{ 'perfil' }}">Perfil</a>
							          		<a class="dropdown-item" href="{{ url('administrador') }}/{{ 'ajustes' }}">Ajustes</a>
							          		<a class="dropdown-item" href="{{ url('index') }}/{{('Logout')}}">{{ csrf_field() }}Salir</a>
							        	</div>
							      	</li>
							      	<li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							          	Control
							        	</a>
							        	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								        	<a class="nav-link" href="{{ url('administrador') }}/{{ 'categorias' }}">Categorias</a>
								        	<a class="nav-link" href="{{ url('administrador') }}/{{ 'inventarios' }}">Inventario</a>
							        	</div>
							      	</li>	
							      	<li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							          	Personal
							        	</a>
							        	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							        		<a class="nav-link" href="{{ url('administrador') }}/{{ 'empleados' }}">Empleados</a>
							        		<a class="nav-link" href="{{ url('administrador') }}/{{ 'clientes' }}">Clientes</a>
							           		<a class="nav-link" href="{{ url('administrador') }}/{{ 'proveedores' }}">Proveedores</a>
							        	</div>
							      	</li>
							      	<li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							          	Movimientos
							        	</a>
							        	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							          		<a class="dropdown-item" href="{{ url('administrador') }}/{{ 'ingresos' }}">Ingresos</a>
							          		<a class="dropdown-item" href="{{ url('administrador') }}/{{ 'gastos' }}">Gastos</a>
							          		<a class="dropdown-item" href="{{ url('administrador') }}/{{ 'costos' }}">Costos</a>
							        	</div>
							      	</li>
							    </ul>
							</div>
						</nav>
						@else
				  		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; border-radius: 16px">
						    <div class="collapse navbar-collapse">
							    <ul class="navbar-nav mr-auto">
							      	<li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							        		Cuenta
							        	</a>
							        	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							          		<a class="dropdown-item" href="{{ url('vendedor') }}/{{ 'perfil' }}">Perfil</a>
							          		<a class="dropdown-item" href="{{ url('vendedor') }}/{{ 'ajustes' }}">Ajustes</a>
							          		<a class="dropdown-item" href="{{ url('index') }}/{{('Logout')}}">{{ csrf_field() }}Salir</a>
							        	</div>
							      	</li>
							      	<li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							          	Personal
							        	</a>
							        	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							        		<a class="nav-link" href="{{ url('vendedor') }}/{{ 'clientes' }}">Clientes</a>
							        	</div>
							      	</li>
							      	<li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							          	Control
							        	</a>
							        	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								        	<a class="nav-link" href="{{ url('vendedor') }}/{{ 'inventarios' }}">Inventario</a>
							        	</div>
							      	</li>
							      	<li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							          	Movimientos
							        	</a>
							        	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							          		<a class="dropdown-item" href="{{ url('vendedor') }}/{{ 'devoluciones' }}">Devoluciones</a>
							          		<a class="dropdown-item" href="{{ url('vendedor') }}/{{ 'ventas' }}">Ventas</a>
							          		<a class="dropdown-item" href="{{ url('vendedor') }}/{{ 'gastos' }}">Gastos</a>
							        	</div>
							      	</li>
							    </ul>
							</div>
						</nav>
						@endif
				  	</div>
				  </div>
				  <div class="col-sm-12">
				  	@yield('content')
				  </div>
				</div>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>

	<div class="text-black">
		<div class="footer-copyright text-center py-3">Richard Fuentes<br>© 2019
		</div>
	</div>

</body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
