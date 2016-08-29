<?php
function Conectarse()
{
	$Conexion=new MysQli("localhost","root","online","centromedico");
	
	
		if ($Conexion->connect_errno) 
		echo "Problemas en la Conexion ". $Conexion->connect_error;
	else
		return $Conexion;
}
?>
