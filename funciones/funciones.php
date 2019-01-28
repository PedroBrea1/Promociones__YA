<?php 

function conexion($dbname, $usuario, $pass){
	try {
		$conexion=new PDO ("mysql:host=localhost; dbname=$dbname, $usuario, $pass");
		return $conexion;
	} catch (Exception $e) {
		return false;
	}
}

 ?>