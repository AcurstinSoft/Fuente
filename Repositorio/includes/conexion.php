<?php
	$host = "mysql.hostinger.es";
	$usuario = "u339857189_dbu";
	$contra = "codec2014";
	$dbname = "u339857189_dbn";
	@$conn = mysql_connect($host, $usuario, $contra) 
	or die ("Ha ocurrido un problema al tratar de conectarse al servidor:<br><p style='color:red;''>".mysql_error()."</p>");
	@$db = mysql_select_db($dbname) 
	or die ("No se pudo conectar a la base de datos (".$dbname."): <br><p style='color:red;'>".mysql_error()."</p>");
?>