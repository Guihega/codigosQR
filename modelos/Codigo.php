<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Codigo
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($tipoCodigo,$texto,$codigo)
	{
		$sql="INSERT INTO codigoQr (tipoCodigo,texto,codigo)
		VALUES ($tipoCodigo,'$texto','$codigo')";
		return ejecutarConsulta($sql);
	}

}

?>