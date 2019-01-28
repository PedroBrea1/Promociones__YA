<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión de empresas</title>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130499758-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130499758-1');
</script>
</head>
<link rel="stylesheet"  type="text/css"  href="css/eeii.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
<head>
	<link rel="icon"  href="imagenes/icono.ico">
</head>
<body>
<header>
	<img src="imagenes/cabecera.jpg" class="cabecera">
</header>
	<main>
		<form  method="post" class="iniciarempresa">
				<style>
					.icono {
						font-size: 100px;
						position: absolute;
						left: 37%;
					}

					.recupero {
						position: absolute;
						left: 10%;
						top: 80%;
						color: white;
						font-size: 1vw;
					}

					.registro{
						position: absolute;
						left: 65%;
						top: 80%;
						color: white;
						font-size: 1vw;
					}

					@media screen and (max-width: 980px){
						.recupero {
							position: absolute;
							left: 3%;
							top: 87%;
							color: white;
							font-size: 2vw;
						}

						.registro{
							position: absolute;
							left: 66%;
							top: 81%;
							color: white;
							background: none;
							border-style: none;
							font-size: 2vw;
						}
					}

				</style>
			
			<input type="text" name="razonsocial" placeholder="Nombre y Apellido o Razón Social" class="razonsocial"><br>

			<input type="password" class="password" name="password" placeholder="Ingrese su contraseña"><br>

			<input type="submit"  onclick="login.submit" value="Iniciar Sesión" id="iniciosesion"><br>
			<br>
			<div class="ecoinicio">
					<?php 
						echo "$errores";
			 		?>
			</div>
			<div class="ecoinicio1">
					<?php 
						echo "$error1";
			 		?>
			</div>

			<i class="recupero fas fa-lock"></i>
			<a href="empresasrecupero.php" class="recuperoenlace">¿Olvidaste tu contraseña?</a>
			<i class="registro fas fa-check"></i>
			<a href="empresasregistro.php" class="registroenlace">Registrate</a>
		</form>

		<img src="imagenes/usuarios/1.jpg" class="img1">
		<img src="imagenes/usuarios/2.png" class="img2">
		<img src="imagenes/usuarios/3.jpg" class="img3">
		<img src="imagenes/usuarios/4.jpg" class="img4">
	</main>
	
<a href="inicio.php" class="volver">Volver</a>

</body>
</html>