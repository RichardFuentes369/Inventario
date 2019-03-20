<form action="{{ url('index/Login') }}" method ="POST">
	{{ csrf_field() }}
	<div class="card">
	  <div class="card-header">
	    <label for="login"><b>Login</b></label>
	  </div>
	  <div class="card-body">
    	<label for="email"><b>Correo</b></label>
	  	<input type="email" id="email" name="email" placeholder="example@correo.com" class="form-control" value="{{ old('email') }}">
        {!! $errors->first('email', '<span class="help-block" style="color:red">:message</span>') !!}
        <br>
	  	<label for="password"><b>Contraseña</b></label>
	  	<input type="password" id="password" name="password" placeholder="************" class="form-control">
        {!! $errors->first('password', '<span class="help-block" style="color:red">:message</span>') !!}
        <br><br>
    	<button type="submit" class="btn btn-primary btn-block">Ingresar</button>
	  </div>
	</div>
</form>