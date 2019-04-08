<table border="0" class="table table-responsive table-hover" style="text-align: center">
  <thead class="tableth">
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
      <td id="id">{{ $cl ->  id}}</td>
      <td id="category_name">{{ $cl ->  category_name}}</td>
      <td id="description">{{ $cl -> description }}</td>
      <td><button class="btn btn-warning botonfunciones" data-toggle="modal" data-target="#myModal2" onClick="seeData('{{ $cl -> id }}','{{ $cl -> category_name }}','{{ $cl -> description }}')"><i class="material-icons">update</i></button></td>
      <td><form action="{{ url('administrador') }}/{{ 'categoriasB' }}/{{ $cl -> id }}" method="Get">
        <button class="btn btn-danger botonfunciones" onClick="javascript: return confirm('¿Esta segudo que desea eliminar la categoria con ID {{ $cl -> id }}?');"><i class="material-icons">delete_forever</i></button></form></td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $category_list->links( "pagination::bootstrap-4") }}



<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Actualizar categoria</h4>
        <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>
      </div>
      <div class="modal-body">
        @include('admin.form.form-editcategory')
      </div>
    </div>
  </div>
</div>


<script>
  function seeData(id,category_name,description){
    document.getElementById('aid').innerHTML = id;
    document.getElementById('acn').innerHTML = category_name;
    document.getElementById('ad').innerHTML = description;
  }
</script>