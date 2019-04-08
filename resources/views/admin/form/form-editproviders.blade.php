<form action="">
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">ID</span>
						  </div>
						<textarea class="form-control" rows="1" id="uid" style="resize: none" readonly></textarea>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">NIT</span>
						  </div>
						<textarea class="form-control" rows="1" id="unit" style="resize: none"></textarea>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Nombre Empresa</span>
						</div>
						<textarea class="form-control" rows="1" id="ubusiness_name" style="resize: none"></textarea>
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Descripción de la empresa</span>
						</div>
						<textarea class="form-control" rows="1" id="udescription" style="resize: none"></textarea>
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">Pais</span>
						</div>
						<textarea class="form-control" rows="1" id="ucountry" style="resize: none"></textarea>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Departamento</span>
						</div>
						<textarea class="form-control" rows="1" id="udepartment" style="resize: none"></textarea>
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Ciudad/Municipio</span>
						</div>
						<textarea class="form-control" rows="1" id="ucounty" style="resize: none"></textarea>
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">Barrio</span>
						</div>
						<textarea class="form-control" rows="1" id="uneighborhood" style="resize: none"></textarea>
					</div>		
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Direccion</span>
						</div>
						<textarea class="form-control" rows="1" id="uaddress" style="resize: none"></textarea>
					</div> 		
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fijo 1</span>
						</div>
						<textarea class="form-control" rows="1" id="uphone1" style="resize: none"></textarea>
					</div> 	
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fijo 2</span>
						</div>
						<textarea class="form-control" rows="1" id="uphone2" style="resize: none"></textarea>
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Celular 1</span>
						</div>
						<textarea class="form-control" rows="1" id="ucellphone1" style="resize: none"></textarea>
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Celular 2</span>
						</div>
						<textarea class="form-control" rows="1" id="ucellphone2" style="resize: none"></textarea>
					</div> 
				</div>
			</div>
		</div>
		<div class="col-sm-12" align="right">
			<button type="submit" class="btn btn-warning botonejecutarfuncion">Actualizar</button>
		</div>
	</center>
</form>