<?php session_start();

if (isset($_SESSION['razonsocial'])) {
	header('Location: empresascontenido.php');
} else {
	header('Location: empresasinicio.php');
}
?>