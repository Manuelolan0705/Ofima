<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $data['page_tag']; ?></title>
    <link rel="shortcut icon" href="<?= media();?>/images/Logo_Ofima.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">

   <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="<?=media()?>/sucursal/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?=media()?>/sucursal/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=media()?>/sucursal/css/style.css">

</head>

<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="http://localhost/ofima/login">Inicios de sesión </a>   
            <a href="#about">Acerca de</a>
            <a href="#event">Distribuidora</a>
            <a href="#menu-list">Vale</a>
                       
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>