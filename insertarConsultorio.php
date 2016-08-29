   <form id="form1" name="form1" method="post" action="../controlador/validarInsertarConsultorio.php">
      <table width="42%" border="0" align="center">
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center">INSERTAR CONSULTORIO</td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#fbec88">Nombre Consultorio</td>
          <td width="72%"><label for="nombre"></label>
          <input name="nombre" type="int" id="nombre" size="40"  required /></td>
        </tr>
        
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center" bgcolor="#cc0000"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
      </table>
    </form>
    
    <?php
if ($msj==1)
	echo '<p align="center" >Se ha Agregado el Consultorio Correctamente';
if ($msj==2)
	echo '<p align="center"> Problemas al Agregar Consultorio, favor Revisar';

?>