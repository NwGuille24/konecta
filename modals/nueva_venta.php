<div id="venta" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">

				<h4 class="modal-title">Vender Producto</h4>
			</div>
			<form method="POST" action="ajax/registrar_venta.php">
				<div class="modal-body">
					<div class="row" style="margin-bottom: 4%;">
						<div class="col-md-6">
							<h4> Nombre:</h4>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" id="nombre_pv" name="nombre_pv" size="20" value="" placeholder="nombre" disabled>
							<input id="id_pv" name="id_pv" hidden>
						</div>
					</div>

					<div class="row" style="margin-bottom: 4%;">
						<div class="col-md-10">
							<h4> Lo maximo que puedes vender es:</h4>
						</div>
						<div class="col-md-2">
							<input class="form-control" type="text" id="cantidad_pv" name="cantidad_pv" size="20" placeholder="cantidad" disabled>
						</div>
					</div>

					<div class="row" style="margin-bottom: 4%;">
						<div class="col-md-6">
							<h4>Cuanto deseas vender?</h4>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" id="cantidad_v" name="cantidad_v" size="20" placeholder="cantidad" required>
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