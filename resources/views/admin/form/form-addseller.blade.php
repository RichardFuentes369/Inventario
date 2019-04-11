<form action="{{ url('administrador') }}/{{ 'empleadosC' }}" method="post">
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Nombres</span>
						  </div>
						  <input type="text" name="name" class="form-control inputcenter">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Apellidos</span>
						</div>
						<input type="text" name="lastname" class="form-control inputcenter">
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Tipo Documento</span>
						</div>
						<select name="td" class="form-control inputcenter">
							<option value="" selected="selected">--Seleccione--</option>
							<option value="cc">Cedula de Ciudadania</option>
							<option value="ti">Tarjeta de Identidad</option>
							<option value="pasaporte">Pasaporte</option>
						</select>
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" name id="basic-addon1">DNI</span>
						</div>
						<input type="text" name="dni" class="form-control inputcenter">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fecha Nacimiento</span>
						</div>
						<input type="date" name="fn" class="form-control inputcenter">
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Sexo</span>
						</div>
						<select name="sexo" class="form-control inputcenter">
							<option value="" selected="selected">--Seleccione--</option>
							<option value="M">Masculino</option>
							<option value="F">Femenino</option>
						</select>
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fijo</span>
						</div>
						<input type="text" name="phone" class="form-control inputcenter">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Celular</span>
						</div>
						<input type="text" name="cellphone" class="form-control inputcenter">
					</div> 
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Dirección</span>
						</div>
						<input type="text" name="address" class="form-control inputcenter">
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Departamento</span>
						</div>
						<input type="text" name="department" class="form-control inputcenter">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Ciudad</span>
						</div>
						<input type="text" name="county" class="form-control inputcenter">
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Barrio</span>
						</div>
						<input type="text" name="neighborhood" class="form-control inputcenter">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">@</span>
						  </div>
						  <input type="text" name="email" class="form-control inputcenter">
					</div>
				</div>
			</div>
			<div class="modal-footer">
            	<button class="btn btn-success botonejecutarfuncion">Crear</button>
		    </div>
		</div>
	</center>
</form>