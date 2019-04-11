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
						<textarea class="form-control" rows="1" id="sname" style="resize: none" readonly></textarea>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Apellidos</span>
						</div>
						<textarea class="form-control" rows="1" id="slastname" style="resize: none" readonly></textarea>
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">T.D.</span>
						</div>
						<textarea class="form-control" rows="1" id="sdocument_type" style="resize: none" readonly></textarea>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">DNI</span>
						</div>
						<textarea class="form-control" rows="1" id="sdni" style="resize: none" readonly></textarea>
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fecha Nacimiento</span>
						</div>
						<textarea class="form-control" rows="1" id="sbirthdate" style="resize: none" readonly></textarea>
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">Sexo</span>
						</div>
						<textarea class="form-control" rows="1" id="ssexo" style="resize: none" readonly></textarea>
					</div>		
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fijo</span>
						</div>
						<textarea class="form-control" rows="1" id="sphone" style="resize: none" readonly></textarea>
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Celular</span>
						</div>
						<textarea class="form-control" rows="1" id="scellphone" style="resize: none" readonly></textarea>
					</div> 			
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Dirección</span>
						</div>
						<textarea class="form-control" rows="1" id="saddress" style="resize: none" readonly></textarea>
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Departamento</span>
						</div>
						<textarea class="form-control" rows="1" id="sdepartment" style="resize: none" readonly></textarea>
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Ciudad</span>
						</div>
						<textarea class="form-control" rows="1" id="scounty" style="resize: none" readonly></textarea>
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Barrio</span>
						</div>
						<textarea class="form-control" rows="1" id="sneighborhood" style="resize: none" readonly></textarea>
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">@</span>
						  </div>
						<textarea class="form-control" rows="1" id="semail" style="resize: none" readonly></textarea>
					</div>
				</div>
			</div>
		</div>
	</center>
</form>