<?php
/*
 * Template Name: generic
 */
?>
<?php get_header(); ?> 

<section class="section-main my-5 generic">
  <div class="container">
    <div class="row">
      <aside class="mt-5 mt-md-0 col-md-5 col-lg-4 order-last order-md-first">
        <?php include("components/co-sidebar-forecast.php");?>
        <?php include("components/co-sidebar-user-info.php");?>
        <?php include("components/co-sidebar-featured-products.php");?>
      </aside>
      <div class="col-md-7 col-lg-8 tools order-first order-md-last">
        <div class="tools__main-text">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>






<?php get_footer();?>
