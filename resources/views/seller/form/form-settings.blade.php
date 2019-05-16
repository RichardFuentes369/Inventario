<form action="{{ url('vendedor') }}/{{ 'ajustesV' }}" method="post">
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Nombres</span>
						  </div>
					    <input type="text" class="form-control inputcenter" name="name" value="{{ Auth::user()->name }}">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Apellidos</span>
						</div>
						<input type="text" class="form-control inputcenter" name="lastname" value="{{ Auth::user()->lastname }}">
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">TD</span>
						</div>
					    <input type="text" class="form-control inputcenter" name="document_type" value="{{ Auth::user()->document_type }}" readonly>
					    &nbsp;&nbsp;
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">DNI</span>
						</div>
					    <input type="text" class="form-control inputcenter" name="dni" style="width: 20em" value="{{ Auth::user()->dni }}" readonly>
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Sexo</span>
						</div>
						<select name="sexo" id="sexo" class="form-control inputcenter">
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
					    <input type="text" class="form-control inputcenter" name="phone" value="{{ Auth::user()->phone }}">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Celular</span>
						</div>
					    <input type="text" class="form-control inputcenter" name="cellphone" value="{{ Auth::user()->cellphone }}">
					</div> 
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fecha Nacimiento</span>
						</div>
					    <input type="text" class="form-control inputcenter" name="birthdate" value="{{ Auth::user()->birthdate }}">
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">@</span>
						  </div>
					    <input type="text" class="form-control inputcenter" name="email" value="{{ Auth::user()->email }}">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Contraseña</span>
						</div>
					    <input type="password" name="password" class="form-control inputcenter">
					</div> 
				</div>
				<div class="col-sm-12" align="left" style="font-family: cursive;">
					Recuerda que si actualizaste solo tus datos sin actualizar la contraseña podras seguir en la plataforma. <br>Si por el contrario, actualizaste la contraseña... El sistema te sacara de la plataforma, y deberas ingresar con la contraseña nueva.
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success">Actualizar</button>
		    </div>
		</div>
	</center>
</form>
