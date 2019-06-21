<?php
            // Set the Current Author Variable $curauth
            $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
            ?>        
            <h1>Posts de <?php echo $curauth->nickname; ?>:</h1>
            <div class="row">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
               <div class="col-lg-12 col-xl-6 posts-feed__column">
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
               
              <div class="col-12">
                <?php echo bootstrap_pagination($the_query); ?>
              </div>
               
               
              <?php else: ?>
              <p><?php _e('No hay posts por este autor.'); ?></p>
               
              <?php endif; ?>
            </div>