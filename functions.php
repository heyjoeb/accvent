<?php
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
	  wp_enqueue_script( 'bundle', get_template_directory_uri() . '/js/bundle.js', array(), '1.0.0', true );
	  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'accvent_scripts' );

	// ADD FEATURED IMAGE TO POSTS
	add_theme_support( 'post-thumbnails' );

	// CUSTOM LOGIN
	function my_login_stylesheet() {
	    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/styles/login.css' );
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
			'position'		=> false,
			'icon_url'      => false,
			'redirect'		=> true
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Header',
			'menu_title'	=> 'header',
			'menu_slug' 	=> 'header',
			'capability'	=> 'edit_posts',
			'parent_slug'	=> 'modulos-generales',
			'position'		=> false,
			'icon_url'      => false
		));
		
		
	}

	








