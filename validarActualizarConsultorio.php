<?php

extract ($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();

echo $sql= "update consultorios set conNombre = '$_REQUEST[nombre]' where idConsultorio = '$_REQUEST[idConsultorio]' ";
$resultado = $objConexion->query($sql);

if ($resultado)
	header ("location: ../vista/listarConsultorios.php?x=1"); //x=1 es actualizado correctamente
else
	header ("location: ../vista/listarConsultorios.php?x=2"); //x=2 no se puede actualizar
$objConexion->close();
?>



