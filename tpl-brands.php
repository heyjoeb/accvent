<?php
/*
 * Template Name: brands
 */
?>
<?php get_header(); ?> 

<section class="section-main my-5">
  <div class="container">
    <div class="row">
      <aside class="mt-5 mt-md-0 col-md-5 col-lg-4 order-last order-md-first">
        <?php include("components/co-sidebar-forecast.php");?>
        <?php include("components/co-sidebar-user-info.php");?>
      </aside>
      <div class="col-md-7 col-lg-8 brands order-first order-md-last">
        <div class="brands__main-image">
          <?php $image_brand = get_field('imagen_brand'); ?>
          <img src="<?php echo $image_brand['url']; ?>" alt="<?php echo $image_brand['alt']; ?>">
        </div>
        <div class="brands__main-text">
          <p><?php the_field('texto_brand'); ?></p>
        </div>
        <div class="row">
          <?php
          if( have_rows('brands') ):
            while ( have_rows('brands') ) : the_row();?>
              <div class="col-md-12 col-lg-6 brands__single-brand">
                <div class="brands__single-brand-image">
                  <?php $brand_image = get_sub_field('imagen_brand'); ?>
                  <img src="<?php echo $brand_image['url']; ?>" alt="<?php echo $brand_image['alt']; ?>">
                </div>
                <div class="brands__single-brand-content">
                  <h2 class="brands__single-brand-name"><?php the_sub_field('titulo_brand'); ?></h2>
                  <ul>
                    <?php

                      // check if the repeater field has rows of data
                      if( have_rows('descargables_brand') ):

                        // loop through the rows of data
                          while ( have_rows('descargables_brand') ) : the_row();?>

                              <li>
                                <?php 

                                    $file = get_sub_field('descargable_brand');

                                    if( $file ): ?>
                                      
                                      <a target="_blank" href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a>

                                    <?php endif; ?>
                              </li>

                          <?php endwhile;

                      else :

                          // no rows found

                      endif;

                      ?>

                    <?php

                      // check if the repeater field has rows of data
                      if( have_rows('links_brand') ):

                        // loop through the rows of data
                          while ( have_rows('links_brand') ) : the_row();?>

                              <li>
                                <?php 
                                  $brand_link = get_sub_field('link_brand');
                                  if( $brand_link ): 
                                    $brand_link_url = $brand_link['url'];
                                    $brand_link_title = $brand_link['title'];
                                    $brand_link_target = $brand_link['target'] ? $brand_link['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url($brand_link_url); ?>" target="<?php echo esc_attr($brand_link_target); ?>"><?php echo esc_html($brand_link_title); ?></a>
                                  <?php endif; ?>
                              </li>

                          <?php endwhile;

                      else :

                          // no rows found

                      endif;

                      ?>
                  </ul>
                </div>
              </div>
          <?php
            endwhile;
          else :?>
          <?php
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>






<?php get_footer();?>
