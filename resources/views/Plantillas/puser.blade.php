<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body class="index">
	
	@if(Auth::check() == false)
		<div class="banner">
			<div class="col-sm-12 navbar navbar-dark btop"> 
	  			<a class="navbar-brand font-tittle" href="{{ url('index') }}/{{ 'bienvenidos' }}">INVENTARIO</a>
	  			<div class="information">
	  				Richard Fuentes<br>
	  				350 428 4093
	  			</div>
			</div>
		</div>

		<div class="social-networks">
			<div class="col-sm-12" align="right">
				<br>
				<a href="https://www.facebook.com/enespanol/" class="btn btn-primary" target="_blank" title="Facebook"><i class="fa fa-facebook-official"></i></a>
				<a href="https://twitter.com/TwitterLatAm?lang=es" class="btn btn-info" target="_blank" title="Twitter"><i class="fa fa-twitter-square"></i></a>
				<a href="https://www.youtube.com/" class="btn btn-danger" target="_blank" title="Youtube"><i class="fa fa-youtube-play"></i></a>
				<a href="https://www.linkedin.com/" class="btn btn-primary" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a>
			</div>
		</div>
	
		<div class="col-sm-12">
			<div class="row">
				<div class="container">
					<br><br><br><br><br><br>
					@yield('content')
					<br><br><br><br><br><br>
				</div>
			</div>
		</div>
		
		<br>

		<div class="text-white bfoot" style="height: 50px">
			<div class="container">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-2" align="left" style="font-size: 10px; color: black">Inventario © 2019</div>
						<div class="col-sm-10" align="right" style="font-size: 10px; color: black">
							Todos los derechos reservados
						</div>
					</div>
				</div>
			</div>
		</div>
	@else
		<div class="banner">
			<div class="col-sm-12 navbar navbar-dark btop"> 
				@if(Auth::user()->category == 'admin')
		  		<a class="navbar-brand font-tittle" href="{{ url('administrador') }}/{{ 'perfil' }}">INVENTARIO</a>
		  		@else
		  		<a class="navbar-brand font-tittle" href="{{ url('vendedor') }}/{{ 'perfil' }}">INVENTARIO</a>
		  		@endif
		  		<div class="information">
		  			Richard Fuentes<br>
		  			350 428 4093
		  		</div>
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
						  			<label for="login"><b>Adminitrador</b></label>
						  			@else
						  			<label for="login"><b>Vendedor</b></label>
						  			@endif
						  		</div>
						  		<div class="col-sm-6" align="right">
						  		    <label for="login"><b>{{ Auth::user()->company->business_name }}</b></label><br>
						  		</div>
						  	</div>				  		
					  	</div>
					  </div>
					  <div class="card-body">
					  	<div class="form-group">
					  		@if(Auth::user()->category == 'admin')
					  		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; border-radius: 16px">
					  			<ul class="navbar-nav mr-auto">
								    <li class="nav-item dropdown">
								       	<a href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" class="nav-link dropdown-toggle" style="border-radius: 50px"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
								       	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									       	<a class="nav-link" href="{{ url('administrador') }}/{{ 'perfil' }}">Perfil</a>
									       	<a class="nav-link" href="{{ url('administrador') }}/{{ 'ajustes' }}">Ajustes</a>
								       		<a class="nav-link" href="{{ url('index') }}/{{('Logout')}}">{{ csrf_field() }}Salir</a>
								       	</div>
								    </li>	
								</ul>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    							<span class="navbar-toggler-icon"></span>
	  							</button>
							    <div class="collapse navbar-collapse" id="navbarSupportedContent">
								    <ul class="navbar-nav mr-auto">
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
      									<li class="nav-item">
      										<a class="nav-link" href="{{ url('administrador') }}/{{ 'facturar' }}">Facturar</a>
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
					  			<ul class="navbar-nav mr-auto">
								    <li class="nav-item dropdown">
								       	<a href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" class="nav-link dropdown-toggle" style="border-radius: 50px"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
								       	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									       	<a class="nav-link" href="{{ url('vendedor') }}/{{ 'perfil' }}">Perfil</a>
									       	<a class="nav-link" href="{{ url('vendedor') }}/{{ 'ajustes' }}">Ajustes</a>
								       		<a class="nav-link" href="{{ url('index') }}/{{('Logout')}}">{{ csrf_field() }}Salir</a>
								       	</div>
								    </li>	
								</ul>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    							<span class="navbar-toggler-icon"></span>
	  							</button>
							    <div class="collapse navbar-collapse" id="navbarSupportedContent">
								    <ul class="navbar-nav mr-auto">
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
     									<li class="nav-item">
								          	<a class="nav-link" href="{{ url('vendedor') }}/{{ 'facturar' }}">Facturar</a>
										</li>
								    </ul>
								</div>
							</nav>
							@endif
					  	</div>
					  </div>
					  <div class="col-sm-12 content">
					  	@yield('content')
					  </div>
					</div>
				</div>
				<div class="col-sm-1"></div>
			</div>
		</div>
		
		<br>
		
		<div class="text-white bfoot">
			<div class="container">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-2" align="left" style="font-size: 10px; color: black"><br><br>Inventario © 2019<br>Bucaramanga-Santander<br></div>
						
						<div class="col-sm-10" align="right" style="font-size: 10px; color: black">
							Todos los derechos reservados
							<br><br>
							<a href="https://www.facebook.com/enespanol/" class="btn btn-primary" target="_blank" title="Facebook"><i class="fa fa-facebook-official"></i></a>
							<a href="https://twitter.com/TwitterLatAm?lang=es" class="btn btn-info" target="_blank" title="Twitter"><i class="fa fa-twitter-square"></i></a>
							<a href="https://www.youtube.com/" class="btn btn-danger" target="_blank" title="Youtube"><i class="fa fa-youtube-play"></i></a>
							<a href="https://www.linkedin.com/" class="btn btn-primary" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
			<br>
		</div>
	@endif

</body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
