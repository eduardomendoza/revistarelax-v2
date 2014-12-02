<!DOCTYPE html>
<html lang="es">  
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title></title>

		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>	
		<link rel="stylesheet" type="text/css" href="css/global.css" />
		<link rel="stylesheet" type="text/css" href="css/book.css" />
		<link rel="stylesheet" type="text/css" href="css/icomoon.css" />
		<link rel="stylesheet" type="text/css" href="contact/form.css" />
		<link rel="stylesheet" type="text/css" href="css/hmenu/component.css" />
		<script src="snap.svg-min.js"></script>
		<script src="js/hmenu/modernizr.custom.js"></script>
		<script src="js/backstretch.min.js"></script>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script>
			$(document).ready(function() {
				$.backstretch("images/background.jpg");
			});
		</script> 

	</head>
	<body>
		<div class="container">

		    <!--TOP BAR-->
		    <div class="top-bar">
				<div id="bar-left" class="pull-left"><div class="texto">Alivio para el Médico</div></div>
				<div id="bar-right" class="pull-right">revistarelax.com</div>
		    </div>
		    <!-- //TOP PAR -->

			

			<!-- //TABAS// -->
			<div id="tabs" class="tabs">
				
				<!--//CONTENIDO//-->
				<header class="rounded">
					<div id="logo">
						<h1>
							<img src="images/Logotipo-Revista-Relax.png" alt="Revista Relax">
							<span>Lectura Terapéutica </span>
						</h1>
					</div>
					<div id="line"></div>



				<!-- //MENU DESKTOP// -->
				<button class="menu-button" id="open-button">Open Menu</button>

					<div class="menu-wrap">	
						<nav class="menu">
							<ul>
								<li><a href="#section-1" class="myButton purple1 radius icon-profile"><span> Editorial</span></a></li>
								<li><a href="#section-2" class="myButton blue1 radius icon-tablet"><span> e-Book</span></a></li>
								<li><a href="#section-3" class="myButton green1 radius icon-camera"><span> Entrevistas</span></a></li>
								<li><a href="#section-4" class="myButton orange1 radius icon-user"><span> Congresos</span></a></li>
								<li><a href="#section-5" class="myButton red1 radius icon-envelope"><span> Contacto</span></a></li>
							</ul>
						</nav>
						<button class="close-button" id="close-button">Close Menu</button>
						<div class="morph-shape" id="morph-shape" data-morph-open="M-7.312,0H15c0,0,66,113.339,66,399.5C81,664.006,15,800,15,800H-7.312V0z;M-7.312,0H100c0,0,0,113.839,0,400c0,264.506,0,400,0,400H-7.312V0z">
							<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="300px" viewBox="0 0 100 800" preserveAspectRatio="none">
								<path d="M-7.312,0H0c0,0,0,113.839,0,400c0,264.506,0,400,0,400h-7.312V0z"/>
							</svg>
						</div>
					</div>

			

				</header>	

				<div class="clear"></div>

				<div id="saber"></div>


				<div class="content">

					<section id="section-1">
						<div class="mediabox">
							<img src="images/image-relax.png" alt="Revista Relax" />
							<h3>Acerca de Relax</h3>
							<p>Relax es un sello editorial que pertenece a Atenea Pharma, una empresa dedicada a dar asesoría y servicio en materia de Mercadotecnia, a la Industria Farmacéutica. </p>
							<p>
							Las publicaciones estan orientadas al sector médico ofreciendo distintos temas de actualidad, de interés personal, profesional y general, con información amena, accesible, dinámica y enriquecedora.

							La mejor propuesta para un público selecto, cuya formación continua significa una parte importante de su vida diaria y una alternativa para hacer de un momento de lectura, un auténtico tiempo de Relax, ya que ofrece al lector entretenimiento y 
							le informa de manera oportuna lo que ocurre a su alrededor.
							</p>
						</div>
						<div class="mediabox">
							<img src="images/image-objetivos.png" alt="Objetivos Relax" />
							<h3>Nuestro Objetivo</h3>
							<p>Ser el mejor medio de comunicación impreso para el Médico/ Farmacéutico, en materia de cultura y entretenimiento general.</p>
						</div>

						<div class="mediabox">
							<h3>Premios</h3>
							<p>
							Relax ha sido galardonada en 2005, 2007 y 2010 por la Cámara Nacional de la Industria Editorial Mexicana (CANIEM), con el Premio CANIEM al Arte Editorial en el género de publicaciones Médicas.
							</p>
						</div>

					</section>
					
					<section id="section-2">
						<?php include("menu-revistas.php");  ?>
					</section>


					<section id="section-3">
						<div class="mediabox">
							<img src="img/04X.png" alt="img04" />
							<h3>Contenido 1</h3>
							<p></p>
						</div>
						<div class="mediabox">
							<img src="img/05X.png" alt="img05" />
							<h3>Contenido 2</h3>
							<p></p>
						</div>
						<div class="mediabox">
							<img src="img/06X.png" alt="img06" />
							<h3>Contenido 3</h3>
							<p></p>
						</div>
					</section>


					<section id="section-4">
						<div class="mediabox">
							<img src="images/image-congresos.png" alt="Congresos Médicos México" />
							<h3>Eventos y Congresos</h3>
							<p>Próximas fechas de Eventos y Congresos Médicos a celebrarse en México (2014-2015).</p>
							<p>Si requiere más información o desea comunicar algún evento por favor llámenos al (55) 5675 1100 o escríbanos
							a contacto@revistarelax.com.</p>
							
							<p class="nota center"> Revista Relax no es responsable de la organización de los eventos publicados solo hacemos mención de ellos
							con fines informativos para nuestros suscriptores.</p>
						</div>
						<div class="mediabox">
							<h3>Calendario:</h3>
							<?php include("congresos-medicos.php");  ?>
						</div>

					</section>


					
					<section id="section-5">
						<div class="mediabox">
							<img src="images/image-contact.png" alt="Concacto Revista Relax" />
							<h3>Información de contacto</h3>
							<p class="cl"> 
								Contáctenos para cualquier asunto relacionado con su suscripción y su experiencia de lectura.
							</p>

							<p>  Revista Relax, una publicación de Atenea Pharma </p>
							<p>Patricio Sanz #1546
									Col. del Valle
									CP  03100  México, D.F.</p>

							<p>Tel. +52 (55)55-75-11-00</p>
							<p> Atención a Suscriptores: Lic. Carla Sanromán (ext 102)</p>	
						</div>
						<div class="mediabox">
							<img src="img/0X6.png" alt="img06" />
							<h3>Envíe su Mensaje</h3>
							<p>Sus comentarios son muy importantes para nosotros. También puede escribirnos a: suscriptores@revistarelax.com</p>
							<?php include("contact/index.php");  ?>
						</div>
							
					</section>
				</div><!-- /content -->
			</div><!-- /tabs -->
		</div>




		<footer>
			<div class="cpy">Copyright © 2014 Atenea Pharma S.A de C.V.</div>
			<div class="date">Patricio Sanz #1546 Col. Del Valle CP 03100 México, D.F.</div>
			<div class="tel">Tel. (+52 55) 5575 1100</div>
		</footer>




		<script src="js/cbpFWTabs.js"></script>
		<script>
			new CBPFWTabs( document.getElementById( 'tabs' ) );
		</script>

		<script src="classie.js"></script>
		<script src="main4.js"></script>
	</body>
</html>
