<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: supermercados.php');
} else {
	header('Location: inicio.php');
}
?>