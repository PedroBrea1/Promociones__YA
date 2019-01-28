<!DOCTYPE html>
<html>
<head>
	<title>Empresas</title>
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
		<form method="post">
				<style>
					.icono {
						font-size: 6vw;
						position: relative;
						left: 37%;
						color: white;
					}

					@media screen and (max-width: 980px){
						.icono {
						font-size: 13vw;
						position: relative;
						top: 2%;
						left: 37%;
						color: white;
					}
					}

				</style>

			<i class="icono far fa-address-card"></i><br>
			<input type="text" name="razonsocial" placeholder="Ingrese su Nombre y Apellido o Razón Social" class="inputregistro">

			<input type="text" name="afip" placeholder="Ingrese su CUIL o CUIT (sin '-') ej: 20357296502" class="cuit">
			<br>
			 <h3 class="rubrotexto">Ingrese su rubro:</h3>

			<select name="rubro" class="rubro">
				<option value="Agencia de viajes">Agencia de viajes</option>
				<option value="Belleza y Salud">Belleza y Salud</option>
				<option value="Cultura">Cultura</option>
				<option value="Electrodomésticos">Electrodomésticos</option>
				<option value="Eventos">Eventos</option>
				<option value="Gastronomía">Gastronomía</option>
				<option value="Hogar">Hogar</option>
				<option value="Indumentaria">Indumentaria</option>
				<option value="Inmobiliaria">Inmobiliaria</option>			
				<option value="Movilidad">Movilidad</option>
				<option value="Servicio Técnico">Servicio Técnico</option>
				<option value="Servicios Profesionales">Servicios Profesionales</option>
				<option value="Otro">Otro</option>			
			</select> <br />

			<input type="email" name="email" placeholder="Ingrese su email" class="email">

			<input type="password" name="password" placeholder="Contraseña (min 6 caractéres)" class="empresaspassword">

			<input type="password" name="password2" placeholder="Repetir contraseña (min 6 caractéres)" class="repetirpassword">

			<input type="submit" id="registroempresas" onclick="login.submit" value="Enviar Datos">
			<div class="ecoregistro">
					<?php 
						echo "$errores";
			 		?>
			</div>
			<div class="ecoregistro1">
					<?php 
						echo "$error1";
			 		?>
			</div>
			<div class="ecoregistro2">
					<?php 
						echo "$error2";
			 		?>
			</div>
			<div class="ecoregistro3">
					<?php 
						echo "$error3";
			 		?>
			</div>
			<div class="ecoregistro4">
					<?php 
						echo "$error4";
			 		?>
			</div>
			<div class="ecoregistro5">
					<?php 
						echo "$error5";
			 		?>
			</div>

			<div class="ecoregistro5">
					<?php 
						echo "$error6";
			 		?>
			</div>

			<div class="ecoexito">
					<?php 
						echo "$registro";
			 		?>
			</div>
		</form>

		<img src="imagenes/usuarios/1.jpg" class="img1">
		<img src="imagenes/usuarios/2.png" class="img2">
		<img src="imagenes/usuarios/3.jpg" class="img3">
		<img src="imagenes/usuarios/4.jpg" class="img4">
	</main>

<a href="empresasinicio.php" class="volver">Volver</a>

</body>
</html>