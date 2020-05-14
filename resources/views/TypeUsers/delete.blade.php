<html lang="es_DO">
  <div class="container">
  	<div class="row justify-content-center">
  		<br>
  		<div class="cold-md-5">
<form action="/typeusersdestroy" method="post">
	<div class="form-group">
				<input type="submit" value="eliminar" class="btn btn-primary" onclick="return confirm('borrar?');">
				
	</div>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="id" value="{{$Type->id}}">
		</form>	

  	</div>
  	</div>
  	</div>
  	</html>