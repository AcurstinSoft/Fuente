<?php
 include("includes/conexion.php");
 $consulta = "select nombre, usuario, apellido from tbadmin";
 $query = mysql_query($consulta);
 echo "<table>";
 while ($reg = mysql_fetch_row($query)){
 	echo "<tr>";
 	echo "<br>";
 	foreach ($reg as $cambia) {
 		echo "<td>".$cambia."</td>";
 	}
 }
 echo "</table>";

?>