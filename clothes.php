<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Proyecto de programacion web</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body id="fondo">
	<form name="formulario" action="pdf.php" method="POST">
	<header>
		<div class="container-fluid color2" align="center">
			<div class="row">

				<div class="col-sm-3">
					<br><img src="calvin_klein_logo_2623.gif" class="img-responsive" width="100" alt="">
				</div>
				<div class=" col-sm-6">
					<h1>    Calvin Klein</h1>
				</div>
				<div class="col-xs-3"></div>
				
			</div>
		</div>
	</header>
	<nav class="container-fluid">
		<div class="row">
			<div class="col-xs-12 color2">
				<table align="center">
					<tr>
						<td>
							<ul class="nav nav-pills" role="tablist">
								<li class="margenLiga"><a href="index.html">Home</a></li>
							</ul>
						</td>
						<td>
							<ul class="nav nav-pills" role="tablist">
								<li class="margenLiga"><a href="clothes.php">Clothes</a></li>
							</ul>
						</td>
						<td>
							<ul class="nav nav-pills" role="tablist">
								<li class="margenLiga"><a href="videos.html">Videos</a></li>
							</ul>
						</td>
					</tr>

				</table>
			</div>
		</div>
	</nav>
			<div class="row">
				<div class="col-xs-12">
					<br><p></p>
					<br><p></p>
				</div>
			</div>

			<div class="col-xs-12  col-sm-3 "  >
    			<div class="thumbnail">
     			 	<img src="ropa1.jpg" alt="..." >
      			<div class="caption">
        		<h3>Denim shorts</h3>
        		<p>$150.00</p>
        		<h4>Color:</h4>
        		<select name="Denim shorts" id="color">
        							<option value=" selecciona una opcion" >seleccion una opcion</option>
									<option value="Azul" >Azul</option>
									<option value="Negro">Negro</option>
									<option value="Blanco">Blanco</option>
									<option value="Rojo">Rojo</option>
									<option value="Verde">Verde</option>
				</select>

				<h4>Numero de Articulos:</h4>
				<input type="text" name="articulo1"/></td>

				<h4>Comprar:</h4>
					<td><input type="radio" name="compra" value="Si"/>Si</td>
					<td><input type="radio" name="compra" value="No"/>No</td>
      			</div>
    			</div>
  			</div>

  			<div class="col-xs-12  col-sm-3 "  >
    			<div class="thumbnail">
     			 	<img src="ropa2.jpg" alt="..." >
      			<div class="caption">
        		<h4>Floral Lace Paneled Top</h4>
        		<p>$300</p>
      			</div>
    			</div>
  			</div>

  			<div class="col-xs-12  col-sm-3 "  >
    			<div class="thumbnail">
     			 	<img src="ropa3.jpg" alt="..." >
      			<div class="caption">
        		<h4>Eyelash Lace Sheath Dress</h4>
        		<p>$500</p>
      			</div>
    			</div>
  			</div>
  			<div class="col-xs-12  col-sm-3 "  >
    			<div class="thumbnail">
     			 	<img src="ropa4.jpg" alt="..." >
      			<div class="caption">
        		<h4>Tribal Print Bodycon Dress</h4>
        		<p>$470</p>
      			</div>
    			</div>
  			</div>


			<div class="row">
				<input type="submit" value="terminar compra">
			</div>
  			

<script src="js/bootstrap.js"></script>
	</form>
</body>
</html>