<form action="{{ url('index/Login') }}" method ="POST">
	{{ csrf_field() }}
	  <div class="card-body">
	  	<div class="col-sm-12">
	  		<div class="row">
	  			<div class="col-sm-6">
	  				<div class="form-group">
	    				<label for="email"><b>Correo</b></label>
		  				<input type="email" id="email" name="email" placeholder="example@correo.com" class="form-control" value="{{ old('email') }}">
	        			{!! $errors->first('email', '<span class="help-block" style="color:red">:message</span>') !!}	  		
	  				</div>
	  			</div>
	  			<div class="col-sm-6">
	  				<div class="form-group">
		  				<label for="password"><b>Contraseña</b></label>
		  				<input type="password" id="password" name="password" placeholder="************" class="form-control">
	        			{!! $errors->first('password', '<span class="help-block" style="color:red">:message</span>') !!}	  		
	  				</div>
	  			</div>
	  		</div>
	  		<div class="row">
	  			<div class="col-sm-9"></div>
	  			<div class="col-sm-3">
    				<button type="submit" class="btn btn-primary btn-block">Ingresar</button>
    			</div>
	  		</div>
    		<hr>
	  		<a href="#">¿Olvidaste tu contraseña?</a>
	  	</div>
	  </div>
</form>


