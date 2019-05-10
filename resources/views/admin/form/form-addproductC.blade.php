<form action="{{ url('administrador') }}/{{ 'productosCC' }}" method="post">
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepand">
							<span class="input-group-text" id="basic-addon1">Id</span>
						</div>
						<textarea class="form-control inputcenter" rows="1" name="id_category" id="aid" style="resize: none" readonly></textarea>
					</div>	
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Proveedor</span>
						  </div>
						<select multiple class="custom-select" name="id_provider">
							<option selected value="" class="inputcenter">Seleccione</option>
							@foreach($provider as $provider)
								<option value="{{ $provider -> id }}">{{ $provider -> nit }}, {{ $provider -> business_name }}</option>
							@endforeach
						</select>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Nombre</span>
						  </div>
						<input class="form-control inputcenter" name="name" rows="1">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Lote</span>
						  </div>
						<input class="form-control inputcenter" name="lote" rows="1">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Precio</span>
						  </div>
						<input class="form-control inputcenter" type="number" name="price" rows="1">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">F. Manufacturación</span>
						</div>
						<input type="date" class="form-control inputcenter" name="manufacturing_date" rows="1">
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">F. Vencimiento</span>
						</div>
						<input type="date" class="form-control inputcenter" name="expiration_date" rows="1">
					</div> 	
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Cantidad</span>
						</div>
						<input class="form-control inputcenter" name="quantity" rows="1">
					</div> 
				</div>
			</div>
		</div>
		<div class="col-sm-12" align="right">
			<button type="submit" class="btn btn-success botonejecutarfuncion">Crear</button>
		</div>
	</center>
</form>