<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Soporte</title>
		<meta name="googlebot" content="noindex">
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="img/favicon.ico" />
		<link rel="stylesheet" href="css/soporte.css" />
		<link rel="stylesheet" href="css/main.css" />
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script> 
		<script src="js/jquery/jquery.min.js"></script>  
		<script src="js/jquery/jquery-ui.min.js"></script>  
		<script src="js/main.js"></script> 
	</head>
	<body>
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
				<div class="titulo">
					<h2>Soporte</h2>
					<p class="descripcion">En este formulario puedes enviarnos tus quejas/reportes/mejoras.</p>
				</div>	
				
				<div class="dsoporte">
					<form action="soporte.php" class="sform" method="post">
						<table width="400" border="0">
		    				<tr>
		    					<td></td>
		    					<td>
							        <select>
							            <option id="0">Tipo de soporte</option>
							            <option id="1">Aplicativo de escritorio</option>
							            <option id="2">Aplicativo movil</option>
							            <option id="3">Aplicativo web</option>
							            <option id="4">Otro</option>
							        </select>
		     					</td>
		    				</tr>

		 					 <tr>
		    					<td>Nombre</td>
		    					<td><input name="nombre" type="text"></td>
		 					</tr>
		  					
		  					<tr>
		    					<td>Apellido</td>
		    					<td><input name="apellido" type="text"></td>
		 	 				</tr>

		  					<tr>
		    					<td>Nombre de usuario</td>
		    					<td><input name="usuario" type="text"></td>
		  					</tr>

		  					<tr>
		    					<td>Correo</td>
		    					<td><input type="email" name="correo"></td>
		  					</tr>

		  					<tr>
							    <td>URL del sitio</td>
								<td><input type="text" name="sitio"></td>
		  					</tr>

		  					<tr>
		    					<td>Reporte/Queja/Mejora</td>
		    					<td><textarea name="problema" cols="30" rows="5"></textarea></td>
		    				</tr>
		  
		  					<tr>
		    					<td>Id de envio</td>
		    					<td><input name="idsoporte" type="text" disabled="disabled" id="id" placeholder="00001"></td>
		  					</tr>
		  
		  					<tr>
		    					<td>&nbsp;</td>
		    					<td><input type="submit" name="enviar" value="Enviar reporte"> <input type="reset" name="restablecer" value="Restablecer"></td>
		  					</tr>
		  
		  				</table>
					</form>
					
				</div>
			</section>
		</div>
		<footer>
			<small>&copy; Copyright Acurstin</small>
			<div class="volver" onclick="subir();return false"> </div>
		</foooter>
	</body> 
</html> 
