<!-- Modal -->
<div class="modal fade" id="modalFormVale" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formVale" name="formVale" class="form-horizontal">
          <input type="hidden" id="idUsuario" name="idUsuario" value="">
          <p class="text-primary">Todos los campos son obligatorios.</p>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="txtIdentificacion">Identificación</label>
              <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion">
            </div>


            <div class="tile-footer">
              <button class="btn btn-primary" type="button" id="btnBuscarPersona" name="btnBuscarPersona"><i class="fa fa-search"
                  aria-hidden="true"></i><span id="btnTextb">Buscar</span></button>&nbsp;&nbsp;&nbsp;
            </div>


          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="txtNombre">Nombre(s)</label>
              <input type="text" class="form-control valid validText" id="txtNombre" name="txtNombre">
            </div>
            <div class="form-group col-md-6">
              <label for="txtApellidoPat">Apellido Paterno</label>
              <input type="text" class="form-control valid validText" id="txtApellidoPat" name="txtApellidoPat">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="txtApellidoMat">Apellido Materno</label>
              <input type="text" class="form-control valid validText" id="txtApellidoMat" name="txtApellidoMat">
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="listQuin">Quincenas</label>
              <select class="form-control selectpicker" id="listQuin" name="listQuin">
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="10">10</option>
                <option value="12">12</option>
                <option value="14">14</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="listMon">Monto</label>
              <select class="form-control selectpicker" id="listMon" name="listMon">
                <option value="1000">$1,000</option>
                <option value="1500">$1,500</option>
                <option value="2000">$2,000</option>
                <option value="2500">$2,500</option>
                <option value="3000">$3,000</option>
                <option value="3500">$3,500</option>
                <option value="4000">$4,000</option>
                <option value="4500">$4,500</option>
                <option value="5000">$5,000</option>
                <option value="5500">$5,500</option>
                <option value="6000">$6,000</option>
              </select>
            </div>
          </div>



          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="txtPago">Pago</label>
              <input type="text" class="form-control valid validNumber" id="txtPago" name="txtPago"
                onkeypress="return controlTag(event);">
            </div>
          </div>

          <div class="tile-footer">
            <button id="btnActionForm" class="btn btn-primary" type="submit"><i
                class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
            <button class="btn btn-danger" type="button" data-dismiss="modal"><i
                class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>