<?php
/*
 * Template Name: generic
 */
?>
<?php get_header(); ?> 

<section class="section-main my-5 generic">
  <div class="container">
    <div class="row">
      <aside class="col-lg-4">
        <?php include("components/co-sidebar-forecast.php");?>
        <?php include("components/co-sidebar-user-info.php");?>
        <?php include("components/co-sidebar-featured-products.php");?>
      </aside>
      <div class="col-lg-8 tools">
        <div class="tools__main-text">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>






<?php get_footer();?>
