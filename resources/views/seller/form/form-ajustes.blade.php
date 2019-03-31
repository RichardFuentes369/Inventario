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
					    <input type="text" class="form-control" value="{{ Auth::user()->name }}">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Apellidos</span>
						</div>
						<input type="text" class="form-control" value="{{ Auth::user()->lastname }}">
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">TD</span>
						</div>
					    <input type="text" class="form-control" value="{{ Auth::user()->document_type }}" readonly>
					    
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">DNI</span>
						</div>
					    <input type="text" class="form-control" value="{{ Auth::user()->dni }}" readonly>
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Sexo</span>
						</div>
						<select name="sexo" id="sexo" class="form-control">
							@if(Auth::user()->sexo == 'M')
							<option value="M" selected="selected">Masculino</option>
							<option value="F">Femenino</option>
							@else
							<option value="M">Masculino</option>
							<option value="F" selected="selected">Femenino</option>
							@endif					
						</select>
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fijo</span>
						</div>
					    <input type="text" class="form-control" value="{{ Auth::user()->phone }}">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Celular</span>
						</div>
					    <input type="text" class="form-control" value="{{ Auth::user()->cellphone }}">
					</div> 
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fecha Nacimiento</span>
						</div>
					    <input type="text" class="form-control" value="{{ Auth::user()->birthdate }}">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">@</span>
						  </div>
					    <input type="text" class="form-control" value="{{ Auth::user()->email }}">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Contraseña</span>
						</div>
					    <input type="password" class="form-control">
					</div> 
				</div>
				<marquee>Si luego de actualizar algun dato el sistema te saca, recuerda que debes iniciar nuevamente la sessión. Y si
				actualizaste la contraseña, ingresa con la nueva contraseña.</marquee>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success">Actualizar</button>
		    </div>
		</div>
	</center>
</form>
