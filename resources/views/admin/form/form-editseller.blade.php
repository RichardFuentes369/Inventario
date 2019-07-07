<form action="{{ url('administrador') }}/{{ 'empleadosA' }}" method="post">
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">			
					<div class="texarea-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">ID</span>
						  </div>
						<textarea class="form-control inputcenter" name="id" rows="1" id="uid" style="resize: none" readonly></textarea>
					</div>
					<div class="texarea-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Nombres</span>
						  </div>
						<textarea class="form-control inputcenter" name="name" rows="1" id="uname" style="resize: none"></textarea>
					</div>
					<div class="texarea-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Apellidos</span>
						</div>
						<textarea class="form-control inputcenter" name="lastname" rows="1" id="ulastname" style="resize: none"></textarea>
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="texarea-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">DNI</span>
						</div>
						<textarea class="form-control inputcenter" name="dni" rows="1" id="udni" style="resize: none"></textarea>
					</div> 
					<div class="texarea-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fecha Nacimiento</span>
						</div>
						<textarea class="form-control inputcenter" name="fn" rows="1" id="ubirthdate" style="resize: none"></textarea>
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="texarea-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fijo</span>
						</div>
						<textarea class="form-control inputcenter" name="phone" rows="1" id="uphone" style="resize: none"></textarea>
					</div> 
					<div class="texarea-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Celular</span>
						</div>
						<textarea class="form-control inputcenter" name="cellphone" rows="1" id="ucellphone" style="resize: none"></textarea>
					</div> 			
				</div>
				<div class="col-sm-12">
					<div class="texarea-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Dirección</span>
						</div>
						<textarea class="form-control inputcenter" name="address" rows="1" id="uaddress" style="resize: none"></textarea>
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="texarea-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Departamento</span>
						</div>
						<textarea class="form-control inputcenter" name="department" rows="1" id="udepartment" style="resize: none"></textarea>
					</div> 
					<div class="texarea-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Ciudad</span>
						</div>
						<textarea class="form-control inputcenter" name="county" rows="1" id="ucounty" style="resize: none"></textarea>
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="texarea-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Barrio</span>
						</div>
						<textarea class="form-control inputcenter" name="neighborhood" rows="1" id="uneighborhood" style="resize: none"></textarea>
					</div> 
					<div class="texarea-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">@</span>
						  </div>
						<textarea class="form-control inputcenter" name="email" rows="1" id="uemail" style="resize: none"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12" align="right">
			<button type="submit" class="btn btn-warning botonejecutarfuncion">Actualizar</button>
		</div>
	</center>
</form>