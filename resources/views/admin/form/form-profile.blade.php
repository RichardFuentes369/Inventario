<form action="">
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-12" align="center">
				<h3><center>Lista Empleados</center></h3>
				<div class="form-group">
				  <select multiple class="form-control" id="exampleFormControlSelect2">
				    @foreach ($users_list as $ul)
				    <option value="">{{ $ul -> dni }}, {{ $ul ->  name}}, {{ $ul ->  lastname}}</option>
				    @endforeach
				  </select>
				</div>
			</div>
			<div class="col-sm-12" align="center">
				<h3><center>Lista Proveedores</center></h3>
				<div class="form-group">
				  <select multiple class="form-control" id="exampleFormControlSelect2">
				    @foreach ($providers_list as $ul)
				    <option value="">{{ $ul -> NIT }}, {{ $ul ->  business_name}}</option>
				    @endforeach
				  </select>
				</div>
			</div>
			<div class="col-sm-12" align="center">
				<h3><center>Lista Clientes</center></h3>
				<div class="form-group">
				  <select multiple class="form-control" id="exampleFormControlSelect2">
				    @foreach ($customers_list as $ul)
				    <option value="">{{ $ul -> dni }}, {{ $ul ->  name}}, {{ $ul ->  lastname}}</option>
				    @endforeach
				  </select>
				</div>
			</div>
		</div>
	</div>
</form>