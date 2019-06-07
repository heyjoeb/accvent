<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accvent</title>
<?php wp_head(); ?>
  </head>
  <body <?php body_class( array( "fade" ) ); ?>>
    <nav class="navbar navbar-expand-lg px-0 py-3" role="navigation">
      <div class="container px-0">
        <a class="navbar-brand text-hide" href="/" style="background-image: url(<?php the_field('logo_header', 'option'); ?>);">Accvent</a>
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php
          wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'main-navbar',
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ) );
        ?>
      </div>
    </nav>
    
        

   