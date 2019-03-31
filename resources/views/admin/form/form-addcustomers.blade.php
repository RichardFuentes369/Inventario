<form action="">
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Nombres</span>
						  </div>
						  <input type="text" class="form-control">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Apellidos</span>
						</div>
						<input type="text" class="form-control">
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Tipo Documento</span>
						</div>
						<select name="sexo" id="sexo" class="form-control">
							<option value="" selected="selected">--Seleccione--</option>
							<option value="C.C.">Cedula de Ciudadania</option>
							<option value="T.I.">Tarjeta de Identidad</option>
							<option value="P.A.">Pasaporte</option>
						</select>
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">DNI</span>
						</div>
						<input type="text" class="form-control">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fecha Nacimiento</span>
						</div>
						<input type="date" class="form-control">
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Sexo</span>
						</div>
						<select name="sexo" id="sexo" class="form-control">
							<option value="" selected="selected">--Seleccione--</option>
							<option value="M">Masculino</option>
							<option value="F">Femenino</option>
						</select>
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fijo</span>
						</div>
						<input type="text" class="form-control">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Celular</span>
						</div>
						<input type="text" class="form-control">
					</div> 
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Dirección</span>
						</div>
						<input type="text" class="form-control">
					</div> 
				</div>
				<div class="col-sm-6">
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
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Barrio</span>
						</div>
						<input type="text" class="form-control">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">@</span>
						  </div>
						  <input type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="modal-footer">
            	<button class="btn btn-success botonejecutarfuncion">Crear</button>
		    </div>
		</div>
	</center>
</form>