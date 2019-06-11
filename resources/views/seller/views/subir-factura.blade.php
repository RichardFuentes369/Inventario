@extends('Plantillas.puser')

@section('content')
	<div class="col-sm-12">
    <h3 align="left"><strong>Subir Factura</strong></h3>
  </div>
  <hr>
  <div class="col-sm-12">
    <div class="row">
      <div class="col-sm-12">
      	@include('seller.form.form-upfileinvoice')
      </div>
    </div>
  </div>
	<hr>
@endsection
