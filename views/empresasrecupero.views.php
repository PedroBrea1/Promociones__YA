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
<link rel="stylesheet"  type="text/css"  href="css/empresasrecupero.css">
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
						font-size: 100px;
						position: relative;
						left: 37%;
					}

				</style>

			<i class="icono far fa-address-card"></i><br>

			<input type="text" name="razonsocial" placeholder="ingrese su razon social">

			<input type="email" name="email" placeholder="ingrese su email">

			<input type="submit" id="iniciosesion" onclick="login.submit" value="Recuperar Contraseña">

		</form>

		<img src="imagenes/usuarios/1.jpg" class="img1">
		<img src="imagenes/usuarios/2.png" class="img2">
		<img src="imagenes/usuarios/3.jpg" class="img3">
		<img src="imagenes/usuarios/4.jpg" class="img4">
	</main>

<a href="empresasinicio.php" class="volver">Volver</a>

</body>
</html>