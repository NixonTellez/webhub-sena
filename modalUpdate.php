<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body font-weight-bold">
          <form id="frminsertu" onsubmit="return actualizarDatos()" method="post">
            <input type="text" id="idEquipo" name="idEquipo" hidden="">
              <label>Codigo</label>
              <input type="text" id="codigou" name="codigou" class="form-control form-control-sm" required="">
              <label>Nombres</label>
              <input type="text" id="nombreu" name="nombreu" class="form-control form-control-sm" required="">
              <label>Estado</label>
              <input type="text" id="estadou" name="estadou" class="form-control form-control-sm">
              <label>Ambiente</label>
              <input type="text" id="FK_ambienteu" name="FK_ambienteu" class="form-control form-control-sm" required="">
              <label>Novedad</label>
              <textarea name="novedadu" id="novedadu" cols="30" rows="10" class="form-control form-control-sm"></textarea>
              <br>
               <input type="submit" value="Actualizar" class="btn btn-warning">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
