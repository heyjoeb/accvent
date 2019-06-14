<?php get_header(); ?> 

	<section class="section-author my-5">
      <div class="container">
        <div class="row justify-content-center">

          <aside class="col-lg-4">
            <?php include("components/co-sidebar-user-info.php");?>
            <?php include("components/co-sidebar-forecast.php");?>
            <?php include("components/co-sidebar-featured-products.php");?>
          </aside>

          <div class="col-lg-8 posts-feed">
            <?php include("components/co-author-posts-feed.php");?>
          </div>
        </div><!--/.row -->
      </div><!--/.container -->
    </section><!--/.author -->
	

<?php get_footer();?>