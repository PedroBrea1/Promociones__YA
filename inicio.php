<?php 

require 'funcs/conexion.php';
include 'funcs/funcs.php';
	
session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

$errores = '';
$error1 ='';
$error2 ='';
$error3 ='';
$error4 ='';
$error5 ='';
$error6 ='';
$error7 ='';
$usuario ='';
$sexo ='';
$edad ='';
$correo ='';
$password ='';
$password2 ='';
$resultado ='';
$connect ='';
$query ='';
$result = '';
$carpeta = '';
$mercadopago = '';
$contrato = '';
$saludo = '';
$email = '';
$nombre = '';
$asunto = '';
$cuerpo = '';
 
if (isset($_POST['entrada'])){

	$hostname = '127.0.0.1';
	$username = '261188-pedrobrea';
	$key ='pb1991';
	$databasename ='261188_promocionesya';

		$usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
		$sexo = filter_var($_POST['sexo'], FILTER_SANITIZE_STRING);
		$edad = $_POST['edad'];
		$correo = filter_var($_POST['correo'], FILTER_SANITIZE_STRING);
		$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
		$passwordcheck = $password;
		$password2 = filter_var($_POST['password2'], FILTER_SANITIZE_STRING);
		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);
		
	if (empty($usuario) or empty($sexo) or empty($edad) or empty($correo) or empty($password) or empty($password2)) {
			$errores .= 'Por favor rellena los datos correctamente';
		}else {
			$connect = mysqli_connect($hostname, $username, $key, $databasename);

			if (!$connect) 
			{
				echo "Not connected to server";
			}

			if(emailExiste($correo)){
				$error1 .='El correo que has ingresado ya existe';
			}

			if(usuarioExiste($usuario)){
				$error2 .='El usuario que has ingresado ya existe';
			}

			if ($password !== $password2) {
				$error3 .='Las contraseñas son diferentes';
			}

			if (!is_numeric($edad)){
				$error4 .='El dato ingresado en la edad no es válido';
			}

			if (strlen($usuario) < 8){
				$error5 .='El usuario debe ser de al menos 8 caractéres';
			}

			if (strlen($passwordcheck) < 6){
				$error6 .='La contraseña debe tener al menos 6 caracteres';
			}

			if ($errores == '' && $error1 == '' && $error2 == '' && $error3 == '' && $error4 == '' && $error5 == '' && $error6 == '') {

			$query = "INSERT INTO usuarios (id, usuario, password, sexo, edad, correo, activacion, token, token_password, password_request) VALUES (null, '$usuario', '$password', '$sexo', '$edad', '$correo', '1', '0', '0', '0')";

			$saludo = 'Felicitaciones!!! Ve a la sección de miembros para encontrar las promociones que estabas buscando!';

			$result = mysqli_query($connect,$query);

			$email = $mysqli->real_escape_string($_POST['correo']);
	
			$nombre = $_POST['usuario'];	
			$asunto = 'Registro de Usuario';
			$cuerpo = "Felicitaciones! $nombre: <br /><br />Ya eres miembro de Promociones YA!!. <br/><br/>Has tomado una muy buena decisi&oacute;n, contar&aacute;s con mejor informaci&oacute;n para realizar tus compras.";

			if(enviarEmail($email, $nombre, $asunto, $cuerpo)){

			}
		}
	}
}

require 'views/inicio.views.php';

 ?>