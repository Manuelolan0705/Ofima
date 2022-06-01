<?php 
    headerAdmin($data); 
    getModal('modalVale',$data);
?>
  <main class="app-content">    
      <div class="app-title">
        <div>
            <h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?= $data['page_title'] ?>
            <?php   if(($_SESSION['permisosMod']['w'])){  ?>
                <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fa fa-plus" aria-hidden="true"></i>
                 Nuevo</button>
               <?php } ?>
            </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/vale"><?= $data['page_title'] ?></a></li>
        </ul>
      </div>
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableVale">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Rfc</th>
                          <th>Nombre(s)</th>
                          <th>Apellido Paterno</th>
                          <th>Apellidos Materno</th>
                            <th>Direccion</th>
                           <th>Id vale</th>
                          <th>Monto</th>
                          <th>Pago</th>
                          <th>Quincenas</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <td>12</td>
                          <td>36823</td>
                          <td>Concepción</td>
                          <td>Zabala</td>
                          <td>Hernández</td>
                            <td>Col: Esperaza Calle: Luna #25</td>
                          <td>1</td>
                          <td>2500</td>
                          <td>567.5</td>
                          <td>6</td>
                        </tr>
                      </tbody>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </main>
<?php footerAdmin($data); ?>
    