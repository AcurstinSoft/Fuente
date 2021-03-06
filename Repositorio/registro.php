<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Registro</title>
		<meta name="googlebot" content="noindex">
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="img/favicon.ico" />
		<link rel="stylesheet" href="css/registro.css" />
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
		<div class ="barrasuperior">	
			<h2>Formulario de registro para clientes nuevos</h2>	
		</div>

		<div class="contenedor_principal">
			<header> 
				<div class="logo">
					<div class="imagen">                     
					</div>
				</div>
				<h1>Acurstin</h1>
			</header>

			<section class="container">	
				<p>Por favor ingrese sus datos en todos los campos, los suyos y los de su empresa. De ser independiente solo llene su informacion personal.</p>
					<form action="envioregistro.php" method="post">	
						<table>
							<tr>	
								<td></td>
								<td id="ftd">Informacion Personal</td>
								<td></td>
								<td id="ftd">Datos de la empresa</td>
							</tr>	

							<tr>
								<td>Nombre</td>
								<td><input type="text" name="nombreCliente" placeholder="Nombres completos"></td>
								<td>Nombre de la empresa</td>
								<td><input type="text" name="nombreEmpresa"></td>
							</tr>	

							<tr>	
								<td>Apellido</td>
								<td><input type="text" name="apellidoCliente" placeholder="Apellidos completos"></td>
								<td>Usuario a registrar</td>
								<td><input type="text" id="pru" name="nickName" placeholder="Ej: empresa2014" onClick="aparecer()"></td>
								<td><div id="vemergente"><small>Con este usuario te puedes loguear en la pagina para enviar reportes o contactarte con nosotros</small></div></td>
							</tr>

							<tr>	
								<td>Doc. Identidad</td>
								<td><input type="text" name="docCliente"></td>
								<td>Contraseña del usuario</td>
								<td><input type="password" name="contrasena"></td>
							</tr>

							<tr>	
								<td>Telefono</td>
								<td><input type="text" name="telCliente" placeholder="Fijo/Celular"></td>
								<td>Correo de la empresa</td>
								<td><input type="email" name="emailEmpresa"></td>
							</tr>		

							<tr>	
								<td>Correo</td>
								<td><input type="email" name="emailCliente"></td>
								<td>Telefono</td>
								<td><input type="text" name="telEmpresa"></td>
							</tr>	

							<tr>	
								<td></td>
								<td></td>
								<td>Direccion</td>
								<td><input type="text" name="direccionEmpresa"></td>
							</tr>

							<tr>	
								<td></td>
								<td></td>
								<td>Cod NIT</td>
								<td><input type="text" name="nit"></td>
							</tr>	

							<tr>	
								<td></td>
								<td></td>
								<td><input type="submit" name="enviar" value="Enviar registro"></td>
								<td><input type="reset" value="Limpiar campos"></td>
							</tr>	
						</table>	

					</form>	
			</section>
		</div>

		<footer>
			<small>&copy; Copyright Acurstin</small>
			<div class="volver" onclick="subir();return false"> </div>
		</foooter>
	</body> 
</html> 
