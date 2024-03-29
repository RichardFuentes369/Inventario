@extends('Plantillas.puser')

@section('content')
	<div class="col-sm-12">
		<h3 align="left"><strong>Categorias</strong></h3>
		<button aling="right" type="button" class="btn btn-success botonanadir" data-toggle="modal" data-target="#myModal">Añadir</button>
	</div>
	<hr>
  <div class="col-sm-12">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        @include('flash::message')  
        @include('admin.table.tabla-categorias')        
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>
	<hr>
@endsection

<!--Modal-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Añadir nueva categoria</h4>
        <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>
      </div>
      <div class="modal-body">
        @include('admin.form.form-addcategory')
      </div>
    </div>
  </div>
</div>

