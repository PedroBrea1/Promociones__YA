<?php
	
	$mysqli=new mysqli("127.0.0.1","261188-pedrobrea","pb1991","261188_promocionesya"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>