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
                      <?php if ( has_post_thumbnail() ) : ?>
                          <?php the_post_thumbnail(); ?>
                      <?php else : ?>
                          <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/placeholder.png" />
                      <?php endif; ?>
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
            <div class="col-12">
              <?php echo bootstrap_pagination($the_query); ?>
            </div>