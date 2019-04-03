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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body class="index">
	
	<div class="banner">
		<div class="col-sm-12 navbar navbar-dark bg-dark"> 
	  		<a class="navbar-brand font-tittle" href="{{ url('index') }}/{{ 'bienvenidos' }}">INVENTARIO</a>
	  		<div class="information">
	  			Richard Fuentes<br>
	  			350 428 4093
	  		</div>
		</div>
	</div>

	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<br><br><br><br><br>
				@yield('content')
				<br><br><br><br><br>
			</div>
			<div class="col-sm-4" align="right">
				<br>
				<a href="https://www.facebook.com/enespanol/" class="btn btn-primary" target="_blank" title="Facebook"><i class="fa fa-facebook-official"></i></a>
				<a href="https://twitter.com/TwitterLatAm?lang=es" class="btn btn-info" target="_blank" title="Twitter"><i class="fa fa-twitter-square"></i></a>
				<a href="https://www.youtube.com/" class="btn btn-danger" target="_blank" title="Youtube"><i class="fa fa-youtube-play"></i></a>
				<a href="https://www.linkedin.com/" class="btn btn-primary" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>

	<div class="text-white bg-dark">
		<div class="container">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-2" align="left" style="font-size: 10px">Inventario © 2019</div>
					<div class="col-sm-8" align="center" style="font-size: 10px">
						<br>Desarrollado por <br> Javier Ricardo Baron Fuentes
					</div>
					<div class="col-sm-2" align="right" style="font-size: 10px">
						Todos los derechos reservados
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>