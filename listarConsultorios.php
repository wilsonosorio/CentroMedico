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
<title>Actualizar Consultorios:)</title>
</head>

<body>
<h2 align="center">LISTADO ACTUAL DE CONSULTORIOS</h2>
<table width="25%" border="1" align="center">
  <tr align="center" bgcolor="#cc0000" class="texto">
  
    
    <td>Nombre</td>
	 <td>Editar</td>
	  <td>Eliminar</td>
	
  </tr>
 <?php
while($registro=$consultorio->fetch_object())
{
?>
  <tr>
    
    <td><?php echo $registro->conNombre?></td>
    
	
  
  <td align="center"><a href="frmActualizarConsultorio.php?idConsultorio=<?php echo $registro->idConsultorio?>"><img src="../Imagenes/editar.jpg" 
        
        width="29" height="24" /></a></td>
        
        
        <td align="center"><a href="eliminarConsultorio.php?idConsultorio=<?php echo $registro->idConsultorio?>"><img src="../Imagenes/eliminar.png" 
        
        width="29" height="24" /></a></td>
	
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
	echo "Problemas al actualizar el Consultorio, por favor revise";	
if ($_REQUEST['x']==3)
	echo "Se ha eliminado el Consultorio correctamente";
if ($_REQUEST['x']==4)
	echo "Problemas al eliminar el Consultorio, por favor revise";

?>
</body>
</html>