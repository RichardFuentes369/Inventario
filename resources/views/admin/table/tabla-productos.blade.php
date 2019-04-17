<table border="0" class="table table-responsive table-hover" style="text-align: center">
  <thead class="tableth">
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Lote</th>
      <th scope="col">F. Manufacturación</th>
      <th scope="col">F. Vencimiento</th>
      <th scope="col">Cantidad</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($ListProductByCategory as $lp)
    <tr>
      <td id="id">{{ $lp -> id}}</td>
      <td id="name">{{ $lp -> name}}</td>
      <td id="lote">{{ $lp -> lote}}</td>
      <td id="manufacturing_date">{{ $lp -> manufacturing_date}}</td>
      <td id="expiration_date">{{ $lp -> expiration_date}}</td>
      <td id="quantity">{{ $lp -> quantity}}</td> 
    </tr>
    @endforeach
  </tbody>
</table>

