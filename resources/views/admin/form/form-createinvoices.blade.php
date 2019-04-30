<form action="">
	<br>
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-5">Nombre Vendedor:</div>
					<div class="col-sm-7"><input type="text" class="form-control" style="width: auto;height: 30px; font-size: 12px" readonly value="{{Auth::user()->name}}"></div>
				<div class="col-sm-5">Dni Vendedor:</div>
				<div class="col-sm-7"><input type="text" class="form-control" style="width: auto;height: 30px; font-size: 12px" readonly value="{{Auth::user()->dni}}"></div>
				<div class="col-sm-5">Nombre Cliente:</div>
				<div class="col-sm-7">
					<select id="id" name="id" class="form-control" style="width: auto;height: 30px;font-size: 12px" onchange="return buscar(this.value);">
						<option value="--">Seleccione</option>
							@foreach($ListCustomer as $lc)
								<option value="{{ $lc -> dni}}">{{ $lc -> name }} {{ $lc -> lastname}}</option>
							@endforeach
					</select>
				</div>
				<div class="col-sm-5">Dni Cliente:</div>
				<div class="col-sm-7"><input type="text" class="form-control" style="width: auto;height: 30px;font-size: 12px" id="showId" name="dni" readonly></div>
				</div>
			</div>
			<div class="col-sm-6">
				Factura no: 
					@foreach ($ListInvoices as $idinvoice)
						@if( $idinvoice->id == '')
							<input type="text" class="form-control" style="width: auto;height: 30px; font-size: 12px" readonly value="1">
						@else
							<input type="text" class="form-control" style="width: auto;height: 30px; font-size: 12px" readonly value="">
						@endif
					@endforeach<br>	
				Nit: {{ Auth::user()->company->nit}}<br>	
				Dirección: {{ Auth::user()->company->address}}<br>	
				Telefono: {{ Auth::user()->company->phone1}} - {{ Auth::user()->company->cellphone1}}
			</div>
		</div>
	</div>
	<hr>
	<div class="col-sm-12">
		<div class="" align="right">
			<button class="btn btn-success botonfunciones" title="Añadir Producto" onclick="productos()"><i class="material-icons">add</i></button>
		</div><br>
		@include('admin.table.tabla-crearfactura')
	</div>
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				total
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
</form>

<script>
	function buscar($id){
		if($id != 0){
			document.getElementById('showId').value=document.getElementById('id').value;
		}else{
			document.getElementById('showId').value="";	
		}
	}

	function productos(){ 
	  	alert('agregar columna');
	}
</script>

