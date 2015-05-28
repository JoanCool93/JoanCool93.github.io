<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Proyecto de programacion web</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<header>
			<div class="container-fluid color2" align="center">
				<div class="header">

					<div class="col-sm-3">
						<br><img src="calvin_klein_logo_2623.gif" class="img-responsive" width="100" alt="">
					</div>
					<div class=" col-sm-6">
						<h1 class="fontcolor1">    Calvin Klein</h1>
					</div>
					<div class="col-xs-3">
						<div class="header-signup">
							<a href="ingresar.php">Ingresar</a>
							<a href="registro.php">Registrarse</a>
						</div>
					</div>
					
				</div>
			</div>
		</header>
		<div class="container">
			<form class="form-horizontal">
	  		<fieldset>
		    	<legend>Registro de Usuario</legend>
		    	<div class="form-group">
		    		<label for="nombre" class="col-lg-2 control-label">Nombre</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="nombre" placeholder="Nombre">
			      </div>	
        		</div>
        		<div class="form-group">
		    		<label for="apellidos" class="col-lg-2 control-label">Apellidos</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
			      </div>	
        		</div>
        		<div class="form-group">
		    		<label for="estado" class="col-lg-2 control-label">Estado</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="estado" placeholder="Estado">
			      </div>	
        		</div>
        		<div class="form-group">
		    		<label for="municipio" class="col-lg-2 control-label">Municipio</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="municipio" placeholder="Municipio">
			      </div>	
        		</div>
        		<div class="form-group">
		    		<label for="direccion" class="col-lg-2 control-label">Dirección</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="direccion" placeholder="Dirección">
			      </div>	
        		</div>
        		<div class="form-group">
		    		<label for="cp" class="col-lg-2 control-label">C.P.</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="cp" placeholder="Codigo Postal">
			      </div>	
        		</div>
			    <div class="form-group">
			      <label for="inputEmail" class="col-lg-2 control-label">Correo</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="inputEmail" placeholder="Correo">
			      </div>
			    </div>
			    <div class="form-group">
		    		<label for="telefono" class="col-lg-2 control-label">Telefono</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="telefono" placeholder="Telefono">
			      </div>	
        		</div>
			    <div class="form-group">
			      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
			      <div class="col-lg-10">
			        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
			        <div class="checkbox">
			          <label>
			            <input type="checkbox"> Checkbox
			          </label>
			        </div>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-lg-10 col-lg-offset-2">
			        <button type="reset" class="btn btn-default">Cancel</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
		  	</fieldset>
		</form>
		</div>
	</body>
</html>