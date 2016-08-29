
<?php

require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql="select conNombre from consultorios where idConsultorio = '$_REQUEST[idConsultorio]'";  
$resultadoConsultorio = $objConexion->query($sql);
$registro = $resultadoConsultorio->fetch_object();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Actualizar Consultorios</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="../Controlador/validarActualizarConsultorio.php">
  <table width="42%" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00">ACTUALIZAR CONSULTORIO</td>
    </tr>
    
    <tr>
      <td align="right" bgcolor="#EAEAEA">Nombre</td>
      <td><label for="nombre"></label>
      <input name="nombre" type="text" id="nombre" value="<?php echo $registro->conNombre?>" size="40" /></td>
    </tr>
    
    
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
	</table>
   <input name="idConsultorio" type="hidden" value="<?php echo $_REQUEST['idConsultorio'] ?>" />
	
	  
</form>


</body>
</html>