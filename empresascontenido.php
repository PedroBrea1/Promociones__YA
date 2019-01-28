<?php session_start();

if (!isset($_SESSION['razonsocial'])) {
	header('Location: empresasindex.php');
}

$errores = '';
$error1 ='';
$error2 ='';
$error3 ='';
$error4 ='';
$error5 ='';
$error6 ='';
$error7 ='';
$a ='';
$b ='';
$c ='';
$logorecibido = '';
$correcto = '';

$checklogo=@getimagesize($_FILES['logo']['tmp_name']);
	if ($checklogo !== false ) {
		$carpeta_destinologo = 'imagenes/';
		$carpeta_destinologo .= $_SESSION['razonsocial'];
		$carpeta_destinologo .= '/';
		$archivo_subidologo = $carpeta_destinologo . $_FILES['logo']['name'];
		move_uploaded_file($_FILES['logo']['tmp_name'], $archivo_subidologo);
		$logorecibido .= '<script type="text/javascript">
        					alert("Felicitaciones!! Has cargado el logo correctamente! Será revisado antes de ser subido a la página.");
       						 </script>';
	}

/*
Para poder diferenciar el formulario de ingreso de promoción del de carga de logo se quitó lo gris del if en carga de promoción
$_SERVER['REQUEST_METHOD'] == 'POST' or !empty($_FILES) */

if (isset($_POST['upload'])) {

	$razonsocial = $_SESSION['razonsocial'];
	$titulo = $_POST['titulo'];
	$relevante = $_POST['relevante'];
	$linea1 = $_POST['linea1'];
	$linea2 = $_POST['linea2'];
	$linea3 = $_POST['linea3'];
	$linea4 = $_POST['linea4'];
	$linea5 = $_POST['linea5'];
	$tarjeta1 = $_POST['tarjeta1'];
	$tarjeta2 = $_POST['tarjeta2'];
	$tarjeta3 = $_POST['tarjeta3'];
	$tarjeta4 = $_POST['tarjeta4'];
	$tarjeta5 = $_POST['tarjeta5'];
	$tarjeta6 = $_POST['tarjeta6'];
	$vencimiento = $_POST['vencimiento'];
	$imagen = $_FILES['foto']['name'];

	/*if(!empty($vencimiento)){
		$v = explode('/', $vencimiento);

		$a = $v[0];		
		$b = $v[1];
		$c = $v[2];
	}

	$v_sql = $c."-".$a."-".$b;*/

	if (empty($titulo) or empty($relevante) or empty($linea1) or empty($imagen)) {
			$errores .= 'Debe completar los campos excluyentes';
		} else {

	if(empty($linea2)){
		$linea2 ="x";
	}

	if(empty($linea3)){
		$linea3 ="x";
	}

	if(empty($linea4)){
		$linea4 ="x";
	}

	if(empty($linea5)){
		$linea5 ="x";
	}

	if(empty($vencimiento)){
		$vencimiento ="x";
	}

	if ($tarjeta1="Tarjeta1") {
		$tarjeta1 ="x";
	}

	if ($tarjeta2="Tarjeta2") {
		$tarjeta2 ="x";
	}

	if ($tarjeta3="Tarjeta3") {
		$tarjeta3 ="x";
	}

	if ($tarjeta4="Tarjeta4") {
		$tarjeta4 ="x";
	}

	if ($tarjeta5="Tarjeta5") {
		$tarjeta5 ="x";
	}

	if ($tarjeta6="Tarjeta6") {
		$tarjeta6 ="x";
	}

	if (strlen($titulo) > 30){
				$error1 .='Máximo de 30 caractéres';
			}

	if (strlen($linea1) > 30){
				$error2 .='Máximo de 30 caractéres';
			}

	if (strlen($linea2) > 30){
				$error3 .='Máximo de 30 caractéres';
			}

	if (strlen($linea3) > 30){
				$error4 .='Máximo de 30 caractéres';
			}

	if (strlen($linea4) > 30){
				$error5 .='Máximo de 30 caractéres';
			}

	if (strlen($linea5) > 30){
				$error6 .='Máximo de 30 caractéres';
			}

	/*if (empty($vencimiento)) {
		$vencimiento ="-";
	} elseif(!is_numeric($a) or !is_numeric($b) or !is_numeric($c) or strlen($a) !== 2 or strlen($b) !== 2 or strlen($c) !== 4 or $a < 0 or $a > 31 or $b < 0 or $b > 12 or $c < 0 or $c > 2020){
		$error7 .='Ingresa una fecha válida';
	}*/
	
	
	$check=@getimagesize($_FILES['foto']['tmp_name']);
	if ($check !== false ) {
		$carpeta_destino = 'imagenes/';
		$carpeta_destino .= $razonsocial;
		$carpeta_destino .= '/';
		$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

			if($errores == '' && $error1 == '' && $error2 == '' && $error3 == '' && $error4 == '' && $error5 == '' && $error6 == ''){
				try {
				$conexion = new PDO('mysql:host=localhost; dbname=261188_promocionesya', '261188-pedrobrea','pb1991');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}

		$statement = $conexion->prepare('INSERT INTO imagenes  (id, razonsocial, titulo, relevante, linea1, linea2, linea3, linea4, linea5, tarjeta1, tarjeta2, tarjeta3, tarjeta4, tarjeta5, tarjeta6, vencimiento, imagen) VALUES (null, :razonsocial, :titulo, :relevante, :linea1, :linea2, :linea3, :linea4, :linea5, :tarjeta1, :tarjeta2, :tarjeta3, :tarjeta4, :tarjeta5, :tarjeta6, :vencimiento, :imagen)');

		$statement->execute(array(':razonsocial' => $_SESSION['razonsocial'], ':titulo' => $titulo, ':relevante' => $relevante, ':linea1' => $linea1, ':linea2' => $linea2, ':linea3' => $linea3, ':linea4' => $linea4, ':linea5' => $linea5, ':tarjeta1' => $tarjeta1, ':tarjeta2' => $tarjeta2, ':tarjeta3' => $tarjeta3, ':tarjeta4' => $tarjeta4, ':tarjeta5' => $tarjeta5, ':tarjeta6' => $tarjeta6, ':vencimiento' => $vencimiento, ':imagen' => $_FILES['foto']['name']));

		$correcto .= '<script type="text/javascript">
        					alert("Felicitaciones!! Has cargado la promoción correctamente! Será revisada antes de ser subida a la página.");
       						 </script>';

			} 

		}

	}	

}

require 'views/empresascontenido.views.php';

 ?>