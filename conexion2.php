<?php
$usuario="root";
$servidor="localhost";
$BD="ubicacion";
$password="";

$conexion=mysql_connect($servidor,$usuario,$password)or die("Error en la conexión".mysql_error());
mysql_select_db($BD,$conexion);
?>
