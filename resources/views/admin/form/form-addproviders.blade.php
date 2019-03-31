<form action="">
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">NIT</span>
						  </div>
						  <input type="text" class="form-control">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Nombre Proveedor</span>
						</div>
						<input type="text" class="form-control">
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Pais</span>
						</div>
						<input type="text" class="form-control">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Departamento</span>
						</div>
						<input type="text" class="form-control">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Ciudad</span>
						</div>
						<input type="text" class="form-control">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Barrio</span>
						  </div>
						  <input type="text" class="form-control">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Telefono 1</span>
						</div>
						<input type="text" class="form-control">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Telefono 2</span>
						  </div>
						  <input type="text" class="form-control">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Celular 1</span>
						</div>
						<input type="text" class="form-control">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Celular 2</span>
						  </div>
						  <input type="text" class="form-control">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Descripción</span>
						</div>
						<textarea class="form-control" rows="4" id="comment" style="resize: none" maxlength="255"></textarea>
					</div> 
				</div>
			</div>
			<div class="modal-footer">
            	<button class="btn btn-success botonejecutarfuncion">Crear</button>
		    </div>
		</div>
	</center>
</form>