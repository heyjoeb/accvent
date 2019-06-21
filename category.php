<?php
?>
<?php get_header(); ?> 

<section class="section-main my-5">
  <div class="container">
    <div class="row">
      <aside class="mt-5 mt-md-0 col-md-5 col-lg-4 order-last order-md-first">
        <?php include("components/co-sidebar-post-categories.php");?>
        <?php include("components/co-sidebar-forecast.php");?>
        <?php include("components/co-sidebar-user-info.php");?>
        <?php include("components/co-sidebar-featured-products.php");?>
      </aside>
      <div class="col-md-7 col-lg-8 posts-feed order-first order-md-last">
        <h2 class="pt-0 category-title"><?php echo single_cat_title(); ?></h2>
        <div class="row">
          <?php include("components/co-category-posts-feed.php");?>
        </div>
      </div>
    </div>
  </div>
</section>






<?php get_footer();?>
