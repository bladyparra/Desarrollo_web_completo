<!doctype html>
<html class="no-js" lang="es">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="manifest" href="site.webmanifest">
      <link rel="apple-touch-icon" href="icon.png">
      <!-- Place favicon.ico in the root directory -->

      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">

      <?php
        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_replace(".php", "", $archivo);

        if ($pagina == "invitados" || $pagina == "index") {
          echo '<link rel="stylesheet" href="css/colorbox.css">';
        }
        else if ($pagina == "conferencia") {
          echo '<link rel="stylesheet" href="css/lightbox.css">';
        }
      ?>
      <!-- Leaflet CSS - https://leafletjs.com/ -->
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.3/dist/leaflet.css">
      <link rel="stylesheet" href="css/main.css">

      <script src="js/vendor/modernizr-3.5.0.min.js"></script>

    </head>
    <body class="<?php echo $pagina; ?>">
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <header class="site-header">
      <div class="hero">
        <div class="contenido-header">
          <nav class="redes-sociales">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </nav><!--redes-sociales-->
          <div class="informacion-evento">
            <div class="clearfix">
              <p class="fecha"><i class="fa fa-calendar" aria-hidden="true"></i>10-12-Dic</p>
              <p class="ciudad"><i class="fa fa-map-marker" aria-hidden="true"></i>Guadalajara, Mx</p>
            </div>
              <h1 class="nombre-sitio">GdlWebCamp</h1>
              <p class="slogan">La mejor conferencia de <span>diseño web</span></p>
          </div><!--informacion-evento-->
        </div>
      </div><!--hero-->
    </header>

    <div class="barra">
      <div class="contenedor clearfix">
        <div class="logo">
          <a href="index.php">
            <img src="img/logo.svg" alt="Logo GdlWebCamp">
          </a>
        </div>
        <div class="menu-movil">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav class="navegacion-principal clearfix">
          <a href="conferencia.php">Conferencia</a>
          <a href="calendario.php">Calendario</a>
          <a href="invitados.php">Invitados</a>
          <a href="registro.php">Reservaciones</a>
        </nav>
      </div><!--contenedor-->
    </div><!--barra-->
