<?php get_header(); ?> 

	<section class="featured featured-products">
      <div class="container">
        <div class="row">


            <div class="product-column col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                  <article class="item-product">
                    <h1 class="txt-underline"><?php the_title() ;?></h1>
                    <div class="img-container">
                    	<?php the_post_thumbnail(); ?>
                    </div>
                    <?php the_content(); ?>
                  </article><!--/.item-product -->
            </div><!--/.product-column -->

        </div><!--/.row -->
      </div><!--/.container -->
    </section><!--/.featured-products -->
	

<?php get_footer();?>