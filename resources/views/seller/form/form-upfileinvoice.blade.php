<form action="{{ url('vendedor') }}/{{ 'subirFS' }}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<center>
		<br>
		<h3>Seleccione el archivo que desea subir</h3>
		<hr>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<input type="number" name="preciot" class="form-control" placeholder="$125000" min="0" required><br><br>
					<input type="file" name="archivosubido" class="btn btn-primary">
				</div>
				<div class="col-sm-4"></div>
			</div>
			<br><br><button type="submit" class="btn btn-success botonfunciones">Subir Factura</button>
		</div>
      	<br><br>
	</center>
</form>