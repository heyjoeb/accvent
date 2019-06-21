<?php get_header(); ?> 

	<section class="section-author my-5">
      <div class="container">
        <div class="row justify-content-center">

          <aside class="mt-5 mt-md-0 col-md-5 col-lg-4 order-last order-md-first">
            <?php include("components/co-sidebar-user-info.php");?>
            <?php include("components/co-sidebar-forecast.php");?>
            <?php include("components/co-sidebar-featured-products.php");?>
          </aside>

          <div class="col-md-7 col-lg-8 posts-feed order-first order-md-last">
            <?php include("components/co-author-posts-feed.php");?>
          </div>
        </div><!--/.row -->
      </div><!--/.container -->
    </section><!--/.author -->
	

<?php get_footer();?>