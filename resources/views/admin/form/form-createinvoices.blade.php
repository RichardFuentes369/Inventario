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
		<div class="row" align="center">
			<div class="col-sm-10">
				<div class="row">
					<div class="col-sm-4">
						<select id="id_category" name="id_category" class="form-control" style="width: 180px;height: 30px;font-size: 12px">
							<option value="">---Seleccióne Categoria---</option>
							@foreach($ListCategory as $category)
								<option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
							@endforeach
						</select>
					</div>
					<div class="col-sm-4">
						<select id="id_product" name="id_product" class="form-control" style="width: 180px;height: 30px;font-size: 12px">
							<option value="">---Seleccióne Producto---</option>
							@foreach($ListProduct as $product)
								<option value="{{ $product->name }}">{{ $product->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="col-sm-2">
						<input type="number" id="preuni" name="preuni" style="width: 100px;height: 30px;font-size: 12px" class="form-control" min="1" max="100" value="{{ $product -> price}}" readonly>
					</div>
					<div class="col-sm-2">
						<input type="number" id="cantidad" name="cantidad" style="width: 60px;height: 30px;font-size: 12px" class="form-control" min="1" max="100" value="1">
					</div>
				</div>
			</div>
			<div class="col-sm-2">
				<button class="btn btn-success botonfunciones" title="Añadir Producto" onclick="return productos()"><i class="material-icons">add</i></button>
			</div>
		</div>
		<br>
		@include('admin.table.tabla-crearfactura')
	</div>
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10" align="center">
				total
				<input type="text" class="form-control" style="width: 100px;height: 30px;font-size: 12px" readonly>
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
		var table = document.getElementById("invoice");
		var num = document.getElementById("invoice").getElementsByTagName('tr').length - 1;

 		{
  			var row = table.insertRow(num+1);
  			var cell0 = row.insertCell(0);
  			var cell1 = row.insertCell(1);
  			var cell2 = row.insertCell(2);
  			var cell3 = row.insertCell(3);  			
  			var cell4 = row.insertCell(4);
  			var cell5 = row.insertCell(5);
 			var cell6 = row.insertCell(6);
 			var x = num+1;
 			var category = document.getElementById("id_category").value=document.getElementById('id_category').value;
 			var product = document.getElementById("id_product").value=document.getElementById('id_product').value; 	
 			var cant = document.getElementById("cantidad").value=document.getElementById('cantidad').value;
 			var preuni = document.getElementById("preuni").value=document.getElementById('preuni').value;
 			cell0.innerHTML = "<input type=numeric name=id class=form-control style='width: 40px;height: 30px;font-size: 12px' value="+x+" readonly>";
  			cell1.innerHTML = "<input type=text class=form-control style='width: 120px;height: 30px;font-size: 12px' readonly value="+category+">";
  			cell2.innerHTML = "<input type=text class=form-control style='width: 200px;height: 30px;font-size: 12px' readonly value="+product+">";
  			cell3.innerHTML = "<input type=number id=cantidad name=cantidad style='width: 60px;height: 30px;font-size: 12px' value="+cant+" class=form-control min=0 max=100>";
  			cell4.innerHTML = "<input type=text id=pre_uni name=pre_uni class=form-control style='width: 120px;height: 30px;font-size: 12px' readonly value="+preuni+">";
  			cell5.innerHTML = "<input type=text id=iva name=iva class=form-control style='width: 60px;height: 30px;font-size: 12px' readonly>";
  			cell6.innerHTML = "<input type=text id=pre_total name=pre_total class=form-control style='width: 120px;height: 30px;font-size: 12px' readonly value="+cant*preuni+">";
  			return false;
  		}
	}

</script>
