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
	  		<a class="navbar-brand font-tittle" href="{{ url('index') }}/{{ 'bienvenidos' }}">INVENTARIO</a>
		   	<sub style="color: white; float: right;margin-top: 40px">Javier Ricardo Baron Fuentes</sub>
		</div>
	</div>

	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<br><br><br><br>
				@yield('content')
				<br><br><br><br>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>

	<div class="text-black">
		<div class="footer-copyright text-center py-3">Richard Fuentes<br>© 2019
		</div>
	</div>

</body>
</html>