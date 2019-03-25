<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body class="index">
	
	<div class="banner">
		<nav class="navbar navbar-dark bg-dark">
	  		<div class="navbar-header">
		      <a class="navbar-brand" href="#">INVENTARIO</a>
		    </div>		
		</nav>
	</div>

	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<br><br>
				<div class="card">
				  <div class="card-header">
				    <label for="login"><b>Vendedor</b></label>
				  </div>
				  <div class="card-body">
				  	<div class="form-group">
				  		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; border-radius: 16px">
						    <div class="collapse navbar-collapse">
							    <ul class="navbar-nav mr-auto">
							      	<li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							          	{{ Auth::user()->name }} {{ Auth::user()->lastname }}
							        	</a>
							        	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							          		<a class="dropdown-item" href="{{ url('vendedor') }}/{{ 'perfil' }}">Perfil</a>
							          		<a class="dropdown-item" href="{{ url('vendedor') }}/{{ 'ajustes' }}">Ajustes</a>
							          		<a class="dropdown-item" href="{{ url('index') }}/{{('Logout')}}">{{ csrf_field() }}Salir</a>
							        	</div>
							      	</li>
							      	<li class="nav-item">
							        	<a class="nav-link" href="{{ url('vendedor') }}/{{ 'inventarios' }}">Inventario</a>
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
				  	</div>
				  </div>
				</div>
				@yield('content')
				<br><br>
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