<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Consultorio.php";
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$_REQUEST['x']=0;
$objConsultorio=new Consultorio();
$consultorio=$objConsultorio->consultarConsultorios();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Consultorios:)</title>
</head>

<body>
<h2 align="center" color="white">ESTE ES NUESTRO LISTADO DE CONSULTORIOS</h2>
<table width="25%" border="1" align="center">
  <tr align="center" bgcolor="#cc0000" class="texto">
    
    <td>Nombres Consultorios</td>
    
  </tr>
 <?php
while($registro=$consultorio->fetch_object())
{
?>
  <tr>
    
    <td align="center"><?php echo $registro->conNombre?> </td>
    
  </tr> 
  
 <?php
}  //cerrando el ciclo while
?>
</table>
<p>
<?php

if ($_REQUEST['x']==1)
	echo "Se ha actualizado el Consultorio correctamente";
if ($_REQUEST['x']==2)
	echo "Problemas al actualizar el Consultorio";	
if ($_REQUEST['x']==3)
	echo "Se ha eliminado el Consultorio correctamente";
if ($_REQUEST['x']==4)
	echo "Problemas al eliminar el Consultorio";

?>
</body>
</html>