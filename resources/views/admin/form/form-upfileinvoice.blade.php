<form action="{{ url('administrador') }}/{{ 'subirF' }}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<center>
		<br>
		<h3>Seleccione el archivo que desea subir</h3>
		<hr>
		<input type="file" name="archivosubido" class="btn btn-primary"><br><br>
		<button type="submit" class="btn btn-success botonfunciones">Subir Factura</button>
      	<br><br>
	</center>
</form>