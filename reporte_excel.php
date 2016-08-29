<?php
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Reporte_excel.xls");
	
	$conexion=mysql_connect("localhost","root","online","centromedico");
	mysql_select_db("centromedico",$conexion); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
     <title>GENERAR REPORTES</title>
   </head>

   <body>
   <table width="100%" border="1" cellspacing="0" cellpadding="0">
   <tr>
      <td colspan="5" bgcolor="yellow"><CENTER><strong><h1>REPORTES DE PACIENTES</h1></strong></CENTER></td>
    </tr>
    <tr bgcolor="red">
	<td align="center"><strong><h3>Identificacion</h3></strong></td>
	<td align="center"><strong><h3>Nombres</h3></strong></td>
	<td align="center"><strong><h3>Apellidos</h3></strong></td>
	<td align="center"><strong><h3>Fecha de Nacimiento</h3></strong></td>
	<td align="center"><strong><h3>Sexo</h3></strong></td>
     </tr>

    
   <?php
     
    $sql=mysql_query("select idPaciente,pacIdentificacion,pacNombres,pacApellidos,pacFechaNacimiento,pacSexo from pacientes");
    while($res=mysql_fetch_array($sql)){
    
       $idpaciente=$res["idPaciente"];
       $nombres=$res["pacNombres"];
       $apellidos=$res["pacApellidos"];
       $fechanacimiento=$res["pacFechaNacimiento"];
	   $sexo=$res["pacSexo"];

   ?>
   <tr>
      <td><?php echo $idpaciente; ?> </td>
      <td><?php echo $nombres; ?> </td>
      <td><?php echo $apellidos; ?> </td>
      <td><?php echo $fechanacimiento; ?> </td>
	  <td><?php echo $sexo; ?> </td>

   </tr>
   <?php
   }
    ?>
</table
</body>
</html>
