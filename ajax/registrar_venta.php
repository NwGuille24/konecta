<?php

	require_once ("../conectar/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../conectar/conexion.php");//Contiene funcion que conecta a la base de datos

error_reporting(0);

	$id = $_POST["id_pv"];   
	$canti = $_POST["cantidad_v"];   


	$sql = "SELECT cantidad_stok FROM inventario WHERE id_producto = '$id' AND cantidad_stok >= '$canti'";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($query);
	$cantidad = $row['cantidad_stok'];	 

if ($cantidad <= 0) {
	echo '<script language="javascript">alert("Cantidad no disponible");window.location.href="../productos.php"</script>';

}
else{
    $sql3="INSERT INTO   ventas	 (id_inventario, catidad_prod) 
	VALUES ('$id','$canti')";
    $query_new_insert = mysqli_query($con, $sql3);

    $sql = "SELECT cantidad_stok FROM inventario WHERE id_producto = '$id'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
    $cantidad = $row['cantidad_stok'];

    $restar = $cantidad - $canti;

    $sql="UPDATE inventario SET  cantidad_stok = '$restar' WHERE id_producto = $id";
    $query_update = mysqli_query($con, $sql);

    $sql3="INSERT INTO   cambios (tipo, id_producto) 
	VALUES ('venta','$id')";
    $query_new_insert = mysqli_query($con, $sql3);


    header("Location:../productos.php");
    exit();
}
?>
