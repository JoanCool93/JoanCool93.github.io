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
		    	<legend>Ingresar</legend>
			    <div class="form-group">
			      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
			      <div class="col-lg-10">
			        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-lg-10 col-lg-offset-2">
			        <button type="reset" class="btn btn-default" action="index.html">Cancel</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
		  	</fieldset>
		</form>
		</div>
	</body>
</html>