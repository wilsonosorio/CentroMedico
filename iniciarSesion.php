<p>&nbsp;</p>
<p><br>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="Controlador/validarInicioSesion.php">
  <table width="31%" border="0" align="center">
    <tr bgcolor="#CCCC00">
      <td colspan="2" align="center" bgcolor="#cc0000" class="texto" >Inicio Sesión</td>
    </tr>
    <tr>
      <td width="39%" align="right">Login</td>
      <td width="61%"><label for="login"></label>
      <input name="login" type="text" id="login" size="40" required/></td>
    </tr>
    <tr>
      <td align="right">Password:</td>
      <td><label for="password"></label>
      <input name="pass" type="password" id="pass" size="40" required/></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#cc0000"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
</form>

<?php

if ($x==1)
	echo "<br><p align='center'> Usuario no registrado con los datos ingresados, vuelva a intentar";
if ($x==2)
	echo "<br><p align='center'> Deben Iniciar Sesión para poder ingresar a la Aplicación";
if ($x==3)
	echo "<br><p align='center'> El Usuario ha cerrado la Sesión";
?>