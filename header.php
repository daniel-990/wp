<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php wp_title('|', true, right); ?><?php bloginfo('name') ?></title>
    <meta name="description" contend="<?php bloginfo('description'); ?>" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <?php wp_head(); ?>

  </head>
  <body>

    <div class="fondo-white">
      <nav class="navbar navbar-default margen-baja0px nav-bar-custom">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <?php
                 wp_nav_menu( array(
                   'menu'              => 'principal-menu',
                   'theme_location'    => 'principal-menu',
                   'container_class'   => 'navbar-collapse collapse ',
                   'container_id'      => 'navbar',
                   'menu_class'        => 'nav navbar-nav',
                ));
         ?>
        </div>
      </nav>
    </div>
