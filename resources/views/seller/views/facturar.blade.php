@extends('Plantillas.puser')

@section('content')
	<div class="col-sm-12">
    <h3 align="left"><strong>Facturar</strong></h3>
  </div>
  <hr>
  <div class="col-sm-12" style="background-color: #FEECEC">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        @include('seller.form.form-createinvoices') 
      </div>
      <div class="col-sm-1"></div>
    </div>
  </div>
	<hr>
@endsection