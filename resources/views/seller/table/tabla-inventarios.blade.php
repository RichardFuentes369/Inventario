<table border="0" class="table table-responsive table-hover" style="text-align: center">
  <thead class="tableth">
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre de la categoria</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Ver</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($category_list_inventory as $cli)
    <tr>
      <td id="id">{{ $cli -> category_id}}</td>
      <td id="category_name">{{ $cli -> category_name}}</td>
      <td id="cantidad">{{ $cli -> quantity}}</td>   
      <td><form action="{{ url('vendedor')}}/{{ 'inventariosV' }}/{{ $cli -> category_id}}"><button class="btn btn-primary botonfunciones"><i class="material-icons">visibility</i></button></form></td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $category_list_inventory->links( "pagination::bootstrap-4") }}

