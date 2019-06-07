<?php
/*
 * Template Name: home
 */
?>
<?php get_header(); ?> 


<div class="main-slider">
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum aperiam optio, qui.</p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum aperiam optio, qui.</p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum aperiam optio, qui.</p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum aperiam optio, qui.</p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum aperiam optio, qui.</p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum aperiam optio, qui.</p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
</div><!-- /main-slider -->

<section class="main">
  <div class="container">
    <div class="row">
      <aside class="col-lg-4">
        <div class="forecast-module">
          <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/logo-forecast.png" alt="">
          <h2>Forecat Requests</h2>
        </div>
        <div class="user-module">
          <h2>Welcome!</h2>
        </div>
        <div class="featured-pructs-module">
          <h2>Featured prdoucts</h2>
        </div>
      </aside>
      <div class="col-lg-8 main-posts">
        <div class="row">
          <?php 

            // args
            $args = array(
              'posts_per_page' => 6
            );


            // query
            $the_query = new WP_Query( $args );

            ?>
            <?php if( $the_query->have_posts() ): ?>
            
              <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-lg-6 main-posts__column">
                  <article class="main-posts__post">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(); ?>
                    </a>
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title( '<h2>', '</h2>' ); ?>
                    </a>
                    <?php the_excerpt(); ?>
                    <div class="main-posts__meta">
                      <?php echo get_the_date(); ?>
                    </div>
                  </article><!--/.item-product -->
                </div><!--/.product-column -->
              <?php endwhile; ?>
              
            <?php endif; ?>

            <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
        </div>
      </div>
    </div>
  </div>
</section>






<?php get_footer();?>
