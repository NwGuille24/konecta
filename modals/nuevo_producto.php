<!-- Modal -->
<div id="registrar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title">Registrar Producto</h4>
      </div>
      <form method="POST" action="ajax/nuevo_produc.php">
        <div class="modal-body">
          <div class="row" style="margin-bottom: 4%;">
            <div class="col-md-6">
              <h4> Nombre:</h4>
            </div>
            <div class="col-md-6">
              <input class="form-control" type="text" id="nombre" name="nombre" size="20" placeholder="nombre" required>
            </div>
          </div>
          <div class="row" style="margin-bottom: 4%;">
            <div class="col-md-6">
              <h4> Detalle:</h4>
            </div>
            <div class="col-md-6">
              <input class="form-control" type="text" id="detalle" name="detalle" size="20" placeholder="detalle" required>
            </div>
          </div>

          <div class="row" style="margin-bottom: 4%;">
            <div class="col-md-6">
              <h4> Precio:</h4>
            </div>
            <div class="col-md-6">
              <input class="form-control" type="text" id="precio" name="precio" size="20" placeholder="precio" required>
            </div>
          </div>

          <div class="row" style="margin-bottom: 4%;">
            <div class="col-md-6">
              <h4> Peso:</h4>
            </div>
            <div class="col-md-6">
              <input class="form-control" type="text" id="peso" name="peso" size="20" placeholder="peso" required>
            </div>
          </div>

          <div class="row" style="margin-bottom: 4%;">
            <div class="col-md-6">
              <h4> Categoria:</h4>
            </div>
            <div class="col-md-6">
              <input class="form-control" type="text" id="categoria" name="categoria" size="20" placeholder="categoria" required>
            </div>
          </div>

          <div class="row" style="margin-bottom: 4%;">
            <div class="col-md-6">
              <h4> Cantidad:</h4>
            </div>
            <div class="col-md-6">
              <input class="form-control" type="text" id="cantidad" name="cantidad" size="20" placeholder="cantidad" required>
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