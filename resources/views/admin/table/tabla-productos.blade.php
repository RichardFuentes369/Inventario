<table border="0" class="table table-responsive table-hover" style="text-align: center">
  <thead class="tableth">
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Proveedor</th>
      <th scope="col">Nombre</th>
      <th scope="col">Lote</th>
      <th scope="col">F. Manufacturación</th>
      <th scope="col">F. Vencimiento</th>
      <th scope="col">Cantidad</th>
      <th scope="col" colspan="2">Opciónes</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($ListProductByCategory as $lp)
    <tr>
      <td id="id">{{ $lp -> id}}</td>
      <td id="provider">{{ $lp -> provider -> business_name }} <br> {{ $lp -> provider -> nit }}</td>
      <td id="name">{{ $lp -> name}}</td>
      <td id="lote">{{ $lp -> lote}}</td>
      <td id="manufacturing_date">{{ $lp -> manufacturing_date}}</td>
      <td id="expiration_date">{{ $lp -> expiration_date}}</td>
      <td id="quantity">{{ $lp -> quantity}}</td> 
      <td><button class="btn btn-warning botonfunciones" data-toggle="modal" data-target="#myModal1" title="actualizar" onClick="seeData('{{ $lp -> id }}','{{ $lp -> name }}','{{ $lp -> lote }}','{{ $lp -> manufacturing_date }}','{{ $lp -> expiration_date }}','{{ $lp -> quantity }}')"><i class="material-icons">update</i></button></td>   
      <td><form action="{{ url('administrador')}}/{{ 'inventariosB' }}/{{ $lp -> id}}" method="Get">
        <button class="btn btn-danger botonfunciones" onClick="javascript: return confirm('¿Esta segudo que desea eliminar el producto con ID {{ $lp -> id }}?');" title="eliminar"><i class="material-icons">delete_forever</i></button></form></td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $ListProductByCategory->links( "pagination::bootstrap-4") }}


<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Actualizar Producto</h4>
        <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>
      </div>
      <div class="modal-body">
        @include('admin.form.form-editproducts')
      </div>
    </div>
  </div>
</div>

<script>
  function seeData(id,name,lote,manufacturing_date,expiration_date,quantity){
    document.getElementById('uid').innerHTML = id;
    document.getElementById('uname').innerHTML = name;
    document.getElementById('ulote').innerHTML = lote;
    document.getElementById('umanufacturing_date').innerHTML = manufacturing_date;
    document.getElementById('uexpiration_date').innerHTML = expiration_date;
    document.getElementById('uquantity').innerHTML = quantity;
  }
</script>