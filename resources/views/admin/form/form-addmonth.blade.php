<form action="{{ url('administrador') }}/{{ 'mesesC' }}" method="post">
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1">Mes</span>
				  </div>
				  <select name="month" id="" class="form-control">
				  	<option value="--">---</option>
				  	<option value="Enero">Enero</option>
				  	<option value="Febrero">Febrero</option>
				  	<option value="Marzo">Marzo</option>
				  	<option value="Abril">Abril</option>
				  	<option value="Mayo">Mayo</option>
				  	<option value="Junio">Junio</option>
				  	<option value="Julio">Julio</option>
				  	<option value="Agosto">Agosto</option>
				  	<option value="Septiembre">Septiembre</option>
				  	<option value="Octubre">Octubre</option>
				  	<option value="Noviembre">Noviembre</option>
				  	<option value="Diciembre">Diciembre</option>
				  </select>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1">Año</span>
				  </div>
			    <input type="number" class="form-control inputcenter" name="year" required>
			</div>
		</div>
	</center>
		<div class="modal-footer">
           	<button class="btn btn-success botonejecutarfuncion">Crear</button>
	    </div>
</form>