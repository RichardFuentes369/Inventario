<table id="invoice" border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
	    <tr>
	    	<th scope="col">Item</th>
			<th scope="col">Categoria</th>
			<th scope="col">Producto</th>
			<th scope="col">Cantidad</th>
			<th scope="col">Precio Unt</th>
			<th scope="col">Iva</th>
			<th scope="col">Precio Total</th>
	    </tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<input type="numeric" name="id" class="form-control" style="width: 40px;height: 30px;font-size: 12px" value="1" readonly>
			</td>
			<td>
				<select id="id_category" name="id_category" class="form-control" style="width: 150px;height: 30px;font-size: 12px">
					<option value="0">----</option>
					@foreach($ListCategory as $category)
						<option value="{{ $category->id }}">{{ $category->category_name }}</option>
					@endforeach
				</select>
			</td>
			<td>
				<select id="id_product" name="id_product" class="form-control" style="width: 150px;height: 30px;font-size: 12px">
					<option value="0">----</option>
					@foreach($ListProduct as $product)
						<option value="{{ $product->id }}">{{ $product->name }}</option>
					@endforeach
				</select>
			</td>
			<td>
				<input type="number" id="cantidad" name="cantidad" style="width: 60px;height: 30px;font-size: 12px" class="form-control" min="0" max="100">
			</td>
			<td>
				<input type="text" id="pre_uni" name="pre_uni" class="form-control" style="width: 120px;height: 30px;font-size: 12px" readonly>
			</td>
			<td>
				<input type="text" id="iva" name="iva" class="form-control" style="width: 60px;height: 30px;font-size: 12px" readonly>
			</td>
			<td>
				<input type="text" id="pre_total" name="pre_total" class="form-control" style="width: 120px;height: 30px;font-size: 12px" readonly>
			</td>
		</tr>
	</tbody>
</table>