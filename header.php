<!doctype html>
<html class="no-js accvent-theme" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accvent</title>
<?php wp_head(); ?>
  </head>
  <body <?php body_class( array( "fade" ) ); ?>>
    <nav class="navbar navbar-light navbar-expand-lg px-sm-0 py-3" role="navigation">
      <div class="container px-0">
        <a class="navbar-brand text-hide" href="/" style="background-image: url(<?php the_field('logo_header', 'option'); ?>);">Accvent</a>
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php
          wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'main-navbar',
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ) );
        ?>
        <div class="dropdown">
          <button class="btn" type="button" id="searchBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90.1 90.1"><path d="M62.3 58.8C75.2 44 73.6 21.5 58.8 8.7S21.5-2.6 8.7 12.2s-11.3 37.2 3.5 50.1c13.4 11.6 33.2 11.6 46.5 0l27.1 27.1c1 1 2.6 1 3.5 0 1-1 1-2.6 0-3.5l-27-27.1zM5.1 35.6c0-16.8 13.6-30.4 30.4-30.4S66 18.8 66 35.6 52.4 66 35.6 66C18.8 66 5.1 52.4 5.1 35.6z" fill="#6a9c00"/></svg>
          </button>
          <div class="dropdown-menu" aria-labelledby="searchBtn">
            <?php get_search_form() ?>
          </div>
        </div>
      </div>
    </nav>
    
        

   