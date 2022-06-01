<?php
  headerAdmin($data);
   ?>
   <main class="app-content">
      <div class="row user">
        <div class="col-md-12">
          <div class="profile">
            <div class="info"><img class="user-img" src="<?= media();?>/images/avatar.png">
             <h4><?= $_SESSION['userData']['nombres'].' '.$_SESSION['userData']['appat'].' '.$_SESSION['userData']['apmat']; ?></h4>
            <p><?= $_SESSION['userData']['nombrerol']; ?></p>
            </div>
            <div class="cover-image"></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
          <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Datos personales</a></li>
          <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Datos del vale</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane active" id="user-timeline">
              <div class="timeline-post">
                <div class="post-media">
                  <div class="content">
                    <h5>DATOS PERSONALES </h5>
              </div>
            </div>

            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td style="width:150px;">Identificación:</td>
                  <td><?= $_SESSION['userData']['indentificacion']; ?></td>
                </tr>
                <tr>
                  <td>Nombres:</td>
                  <td><?= $_SESSION['userData']['nombres']; ?></td>
                </tr>
                <tr>
                  <td>Apellidos:</td>
                  <td><?= $_SESSION['userData']['appat']; ?></td>
                </tr>
                                <tr>
                  <td>Apellidos:</td>
                  <td><?= $_SESSION['userData']['apmat']; ?></td>
                </tr>
                <tr>
                  <td>Teléfono:</td>
                  <td><?= $_SESSION['userData']['telefono']; ?></td>
                </tr>
                                <tr>
                  <td>Direccion:</td>
                  <td><?= $_SESSION['userData']['direccion']; ?></td>
                </tr>
                <tr>
                  <td>Email (Usuario):</td>
                  <td><?= $_SESSION['userData']['email_user']; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

             <div class="tab-pane active" id="user-settings">
              <div class="timeline-post">
                <div class="post-media">
                  <div class="content">
                    <h5>DATOS DEL VALE </h5>
              </div>
            </div>

            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td style="width:150px;">Id persona:</td>
                  <td><?= $_SESSION['userDatav'][0]['idpersona']; ?></td>
                </tr>
                <tr>
                  <td>Id vale:</td>
                  <td><?= $_SESSION['userDatav'][0]['idvale']; ?></td>
                </tr>
                <tr>
                  <td>Monto:</td>
                  <td><?= $_SESSION['userDatav'][0]['monto']; ?></td>
                </tr>
                                <tr>
                  <td>Pago:</td>
                  <td><?= $_SESSION['userDatav'][0]['pago']; ?></td>
                </tr>
                <tr>
                  <td>Quincenas:</td>
                  <td><?= $_SESSION['userDatav'][0]['quincenas']; ?></td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
 
          </div>
        </div>
      </div>
    </main>
    <?php footerAdmin($data); ?>