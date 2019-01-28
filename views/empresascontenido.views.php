<!DOCTYPE html>
<html>
<head>
	<title>Contenido de empresas</title>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130499758-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130499758-1');
</script>
<link rel="stylesheet"  type="text/css"  href="css/empresascontenido100.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
	<link rel="icon"  href="imagenes/icono.ico">
</head>
<body>
	<header>
	</header>
	<main>
		<form class="cargadepromocion" action="empresascontenido.php" method="post" enctype="multipart/form-data">
			<div class="correcto">
					<?php 
						echo "$correcto";
			 		?>
			</div>
			<h3>Debe completar los campos excluyentes</h3>

			<div class="campos">
				<input type="text" id="titulo" name="titulo" placeholder="Título de promoción (excluyente)" class="campotitulo">
				<input type="text" id="dias" name="relevante" placeholder="Dato relevante que figurará en color rojo (excluyente)" class="camporojo">
				<input type="text"  name="linea1" placeholder="Linea de texto N°1 (excluyente) (max 30 caractéres)" class="linea1">
				<input type="text"  name="linea2" placeholder="Linea de texto N°2 (max 30 caractéres)" class="linea2">
				<input type="text"  name="linea3" placeholder="Linea de texto N°3 (max 30 caractéres)" class="linea3">
				<input type="text"  name="linea4" placeholder="Linea de texto N°4 (max 30 caractéres)" class="linea4">
				<input type="text"  name="linea5" placeholder="Linea de texto N°5 (max 30 caractéres)" class="linea5">
			</div>

			
			<div class="t1-t3">
				<select class="t1" name="tarjeta1">
				<option>Tarjeta 1</option>
				<option>Visa</option>
				<option>Mastercard</option>
				<option>American Express</option>
				<option>Cabal</option>
				<option>Club La Nación</option>
				<option>Clarin 365</option>
			</select>
			<select class="t2" name="tarjeta2">
				<option>Tarjeta 2</option>
				<option>Visa</option>
				<option>Mastercard</option>
				<option>American Express</option>
				<option>Cabal</option>
				<option>Club La Nación</option>
				<option>Clarin 365</option>
			</select>
			<select class="t3" name="tarjeta3">
				<option>Tarjeta 3</option>
				<option>Visa</option>
				<option>Mastercard</option>
				<option>American Express</option>
				<option>Cabal</option>
				<option>Club La Nación</option>
				<option>Clarin 365</option>
			</select>
			</div>
			<div class="t4-t6">
				<select class="t4" name="tarjeta4">
				<option>Tarjeta 4</option>
				<option>Visa</option>
				<option>Mastercard</option>
				<option>American Express</option>
				<option>Cabal</option>
				<option>Club La Nación</option>
				<option>Clarin 365</option>
			</select>
			<select class="t5" name="tarjeta5">
				<option>Tarjeta 5</option>
				<option>Visa</option>
				<option>Mastercard</option>
				<option>American Express</option>
				<option>Cabal</option>
				<option>Club La Nación</option>
				<option>Clarin 365</option>
			</select>
			<select class="t6" name="tarjeta6">
				<option>Tarjeta 6</option>
				<option>Visa</option>
				<option>Mastercard</option>
				<option>American Express</option>
				<option>Cabal</option>
				<option>Club La Nación</option>
				<option>Clarin 365</option>
			</select>
			</div>
			
			<div class="vencimiento">
				<input type="text"  name="vencimiento" placeholder=" Vencimiento: dd/mm/yyyy" class="vencimientodato">
			</div>
			<br>
			<div class="carga">
				<label >Selección de imagen que figurará en la promoción (excluyente)</label>
				<input type="file" id="foto" name="foto" class="foto" style="color: transparent" >			
			</div>
			<input type="submit" name="upload" value="Solicitar alta de promoción" id="alta">
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
			<div class="eco2">
					<?php 
						echo "$error2";
			 		?>
			</div>
			<div class="eco3">
					<?php 
						echo "$error3";
			 		?>
			</div>
			<div class="eco4">
					<?php 
						echo "$error4";
			 		?>
			</div>
			<div class="eco5">
					<?php 
						echo "$error5";
			 		?>
			</div>
			<div class="eco6">
					<?php 
						echo "$error6";
			 		?>
			</div>
			<div class="eco7">
					<?php 
						echo "$error7";
			 		?>
			</div>
		</form>

		<div class="mail">
				<h4>El cuadro de la izquierda es donde usted debe cargar los datos de cada promoción.</h4>
				<h4>Promociones YA procesará esa información para armar una caja como la de la derecha. Hágala a su conveniencia.</h4>
				<h4>Arriba de este texto se encuentra el cuadro con las promociones que han sido aprobadas.</h4>
				<h4>Ante cualquier duda envíenos un mail a: admin@promocionesya.com.ar	</h4>		      
		</div>
			
	</main>
		<div class="panel">

			<?php 

				$vacio = 'imagenes/vacio.jpg';

				$carguelogo = 'imagenes/carguelogo.jpg';

				$fuente1 = 'imagenes/';
				$fuente1 .= $_SESSION['razonsocial'];
				$fuente1 .= '/aprobadas/1.png';

				$fuente2 = 'imagenes/';
				$fuente2 .= $_SESSION['razonsocial'];
				$fuente2 .= '/aprobadas/2.png';

				$fuente3 = 'imagenes/';
				$fuente3 .= $_SESSION['razonsocial'];
				$fuente3 .= '/aprobadas/3.png';

				$fuente4 = 'imagenes/';
				$fuente4 .= $_SESSION['razonsocial'];
				$fuente4 .= '/aprobadas/4.png';

				$fuente5 = 'imagenes/';
				$fuente5 .= $_SESSION['razonsocial'];
				$fuente5 .= '/aprobadas/5.png';	

				$fuente6 = 'imagenes/';
				$fuente6 .= $_SESSION['razonsocial'];
				$fuente6 .= '/aprobadas/logo.png';							
			 ?>

			<div class="analisis1">
				<img src="<?php  if(!file_exists($fuente1)){echo($vacio);} else {echo($fuente1);}?>" class="img"> <br />
			</div>
			<div class="analisis2">
				<img src="<?php  if(!file_exists($fuente2)){echo($vacio);} else {echo($fuente2);}?>" class="img"> <br />
			</div>	
			<div class="analisis3">
				<img src="<?php  if(!file_exists($fuente3)){echo($vacio);} else {echo($fuente3);}?>" class="img"> <br />
			</div>		
			<div class="analisis4">
				<img src="<?php  if(!file_exists($fuente4)){echo($vacio);} else {echo($fuente4);}?>" class="img"> <br />
			</div>
			<div class="analisis5">
				<img src="<?php  if(!file_exists($fuente5)){echo($vacio);} else {echo($fuente5);}?>" class="img"> <br />
			</div>

			<div class="analisis6">
				<img src="<?php  if(!file_exists($fuente6)){echo($carguelogo);} else {echo($fuente6);}?>" class="img"> <br />
				<form class="cargadelogo" action="empresascontenido.php" method="post" enctype="multipart/form-data" name="cargalogo">
					<script type="text/javascript">
						function cambiar(){
					    var pdrs = document.getElementById('file-upload').files[0].name;
					    document.getElementById('info').innerHTML = pdrs;
					}
					</script>
					<label for="logo" class="subir">
    					<i class="fas fa-cloud-upload-alt"></i>Subir archivo
					</label>
						<input type="file" onchange='cambiar()' id="logo" name="logo" style="display:none">	
						<div id="info"></div>		
						<input type="submit" name="uploadlogo" value="Cargar logo" class="cargalogo">
				</form>
			</div>
		</div>

		<div class="caja1">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</h1>
				<h1 class="numero">$ 1.799,90</h1>
				<img src="basededatos/juguete/imagenes/plasmacar.jpg" class="imgpromo">
					<h1 class="cond1">Descripción del bien o servicio</h1>
					<h1 class="cond2">Información adicional </h1>
					<img src="basededatos/bell/imagenes/tvisa.png" class="imgtarjeta21">
					<img src="basededatos/bell/imagenes/tmastercard.png" class="imgtarjeta22">	
			</div>
			<h1 class="validez">Hasta el 31/01/19</h1>	
			<script type="text/javascript">
				function change1(){
					var image = document.getElementById('social');
					image.src = "basededatos/bell/imagenes/farmacity.jpg";
				}
			</script>
			<div class="botonsi" onclick="change1();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>		
		</div>

<a href="empresascerrar.php" class="cerrar">Cerrar Sesión</a>
</body>
</html>