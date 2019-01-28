<?php 

session_start();

if (!isset($_SESSION['usuario'])) {
	header('Location: inicio.php');
}

 $errores = '';
 $error1 = '';
 $id2 = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		$usuariobonus = $_POST['usuariobonus'];
		
		if (empty($usuariobonus)) {
			$errores .= 'No hagas trampa... No has ingresado a ningún usuario';
		}else{

		try {
				$conexion = new PDO('mysql:host=127.0.0.1; dbname=261188_promocionesya', '261188-pedrobrea','pb1991');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}

			$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario');
			$statement->execute(array(':usuario' => $usuariobonus));
			$resultado = $statement->fetch();
			$id=$resultado['0'];
			
			if ($resultado == false) {
			 	

			 } else {
			 	
			 	try {
				$conexion = new PDO('mysql:host=Localhost; dbname=promocionesya', 'root','');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}

			$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario');
			$statement->execute(array(':usuario' => $_SESSION['usuario']));
			$resultado2 = $statement->fetch();
			$id2=$resultado2['0'];

			 }

		if($id > $id2){
			header('Location: bonus.php');
		}else {
			$error1 .= 'El usuario que ingreses tiene que haber ingresado después de ti';
		}

		}
			
}	

require 'views/bonustrack.views.php';

 ?>

