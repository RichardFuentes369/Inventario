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
      <td id="id">{{ $pl ->  id}}</td>
      <td id="nit">{{ $pl ->  NIT}}</td>
      <td id="business_name">{{ $pl -> business_name }}</td>
      <td style="display: none;" id="country">{{ $pl -> country }}</td>
      <td style="display: none;" id="department">{{ $pl -> department }}</td>
      <td style="display: none;" id="county">{{ $pl -> county }}</td>
      <td style="display: none;" id="neighborhood">{{ $pl -> neighborhood }}</td>
      <td style="display: none;" id="address">{{ $pl -> address }}</td>
      <td style="display: none;" id="phone1">{{ $pl -> phone1 }}</td>
      <td style="display: none;" id="phone2">{{ $pl -> phone2 }}</td>
      <td style="display: none;" id="cellphone1">{{ $pl -> cellphone1 }}</td>
      <td style="display: none;" id="cellphone2">{{ $pl -> cellphone2 }}</td>
      <td style="display: none;" id="description">{{ $pl -> description }}</td>
      <td><button class="btn btn-primary botonfunciones" data-toggle="modal" data-target="#myModal1" onClick="seeData('{{ $pl -> NIT }}', '{{ $pl -> business_name }}', '{{ $pl -> country }}', '{{ $pl -> department }}', '{{ $pl -> county }}', '{{ $pl -> neighborhood }}', '{{ $pl -> address }}', '{{ $pl -> phone1 }}', '{{ $pl -> phone2 }}', '{{ $pl -> cellphone1 }}', '{{ $pl -> cellphone2 }}', '{{ $pl -> description }}')"><i class="material-icons">visibility</i></button></td>
      <td><button class="btn btn-warning botonfunciones" data-toggle="modal" data-target="#myModal2" onClick="updateData('{{ $pl -> id }}', '{{ $pl -> NIT }}', '{{ $pl -> business_name }}', '{{ $pl -> country }}', '{{ $pl -> department }}', '{{ $pl -> county }}', '{{ $pl -> neighborhood }}', '{{ $pl -> address }}', '{{ $pl -> phone1 }}', '{{ $pl -> phone2 }}', '{{ $pl -> cellphone1 }}', '{{ $pl -> cellphone2 }}', '{{ $pl -> description }}')"><i class="material-icons">update</i></button></td>
      <td><form action="{{ url('administrador') }}/{{ 'proveedoresB' }}/{{ $pl -> id }}" method="Get">
        <button class="btn btn-danger botonfunciones" onClick="javascript: return confirm('¿Esta segudo que desea eliminar la categoria con ID {{ $pl -> id }}?');"><i class="material-icons">delete_forever</i></button></form></td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $providers_list->links( "pagination::bootstrap-4") }}


<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ver Proveedor</h4>
        <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>
      </div>
      <div class="modal-body">
        @include('admin.form.form-seeprovider')
      </div>
    </div>
  </div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Actualizar Proveedor</h4>
        <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>
      </div>
      <div class="modal-body">
        @include('admin.form.form-editproviders')
      </div>
    </div>
  </div>
</div>


<script>
  function seeData(nit,business_name,country,department,county,neighborhood,address,phone1,phone2,cellphone1,cellphone2,description){
    document.getElementById('snit').innerHTML = nit;    
    document.getElementById('sbusiness_name').innerHTML = business_name;
    document.getElementById('scountry').innerHTML = country;
    document.getElementById('sdepartment').innerHTML = department;
    document.getElementById('scounty').innerHTML = county;
    document.getElementById('sneighborhood').innerHTML = neighborhood;
    document.getElementById('saddress').innerHTML = address;
    document.getElementById('sphone1').innerHTML = phone1;
    document.getElementById('sphone2').innerHTML = phone2;
    document.getElementById('scellphone1').innerHTML = cellphone1;
    document.getElementById('scellphone2').innerHTML = cellphone2;
    document.getElementById('sdescription').innerHTML = description;
  }
  function updateData(id,nit,business_name,country,department,county,neighborhood,address,phone1,phone2,cellphone1,cellphone2,description){
    document.getElementById('uid').innerHTML = id;
    document.getElementById('unit').innerHTML = nit;    
    document.getElementById('ubusiness_name').innerHTML = business_name;
    document.getElementById('ucountry').innerHTML = country;
    document.getElementById('udepartment').innerHTML = department;
    document.getElementById('ucounty').innerHTML = county;
    document.getElementById('uneighborhood').innerHTML = neighborhood;
    document.getElementById('uaddress').innerHTML = address;
    document.getElementById('uphone1').innerHTML = phone1;
    document.getElementById('uphone2').innerHTML = phone2;
    document.getElementById('ucellphone1').innerHTML = cellphone1;
    document.getElementById('ucellphone2').innerHTML = cellphone2;
    document.getElementById('udescription').innerHTML = description;
  }
</script>