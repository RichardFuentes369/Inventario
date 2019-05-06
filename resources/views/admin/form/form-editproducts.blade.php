<form action="{{ url('administrador') }}/{{ 'productosA' }}" method="post">
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">					
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">ID</span>
						  </div>
						<textarea class="form-control inputcenter" name="uid" rows="1" id="uid" style="resize: none" readonly></textarea>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Proveedor</span>
						  </div>
						<select multiple class="custom-select" name="uproviderid" id="uproviderid">
							<option selected value="" class="inputcenter">Si no cambiara de proveedor</option>
							@foreach($provider as $provider)
								<option value="{{ $provider -> id }}">{{ $provider -> nit }}, {{ $provider -> business_name }}</option>
							@endforeach
						</select>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Nombre</span>
						  </div>
						<textarea class="form-control inputcenter" name="uname" rows="1" id="uname" style="resize: none" required></textarea>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Lote</span>
						  </div>
						<textarea class="form-control inputcenter" name="ulote" rows="1" id="ulote" style="resize: none" required></textarea>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Precio</span>
						  </div>
						<textarea class="form-control inputcenter" name="uprice" rows="1" id="uprice" style="resize: none" required></textarea>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">F. Manufacturación</span>
						</div>
						<textarea class="form-control inputcenter" name="umanufacturing_date" rows="1" id="umanufacturing_date" style="resize: none" required></textarea>
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">F. Vencimiento</span>
						</div>
						<textarea class="form-control inputcenter" name="uexpiration_date" rows="1" id="uexpiration_date" style="resize: none" required></textarea>
					</div> 	
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Cantidad</span>
						</div>
						<textarea class="form-control inputcenter" name="uquantity" rows="1" id="uquantity" style="resize: none" required></textarea>
					</div> 
				</div>
			</div>
		</div>
		<div class="col-sm-12" align="right">
			<button type="submit" class="btn btn-warning botonejecutarfuncion">Actualizar</button>
		</div>
	</center>
</form>