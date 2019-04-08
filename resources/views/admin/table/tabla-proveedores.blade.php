<table border="0" class="table table-responsive table-hover" style="text-align: center">
  <thead class="tableth">
    <tr>
      <th scope="col">#id</th>
      <th scope="col">NIT</th>
      <th scope="col">Nombre del Proveedor</th>
      <th scope="col">Ver</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($providers_list as $pl)
    <tr>
      <td>{{ $pl ->  id}}</td>
      <td>{{ $pl ->  NIT}}</td>
      <td>{{ $pl -> business_name }}</td>
      <td><button class="btn btn-primary botonfunciones"><i class="material-icons">visibility</i></button></td>
      <td><button class="btn btn-warning botonfunciones"><i class="material-icons">update</i></button></td>
      <td><button class="btn btn-danger botonfunciones"><i class="material-icons">delete_forever</i></button></td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $providers_list->links( "pagination::bootstrap-4") }}