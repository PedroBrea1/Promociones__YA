<?php session_start();

require 'funcs/conexion.php';
include 'funcs/funcs2.php';

if (isset($_SESSION['razonsocial'])) {
	header('Location: empresasindex.php');
}

$errores = '';
$error1 = '';
$error2 = '';
$error3 = '';
$error4 = '';
$error5 = '';
$error6 = '';
$razonsocial = '';
$afip = '';
$rubro = '';
$email = '';
$password = '';
$passwordcheck = '';
$password2 = '';
$query ='';
$result = '';
$connect ='';
$resultado ='';
$carpeta ='';
$registro = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	$hostname = '127.0.0.1';
	$username = '261188-pedrobrea';
	$key ='pb1991';
	$databasename ='261188_promocionesya';

		$razonsocial = filter_var($_POST['razonsocial'], FILTER_SANITIZE_STRING);
		$afip = $_POST['afip'];
		$rubro = $_POST['rubro'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordcheck = $password;
		$password2 = $_POST['password2'];
		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);
		$carpeta = 'imagenes/';
		$carpeta .= $razonsocial;



		if (empty($razonsocial) or empty($afip) or empty($rubro) or empty($email) or empty($password) or empty($password2)) {
			$errores .= 'Por favor rellena los datos correctamente';
		} else {

		$connect = mysqli_connect($hostname, $username, $key, $databasename);

			if(emailExiste($email)){
				$error1 .='El correo que has ingresado ya existe';
			}

			if(razonsocialExiste($razonsocial)){
				$error2 .='El usuario que has ingresado ya existe';
			}
			
			if (strlen($passwordcheck) < 6) {
				$error3 .= "La contraseña debe tener al menos 6 caracteres";
			}

			if ($password !== $password2) {
				$error4 .= "Las contraseñas son diferentes";
			}			

			if(!is_numeric($afip)){
				$error5 .='Ingresa la información como se indica';
			}
		
			if ($errores == '' && $error1 == '' && $error2 == '' && $error3 == '' && $error4 == '' && $error5 == '') {

			$query = "INSERT INTO empresas (id, razonsocial, afip, rubro, correo, password, activacion, token, token_password, password_request) VALUES (null, '$razonsocial', '$afip', '$rubro', '$email', '$password', '1', '0', '0', '0')";

			if (!file_exists($carpeta)) {
    				mkdir($carpeta, 0777, true);
				}

				$registro .= 'Te has registrado exitosamente!!!';
			}

			$result = mysqli_query($connect,$query);
			

		}

			
	}


require 'views/empresasregistro.views.php';

 ?>