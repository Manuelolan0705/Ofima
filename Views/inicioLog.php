<?php 
headerSucursal($data);
 ?>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name"><?= $data['page_tag']; ?></h1>
            <h2><?= $data['page_lema']; ?></h2>
            <p>¡Especializado en tu negocio!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">¿Qué es Ofima?</h1>
          <p class="header-p">Es una empresa/financiera 100% digital que con su exitoso modelo de 
            <br>negocio ha transformado la vida de miles de mujeres y hombres de todo México 
            <br>brindándoles la oportunidad de generar sus propios ingresos y tener su negocio, 
            <br>sin invertir un peso. 
          </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading">¿Cómo funciona Ofima?</h2>
              <p>Al afiliarte a Ofima recibes una línea de crédito personalizada, con la que podrás prestar o vender en abonos a tu cartera de clientes o bien a personas de tu entera confianza.</p>

             <h2 class="heading">¿Qué es ValeDinero?</h2>
              <p>Son préstamos en efectivo que van desde $500 y hasta $8000,00 pesos. Éstos los realizas a través de la App de Ofima y tus clientes los reciben directamente en la sucursal.</p>
              <div class="details-list">
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <img src="<?=media()?>/sucursal/img/madi.jpg" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!--/about-->
  <!-- event -->
  <section id="event">
    <div class="bg-color" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-n">¿Cómo puedo ser distribuidora de vales de Ofima?</h1>
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img src="<?=media()?>/sucursal/img/trabajo.jpg" class="img-responsive">
              </div>
              <div class="col-md-6 col-sm-6 details-text">
                <div class="content-holder">
                  <h2>Para ser una distribuidora Ofima solo requieres:</h2>
                <ul>
                  <li>Identificación oficial vigente</li>
                  <li>Comprobante de domicilio </li>
                  <li>Solicitud de Crédito </li>
                  <li>Aval</li>
                </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ event -->
  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">¿Cómo puedo solicitar un vale o un préstamo en Ofima?</h1>
          <p class="header-p">Los vales son otorgados única y exclusivamente por nuestras Empresarias,
            <br>por lo que tendrás que tener una de tu confianza para que se te pueda 
           <br>otorgar un préstamo.</p>
        </div>
           <div align="center"><img src="<?=media()?>/sucursal/img/tabla.jpg" class="img-responsive"></div>
        </div>
      </div>
    </div>
  </section>
  <!--/ menu -->


  <!-- contact -->

<?php 
footerSucursal($data);
 ?>
 