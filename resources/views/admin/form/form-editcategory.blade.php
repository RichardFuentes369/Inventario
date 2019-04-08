<form action="{{ url('administrador') }}/{{ 'categoriasA' }}" method="Post">
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepand">
							<span class="input-group-text" id="basic-addon1">Id</span>
						</div>
						<textarea class="form-control" rows="1" name="id" id="aid" style="resize: none" readonly></textarea>
					</div>	
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Nombre de la categoria</span>
						  </div>
						<textarea class="form-control" rows="1" name="category_name" id="acn" style="resize: none"></textarea>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Descripción</span>
						</div>
						<textarea class="form-control" rows="4" name="description" id="ad" style="resize: none" maxlength="255"></textarea>
					</div> 
				</div>
			</div>
		</div>
		<div class="col-sm-12" align="right">
			<button type="submit" class="btn btn-warning botonejecutarfuncion">Actualizar</button>
		</div>
	</center>	
</form>