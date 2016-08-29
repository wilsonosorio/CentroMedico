<?php
class Consultorio
{
	
	public function setNombre($nombre)
	{
		$this->nombre=$nombre;
	}
	
	public function getNombre()
	{
		return ($this->nombre);
	}
	
	
	
	public function Consultorio()
	{
		//$objConexion = Conectarse();
	}
	
	public function crearConsultorio($nombre)
	{
		
		$this->nombre=$nombre;
		
	}
	
	public function agregarConsultorio()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into consultorios (conNombre)
values ('$this->nombre')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarConsultorios()
	{
		$this->Conexion=Conectarse();
		$sql="select * from consultorios";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	
	public function actualizarConsultorio($nombre)
	{
		$this->Conexion=Conectarse();
		$sql="update consultorios set conNombre = '$_REQUEST[nombre]'where idConsultorio = '$_REQUEST[idConsultorio]' ";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function eliminarConsultorio($identificacion)
	{
		$this->Conexion=Conectarse();
		$sql="select * from consultorios where idConsultorio='$nombre'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
}

?>