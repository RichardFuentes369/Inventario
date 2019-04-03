<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre de la categoria</th>
      <th scope="col">Descripción</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($category_list as $cl)
    <tr>
      <td>{{ $cl ->  id}}</td>
      <td>{{ $cl ->  category_name}}</td>
      <td>{{ $cl -> description }}</td>
      <td><button class="btn btn-warning botonfunciones"><i class="material-icons">update</i></button></td>
      <td><button class="btn btn-danger botonfunciones"><i class="material-icons">delete_forever</i></button></td>
    </tr>
    @endforeach
  </tbody>
</table>

