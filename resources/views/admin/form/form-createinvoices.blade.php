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
								<button class="btn btn-success botonfunciones" title="Añadir Producto" onclick="return productos()"><i class="material-icons">add</i></button></div>
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
 			var cell7 = row.insertCell(7);
 			var x = num+1;
 			var category = document.getElementById("category");
 			var products = document.getElementById("products"); 	
 			var selectedcategory = category.options[category.selectedIndex].text;
 			var selectedproducts = products.options[products.selectedIndex].text;
 			var cant = document.getElementById("cantidad").value;
 			var preuni = products.value;
 			cell0.innerHTML = "<input type=numeric name=id class=form-control style='width: 40px;height: 30px;font-size: 12px' value="+x+" readonly>";
  			cell1.innerHTML = "<input type=text class=form-control style='width: 120px;height: 30px;font-size: 12px;' readonly value="+selectedcategory+">";
  			cell2.innerHTML = "<input type=text class=form-control style='width: 200px;height: 30px;font-size: 12px' readonly value="+selectedproducts+">";
  			cell3.innerHTML = "<input type=number id=cantidad name=cantidad style='width: 60px;height: 30px;font-size: 12px' value="+cant+" class=form-control min=0 max=100>";
  			cell4.innerHTML = "<input type=text id=pre_uni name=pre_uni class=form-control style='width: 120px;height: 30px;font-size: 12px' readonly value="+preuni+">";
  			cell5.innerHTML = "<input type=text id=iva name=iva class=form-control style='width: 60px;height: 30px;font-size: 12px' readonly>";
  			cell6.innerHTML = "<input type=text id=pre_total name=pre_total class=form-control style='width: 120px;height: 30px;font-size: 12px' readonly value="+cant*preuni+">";
  			cell7.innerHTML = "<button class=btn-danger onClick=borrart("+x+") title=Borrar style='border-radius: 16px'><i class='material-icons'>delete_forever</i></button>";
  			return false;
  		}
	}

	function borrart($id){
		var table = document.getElementById("invoice");
		var num = document.getElementById("invoice").getElementsByTagName('tr').length - 1;
		var msj = window.alert('Elimminar#:'+$id);
		var row = table.deleteRow($id);
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
</script>

