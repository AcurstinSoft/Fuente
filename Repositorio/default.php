<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Acurstin</title>
		<meta name="description" content="Acurstin es un equipo de dos desarrolladores freelance: Harold Restrepo y Cesar Cortez.">
		<meta name="keywords" content="acurstin, acurstinsoft, soft, software, medellin, colombia, freelance, acursting">
		<meta name="author" content="Acurstin">
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="img/favicon.ico" />
		<link rel="stylesheet" href="css/inicio.css" />
		<link rel="stylesheet" href="css/main.css" />
		<script src="js/jquery/jquery.min.js"></script>  
		<script src="js/jquery/jquery-ui.min.js"></script>  
		<script src="js/main.js"></script>
	</head>
	<body onload="redireccionar()">
		<?php include("includes/login.php"); ?>
		<div class="contenedor_principal">
			<header> 
				<div class="logo">
					<div class="imagen">                     
					</div>
				</div>
				<h1>Acurstin</h1>
			</header>

			<nav>
				<a href="default.php"><div class="inicio" title="Inicio"></div></a>
				<a href="nosotros.php"><div class="nosotros" title="Nosotros"></div>
				<a href="portafolio.php"><div class="servicios" title="Servicios"></div></a>
				<a href="soporte.php"><div class="soporte" title="Soporte"></div></a>
				<a href="contacto.php"><div class="contacto" title="Contacto"></div></a>
			</nav>

			<section class="container">	
				<article class="principal">
					<div class="titulo">
						<h2>Bienvenidos</h2>
					</div>
						<div class="texto">
							<ul class="menu2">
					            <li>En Este Sitio Encontraras:</li>
					            <li class="item1"><a href="#">Desarrollo de Aplicaciones Web</a></li>
					            <li class="item2"><a href="#">Asesorias</a></li>
					            <li class="item3"><a href="#">Actualizacion de Sitos Web</a></li>
					            <li class="item4"><a href="#">Tecnologias</a></li>
					            <li class="item5"><a href="#">Soporte</a></li>
					            <li class="item6"><a href="portafolio.html">Asi Como Algunos de nuestros Proyectos (Portafolio)</a></li>
					        </ul>

					        <div id="light1">
					        	<article class="item">
									<div class="titulo-i"><h3 class="item1">&nbsp;&nbsp;Desarrollo De Aplicaciones Web</h3></div>
									<div class="texto-i">
										<p>Tienes una idea? quieres hacerla realidad? cuentanos de que se trata haremos un gran proyecto juntos!.</p><a class="link" href="contacto.php">Contactenos</a><span class="marca">Te Asesoramos</span>
									</div>
								</article>
							</div>

					        <div id="light2">
					        	<article class="item">
									<div class="titulo-i">
										<h3 class="item2">&nbsp;&nbsp;Asesorias</h3>
									</div>

									<div class="texto-i">
										<p> te asesora sobre las nuevas tecnologías en el mercado y como se podrían aplicar para mejorar la rentabilidad de su negocio</p><a class="link" href="contacto.php">Contactenos</a><span class="marca">Te Asesoramos.</span>
									</div>
								</article>
					        </div>

					        <div id="light3">
					        	<article class="item">
									<div class="titulo-i"><h3 class="item3">&nbsp;&nbsp;Actualizacion de Sitos Web</h3>
									</div>
									<div class="texto-i">
										<p> te vas de vacaciones? o quieres un nuevo diseño para tu sitio web actual?, usted puede dejarnos a cargo su sitio web y nosotros nos encargamos de actualizarlo, gestionarlo o de rediseñar su apariencia y funcionamiento. </p><a class="link" href="contacto.php">Contactenos</a><span class="marca">Te Asesoramos</span>
									</div>
								</article>
							</div>

					        <div id="light4">
					        	<article class="item">
									<div class="titulo-i"><h3 class="item4">&nbsp;&nbsp;Tecnologias</h3>
									</div>
									<div class="texto-i">
										<p>en acurstin vamos a la moda y vamos al dia con las tecnologias de desarrollo Web, y una mejor eficiencia y trasparencia con  ustedes. </p><a class="link" href="contacto.php">Contactenos</a><span class="marca">Te Asesoramos</span>
									</div>
								</article>
					        </div>
					        <div id="light5"><article class="item">
									<div class="titulo-i"><h3 class="item5">&nbsp;&nbsp;Soporte</h3>
									</div>
									<div class="texto-i">
										<p>tienes una duda de como  sacarle el mayor partido a tu sitio web o  quieres mejorar, sugerir no dudes en decirnos con nuestro sistema de soporte obtienes una solucion al  instante.</p><a class="link" href="contacto.php">Contactenos</a><span class="marca">Te Asesoramos</span>
									</div>
								</article>
							</div>
					        <div id="fade">
					        </div>
					        <div id="light">
					        	<p>Lo sentimos este modulo, no esta terminado</p>
					        </div>    
						</div>	
				</article>
				<aside class ="lado">
					<div class="plugin">
						<a href="http://api.hostinger.es/redir/2369630" target="_blank">
							<img src="img/hostinger.gif" alt="Hosting Gratis" border="0" width="260" height="300" />
						</a>
					</div>
					<div class="redes">	
						<a href="https://www.facebook.com/AcurstinSoft" target="_blank" id="icono"><img src="img/facebook.png" alt="facebook"></a>
						<a href="https://plus.google.com/116656404072387912726/posts" target="_blank" id="icono"><img src="img/googleplus.png"></a>
						<a href="https://co.linkedin.com/" target="_blank"><img src="img/linkedin.png" id="icono"></a>
						<a href="https://twitter.com/AcurstinSoft" target="_blank"><img src="img/twitter.png" title="@AcurstinSoft" id="icono"></a>
						<a href="skype:AcurstinSoft?chat"><img src="img/skype.png" title="ID : AcurstinSoft" id="icono"></a>
					</div>
				</aside>
			</section>
		</div>

		<footer>
			<small>&copy; Copyright Acurstin</small>
			<div class="volver" onclick="subir();return false"> </div>
		</foooter>
	</body> 
</html> 
