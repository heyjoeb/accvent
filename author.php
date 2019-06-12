<?php get_header(); ?> 

	<section class="author my-5">
      <div class="container">
        <div class="row justify-content-center">

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
            <div class="user-info text-center">
              <h2 class="user-info-title">Welcome!</h2>
              <div class="user-info-info">
                <?php global $current_user;
                  get_currentuserinfo();    
                ?>
                <div class="user-info-image">
                  <?php echo get_avatar( get_the_author_meta('user_email'), $size = '95'); ?> 
                </div>
                <div class="user-info-name">
                  <?php echo $current_user->display_name; ?>
                </div>
                <div class="user-info-posts-number">
                  <?php echo 'Published: ' . count_user_posts( $current_user->ID ); ?>
                </div>
                <div class="user-info-comments">
                 <a class="d-flex justify-content-center align-items-center" target="_blank" href="/wp-admin/edit-comments.php?comment_status=mine&user_id=<?php echo $current_user->ID ?>">Comments</a>
                </div>
                <div class="user-info-links">
                  <ul>
                    <li><a target="_blank" href="/wp-admin/post-new.php">Add new item</a></li>
                    <li><a href="<?php echo get_author_posts_url($current_user->ID) ?>">My Page</a></li>
                    <li><a target="_blank" href="/wp-admin/profile.php">My Account</a></li>
                    <li><a target="_blank" href="/wp-admin/edit-comments.php?comment_status=moderated">Moderate comments</a></li>
                  </ul>
                </div>
                <div class="user-info-logout">
                  <a href="/wp-login.php?action=logout" class="btn btn-blue">Logout</a>
                </div>
              </div>
            </div>
            <div class="featured-products">
              <h2 class="featured-products-title">Featured products</h2>
              <div class="featured-products-list text-center">
                <?php echo do_shortcode("[featured_products per_page='3' columns='1']"); ?>
              </div>
            </div>
          </aside>

          <div class="col-lg-8 posts-feed">
            <?php
            // Set the Current Author Variable $curauth
            $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
            ?>        
            <h2>Posts de <?php echo $curauth->nickname; ?>:</h2>
            <div class="row">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
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
               
              <div class="col-12">
                <?php echo bootstrap_pagination($the_query); ?>
              </div>
               
               
              <?php else: ?>
              <p><?php _e('No hay posts por este autor.'); ?></p>
               
              <?php endif; ?>
            </div>
          </div>
        </div><!--/.row -->
      </div><!--/.container -->
    </section><!--/.author -->
	

<?php get_footer();?>