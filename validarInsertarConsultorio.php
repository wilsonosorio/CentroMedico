<?php
session_start();
extract($_REQUEST); 
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Consultorio.php";

$objConsultorio= new Consultorio();
$objConsultorio->crearConsultorio($_REQUEST['nombre']);

$resultado = $objConsultorio->agregarConsultorio();
if ($resultado)
	header ("location:../vista/index2.php?pag=insertarConsultorio&msj=1");
else
	header ("location:../vista/index2.php?pag=insertarConsultorio&msj=2");

?>



