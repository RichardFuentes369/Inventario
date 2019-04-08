<table border="0" class="table table-responsive table-hover" style="text-align: center">
  <thead class="tableth">
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">DNI</th>
      <th scope="col">Ver</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($customers_list as $cl)
    <tr>
      <td>{{ $cl ->  id}}</td>
      <td>{{ $cl ->  name}}</td>
      <td>{{ $cl -> lastname }}</td>
      <td>{{ $cl -> dni }}</td>
      <td><button class="btn btn-primary botonfunciones"><i class="material-icons">visibility</i></button></td>
      <td><button class="btn btn-warning botonfunciones"><i class="material-icons">update</i></button></td>
      <td><button class="btn btn-danger botonfunciones"><i class="material-icons">delete_forever</i></button></td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $customers_list->links( "pagination::bootstrap-4") }}