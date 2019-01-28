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
</head>
<link rel="stylesheet"  type="text/css"  href="css/gs.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
<head>
	<link rel="icon"  href="imagenes/icono.ico">
</head>
<body>
	<header>
		<img src="imagenes/cabecera.jpg" class="cabecera">
	</header>
	<main>
		<div class="encabezado">
					<div class="encabezado2">
						Buscá tus descuentos en...
					</div>
				</div>
		<div class="menu">
			<ul>
				
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
				<li class="intermedio1"><i class="fas fa-shopping-cart" style="font-size:1.2vw;"></i><a href="supermercados.php" style="font-size:1.3vw;"><h4>Supermercados</h4></a>
				</li>
				<li class="intermedio1"><i class="fas fa-tshirt" style="font-size:1.2vw;"></i><a href="indumentaria.php" style="font-size:1.3vw;"><h4>Indumentaria</h4></a>
				</li>
				<li class="intermedio2"><i class=" fas fa-utensils" style="font-size:1.2vw;"></i><a href="gastronomia.php" style="font-size:1.3vw;"><h4>Gastronomía</h4></a>
				</li>
				<li class="intermedio2"><i class="fas fa-heart" style="font-size:1.2vw;"></i><a href="belleza.php" style="font-size:1.3vw;"><h4>Belleza y Salud</h4></a>
				</li>
				<li class="intermedio3"><i class="iconomenu fas fa-home" style="font-size:1.2vw;"></i><a href="hogar.php" style="font-size:1.3vw;"><h4 class="indicador">Hogar</h4></a>
				</li>
				<li class="intermedio3"><i class="fas fa-car" style="font-size:1.2vw;"></i><a href="movil.php" style="font-size:1.3vw;"><h4>Movilidad</h4></a>
				</li>
				<li class="intermedio4"><i class="fas fa-brain" style="font-size:1.2vw;"></i><a href="cultura.php" style="font-size:1.3vw;"><h4>Cultura</h4></a>
				</li>				
			</ul>
		</div>

		<div class="derecha">
			<h4>Si usted tiene una empresa o emprendimiento ingrese aquí para cargar sus promociones</h4>
			<a href="empresasindex.php" class="registro" style="font-size:1.1vw;">Promociones</a>
		</div>

		<div class="pantalla">
				<img src="imagenes/vacio.jpg" id="social" class="vacio">
		</div>
		<select class="busca" name="negocio" onchange="location = this.value">
				<option>Ver información del negocio</option>
				<option value="muestraempresa.php">Empresa muestra</option>				
			</select>

		<style>
				.si {
					position: relative;
					top: 0px;
					left: 35%;
					font-size: 25px;
					color:#848214;
				}
		</style>

	</main>

	<a href="cerrar.php" class="cerrarsesion">Cerrar Sesión</a>

