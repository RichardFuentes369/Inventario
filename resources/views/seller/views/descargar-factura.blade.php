@extends('Plantillas.puser')

@section('content')
  <div class="col-sm-12">
    <h3 align="left"><strong>Facturas</strong></h3>
  </div>
  <hr>
  <div class="col-sm-12">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        @include('seller.table.tabla-facturas')  
      </div>
      <div class="col-sm-3"></div>
    </div>
  </div>
  <hr>
@endsection
