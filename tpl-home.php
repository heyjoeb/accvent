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
        <p>Nexxt Infraestructura desarrolla presentación técnico-comercial a Claro Dominicana</p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Nexxt Infraestructura desarrolla presentación técnico-comercial a Claro Dominicana</p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Nexxt Infraestructura desarrolla presentación técnico-comercial a <span class="txt-bold">Claro Dominicana</span></p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Nexxt Infraestructura desarrolla presentación técnico-comercial a <span class="txt-bold">Claro Dominicana</span></p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Nexxt Infraestructura desarrolla presentación técnico-comercial a <span class="txt-bold">Claro Dominicana</span></p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Nexxt Infraestructura desarrolla presentación técnico-comercial a <span class="txt-bold">Claro Dominicana</span></p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
</div><!-- /main-slider -->

<section class="main my-5">
  <div class="container">
    <div class="row">
      <aside class="col-lg-4">
        <div class="forecast-login">
          <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/logo-forecast.png" alt="">
          <h2 class="forecast-login-title">BC Forecast Requests</h2>
          <form>
            <div class="form-group">
              <label class="sr-only" for="selectBrand">Select Brand</label>
              <select class="form-control" id="selectBrand">
                <option selected disabled>Select Brand</option>
                <option>brand 1</option>
                <option>brand 2</option>
                <option>brand 3</option>
              </select>
            </div>
            <button type="submit" class="btn btn-blue">Preview</button>
          </form>
          <div class="forecast-login-bc">
            <a href="">BC Report</a><br>
            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/logo-forecast.png" alt="">
          </div>
          <div class="forecast-login-requests">
            <h2>Forecast Requests</h2>
            <a href="">Radm Request</a><br>
            <a href="">Report View</a>
          </div>
        </div>
        <div class="user-module justify-content-center">
          <h2>Welcome!</h2>
        </div>
        <div class="featured-pructs-module">
          <h2>Featured prdoucts</h2>
        </div>
      </aside>
      <div class="col-lg-8 posts-feed">
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
                <div class="col-lg-6 posts-feed__column">
                  <article class="posts-feed__post">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(); ?>
                    </a>
                    <a class="posts-feed__title" href="<?php the_permalink(); ?>">
                      <?php the_title( '<h2>', '</h2>' ); ?>
                    </a>
                    <div class="posts-feed__excerpt">
                      <?php the_excerpt(); ?>
                    </div>
                    <div class="posts-feed__meta">
                      <?php echo get_the_date(); ?>
                      <?php edit_post_link(); ?>
                    </div>
                  </article><!--/.item-product -->
                </div><!--/.product-column -->
              <?php endwhile; ?>
              
            <?php endif; ?>

            <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
            <div class="col-lg-12">
              <?php echo bootstrap_pagination($the_query); ?>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>






<?php get_footer();?>
