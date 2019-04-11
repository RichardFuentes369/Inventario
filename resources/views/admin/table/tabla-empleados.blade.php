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
    @foreach ($users_list as $ul)
    <tr>
      <td id="id">{{ $ul ->  id}}</td>
      <td id="name">{{ $ul ->  name}}</td>
      <td id="lastname">{{ $ul -> lastname }}</td>
      <td id="dni">{{ $ul -> dni }}</td>
      <td style="display: none;" id="birthdate">{{ $ul -> birthdate }}</td>
      <td style="display: none;" id="document_type">{{ $ul -> document_type  }}</td>
      <td style="display: none;" id="sexo">{{ $ul -> sexo }}</td>
      <td style="display: none;" id="phone">{{ $ul -> phone }}</td>
      <td style="display: none;" id="cellphone">{{ $ul -> cellphone }}</td>
      <td style="display: none;" id="address">{{ $ul -> address }}</td>
      <td style="display: none;" id="department">{{ $ul -> department }}</td>
      <td style="display: none;" id="county">{{ $ul -> county }}</td>
      <td style="display: none;" id="neighborhood">{{ $ul -> neighborhood }}</td>
      <td style="display: none;" id="email">{{ $ul -> email }}</td>
      <td><button class="btn btn-primary botonfunciones" data-toggle="modal" data-target="#myModal1" onClick="seeData('{{ $ul -> name }}', '{{ $ul -> lastname }}', '{{ $ul -> dni }}', '{{ $ul -> birthdate }}', '{{ $ul -> document_type }}', '{{ $ul -> sexo }}', '{{ $ul -> phone}}', '{{ $ul -> cellphone}}', '{{ $ul -> address}}', '{{ $ul -> department}}', '{{ $ul -> county}}', '{{ $ul -> neighborhood}}', '{{ $ul -> email}}')"><i class="material-icons">visibility</i></button></td>
      <td><button class="btn btn-warning botonfunciones" data-toggle="modal" data-target="#myModal2" onClick="updateData('{{ $ul -> id }}', '{{ $ul -> name }}', '{{ $ul -> lastname }}', '{{ $ul -> dni }}', '{{ $ul -> birthdate }}','{{ $ul -> phone}}', '{{ $ul -> cellphone}}', '{{ $ul -> address}}', '{{ $ul -> department}}', '{{ $ul -> county}}', '{{ $ul -> neighborhood}}', '{{ $ul -> email}}')"><i class="material-icons">update</i></button></td>
      <td><form action="{{ url('administrador') }}/{{ 'empleadosB' }}/{{ $ul -> id }}" method="Get">
        <button class="btn btn-danger botonfunciones" onClick="javascript: return confirm('¿Esta segudo que desea eliminar la categoria con ID {{ $ul -> id }}?');"><i class="material-icons">delete_forever</i></button></form></td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $users_list->links( "pagination::bootstrap-4") }}



<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ver Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>
      </div>
      <div class="modal-body">
        @include('admin.form.form-seeseller')
      </div>
    </div>
  </div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Actualizar Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>
      </div>
      <div class="modal-body">
        @include('admin.form.form-editseller')
      </div>
    </div>
  </div>
</div>


<script>
  function seeData(name,lastname,dni,birthdate,document_type,sexo,phone,cellphone,address,department,county,neighborhood,email){
    document.getElementById('sname').innerHTML = name;    
    document.getElementById('slastname').innerHTML = lastname;
    document.getElementById('sdni').innerHTML = dni;
    document.getElementById('sbirthdate').innerHTML = birthdate;
    document.getElementById('sdocument_type').innerHTML = document_type;
    document.getElementById('ssexo').innerHTML = sexo;
    document.getElementById('sphone').innerHTML = phone;
    document.getElementById('scellphone').innerHTML = cellphone;
    document.getElementById('saddress').innerHTML = address;
    document.getElementById('sdepartment').innerHTML = department;
    document.getElementById('scounty').innerHTML = county;
    document.getElementById('sneighborhood').innerHTML = neighborhood;
    document.getElementById('semail').innerHTML =  email;
  }

  function updateData(id,name,lastname,dni,birthdate,phone,cellphone,address,department,county,neighborhood,email){
    document.getElementById('uid').innerHTML = id;
    document.getElementById('uname').innerHTML = name;    
    document.getElementById('ulastname').innerHTML = lastname;
    document.getElementById('udni').innerHTML = dni;
    document.getElementById('ubirthdate').innerHTML = birthdate;
    document.getElementById('uphone').innerHTML = phone;
    document.getElementById('ucellphone').innerHTML = cellphone;
    document.getElementById('uaddress').innerHTML = address;
    document.getElementById('udepartment').innerHTML = department;
    document.getElementById('ucounty').innerHTML = county;
    document.getElementById('uneighborhood').innerHTML = neighborhood;
    document.getElementById('uemail').innerHTML =  email;
  }
</script>