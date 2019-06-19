<?php
?>
<?php get_header(); ?> 

<section class="section-main my-5">
  <div class="container">
    <div class="row">
      <aside class="col-lg-4">
        <?php include("components/co-sidebar-post-categories.php");?>
        <?php include("components/co-sidebar-forecast.php");?>
        <?php include("components/co-sidebar-user-info.php");?>
        <?php include("components/co-sidebar-featured-products.php");?>
      </aside>
      <div class="col-lg-8 posts-feed">
        <h2 class="pt-0 category-title"><?php echo single_cat_title(); ?></h2>
        <div class="row">
          <?php include("components/co-category-posts-feed.php");?>
        </div>
      </div>
    </div>
  </div>
</section>






<?php get_footer();?>
