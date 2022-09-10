<html lang="en">

<head>
	<?php
	include("./head.php");
	include("./modals/nuevo_producto.php");
	include("./modals/nueva_venta.php");
	include("./modals/editar_producto.php");
	include("./menu.php");
	?>
	<title>Productos</title>
</head>

<body>
	<div class="container" style="margin-top: 60px;">
		<div class="panel panel-" style="background: #f0f3f1;  box-shadow: 0em 0 2.4em #9e9e9e;     padding: 3%;">
			<div class="panel-heading">

				<div class="row">
					<div class="col-md-9">
						<h4 style="font-size: 2.5rem;"> Productos</h4>
					</div>
					<div class="col-md-3">
						<button type="button" class="btn btn-info " data-toggle="modal" data-target="#registrar">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
								<path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z" />
							</svg> Nuevo Producto</button>
					</div>
				</div>
			</div>
			<div class="panel-body" style="font-size: large;">

				<div class='outer_div'></div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="js/productos.js"></script>

</html>
