<?php 

session_start();

if (!isset($_SESSION['usuario'])) {
	header('Location: inicio.php');
}

require 'views/belleza.views.php';

 ?>