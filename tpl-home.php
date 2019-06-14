<?php
/*
 * Template Name: home
 */
?>
<?php get_header(); ?> 

<section class="section-main-slider">
  <?php include("components/co-main-slider.php");?>
</section>

<section class="section-main my-5">
  <div class="container">
    <div class="row">
      <aside class="col-lg-4">
        <?php include("components/co-sidebar-forecast.php");?>
        <?php include("components/co-sidebar-user-info.php");?>
        <?php include("components/co-sidebar-featured-products.php");?>
      </aside>
      <div class="col-lg-8 posts-feed">
        <div class="row">
          <?php include("components/co-main-posts-feed.php");?>
        </div>
      </div>
    </div>
  </div>
</section>






<?php get_footer();?>
