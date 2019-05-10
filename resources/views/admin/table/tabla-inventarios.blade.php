<table border="0" class="table table-responsive table-hover" style="text-align: center">
  <thead class="tableth">
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre de la categoria</th>
      <th scope="col">Cantidad</th>
      <th scope="col" colspan="2">Opciónes</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($category_list_inventory as $cli)
    <tr>
      <td id="id">{{ $cli -> category_id}}</td>
      <td id="category_name">{{ $cli -> category_name}}</td>
      <td id="cantidad">{{ $cli -> quantity}}</td>   
      <td><form action="{{ url('administrador')}}/{{ 'inventariosV' }}/{{ $cli -> category_id}}"><button class="btn btn-primary botonfunciones" title="ver"><i class="material-icons">visibility</i></button></form></td> 
      <td><button class="btn btn-success botonfunciones" data-toggle="modal" data-target="#myModal2" onClick="seeData('{{ $cli -> category_id }}')" title="añadir"><i class="material-icons">add</i></button></td> 
    </tr>
    @endforeach
  </tbody>
</table>

{{ $category_list_inventory->links( "pagination::bootstrap-4") }}


<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Añadir Producto</h4>
        <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>
      </div>
      <div class="modal-body">
        @include('admin.form.form-addproductI')
      </div>
    </div>
  </div>
</div>

<script>  
  function seeData(id){
    document.getElementById('aid').innerHTML = id;
  }
</script>

