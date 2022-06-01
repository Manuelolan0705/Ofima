<?php headerAdmin($data); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> <?= $data['page_title']?></h1>
          <p>Oficina en tus manos</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Tabla de pagos</h3>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Quincenas</th>
                  <th>6</th>
                  <th>8</th>
                  <th>10</th>
                  <th>12</th>
                  <th>14</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$1,000</td>
                  <td>$227.0</td>
                  <td>$175.0</td>
                  <td>$145.0</td>
                  <td>$124.00</td>
                  <td>$111.00</td>
                </tr>
                <tr>
                  <td>$1,500 </td>
                  <td>$340.50 </td>
                  <td>$262.50</td>
                  <td>$217.50</td>
                  <td>$186.00</td>
                  <td>$166.50</td>
                </tr>
                <tr>
                  <td>$2,000</td>
                  <td>$454.0</td>
                  <td>$350.0</td>
                  <td>$290.00</td>
                  <td>$248.00</td>
                  <td>$222.00</td>
                </tr>
                <tr>
                  <td>$2,500</td>
                  <td>$567.50</td>
                  <td>$437.50</td>
                  <td>$362.50</td>
                  <td>$310.00</td>
                  <td>$277.50</td>
                </tr>
                 <tr>
                  <td>$3,000</td>
                  <td>$681.0</td>
                  <td>$525.0</td>
                  <td>$435.00</td>
                  <td>$372.00</td>
                  <td>$333.00</td>
                </tr>
                <tr>
                  <td>$3,500</td>
                  <td>$794.50</td>
                  <td>$612.50</td>
                  <td>$507.50</td>
                  <td>$434.00</td>
                  <td>$388.50</td>
                </tr>
                <tr>
                  <td>$4,000</td>
                  <td>$908.0</td>
                  <td>$700.0</td>
                  <td>$580.00</td>
                  <td>$496.00</td>
                  <td>$444.00</td>
                </tr>
                 <tr>
                  <td>$4,500</td>
                  <td></td>
                  <td>$787.50</td>
                  <td>$652.50</td>
                  <td>$558.00</td>
                  <td>$499.50</td>
                </tr>
                                <tr>
                  <td>$5,000</td>
                  <td></td>
                  <td>$875.0</td>
                  <td>$725.00</td>
                  <td>$620.00</td>
                  <td>$555.00</td>
                </tr>
              <tr>
                  <td>$5,500</td>
                  <td></td>
                  <td>$962.50</td>
                  <td>$797.50</td>
                  <td>$682.00</td>
                  <td>$610.50</td>
                </tr>
                 <tr>
                  <td>$6,000 </td>
                  <td></td>
                  <td>$1,050.0</td>
                  <td>$870.00</td>
                  <td>$744.00</td>
                  <td>$666.00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
   <?php footerAdmin($data) ?>