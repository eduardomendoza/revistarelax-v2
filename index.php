<!DOCTYPE html> 
<html lang="es">
  	<head>
        <title>Revista Relax</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
        <link rel="shortcut icon" href="favicon.ico">

        <!--//METAS//-->
		<meta name="google-site-verification" content="Kv29iZtilJRfvgsG6PNQxSKlEJQIUvEFL9E0fCEZsXg" />
		<meta name="author" content="Atenea Pharma"/>
		<meta name="keywords" content="Revista Relax, Relax, Lectura Terapeútica, Revista médica,
		 revista de medicina México, articulos salud, articulos medicos español, paginas de medicina, revista salud, revista relax mexico" />
		<meta name="description" content="Revista Relax Lectura Terapeútica" />
		<meta name="robots" content="follow" />
		<meta name="norton-safeweb-site-verification" content="1bi691b47iprypd21qthqu-4n40hgt4lsww-ctu8hkikgvt335co1r-tzvqqz9776kh1ucrty3m5qes1afrf51zil6xayipmeix4mg6d891lccn4oilvb9lc0gvvavtq" />

        <!--//STYLE//-->
        <link rel="stylesheet" href="css/intro.css?<?php echo time();?>"/>
        <link rel="stylesheet" href="registro.css?<?php echo time();?>"/>
        <!--<link rel="stylesheet" type="text/css" href=".css" media="all and (min-width: 400px) and (max-width: 800px)" />
-->
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <!--LOGIN-->
        <script type="text/javascript">
        	$(document).ready(function(){
				$('#toggle-login').click(function(){
  					$('#login').slideToggle();
				});

				$('#toggle-benefits').click(function(){
  					$('#benefits').slideToggle();
				});

				$('#toggle-registro').click(function(){
  					$('#registro').slideToggle();
				});
			})
        </script>
        <!--LOGIN-->
    </head>
    
    <body>
		
		<div class="header">
			<a href="http://www.ateneapharma.com" target="_blank">
				<span>Una Publicación más de Atenea Pharma</span>
			</a>
			<span class="right_ab">
				Para continuar, es necesario<strong><a href="#">Registrarse</a></strong>El Médico Profesionista podrá consultar información exclusiva sobre eventos, congresos y entrevistas.
			</span>
		</div>
						<!--LOGIN-->
							<div id="login" style="display:none">
							  <div id="triangle-down"></div>
							  <h1>Por favor ingrese sus claves de suscripción</h1>
							   <div id="triangle-down-small" class="center"></div>
							  <form>
							    <input type="email" placeholder="Email" autofocus tabindex="1" />
							    <input type="password" placeholder="Contraseña"  tabindex="2"/>
							    <span class="button"><a href="#">Entrar</a></span>
							    <!--<input type="submit" value="Log in" />-->

							  </form>  
							</div>
						<!-- //LOGIN  -->

						<!--BENEFITS-->
							<div id="benefits" style="display:none">
							<div id="triangle-down"></div>
							  <h1>Beneficios al suscribirse a Relax</h1>
							  <div id="triangle-down-small" class="left" ></div>
							  	<ul class="benefits-list">
							  		<li>La revista digital llega mensualmente a su e-mail</li>
							  		<li>De acuerdo a su especialidad, puede recibir un suplemento extra de su especialidad</li>
							  		<li>Encontrará novedades y noticias de la industria farmacéutica</li>
							  		<li>Podrá consultar entrevistas a líderes de la industria farmacéutica</li>
							  	</ul>

							</div>
							
						<!-- //BENEFITS  -->


						<!--REGISTRO-->
							<div id="registro" style="display:none">
							<div id="triangle-down"></div>
							  <h1>Suscribirse a Relax</h1>
							  <div id="triangle-down-small" class="right" ></div>
								<?php include("registro.php");  ?>
							</div>
							
						<!-- //REGISTRO  -->
						
		<div class="container">

			<div id="logo"><h1><img src="images/Logotipo-Revista-Relax.png" alt="Revista Relax"><span>Lectura Terapéutica </span></h1></div>
			<h2>La Revista Relax es creada para brindar entretenimiento, información general y temas de cultura al Médico.
			</br>En este sitio podrá consultar la revista en su formato digital así como calendario de eventos, congresos y
			entrevistas exclusivas del sector farmacéutico.</h2>
			
			<div id="va-accordion" class="va-container">
				
				<div class="va-nav">
					<span class="va-nav-prev">Previous</span>
					<span class="va-nav-next">Next</span>
				</div>
				
				<div class="va-wrapper">

					<div class="va-slice va-slice-1">
						<h3 class="va-title">Versión para el Médico</h3>
						<div class="va-content">
							<p>Acceso Suscriptores</p>
							<ul>						
								<li id="toggle-login"><a href="#">Entrar</a></li>
								<li id="toggle-registro"><a href="#">Registrarse</a></li>
								<li id="toggle-benefits"><a href="#">¿Por qué registrarme?</a></li>
							</ul>
													


						</div>
					</div>

					<div class="va-slice va-slice-2">
						<h3 class="va-title">Versión para Público</h3>
						<div class="va-content">
							<p>Acceso Público</p>
							<ul>
								<li><a href="#">Entrar</a></li>
							</ul>
						</div>	
					</div>			
				</div>

			</div>

		</div>


		
		<footer>
			<div class="cpy">Copyright © 2014 Atenea Pharma S.A de C.V.</div>
			<div class="date">Patricio Sanz #1546 Col. Del Valle CP 03100 México, D.F.</div>
			<div class="tel">Tel. (+52 55) 5575 1100</div>
		</footer>



		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="js/jquery.vaccordion.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#va-accordion').vaccordion({
					expandedHeight	: 380,
					animSpeed		: 400,
					animOpacity		: 0.7,
					visibleSlices	: 2
				});
			});
		</script>
    </body>
</html>