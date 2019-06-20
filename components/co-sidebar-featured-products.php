<div class="featured-products">
          <h2 class="featured-products-title">Featured products</h2>
          <div class="featured-products-list text-center">
            <ul>
              <?php

    $meta_query  = WC()->query->get_meta_query();
    $tax_query   = WC()->query->get_tax_query();
    $tax_query[] = array(
        'taxonomy' => 'product_visibility',
        'field'    => 'name',
        'terms'    => 'featured',
        'operator' => 'IN',
    );

    $args = array(
        'post_type'           => 'product',
        'post_status'         => 'publish',
        'ignore_sticky_posts' => 1,
        'posts_per_page'      => $atts['per_page'],
        'orderby'             => $atts['orderby'],
        'order'               => $atts['order'],
        'meta_query'          => $meta_query,
        'tax_query'           => $tax_query,
    );

    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>


        <li> 
        <a href="<?php the_permalink(); ?>">
            <?php 
                if ( has_post_thumbnail( $loop->post->ID ) ) 
                    echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' ); 
                else 
                    echo '<img src="<?php echo get_bloginfo( "stylesheet_directory" ); ?>/assets/placeholder.png" />'; 
            ?>
            <h2 class="featured-products-subtitle"><?php the_title(); ?></h2>
            </a>    
        </li>
        <?php 
    endwhile;
    wp_reset_query(); 
?>
            </ul>
          </div>
        </div>