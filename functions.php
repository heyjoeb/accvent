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
	wp_enqueue_style( 'accvent-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,700', false ); 
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
		
		
	}

	








