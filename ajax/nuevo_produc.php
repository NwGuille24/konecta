<?php

	require_once ("../conectar/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../conectar/conexion.php");//Contiene funcion que conecta a la base de datos

		
	$nombre = $_POST["nombre"];   
	$detalle = $_POST["detalle"];   
	$precio = $_POST["precio"];   
	$peso = $_POST["peso"];   
	$categoria = $_POST["categoria"];   
	$cantidad = $_POST["cantidad"];   
	
	$sql="INSERT INTO   producto (nom_producto,ref_producto, precio_producto, peso_producto,catg_producto, estado) 
	VALUES ('$nombre','$detalle', '$precio', '$peso', '$categoria', 1)";
	$query_new_insert = mysqli_query($con,$sql);

	$sql = "SELECT MAX(id_producto) AS ulti FROM producto";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($query);
	$ultimo = $row['ulti'];

	$id_prod =$ultimo + 1;

	$sql2="INSERT INTO   inventario (id_producto,cantidad_stok) 
	VALUES ('$id_prod','$cantidad')";
	$query_new_insert2 = mysqli_query($con,$sql2);

	$sql3="INSERT INTO   cambios (tipo, id_producto) 
	VALUES ('venta','$id')";
	$query_new_insert = mysqli_query($con,$sql3);


	header("Location:../productos.php");
	exit();
?>
