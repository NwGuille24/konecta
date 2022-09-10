<?php
require_once("../conectar/db.php");
require_once("../conectar/conexion.php");

$max = "SELECT inventario.id_producto, producto.nom_producto, cantidad_stok From inventario,producto WHERE inventario.id_producto = producto.id_producto AND producto.estado = 1 ORDER BY cantidad_stok DESC LIMIT 1";
$query_max = mysqli_query($con, $max);
$row1 = mysqli_fetch_array($query_max);

$n_prod = $row1['nom_producto'];
$mayor = $row1['cantidad_stok'];

$sql = "SELECT producto.id_producto, nom_producto,ref_producto,catg_producto, precio_producto, peso_producto,catg_producto, fecha_creacion, inventario.cantidad_stok FROM producto, inventario WHERE
inventario.id_producto = producto.id_producto AND producto.estado = 1 ";
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
		El producto con mas unidades en stock es: <?php echo $n_prod ?>
		<br>
		con <?php echo $mayor ?> unidades
	</h4>
</div>
<div class="table-responsive">

	<table class="table table-hover" id="productos">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nombre</th>
				<th>Referencia</th>
				<th>Precio</th>
				<th>Peso</th>
				<th>Categoria</th>
				<th>Cantidad</th>
				<th>Fecha Registo</th>
				<th>Vender</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$bono = 0;
			$i = 1;
			while ($row = mysqli_fetch_array($query)) {
				$id = $row['id_producto'];
				$nombre = $row['nom_producto'];
				$ref = $row['ref_producto'];
				$precio = $row['precio_producto'];
				$peso = $row['peso_producto'];
				$cantidad = $row['cantidad_stok'];
				$f_registro = $row['fecha_creacion'];
				$categoria = $row['catg_producto'];
			?>

				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $nombre; ?></td>
					<td><?php echo $ref; ?></td>
					<td><?php echo $precio; ?></td>
					<td><?php echo $peso; ?></td>
					<td><?php echo $categoria; ?></td>
					<td><?php echo $cantidad; ?></td>
					<td><?php echo $f_registro; ?></td>


					<?php
					if ($cantidad == 0) {
					?>
						<td>
							<button type="button" class="btn btn-success" disaddled>
								<span class="pull-right">
									No disponible
								</span>
							</button>
						</td>
					<?php
					}
					?>
					<?php
					if ($cantidad != 0) {
					?>
						<td>
							<button type="button" class="btn btn-success">
								<span class="pull-right">
									<a href="#" class='btn btn-default' title='Vender' onclick="venta('<?php echo $id; ?>','<?php echo $cantidad; ?>','<?php echo $nombre; ?>')">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
											<path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
											<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
										</svg>
									</a>
								</span>
							</button>
						</td>
					<?php
					}
					?>
					<td>
						<button type="button" class="btn btn-info">
							<span class="pull-right">
								<a href="#" class='btn btn-default' title='Editar' onclick="editar('<?php echo $id; ?>','<?php echo $nombre; ?>','<?php echo $ref; ?>','<?php echo $precio; ?>','<?php echo $peso; ?>','<?php echo $categoria; ?>','<?php echo $cantidad; ?>')">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
										<path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
										<path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
									</svg>
								</a>
							</span>
						</button>
					</td>
					<td>
						<button type="button" class="btn btn-danger">
							<span class="pull-right">
								<a href="#" class='btn btn-default' title='Eliminar' onclick="eliminar('<?php echo $id; ?>')">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
										<path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
									</svg>
								</a>
							</span>
						</button>
					</td>
				</tr>
			<?php
			}
			?>
		</tbody>

		<tfoot>
			<tr>
				<th>No.</th>
				<th>Nombre</th>
				<th>Referencia</th>
				<th>Precio</th>
				<th>Peso</th>
				<th>Categoria</th>
				<th>Cantidad</th>
				<th>f registro</th>
				<th hidden>Vender</th>
				<th hidden>Editar</th>
				<th hidden>Eliminar</th>
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
