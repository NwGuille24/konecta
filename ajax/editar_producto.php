<?php

	require_once ("../conectar/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../conectar/conexion.php");//Contiene funcion que conecta a la base de datos

	$id = $_POST["id_p"];   
	$nombre = $_POST["nombre_p"];   
	$detalle = $_POST["detalle_p"];   
	$precio = $_POST["precio_p"];   
	$peso = $_POST["peso_p"];   
	$categoria = $_POST["categoria_p"];   
	$cantidad = $_POST["cantidad_p"];   
		
	$sql="UPDATE producto SET  nom_producto = '$nombre', ref_producto = '$detalle', precio_producto = '$precio',
	peso_producto = '$peso', catg_producto = '$categoria' WHERE id_producto = $id";
	$query_update = mysqli_query($con,$sql);
	
	$sql2="UPDATE inventario SET cantidad_stok ='$cantidad' WHERE id_producto = $id";
	$query_update2 = mysqli_query($con,$sql2);

	$sql3="INSERT INTO   cambios (tipo, id_producto) 
	VALUES ('edicion','$id')";
	$query_new_insert = mysqli_query($con,$sql3);


	header("Location:../productos.php");
	exit();

?>