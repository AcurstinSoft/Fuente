<?php
	$nombreCliente = $_POST['nombreCliente'];
	$apellidoCliente = $_POST['apellidoCliente'];
	$docCliente = $_POST['docCliente'];
	$telCliente = $_POST['telCliente'];
	$emailCliente = $_POST['emailCliente'];
	$nombreEmpresa = $_POST['nombreEmpresa'];
	$nickName = $_POST['nickName'];
	$contrasena = $_POST['contrasena'];
	$emailEmpresa = $_POST['emailEmpresa'];
	$telEmpresa = $_POST['telEmpresa'];
	$direccionEmpresa = $_POST['direccionEmpresa'];
	$nit = $_POST['nit'];

	$conexion = mysql_connect('localhost', 'root', '');
	mysql_select_db('acurstindb');
	$query = "insert into tbcliente (nombreCliente,
									apellidoCliente, 
									docCliente, 
									telCliente, 
									emailCliente, 
									nombreEmpresa, 
									nickName, 
									contrasena, 
									emailEmpresa, 
									telEmpresa, 
									direccionEmpresa,
									nit)

									value ('$nombreCliente',
											'$apellidoCliente',
											'$docCliente',
											'$telCliente',
											'$emailCliente',
											'$nombreEmpresa',
											'$nickName',
											'$contrasena',
											'$emailEmpresa',
											'$telEmpresa',
											'$direccionEmpresa',
											'$nit'
											)";
	$resultado = mysql_query($query);
	echo "Se ha realizado el registro correctamente. <a href='http://www.acurstin.com'>Click para ir al sitio</a>";
?>