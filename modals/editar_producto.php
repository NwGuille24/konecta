<div id="editar" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Editar Producto</h4>
			</div>
			<form method="POST" action="ajax/editar_producto.php">
				<div class="modal-body">
					<div class="row" style="margin-bottom: 4%;">
						<div class="col-md-6">
							<h4> Nombre:</h4>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" id="nombre_p" name="nombre_p" size="20" value="" placeholder="nombre" required>
							<input id="id_p" name="id_p" hidden>
						</div>
					</div>
					<div class="row" style="margin-bottom: 4%;">
						<div class="col-md-6">
							<h4> Detalle:</h4>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" id="detalle_p" name="detalle_p" size="20" placeholder="detalle" required>
						</div>
					</div>

					<div class="row" style="margin-bottom: 4%;">
						<div class="col-md-6">
							<h4> Precio:</h4>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" id="precio_p" name="precio_p" size="20" placeholder="precio" required>
						</div>
					</div>

					<div class="row" style="margin-bottom: 4%;">
						<div class="col-md-6">
							<h4> Peso:</h4>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" id="peso_p" name="peso_p" size="20" placeholder="peso" required>
						</div>
					</div>

					<div class="row" style="margin-bottom: 4%;">
						<div class="col-md-6">
							<h4> Categoria:</h4>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" id="categoria_p" name="categoria_p" size="20" placeholder="categoria" required>
						</div>
					</div>

					<div class="row" style="margin-bottom: 4%;">
						<div class="col-md-6">
							<h4> Cantidad:</h4>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" id="cantidad_p" name="cantidad_p" size="20" placeholder="cantidad" required>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<input type="submit" value="Guardar datos" class="btn btn-success" name="B1">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</form>
		</div>
	</div>
</div>