@extends('Plantillas.puser')

@section('content')
	<div class="col-sm-12">
    <h3 align="left"><strong>Facturar</strong></h3>
  </div>
  <hr>
  <div class="col-sm-12">
      <div class="col-sm-12" style="background-color: #FEECEC">
        @include('admin.form.form-createinvoices')        
      </div>
  </div>
	<hr>
@endsection
