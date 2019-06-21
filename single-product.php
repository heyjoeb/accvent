<?php get_header(); ?> 

	<section class="section-product-detail my-5">
      <div class="container">
        <div class="row">
          <aside class="mt-5 mt-md-0 col-md-5 col-lg-4 order-last order-md-first">
            <?php include("components/co-sidebar-product-categories.php");?>
            <?php include("components/co-sidebar-forecast.php");?>
            <?php include("components/co-sidebar-user-info.php");?>
            <?php include("components/co-sidebar-featured-products.php");?>
          </aside>

           <div class="col-md-7 col-lg-8 product-detail-column order-first order-md-last">
            <div class="row">
              <article class="product-detail">
                <div class="product-detail__meta d-flex justify-content-end align-items-center mb-5">
                  <h1 class="product-detail__title"><?php the_title() ;?></h1>
                  <?php edit_post_link(); ?>
                </div>
                <div class="row">
                  <div class="col-12 mb-5">
                    <?php echo do_shortcode('[addtoany]'); ?>
                  </div>
                  <div class="col-lg-6">
                    <div class="product-detail__image">
                      <?php if ( has_post_thumbnail() ) : ?>
                          <?php the_post_thumbnail(); ?>
                      <?php else : ?>
                          <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/placeholder.png" />
                      <?php endif; ?>
                
                    </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="product-detail__extra">
                        <h2 class="product-detail__extra-title">Datos</h2>
                        <ul>
                          <li><span class="txt-bold">MPN:</span><?php the_field('mpn'); ?></li>
                          <li><span class="txt-bold">SKU:</span><?php echo $product->get_sku(); ?></li>
                          <li><span class="txt-bold">CFT</span><?php the_field('cft'); ?></li>
                          <li><span class="txt-bold">MOQ:</span><?php the_field('moq'); ?></li>
                          <li><span class="txt-bold">Start date:</span><?php the_field('inicio'); ?></li>
                          <li><span class="txt-bold">End of life:</span><?php the_field('fin'); ?></li>
                        </ul>
                        <h2 class="product-detail__extra-title mt-4">Descargables</h2>
                        <ul>
                          <?php
                          if( have_rows('descargables') ):
                              while ( have_rows('descargables') ) : the_row();?>

                                  <li>
                                    <?php 

                                    $file = get_sub_field('descargable');

                                    if( $file ): ?>
                                      
                                      <a target="_blank" href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a>

                                    <?php endif; ?>
                                  </li>
                            <?php
                              endwhile;
                          else :?>
                              <li>No hay descargas disponibles</li>
                          <?php
                          endif;
                          ?>
                        </ul>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="product-detail__image--gallery d-flex my-4 align-items-stretch">
                        <?php 
                        // Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
                          if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
                            return;
                          }

                          global $product;

                          $attachment_ids = $product->get_gallery_image_ids();

                          if ( $attachment_ids && $product->get_image_id() ) {
                            foreach ( $attachment_ids as $attachment_id ) {
                              echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html( $attachment_id ), $attachment_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
                            }
                          }
                         ?>
                      </div>
                    <div class="product-detail__text mt-4">
                      <?php the_content(); ?>
                    </div>
                    <h3 class="product-detail__extra-title mt-5">Características:</h3>
                    <ul>
                      <?php
                      if( have_rows('caracteristicas') ):
                          while ( have_rows('caracteristicas') ) : the_row();?>
                              <li><?php the_sub_field('caracteristica');?></li>
                        <?php
                              endwhile;
                          else :?>
                              <li>No hay características disponibles</li>
                          <?php
                          endif;
                          ?>
                    </ul>
                  </div>
                </div>
              </article><!--/.product-detail -->
            </div>
          </div>

        </div><!--/.row -->
      </div><!--/.container -->
    </section><!--/.section-product-detail -->
	

<?php get_footer();?>