<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}
 $errores = '';
 $error1 = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		$password = hash('sha512', $password);

		if (empty($usuario) or empty($password)) {
			$errores .= 'Por favor rellena los datos correctamente';
		}else{

		try {
				$conexion = new PDO('mysql:host=127.0.0.1; dbname=261188_promocionesya', '261188-pedrobrea','pb1991');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}

			$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password');
			$statement->execute(array(':usuario' => $usuario, ':password' => $password ));
			$resultado = $statement->fetch();

			if ($resultado !== false) {
			 	$_SESSION['usuario'] = $usuario;
			 	header('Location: supermercados.php');
			 } else {
			 	$error1 .= 'Datos incorrectos';
			 }

		}
			
}	

require 'views/login.view.php';

 ?>

