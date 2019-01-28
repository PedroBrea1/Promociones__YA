<!DOCTYPE html>
<html>
<head>
	<title>Promociones YA</title>
		<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130499758-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-130499758-1');
	</script>
	<link rel="stylesheet"  type="text/css"  href="css/iiippp.css">
	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
	<link rel="icon"  href="imagenes/icono.ico">
</head>
<body>
	<div class="contenedor">
	<header>
		<img src="imagenes/cabecera.jpg" class="cabecera">
		<div class="empresas">
			<a href="empresasinicio.php"><h4 class="empresastexto">Empresas</h4></a>
		</div>
		<div class="miembros">
			<a href="login.php"><h4 class="miembrostexto">Miembros</h4></a>
		</div>
		<div class="saludo">
			<?php 
				echo "$saludo </br>";
			?>
		</div>
		<div class="mensaje"> 
			<h3>Hemos creado este sitio web para ayudarte</h3>
			<h3>Trabajamos día a día para que puedas mejorar tu bienestar</h3>
		</div>
	</header>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"  name="login">	
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
						left: 40%;
						color: white;
					}
					}

				</style>
			<i class="icono far fa-address-card"></i><br>	
			<input type="text" name="usuario" placeholder="Usuario (min 8 caractéres)" class="usuario">
			<select name="sexo" class="sexo">
				<option value="Femenino">Femenino</option>
				<option value="Masculino">Masculino</option>
			</select>
			<input type="text" name="edad" placeholder="Edad" class="edad">
			<input type="text" name="correo" placeholder="E-mail" class="email">
			<input type="password" name="password" placeholder="Contraseña (min 6 caractéres)" class="contrasena">
			<input type="password" name="password2" placeholder="Repetir Contraseña (min 6 caractéres)" class="repetircontrasena">
			<input type="submit" name="entrada" id="registro" value="Hacerme miembro" onclick="login.submit()">
			<div class="eco">
				<?php 
					echo "$errores </br>";
					?>
			 </div>
			 <div class="eco1">
				<?php 
					echo "$error1 </br>";
					?>
			 </div>
			 <div class="eco2">
				<?php 
					echo "$error2 </br>";
					?>
			 </div>
			 <div class="eco3">
				<?php
					echo "$error3 </br>";
					?>
			 </div>
			  <div class="eco4">
				<?php
					echo "$error4 </br>";
					?>
			 </div>
			 <div class="eco5">
				<?php
					echo "$error5 </br>";
					?>
			 </div>
			  <div class="eco6">
				<?php
					echo "$error6 </br>";
					?>
			 </div>
			 <div class="eco7">
				<?php
					echo "$error7 </br>";
			 	?>
			 </div>		   		
		</form>
	<div class="intro">
		<div class="texto">
			<h1>Bienvenido a Promociones YA</h1>
			<h3>Acá estan las promociones que estabas buscando!!</h3>
			<h3>En cada una de ellas no verá quien las ofrece</h3>
			<h3>Este dato lo encontrará al hacer click en "ver negocio"</h3>
			<h3>Vaya a la <a href="muestra.php" class="muestratexto2">Página de muestra</a> vea lo sencillo que es</h3>
			<h3>Un servicio gratuito y de excelente calidad </h3>
		</div>		

		<div class="caja1">
			<div class="fondopromo">
				<h2 class="dias">LOS MIERCOLES</h2>
				<h2 class="numero">10</h2>
				<div class="porc-desc">
				<h2 class="porcentaje">%</h2>
				<h2 class="desc">Desc.</h2>	
				</div>
				<img src="basededatos/super/imagenes/lciudad.1.jpg" class="imgpromo">
				<img src="basededatos/super/imagenes/tvisa.png" class="imgtarjeta1">
				<img src="basededatos/super/imagenes/tmastercard.png" class="imgtarjeta2">
				<img src="basededatos/super/imagenes/tcabal.png" class="imgtarjeta3">
				<h2 class="cond1">En un solo pago</h2>
				<h2 class="cond2">Tarjetas de crédito del banco</h2>
			</div>
				<h2 class="validez">Hasta el 31/01/19</h2>	
				<script type="text/javascript">
				function change1(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
				</script>
			<div class="botonsi" onclick="change1();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>		
		</div> 		
	</div>
</div>
</body>
</html>