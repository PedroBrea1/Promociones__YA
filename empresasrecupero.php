<?php
	
require 'funcs/conexion.php';
include 'funcs/funcs2.php';
	
session_start();
	
if(isset($_SESSION["razonsocial"])){
	header("Location: empresasindex.php");
}
	
$errores = array();
	
if(!empty($_POST))
	{
		$email = $mysqli->real_escape_string($_POST['email']);
		
		if(!isEmail($email))

		{
			$errores[] = "Debe ingresar un correo electronico valido";
		}
		
		if(emailExiste($email))

		{			
			$user_id = getValor('id', 'correo', $email);
			$nombre = getValor('razonsocial', 'correo', $email);
			
			$token = generaTokenPass($user_id);
			
			$url = 'http://'.$_SERVER["SERVER_NAME"].'/cambia_passempresa.php?user_id='.$user_id.'&token='.$token;
			
			$asunto = 'Recuperar Password - Sistema de Usuarios';
			$cuerpo = "Hola $nombre: <br /><br />Se ha solicitado un reinicio de contrase&ntilde;a. <br/><br/>Para restaurar la contrase&ntilde;a, visita la siguiente direcci&oacute;n: <a href='$url'>$url</a>";
			
			if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
				echo "Hemos enviado un correo electronico a las direcion $email para restablecer tu password.<br />";
				echo "<a href='empresasinicio.php' >Iniciar Sesion</a>";
				exit;
			}

			} else {

			$errores[] = "La direccion de correo electronico no existe";
			
		}
	}
?>
	
<html>
	<head>
		<title>Recuperar Password</title>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130499758-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-130499758-1');
		</script>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<link rel="icon"  href="imagenes/icono.ico">
		<script src="js/bootstrap.min.js" ></script>
		
	</head>
	
	<body>
		
		<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Recuperar Password</div>
						
					</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						
						<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="email" type="email" class="form-control" name="email" placeholder="email" required>                                        
							</div>
							
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">Enviar</a>
								</div>
							</div>
							
							   
						</form>
					</div>                     
				</div>  
			</div>
		</div>
	</body>
	<div>
		<style>
			.volver {
				position: absolute;
				left: 1%;
				top: 86%;
				background: #EC2B49;
				color: #fff;
				border-radius: 15%;
				padding: 15px;
				border-style: solid;
				border-color: #000;
				border-width: 1.5px;
				text-decoration: none;
				text-align:center;
				width: 120px;
				}
				.volver:hover {
				border-color: #F6F4E8;
				transition: 0.7s;
				text-decoration: none;
				color: white;
				}
		</style>
		<a href="empresasinicio.php" class="volver">Volver</a>
	</div>
	
</html>							