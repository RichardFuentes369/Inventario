<form action="{{ url('administrador') }}/{{ 'proveedoresC' }}" method="post">
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">NIT</span>
						  </div>
						<input class="form-control inputcenter" name="nit">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Nombre Empresa</span>
						</div>
						<input class="form-control inputcenter" name="business_name">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Descripción de la empresa</span>
						</div>
						<input class="form-control inputcenter" name="description">
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">Pais</span>
						</div>
						<input class="form-control inputcenter" name="country">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Departamento</span>
						</div>
						<input class="form-control inputcenter" name="department">
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Ciudad/Municipio</span>
						</div>
						<input class="form-control inputcenter" name="county">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">Barrio</span>
						</div>
						<input class="form-control inputcenter" name="neighborhood">
					</div>			
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Direccion</span>
						</div>
						<input class="form-control inputcenter" name="address">
					</div> 	
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fijo 1</span>
						</div>
						<input class="form-control inputcenter" name="phone1">
					</div> 	
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fijo 2</span>
						</div>
						<input class="form-control inputcenter" name="phone2">
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Celular 1</span>
						</div>
						<input class="form-control inputcenter" name="cellphone1">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Celular 2</span>
						</div>
						<input class="form-control inputcenter" name="cellphone2">
					</div> 
				</div>
			</div>
		</div>
		<div class="col-sm-12" align="right">
			<button type="submit" class="btn btn-success botonejecutarfuncion">Crear</button>
		</div>
	</center>
</form>