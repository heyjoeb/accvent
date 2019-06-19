<?php
/*
 * Template Name: products
 */
?>
<?php get_header(); ?> 

  <section class="section-products my-5">
      <div class="container">
        <div class="row">
          <aside class="col-lg-4">
            <?php include("components/co-sidebar-forecast.php");?>
            <?php include("components/co-sidebar-user-info.php");?>
          </aside>

           <div class="col-lg-8 products-column">
      

                 <?php 
      $orderby = 'name';
$order = 'asc';
$hide_empty = true ;
$cat_args = array(
    'orderby'    => $orderby,
    'order'      => $order,
    'hide_empty' => $hide_empty,
);
 
$product_categories = get_terms( 'product_cat', $cat_args );
if( !empty($product_categories) ){
    echo '
 
<div class="row">';
    foreach ($product_categories as $key => $category) {

      $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true ); 

// get the image URL
$image = wp_get_attachment_url( $thumbnail_id );

      
        echo '
 
<div class="col-lg-4 text-center product-category">';
        echo '<a class="d-flex" href="'.get_term_link($category).'" >';
        echo "<img class='align-self-center' src='$image' />";
        echo "<p class='product-category-name align-self-end' />$category->name</p>";
        echo '</a>';
        echo '</div>';
    }
    echo '</div>
 
 
';
}
      ?>
                          
           
              
            </div><!--/.COL -->
    

        </div><!--/.row -->
      </div><!--/.container -->
    </section><!--/.section-products -->
  

<?php get_footer();?>