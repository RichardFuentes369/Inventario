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
      <td id="id">{{ $cl ->  id}}</td>
      <td id="name">{{ $cl ->  name}}</td>
      <td id="lastname">{{ $cl -> lastname }}</td>
      <td id="dni">{{ $cl -> dni }}</td>
      <td style="display: none;" id="birthdate">{{ $cl -> birthdate }}</td>
      <td style="display: none;" id="document_type">{{ $cl -> document_type  }}</td>
      <td style="display: none;" id="sexo">{{ $cl -> sexo }}</td>
      <td style="display: none;" id="phone">{{ $cl -> phone }}</td>
      <td style="display: none;" id="cellphone">{{ $cl -> cellphone }}</td>
      <td style="display: none;" id="address">{{ $cl -> address }}</td>
      <td style="display: none;" id="department">{{ $cl -> department }}</td>
      <td style="display: none;" id="county">{{ $cl -> county }}</td>
      <td style="display: none;" id="neighborhood">{{ $cl -> neighborhood }}</td>
      <td style="display: none;" id="email">{{ $cl -> email }}</td>
      <td><button class="btn btn-primary botonfunciones" data-toggle="modal" data-target="#myModal1" onClick="seeData('{{ $cl -> name }}', '{{ $cl -> lastname }}', '{{ $cl -> dni }}', '{{ $cl -> birthdate }}', '{{ $cl -> document_type }}', '{{ $cl -> sexo }}', '{{ $cl -> phone}}', '{{ $cl -> cellphone}}', '{{ $cl -> address}}', '{{ $cl -> department}}', '{{ $cl -> county}}', '{{ $cl -> neighborhood}}', '{{ $cl -> email}}')"><i class="material-icons">visibility</i></button></td>
      <td><button class="btn btn-warning botonfunciones" data-toggle="modal" data-target="#myModal2" onClick="updateData('{{ $cl -> id }}', '{{ $cl -> name }}', '{{ $cl -> lastname }}', '{{ $cl -> dni }}', '{{ $cl -> birthdate }}','{{ $cl -> phone}}', '{{ $cl -> cellphone}}', '{{ $cl -> address}}', '{{ $cl -> department}}', '{{ $cl -> county}}', '{{ $cl -> neighborhood}}', '{{ $cl -> email}}')"><i class="material-icons">update</i></button></td>
      <td><form action="{{ url('administrador') }}/{{ 'clientesB' }}/{{ $cl -> id }}" method="Get">
        <button class="btn btn-danger botonfunciones" onClick="javascript: return confirm('¿Esta segudo que desea eliminar la categoria con ID {{ $cl -> id }}?');"><i class="material-icons">delete_forever</i></button></form></td> 
    </tr>
    @endforeach
  </tbody>
</table>

{{ $customers_list->links( "pagination::bootstrap-4") }}


<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ver Cliente</h4>
        <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>
      </div>
      <div class="modal-body">
        @include('admin.form.form-seecustomer')
      </div>
    </div>
  </div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Actualizar Cliente</h4>
        <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>
      </div>
      <div class="modal-body">
        @include('admin.form.form-editcustomers')
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