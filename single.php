<?php get_header(); ?> 

	<section class="section-post-detail my-5">
      <div class="container">
        <div class="row">
          <aside class="mt-5 mt-md-0 col-md-5 col-lg-4 order-last order-md-first">
            <?php include("components/co-sidebar-post-categories.php");?>
            <?php include("components/co-sidebar-forecast.php");?>
            <?php include("components/co-sidebar-user-info.php");?>
            <?php include("components/co-sidebar-featured-products.php");?>
          </aside>

           <div class="col-md-7 col-lg-8 post-detail-column order-first order-md-last">
            <div class="row">
              <article class="col-12 post-detail">
                <div class="post-detail__meta d-flex justify-content-between align-items-center">
                  <span>Por: <?php the_author_link(); ?></span> 
                  <span><?php echo get_the_date(); ?></span>
                  <?php edit_post_link(); ?>
                </div>
                <div class="post-detail__image">
                  <?php if ( has_post_thumbnail() ) : ?>
                          <?php the_post_thumbnail(); ?>
                      <?php else : ?>
                          <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/placeholder.png" />
                      <?php endif; ?>
                </div>
                <div class="mt-3 mb-0">
                  <?php echo do_shortcode('[addtoany]'); ?>
                </div>
                <h1 class="post-detail__title"><?php the_title() ;?></h1>
                <div class="post-detail__text">
                  <?php the_content(); ?>
                </div>
                <?php if( get_field('info_adicional')): ?>
                  <div class="post-detail__extra">
                    <h2 class="post-detail__extra-title">Información Adicional</h2>
                    <ul>
                      <li><span class="txt-bold">Fecha Inicio:</span><?php the_field('fecha_inicio'); ?></li>
                      <li><span class="txt-bold">Fecha Fin:</span><?php the_field('fecha_fin'); ?></li>
                      <li><span class="txt-bold">Lugar:</span><?php the_field('lugar'); ?></li>
                      <li><span class="txt-bold">Número de asistentes:</span><?php the_field('numero_asistentes'); ?></li>
                    </ul>
                  </div>
                <?php endif; ?>
              </article><!--/.post-detail -->
            </div>
          </div>

        </div><!--/.row -->
      </div><!--/.container -->
    </section><!--/.section-post-detail -->
	

<?php get_footer();?>