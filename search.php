<?php get_header(); ?> 

<div class="search py-5">
	<section class="search-results">
      <div class="container">
        <div class="row">

          <div class="col-12">
            <h1 class="search-results__title"><span class="txt-normal">Resultados</span> de búsqueda</h1>
          </div>
          <p class="col-12">Se han encontrado 
          	<?php /* Search Count */ $allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count;  _e('<b>'); echo $count . ' '; ; _e('</b>'); _e('resultado(s) para la palabra '); _e(''); _e('<b>'); echo $key; _e('</b>'); wp_reset_query(); ?>
			<?php
		    global $query_string;
		    $query_args = explode("&", $query_string);
		    $search_query = array();

		    foreach($query_args as $key => $string) {
		      $query_split = explode("=", $string);
		      $search_query[$query_split[0]] = urldecode($query_split[1]);
		    } // foreach

		    $the_query = new WP_Query($search_query);
		    if ( $the_query->have_posts() ) : 
		    ?>
		    <!-- the loop -->

          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="search-results__column col-md-6 col-lg-4">
            <article class="search-results__post">
                    <a href="<?php the_permalink(); ?>">
                      <?php if ( has_post_thumbnail() ) : ?>
                          <?php the_post_thumbnail(); ?>
                      <?php else : ?>
                          <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/placeholder.png" />
                      <?php endif; ?>
                    </a>
                    <div class="search-results__content-wrapper">
                      <a class="search-results__title" href="<?php the_permalink(); ?>">
                        <?php the_title( '<h2>', '</h2>' ); ?>
                      </a>
                      <div class="search-results__meta">
                        <?php echo get_the_date(); ?>
                        <?php edit_post_link(); ?>
                      </div>
                    </div>
                  </article><!--/.item-product -->
            <!-- end of the loop -->
			<?php wp_reset_postdata(); ?>
          </div><!--/.product-column -->
          <?php endwhile; ?>
          <?php else : ?>
            <div class="col-12 no-content">
            	<p><?php _e( 'Lo sentimos, ningún post ha sido encontrado.' ); ?></p>
            </div>
            <?php endif; ?>
            <div class="col-12 mt-5">
              <?php echo bootstrap_pagination($the_query); ?>
            </div>
        </div><!--/.row -->
      </div><!--/.container -->
    </section><!--/.featured-products -->
	
</div><!--/.search -->


<?php get_footer();?>