<title>Inicio de sesion</title>
<head>
	<link rel="icon"  href="imagenes/icono.ico">
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130499758-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130499758-1');
</script>
<link rel="stylesheet"  type="text/css"  href="css/paginalogin2051.css">
<script src="https://js.stripe.com/v3/"></script>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
</head>
<body>
<header>
	<img src="imagenes/cabecera.jpg" class="cabecera">
</header>
		<div>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario" name="login">
				<input type="text" name="usuario" placeholder="Usuario" class="usuario">
				<input type="password" name="password" placeholder="Contraseña" class="pass">
				<input type="button" name="entradai" value="Iniciar Sesión" onclick="login.submit()" class="registro">
				<div class="eco">
					<?php 
						echo "$errores";
			 		?>
				</div>
				<div class="eco1">
					<?php 
						echo "$error1";
			 		?>
				</div>
				<a href="recupera.php"><h4  class="recupero">Olvidaste tu contraseña?</h4></a>
			</form>
		</div>
			
	<div class="intro">
		
		<div class="texto">
			<h1>Bienvenido a Promociones YA</h1>
			<h3>Acá estan las promociones que estabas buscando!!</h3>
			<h3>En cada una de ellas no verá quien las ofrece</h3>
			<h3>Este dato lo encontrará al hacer click en "ver negocio"</h3>
			<h3>Vaya a la <a href="muestra.php" class="muestratexto2">Página de muestra</a> vea lo sencillo que es</h3>
			<h3>Un servicio gratuito y de excelente calidad </h3>
			<h3>Ya contamos con más de 200 promociones</h3>
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

	<a href="inicio.php" class="volver">Volver</a>
</body>

			


	




