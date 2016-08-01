<?php

include "conexion2.php";

include "conexion2.php";
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$edad=$_POST["edad"];
$promedio=$_POST["promedio"];
//$descripcion=$_POST["descripcion"];

$sql="UPDATE  datos_generales SET  Nombre='$nombre', Edad='$edad', Promedio='$promedio' WHERE Id_Estudiante='$id'";
$resultado=mysql_query($sql,$conexion);

if($resultado){
echo "Nombre: ".$nombre;
echo "Edad: ".$edad;
echo "Promedio: ".$promedio;
//echo "Descripcion: ".$descripcion;
echo "Datos guardados correctamente";
}else{
echo "Error al guardar los datos: ".mysql_error();
}
mysql_close($conexion);
?>