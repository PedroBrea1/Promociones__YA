<?php session_start();

if (isset($_SESSION['razonsocial'])) {
	header('Location: empresasindex.php');
}

$errores = '';
$error1 = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		$razonsocial = filter_var($_POST['razonsocial'], FILTER_SANITIZE_STRING);
		$password = $_POST['password'];
		$password = hash('sha512', $password);

		if (empty($razonsocial) or empty($password)) {
			$errores .= 'Por favor rellena los datos correctamente';
		}else{
			
			try {
				$conexion = new PDO('mysql:host=127.0.0.1; dbname=261188_promocionesya', '261188-pedrobrea','pb1991');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}

			$statement = $conexion->prepare('SELECT * FROM empresas WHERE razonsocial = :razonsocial AND password = :password');
			$statement->execute(array(':razonsocial' => $razonsocial, ':password' => $password ));
			$resultado = $statement->fetch();

			if ($resultado !== false) {
			 	$_SESSION['razonsocial'] = $razonsocial;
			 	header('Location: empresasindex.php');
			 } else {
			 	$error1 .= 'Datos incorrectos';
			 }
		}
}			

require 'views/empresasinicio.views.php';

 ?>