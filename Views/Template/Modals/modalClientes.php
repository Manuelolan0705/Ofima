<!-- Modal -->
<div class="modal fade" id="modalFormCliente" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formCliente" name="formCliente" class="form-horizontal">
              <input type="hidden" id="idUsuario" name="idUsuario" value="">
              <p class="text-primary">Todos los campos son obligatorios.</p>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="txtIdentificacion">Identificación</label>
                  <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion" >
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="txtNombre">Nombre(s)</label>
                  <input type="text" class="form-control valid validText" id="txtNombre" name="txtNombre" >
                </div>
                <div class="form-group col-md-6">
                  <label for="txtApellidoPat">Apellido Paterno</label>
                  <input type="text" class="form-control valid validText" id="txtApellidoPat" name="txtApellidoPat" >
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="txtApellidoMat">Apellido Materno</label>
                    <input type="text" class="form-control valid validText" id="txtApellidoMat" name="txtApellidoMat" >
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="txtTelefono">Teléfono</label>
                  <input type="text" class="form-control valid validNumber" id="txtTelefono" name="txtTelefono"onkeypress="return controlTag(event);">
                </div>
                <div class="form-group col-md-6">
                  <label for="txtEmail">Email</label>
                  <input type="email" class="form-control valid validEmail" id="txtEmail" name="txtEmail" >
                </div>
              </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="txtPassword">Password</label>
                  <input type="password" class="form-control" id="txtPassword" name="txtPassword" >
                </div>
             </div>
             <hr>
              <p class="text-primary">Dirección fiscal.</span>
              <div class="form-row">
               <div class="form-group col-md-12">
                  <label>Dirección del domicilio del cliente </label>
                  <input type="text"class="form-control"  id="txtDirFiscal" name="txtDirFiscal">

                </div>
              </div>

              <div class="tile-footer">
                <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
                <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
              </div>

            </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalViewCliente" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header header-primary">
        <h5 class="modal-title" id="titleModal">Datos del cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Identificación:</td>
              <td id="celIdentificacion">654654654</td>
            </tr>
            <tr>
              <td>Nombre(s):</td>
              <td id="celNombre">Manuel Alberto</td>
            </tr>
            <tr>
              <td>Apellido Paterno:</td>
              <td id="celApellidoPat">Olan</td>
              </tr>
            <tr>
              <td>Apellido Materno:</td>
              <td id="celApellidoMat">Lorenzo</td>
            </tr>
            <tr>
              <td>Teléfono:</td>
              <td id="celTelefono">9211958323</td>
            </tr>
            <tr>
              <td>Email (Usuario):</td>
              <td id="celEmail">mauelaka607qgmail.com</td>
            </tr>
            <tr>
              <td>Fecha registro:</td>
              <td id="celFechaRegistro">Larry</td>
            </tr>
            <tr>
              <td>Direccion:</td>
              <td id="celDireccion">Col: Km5 #10</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
