<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="#86c28f" name="theme-color">
  <title>Nakawe accesorios</title>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/woocommerce.css" rel="stylesheet">
  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-32x32.png" rel="shortcut icon">
  
  <?php wp_head(); ?>
</head>

<body>
  <section class="main-general">
    <div class="main-general__content">
      <div class="main-general__item">
        <aside class="main-general__sidebar">
          <div class="main-general__menu">
            <a class="navbar-brand d-none d-md-block" href="<?php bloginfo('url'); ?>">Nakawé</a>
            <nav class="item-menu">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link nav-link-p active" href="<?php bloginfo('url'); ?>">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-p" href="<?php bloginfo('url'); ?>/shop">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-p" href="<?php bloginfo('url'); ?>/nosotros">Quiénes somos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-p" href="<?php bloginfo('url'); ?>/contacto">Contacto</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="main-general__social">
            <div class="box-social">
              <span class="title-social">Síguenos en nuestras</span>
              <span class="title-social">redes sociales</span>
              <div class="social">
                <a class="link-social" href="" target="_blank" title="Síguenos">
                    <span class="logo-social"><i aria-hidden="true" class="fa fa-instagram fa-social fa-lg"></i>Nakaweaccesorios
                    </span>
                  </a>
                <a class="link-social" href="" target="_blank" title="Síguenos">
                    <span class="logo-social"><i aria-hidden="true" class="fa fa-facebook fa-social fa-lg fix-icon"></i>Nakaweaccesorios
                    </span>
                  </a>
                <a class="link-social" href="" target="_blank" title="Contáctanos">
                    <span class="logo-social"><i aria-hidden="true" class="fa fa-envelope-o fa-social fa-lg fix-icon"></i>Nakawe@gmail.com
                    </span>
                  </a>
              </div>
              <div class="line-credits"></div>
              <div class="box-credits">
                <span class="credits">Copyright © 2019 - Nawawe Accesorios.</span>
                <span class="credits">Todos los Derechos Reservados.</span>
                <p class="credits">
                  Powered by
                  <a class="copy__company" href="https://slicegroup.xyz" target="_blank" title="Slice Group">Contact Marketing</a>
                </p>
              </div>
            </div>
          </div>
        </aside>
      </div>
      <div class="main-general__item">
        <div class="main-general__box">
          <div class="main-search__top">
            <div class="btn-menu d-lg-none d-sm-block">
              <button class="border-0 hamburger hamburger--elastic" data-toggle="offcanvas" id="hamburger" type="button">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
              <div class="float-right">
                <a class="navbar-brand navbar-brand-xs d-md-none" href="index.html">Nakawé</a>
              </div>
            </div>

            <form action="<?php bloginfo('url'); ?>" class="input-group" id="frm_search_form search-input" method="get">
              <!-- <input name="utf8" type="hidden" value="✓"> -->
              <input class="form-control form-search" placeholder="Búsqueda" type="text" name='s'>
              <span class="input-group-btn">
                  <button class="btn btn-default btn-search" type="submit">
                    <i aria-hidden="true" class="fa fa-search fa-search-fix"></i>
                  </button>
                </span>
            </form>
          </div>