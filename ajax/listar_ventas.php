<?php
require_once("../conectar/db.php");
require_once("../conectar/conexion.php");

$max = "SELECT  producto.nom_producto, ventas.catidad_prod From inventario, ventas, producto WHERE ventas.id_inventario = inventario.id_inventario AND inventario.id_producto = producto.id_producto ORDER BY catidad_prod DESC LIMIT 1";
$query_max = mysqli_query($con, $max);
$row1 = mysqli_fetch_array($query_max);

$n_prod = $row1['nom_producto'];
$mayor = $row1['catidad_prod'];

$sql = "SELECT ventas.id_inventario, catidad_prod, producto.nom_producto, fecha_venta FROM ventas, producto, inventario WHERE ventas.id_inventario = inventario.id_inventario AND inventario.id_producto = producto.id_producto";
$query = mysqli_query($con, $sql);

?>


<style>
	/*estilos para la tabla*/
	tfoot input {
		width: 100%;
		padding: 3px;
		box-sizing: border-box;
	}

	.dataTables_filter {
		display: none;
	}
</style>


<div>
	<h4>
		El producto con mas unidades vendidas es: <?php echo $n_prod ?>
		<br>
		con<?php echo $mayor ?> unidades
	</h4>
</div>
<div class="table-responsive">

	<table class="table table-hover" id="productos">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nombre</th>
				<th>Cantidad</th>
				<th>Fecha Venta</th>

			</tr>
		</thead>
		<tbody>

			<?php
			$bono = 0;
			$i = 1;
			while ($row = mysqli_fetch_array($query)) {
				$id = $row['id_inventario'];
				$nombre = $row['nom_producto'];
				$cantidad = $row['catidad_prod'];
				$f_registro = $row['fecha_venta'];
			?>

				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $nombre; ?></td>
					<td><?php echo $cantidad; ?></td>
					<td><?php echo $f_registro; ?></td>
				</tr>
			<?php
			}
			?>
		</tbody>

		<tfoot>
			<tr>
				<th>No.</th>
				<th>Nombre</th>
				<th>Cantidad</th>
				<th>Fecha Venta</th>
			</tr>
		</tfoot>


		<script>
			$(document).ready(function() {
				// Setup - add a text input to each footer cell
				$('#productos tfoot th').each(function() {
					var title = $(this).text();
					$(this).html('<input type="text" placeholder=" ' + title + '" />');
				});
				// DataTable
				var table = $('#productos').DataTable({

					"language": {
						"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
					},
					dom: 'Bfrtip',
					buttons: [
						'copy', 'csv', 'excel', 'pdf', 'print'
					],

					initComplete: function() {
						// Apply the search
						this.api().columns().every(function() {
							var that = this;
							$('input', this.footer()).on('keyup change clear', function() {
								if (that.search() !== this.value) {
									that
										.search(this.value)
										.draw();
								}
							});
						});
					}
				});
			});
		</script>
	</table>
</div>