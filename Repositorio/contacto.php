<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="description" content="Soluciones integrales en software">
	<meta name="keywords" content="acurstinsoft, acurstin, soft, software">
	<meta name="author" content="Acurstin Soft">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Acurstin Soft</title>
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/contacto.css" />
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<script src="jquery/jquery.min.js"></script>  
	<script src="jquery/jquery-ui.min.js"></script>  
	<script src="js/main.js"></script> 
</head>
<body onload="redireccionar()">
	<div class ="barrasuperior">
		<a  id="loginButton" class="loginButton" onClick="ocultar()"><span class="boton1"></span></a>
		<div id="Login_mostrar" class ="Login_mostrar"> 
			<form class="loginForm"  method="post">           
				<input type="text" name="email" class="email" placeholder="Usuario"/>
				<input type="password" name="password" class="password" placeholder="Contraseña"/>&nbsp;&nbsp;&nbsp;
				<a class="boton2">&nbsp;&nbsp;&nbsp;</a>
				<a href="#" class="boton3"></a>
			</form>
		</div> 
	</div> 
	</div>
	<div class="contenedor_principal">
		<header> 
			<div class="logo">
				<div class="imagen">                     
					<!--https://www.safecreative.org/work/1403200394525-logo-acurstin-soft-->
				</div>
			</div>
			<h1>Acurstin Soft</h1>
		</header>
		<nav>
			<a href="index.html"><div class="inicio" title="Inicio"></div></a>
			<a href="nosotros.html"><div class="nosotros" title="Nosotros"></div>
			<a href="portafolio.html"><div class="servicios" title="Servicios"></div></a>
			<a href="soporte.html" title="Soporte"><div class="soporte"></div>
			<a href="contacto.php"><div class="contacto" title="Contacto"></div></a>
		</nav>
	<section class="container">	
		<h2>Contactenos</h2>
		<div class="formulario">
			<?php
if (!isset($_POST["submit"])) {
  ?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  	<table>
  		<tr>
  			<td>Correo</td>
  			<td><input type="text" name="from" placeholder="nombre@ejemplo.com"></td>
  		</tr>

  		<tr>
  			<td>Asunto</td>
  			<td><input type="text" name="subject" placeholder="Asunto"></td>
  		</tr>

  		<tr>
  			<td>Mensaje</td>
  			<td><textarea rows="10" cols="40" name="message" placeholder="En que te podemos ayudar?"></textarea></td>
  		</tr>

  		<tr>
  			<td><button type="submit" name="submit" value="Enviar"><span class="boton4"></span></button></td>
  			<td><button type="reset" name="borrar" ><span class="boton5"></span></button><td>
  		</tr>
    </table>
  </form>
  <?php 
} else {   
  if (isset($_POST["from"])) {
    $from = $_POST["from"]; // sender
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $message = wordwrap($message, 70);
    mail("acurstin@gmail.com",$subject,$message,"From: $from\n");
    echo "El mensaje ha sido enviado, estaremos comunicandonos con usted muy pronto";
  }
}
?>
			</div>
			<div class="redes">
					<a href="https://www.facebook.com/AcurstinSoft" target="_blank" id="icono"><img src="img/facebook.png" alt="facebook"></a>
					<a href="https://plus.google.com/116656404072387912726/posts" target="_blank" id="icono"><img src="img/googleplus.png"></a>
					<a href="https://co.linkedin.com/" target="_blank"><img src="img/linkedin.png" id="icono"></a>
					<a href="https://twitter.com/AcurstinSoft" target="_blank"><img src="img/twitter.png" title="@AcurstinSoft" id="icono"></a>
					<a href="skype:AcurstinSoft?chat"><img src="img/skype.png" title="ID : AcurstinSoft" id="icono"></a>
			</div>
			<div class="info1">
				<p class="item1">&nbsp;&nbsp;acurstin@gmail.com</p><br>
				<p class="item2">&nbsp;Horario de atenci&oacute;n : Lunes - Viernes (8 am - 6 pm)
					<script>estado()</script>
				</p>
			</div>
			<div class="info2">
				<p>
					Este formulario es unicamente para contactar nuestros servicios, si desea obtener mas informacion por favor utilice una de las redes sociales para hablar con nosotros.
				</p>
			</div>

		</div>
	</section>
		<footer>
			<small>&copy Copyright Acurstin</small>
			<div class="volver" onclick="subir();return false"> </div>
		</foooter>
</div>
</body> 
</html>