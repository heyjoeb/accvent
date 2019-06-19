<?php
/* ADD MEESAGE ABOVE LOGIN FORM */
function wpsd_add_login_message() {
  return '<div class="intro-container"><h1 class="intro-title">Welcome to the ACCVENT Business Center</h1><p class="intro-message">Accvent vision is to broaden its scope to encompass a significant share of the fast growing technology industry on a global scale, with distribution channels in the USA, Latin America, the Caribbean and recently, in South Africa. Using experience, tradition and expertise in this highly diversified field of technology,Accvent is consistently lending its assistance to improve coordination among its strategic business units - now under the umbrella of a holding company - in order to achieve each brand’s corporate goals and to continue the expansion of their operations worldwide.</p><p class="intro-copyright">Copyright © ACCVENT 2019</p></div>';
}
add_filter('login_message', 'wpsd_add_login_message');

// REGISTER CUTOM NAVIAGTION WALKER
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

	// REGISTER PRIMARY NAVIGATION
	register_nav_menus( array(
	    'primary' => __( 'Primary Menu', 'accventTheme' )
	) );

	// ADD FONTS
	function accvent_google_fonts() {
	wp_enqueue_style( 'accvent-google-fonts', 'https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600', false ); 
	}
	add_action( 'wp_enqueue_scripts', 'accvent_google_fonts' );

	// ADD SCRIPTS AND STYLES
	function accvent_scripts() {
	  wp_enqueue_style( 'main', get_stylesheet_uri() );
	  wp_enqueue_script( 'bundle', get_template_directory_uri() . '/js/build.min.js', array(), '1.0.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'accvent_scripts' );

	// ADD FEATURED IMAGE TO POSTS
	add_theme_support( 'post-thumbnails' );

	// CUSTOM LOGIN
	function my_login_stylesheet() {
	    wp_enqueue_style( 'custom-login', get_template_directory_uri() . './login.css' );
	}
	add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

  // REMOVE SOME FIELDS FROM USER ADMIN
  function my_admin_head() {
        echo '<link href="'.get_stylesheet_directory_uri().'/user-admin.css" rel="stylesheet" type="text/css">';
  }
  add_action('admin_head', 'my_admin_head');

	// ADD CLASS TO BODY IF IT'S NOT HOME
	function my_class_names($classes) {
		// add 'class-name' to the $classes array
		if( !is_front_page() ) $classes[] = 'interna';
		// return the $classes array
		return $classes;
	}
	add_filter('body_class','my_class_names');

	// ENABLE OPTIONS PAGE IN ACF
	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Módulos Generales',
			'menu_title'	=> 'Módulos',
			'menu_slug' 	=> 'modulos-generales',
			'capability'	=> 'edit_posts',
			'redirect'		=> false,
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Header',
			'menu_title'	=> 'header',
			'menu_slug' 	=> 'header',
			'capability'	=> 'edit_posts',
			'parent_slug'	=> 'modulos-generales',
		));

    acf_add_options_sub_page(array(
      'page_title'  => 'Slider',
      'menu_title'  => 'slider',
      'menu_slug'   => 'slider',
      'capability'  => 'edit_posts',
      'parent_slug' => 'modulos-generales',
    ));
		
		
	}

  // WORDPRESS 4 PAGINATION
/**
 * @param WP_Query|null $wp_query
 * @param bool $echo
 *
 * @return string
 * Accepts a WP_Query instance to build pagination (for custom wp_query()), 
 * or nothing to use the current global $wp_query (eg: taxonomy term page)
 * - Tested on WP 4.9.5
 * - Tested with Bootstrap 4.1
 * - Tested on Sage 9
 *
 * USAGE:
 *     <?php echo bootstrap_pagination(); ?> //uses global $wp_query
 * or with custom WP_Query():
 *     <?php 
 *      $query = new \WP_Query($args);
 *       ... while(have_posts()), $query->posts stuff ...
 *       echo bootstrap_pagination($query);
 *     ?>
 */
function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true ) {
  if ( null === $wp_query ) {
    global $wp_query;
  }
  $pages = paginate_links( [
      'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
      'format'       => '?paged=%#%',
      'current'      => max( 1, get_query_var( 'paged' ) ),
      'total'        => $wp_query->max_num_pages,
      'type'         => 'array',
      'show_all'     => false,
      'end_size'     => 3,
      'mid_size'     => 1,
      'prev_next'    => true,
      'prev_text'    => __( '« Prev' ),
      'next_text'    => __( 'Next »' ),
      'add_args'     => false,
      'add_fragment' => ''
    ]
  );
  if ( is_array( $pages ) ) {
    //$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
    $pagination = '<div class="pagination justify-content-center mt-2 mb-5"><ul class="pagination">';
    foreach ( $pages as $page ) {
      $pagination .= '<li class="page-item '.(strpos($page, 'current') !== false ? 'active' : '').'"> ' . str_replace( 'page-numbers', 'page-link', $page ) . '</li>';
    }
    $pagination .= '</ul></div>';
    if ( $echo ) {
      echo $pagination;
    } else {
      return $pagination;
    }
  }
  return null;
}

// REDIRECT ALL USERS NOT AUTHENTICATED
function loggedin_users_only() {
  global $pagenow;
  //check if the current page is not the wp-logon.php page
  //check if the current user is logged in
  if(!is_user_logged_in() && $pagenow != 'wp-login.php') {
    auth_redirect();
  }
}

//use the wp hook to load this function on every page load
add_action( 'wp', 'loggedin_users_only' );

// EXCERPT LENGTH
function new_excerpt_length($length) {
return 21;
}
add_filter('excerpt_length', 'new_excerpt_length');

// ADD INSTRUCTION TO FEATURED IMAGE BOX
add_filter( 'admin_post_thumbnail_html', 'add_featured_image_html');

function add_featured_image_html( $html ) {

    return $html .= '<p>Tamaño: 760px ancho X 440px alto.</p>';

}

// DISPLAY SKU
add_action( 'woocommerce_single_product_summary', 'dev_designs_show_sku', 5 );
function dev_designs_show_sku(){
    global $product;
    echo 'SKU: ' . $product->get_sku();
}


// DECLARE WOOCOMMERCE SUPPORT IN THEME
function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

	








