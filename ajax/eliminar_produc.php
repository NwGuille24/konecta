<?php

require_once ("../conectar/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once ("../conectar/conexion.php");//Contiene funcion que conecta a la base de datos

$id = $_POST["id"];   

$sql1="UPDATE  producto SET estado = 0  WHERE id_producto = $id";
$query_update = mysqli_query($con,$sql1);


header("Location:../productos.php");
exit();
?>