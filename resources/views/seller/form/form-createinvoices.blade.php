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
		<div class="row" align="rigth">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-3">
						<select id="category" name="category" class="form-control" style="width: 180px;height: 30px;font-size: 12px" onchange="return listproduct(this.value);">
							<option selected disabled="">---Seleccióne Categoria---</option>
							@foreach($ListCategory as $category)
								<option value="{{ $category->id }}">{{ $category->category_name }}</option>
							@endforeach
						</select>
					</div>
					<div class="col-sm-3">
						<select id="products" name="products" class="form-control" style="width: 180px;height: 30px;font-size: 12px">
							<option selected disabled="">---Seleccióne Producto---</option>
						</select>
					</div>
					<div class="col-sm-5">
						<div class="row">
							<div class="col-sm-4">
								<input type="number" id="cantidad" name="cantidad" style="width: 100px;height: 30px;font-size: 12px" class="form-control" min="1" max="100" value="1">
							</div>
							<div class="col-sm-1">
								<button class="btn btn-success botonfunciones" id="agregar" name="agregar" title="Añadir Producto" onclick="return productos()"><i class="material-icons">add</i></button></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		@include('admin.table.tabla-crearfactura')
	</div>
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-10"></div>
			<div class="col-sm-2">
				<br>
				<input type="text" name="total" id="total" class="form-control" style="width: 150px;height: 50px;font-size: 25px" readonly>	
			</div>
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
 			var category = document.getElementById("category");
 			var products = document.getElementById("products"); 	
 			var selectedcategory = category.options[category.selectedIndex].text;
 			var selectedproducts = products.options[products.selectedIndex].text;
 			var cant = document.getElementById("cantidad").value;
 			var preuni = products.value;
 			var total_n = parseFloat(cant) * parseFloat(preuni);
 			cell0.innerHTML = '<p class="form-control" name="id_p[]" class="non-margin" style="width: auto;height: 30px; font-size: 12px" readonly>'+x+'</p>';
 			cell1.innerHTML = '<p class="form-control" name="category_p[]" class="non-margin" style="width: auto;height: 30px; font-size: 12px" readonly>'+selectedcategory+'</p>';
 			cell2.innerHTML = '<p class="form-control" name="product_p[]" class="non-margin" style="width: auto;height: 30px; font-size: 12px" readonly>'+selectedproducts+'</p>';
 			cell3.innerHTML = '<p class="form-control" name="cant_p[]" class="non-margin" style="width: auto;height: 30px; font-size: 12px" readonly>'+cant+'</p>';
 			cell4.innerHTML = '<p class="form-control" name="pre_uni_p[]" class="non-margin" style="width: auto;height: 30px; font-size: 12px" readonly>'+preuni+'</p>';
 			cell5.innerHTML = '<p class="form-control" name="total_p[]" class="non-margin" style="width: auto;height: 30px; font-size: 12px" readonly>'+total_n+'</p>';
 			cell6.innerHTML = "<button class=btn-danger onClick=borrart("+x+") title=Borrar style='border-radius: 16px'><i class='material-icons'>delete_forever</i></button>";
  			totalizar();
  			return false;
  		}
	}
	function borrart($id){
		var table = document.getElementById("invoice");
		var num = document.getElementById("invoice").getElementsByTagName('tr').length - 1;
		var msj = window.alert('Elimminar#:'+$id);
		var row = table.deleteRow($id);
		totalizar();
		return false;
	}
	function listproduct($id_category){
		$(document).ready(function(){
		    var id_category = $(this).val();
		    $.get('facturarD2/'+$id_category, function(data){
		//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
		    	console.log(data);
		        var products = '<option value="">---Seleccióne Producto---</option>'
		        for (var i=0; i<data.length;i++)
		        	products+='<option value="'+data[i].price+'">'+data[i].name+'</option>';
		        $("#products").html(products);
		   	});
		});
	}
	function totalizar(){
		var totales=0;
		var array_totales=document.getElementsByName("total_p[]");
		for (var i=0; i<array_totales.length; i++) {
			totales+=parseFloat(array_totales[i].innerHTML);
		}
		document.getElementById("total").value=totales;
	}
</script>