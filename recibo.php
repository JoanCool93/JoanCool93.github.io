<?php  require('html2pdf/html2pdf.class.php');
if( isset($_POST["compra"]))
{
$contenido="<h2 align='center'>Recibo de Compra</h2><p align='center'></p>
			<hr>
			<h4>Compra</h4><ul>";
if( isset($_POST["articulo1"]))
{
	$contenido.="<li>Denim Shorts......... $_POST[articulo1]</li> ";
}

if (isset($_POST["color"])) {
	$contenido.="<li>$_POST[Primaria]:$_POST[escuela]<br>
				Titulado:$_POST[titulado] De:$_POST[anio1] A:$_POST[anio2]</li> ";
}
	
}

$contenido.="</ul>";
$html2pdf=new HTML2PDF('P', 'A4', 'es');
$html2pdf->WriteHTML($contenido);
$html2pdf->Output('recibo.pdf');

?>