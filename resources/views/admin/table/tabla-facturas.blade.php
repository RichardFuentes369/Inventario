<table border="0" class="table table-responsive table-hover" style="text-align: center">
  <thead class="tableth">
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Fecha</th>
      <th scope="col">Mostrar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($invoices_list as $il)
    <tr>
      <td id="id">{{ $il -> id}}</td>
      <td id="category_name">{{ $il -> fecha}}</td>
      <td id="category_name">
        <a type="button" href="{{ url('pdf')}}/{{ $il -> pdf }}" target="_blank" class="btn btn-primary">Descargar</a>
      </td>
      <td><form action="{{ url('administrador') }}/{{ 'facturasB' }}/{{ $il -> id }}" method="Get">
        <button class="btn btn-danger botonfunciones" onClick="javascript: return confirm('¿Esta segudo que desea eliminar la factura con ID {{ $il -> id }}?');"><i class="material-icons">delete_forever</i></button></form></td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $invoices_list->links( "pagination::bootstrap-4") }}
