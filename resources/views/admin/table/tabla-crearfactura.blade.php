<table id="invoice" border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
	    <tr>
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
				<select id="id" name="id" class="form-control" style="width: 150px;height: 30px;font-size: 12px">
					<option value="0">----</option>
					@foreach($ListCategory as $category)
						<option value="{{ $category->id }}">{{ $category->category_name }}</option>
					@endforeach
				</select>
			</td>
			<td>
				<select id="id" name="id" class="form-control" style="width: 150px;height: 30px;font-size: 12px">
					<option value="0">----</option>
					@foreach($ListProduct as $product)
						<option value="{{ $product->id }}">{{ $product->name }}</option>
					@endforeach
				</select>
			</td>
			<td>
				<input type="number" style="width: 60px;height: 30px;font-size: 12px" class="form-control" min="0" max="100">
			</td>
			<td>
				<input type="text" class="form-control" style="width: 120px;height: 30px;font-size: 12px" readonly>
			</td>
			<td>
				<input type="text" class="form-control" style="width: 60px;height: 30px;font-size: 12px" readonly>
			</td>
			<td>
				<input type="text" class="form-control" style="width: 120px;height: 30px;font-size: 12px" readonly>
			</td>
		</tr>
	</tbody>
</table>