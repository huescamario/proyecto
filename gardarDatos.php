<?php

include "conexion2.php";

$nombre=$_POST["nombre"];
$direccion=$_POST["direccion"];
$giro=$_POST["giro"];
$foto=$_POST["foto"];
$lat=$_POST["lat"];
$log=$_POST["log"];


$sql="INSERT INTO localizacion(Id_Ubicacion, Nombre, Direccion, Giro,Foto,Latitud,Longitud)VALUES('','$nombre','$direccion','$giro','$foto','$lat','$log')";
$resultado=mysql_query($sql,$conexion);

if($resultado){
echo "Nombre: ".$nombre;
echo "Direccion: ".$direccion;
echo "Giro: ".$giro;
echo "Foto: ".$foto;
echo "Latitud: ".$lat;
echo "Longitud: ".$log;
echo "Datos guardados correctamente";
}else{
echo "Error al guardar los datos: ".mysql_error();
}
mysql_close($conexion);
?>