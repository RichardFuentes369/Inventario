<form action="{{ url('administrador') }}/{{ 'subirF' }}" method="post">
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Nombre de la categoria</span>
						  </div>
					    <input type="text" class="form-control inputcenter" name="category_name" required>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Descripción</span>
						</div>
						<textarea class="form-control inputcenter" rows="4" name="description" style="resize: none" maxlength="255"></textarea>
					</div> 
				</div>
			</div>
		</div>
		<div class="col-sm-12" align="right">
			<button type="submit" class="btn btn-success botonejecutarfuncion">Crear</button>
		</div>
	</center>	
</form>