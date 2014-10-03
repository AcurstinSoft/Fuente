<?php
	$host = "localhost";
	$usuario = "root";
	$contra = "";
	$dbname = "acurstindb";
	@$conn = mysql_connect($host, $usuario, $contra) 
	or die ("Ha ocurrido un problema al tratar de conectarse al servidor:<br><p style='color:red;''>".mysql_error()."</p>");
	@$db = mysql_select_db($dbname) 
	or die ("No se pudo conectar a la base de datos (".$dbname."): <br><p style='color:red;'>".mysql_error()."</p>");
?>