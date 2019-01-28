<title>Inicio de sesion</title>
<link rel="stylesheet"  type="text/css"  href="css/superglobal52555.css">
<script src="https://js.stripe.com/v3/"></script>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
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
</head>
<body>
<header>
	<img src="imagenes/cabecera.jpg" class="cabecera">
</header>				
		<div class="menu">
			<ul>
				<div class="encabezado">
					<div class="encabezado2">
						Buscá tus descuentos en...
					</div>
				</div>
					<style>
						.flecha {
							position: absolute;
							top: 19px;
							left: 85%;
							font-size: 20px;
							color:#848214:;	
						}
						.iconomenu {
							display: inline-block;
							font-size: 20px;
							color: white;
						}
					</style>				
				<li class="intermedio1"><i class="fas fa-shopping-cart"></i><a  href="supermercados.php"><h4>Supermercados</h4></a>
				</li>
				<li class="intermedio1"><i class="fas fa-tshirt"></i><a href="indumentaria.php"><h4>Indumentaria</h4></a>
				</li>
				<li class="intermedio2"><i class="fas fa-utensils"></i><a href="gastronomia.php"><h4>Gastronomía</h4></a>
				</li>
				<li class="intermedio2"><i class="fas fa-heart"></i><a href="belleza.php"><h4>Belleza y Salud</h4></a>
				</li>
				<li class="intermedio3"><i class="fas fa-home"></i><a href="hogar.php"><h4>Hogar</h4></a>
				</li>
				<li class="intermedio3"><i class="fas fa-car"></i><a href="movil.php"><h4>Movilidad</h4></a>
				</li>
				<li class="intermedio4"><i class="fas fa-brain"></i><a href="cultura.php"><h4>Cultura</h4></a>
				</li>
				<li class="intermedio4"><i class="iconomenu fab fa-angellist"></i><a href="bonustrack.php"><h4 class="indicador">Bonus track</h4></a>
				</li>				
			</ul>
		</div>

		<div class="overflow">
			
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario" name="login">
				<div class="mensaje">
					<?php 
				$saludo = $_SESSION['usuario'];
						echo "Hola" . " " . "$saludo </br>";
						echo "Eres bienvenido/a a la sección de Bonus Track </br>";
						echo "Aquí hay más promociones que te están esperando </br>";
						echo "Para acceder a ellas suma a un/a conocido/a a PromocionesYA </br>";
						echo 'Luego introduce su nombre aquí para acceder a la sección';
			 		?>
				</div>
				
			 	<br>
				<input type="text" name="usuariobonus" placeholder="Introduce al usuario que has sumado" class="usuario">
				<br>
				<input type="button" name="entradai" value="Acceder al bonus track" onclick="login.submit()" class="registrobonus">
				<div class="ecobonus">
					<?php 
						echo "$errores";
			 		?>
				</div>
				<div class="ecobonus1">
					<?php 
						echo "$error1";
			 		?>
				</div>
				
			</form>
		
		</div>

	<a href="cerrar.php" class="volver">Cerrar Sesión</a>
</body>

			


	