<div class="overflow">
		<div class="caja1">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<div class="cuota-interes">
				<h1 class="cuota">50 cuotas</h1>
				<h1 class="sininteres">Sin interés</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lcomafi.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">CFT = 30.36%</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 31/01/19</h1>	
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

		<div class="caja2">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">20</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lgalicia.1.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<img src="basededatos/hogar/imagenes/tamerican.png" class="imgtarjeta33">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 3 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 30/01/19</h1>	
			<script type="text/javascript">
				function change2(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change2();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>

		<div class="caja3">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS SABADOS</TABLE></h1>
				<h1 class="numero">20</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lhsbc.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 3 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 31/05/19</h1>	
			<script type="text/javascript">
				function change3(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change3();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>

		<div class="caja4">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">30</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lnacion.1.png" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 6 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 28/02/19</h1>	
			<script type="text/javascript">
				function change4(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change4();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>

		<div class="caja5">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">15</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lnacion.1.png" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 6 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 28/02/19</h1>	
			<script type="text/javascript">
				function change5(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change5();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>
		

		<div class="caja6">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">20</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lcomafi.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 3 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 31/01/19</h1>	
			<script type="text/javascript">
				function change6(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change6();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>

		<div class="caja7">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">15</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lcomafi.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 6 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 31/01/19</h1>	
			<script type="text/javascript">
				function change7(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change7();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>

		<div class="caja8">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS JUEVES</TABLE></h1>
				<h1 class="numero">15</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lgalicia.1.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<img src="basededatos/hogar/imagenes/tamerican.png" class="imgtarjeta33">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 3 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 25/04/19</h1>	
			<script type="text/javascript">
				function change8(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change8();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>

		<div class="caja9">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">10</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lhsbc.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 3 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 30/06/19</h1>	
			<script type="text/javascript">
				function change9(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change9();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>

		<div class="caja10">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">30</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lnacion.1.png" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 6 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 28/02/19</h1>	
			<script type="text/javascript">
				function change10(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change10();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>


		<div class="caja11">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">10</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lnacion.1.png" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 6 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 28/02/19</h1>	
			<script type="text/javascript">
				function change11(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change11();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>

		<div class="caja12">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">10</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lcomafi.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 6 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 31/01/19</h1>	
			<script type="text/javascript">
				function change12(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change12();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>

		<div class="caja13">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">15</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lcomafi.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 6 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 31/01/19</h1>	
			<script type="text/javascript">
				function change13(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change13();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>

		<div class="caja14">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">15</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lgalicia.1.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 3 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 30/04/19</h1>	
			<script type="text/javascript">
				function change14(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change14();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>

		<div class="caja15">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">15</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lhsbc.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 3 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 30/06/19</h1>	
			<script type="text/javascript">
				function change15(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change15();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>

		<div class="caja16">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">25</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lnacion.1.png" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 6 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 28/02/19</h1>	
			<script type="text/javascript">
				function change16(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change16();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>

		<div class="caja17">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">20</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lgalicia.1.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<img src="basededatos/hogar/imagenes/tamerican.png" class="imgtarjeta33">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 3 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 31/01/19</h1>	
			<script type="text/javascript">
				function change17(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change17();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>

		<div class="caja18">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">10</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lcomafi.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 6 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 31/01/19</h1>	
			<script type="text/javascript">
				function change18(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change18();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>		

		<div class="caja19">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS SABADOS</TABLE></h1>
				<h1 class="numero">20</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lgalicia.1.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<img src="basededatos/hogar/imagenes/tamerican.png" class="imgtarjeta33">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 3 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 26/01/19</h1>	
			<script type="text/javascript">
				function change19(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change19();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>	

		<div class="caja20">
			<div class="fondopromo">
				<h1 class="dias">DE LUNES A VIERNES</TABLE></h1>
				<h1 class="numero">15</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lhsbc.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 3 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 31/01/19</h1>	
			<script type="text/javascript">
				function change20(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change20();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>	

		<div class="caja21">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">10</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lcomafi.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 6 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 31/01/19</h1>	
			<script type="text/javascript">
				function change21(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change21();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>	

		<div class="caja22">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">15</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lgalicia.1.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<img src="basededatos/hogar/imagenes/tamerican.png" class="imgtarjeta33">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 3 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 31/01/19</h1>	
			<script type="text/javascript">
				function change22(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change22();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>	

		<div class="caja23">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS JUEVES</TABLE></h1>
				<h1 class="numero">10</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lcomafi.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 6 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 31/01/19</h1>	
			<script type="text/javascript">
				function change23(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change23();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>	

		<div class="caja24">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">15</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lgalicia.1.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<img src="basededatos/hogar/imagenes/tamerican.png" class="imgtarjeta33">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 3 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 30/04/19</h1>	
			<script type="text/javascript">
				function change24(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change24();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>	

		<div class="caja25">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">10</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lhsbc.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 3 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 31/01/19</h1>	
			<script type="text/javascript">
				function change25(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change25();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>	

		<div class="caja26">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">15</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lnacion.1.png" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 6 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 28/02/19</h1>	
			<script type="text/javascript">
				function change26(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change26();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>

		<div class="caja27">
			<div class="fondopromo">
				<h1 class="dias">TODOS LOS DIAS</TABLE></h1>
				<h1 class="numero">10</h1>
				<div class="porc-desc">
				<h1 class="porcentaje">%</h1>
				<h1 class="desc">Desc.</h1>
				</div>
				<img src="basededatos/hogar/imagenes/lgalicia.1.jpg" class="imgpromo">
				<img src="basededatos/hogar/imagenes/tvisa.png" class="imgtarjeta31">
				<img src="basededatos/hogar/imagenes/tmastercard.png" class="imgtarjeta32">
				<img src="basededatos/hogar/imagenes/tamerican.png" class="imgtarjeta33">
				<h1 class="cond1">En artículos de este negocio</h1>
				<h1 class="cond2">Hasta 3 cuotas sin interes</h1>
				<h1 class="cond3">Tarjetas de crédito del banco</h1>
			</div>
			<h1 class="validez">Hasta el 31/01/19</h1>	
			<script type="text/javascript">
				function change27(){
					var image = document.getElementById('social');
					image.src = "imagenes/carguelogo.jpg";
				}
			</script>
			<div class="botonsi" onclick="change27();">
				<a href="#" class="verlocal">Ver negocio</a>
			</div>
		</div>
		
</div>

</body>
</html>