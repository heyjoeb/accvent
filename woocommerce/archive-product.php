<?php get_header(); ?> 

  <section class="section-product-category my-5">
      <div class="container">
        <div class="row">
          <aside class="col-lg-4">
            <?php include("wp-content/themes/accvent-theme/components/co-sidebar-product-categories.php");?>
            <?php include("wp-content/themes/accvent-theme/components/co-sidebar-forecast.php");?>
            <?php include("wp-content/themes/accvent-theme/components/co-sidebar-user-info.php");?>
          </aside>

           <div class="col-lg-8 product-category-column">
            <h2 class="pt-0 category-title"><?php echo single_cat_title(); ?></h2>
            <div class="row">
              <?php 

                woocommerce_product_loop_start();

                if ( wc_get_loop_prop( 'total' ) ) {
                  while ( have_posts() ) {
                    the_post();

                    /**
                     * Hook: woocommerce_shop_loop.
                     *
                     * @hooked WC_Structured_Data::generate_product_data() - 10
                     */
                    do_action( 'woocommerce_shop_loop' );

                    wc_get_template_part( 'content', 'product' );
                  }
                }

                else {

                  do_action( 'woocommerce_no_products_found' );
                }

                woocommerce_product_loop_end();


              ?> 
            </div>
          </div>

        </div><!--/.row -->
      </div><!--/.container -->
    </section><!--/.section-product-category -->
  

<?php get_footer();?>