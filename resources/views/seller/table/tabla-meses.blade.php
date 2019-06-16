<table border="0" class="table table-responsive table-hover" style="text-align: center">
  <thead class="tableth">
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Año</th>
      <th scope="col">Mes</th>
      <th scope="col">Total Facturado</th>
      <th scope="col">Opciónes</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($month_list as $ml)
    <tr>
      <td id="id">{{ $ml ->  id}}</td>
      <td id="year">{{ $ml -> year }}</td>
      <td id="month">{{ $ml ->  month}}</td>
      <td id="total">${{ $ml -> vendido }}</td>
      <td><form action="{{ url('vendedor')}}/{{ 'mesesV' }}/{{ $ml -> id}}">
        <button class="btn btn-primary botonfunciones"><i class="material-icons">visibility</i></button>
      </form></td>
    </tr>
    @endforeach
  </tbody>
</table>