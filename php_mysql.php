<?php
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/Courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

$conexion = mysql_connect("localhost","root","online");
mysql_select_db("centromedico", $conexion);
$queMed = "SELECT idMedico, medIdentificacion, medNombres, medApellidos, medEspecialidad, medTelefono, medCorreo FROM medicos ORDER BY medNombres ASC";
$resMed = mysql_query($queMed, $conexion) or die(mysql_error());
$totMed = mysql_num_rows($resMed);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resMed)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
                'num'=>'<b>Num</b>',
				'medIdentificacion'=>'<b>Identificacion</b>',
				'medNombres'=>'<b>Nombre</b>',
				'medApellidos'=>'<b>Apellido</b>',
				'medEspecialidad'=>'<b>Especialidad</b>',
				'medTelefono'=>'<b>Telefono</b>',
				'medCorreo'=>'<b>Correo</b>'
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>BLOG.UNIJIMPE.NET</b>\n";
$txttit.= "Ejemplo de PDF con PHP y MYSQL \n";

$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>