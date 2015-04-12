<?php
/*
 *	Functions : Nomads Base Theme
 */

	add_theme_support( 'title-tag' );

	// add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails', array( 'post','nomads_apartment' ) );
	set_post_thumbnail_size( 825, 510, true );



	/************************************************
	 *												*
	 *			 Add Navigation Areas				*
	 *												*
	 *	_ primary 									*
	 *	_ seconday 									*
	 *												*
	 ************************************************/

	register_nav_menus( array(
		'primary' 	=> __( 'Primary Menu', 'nomads' ),
		'secondary' => __( 'Secondary Menu', 'nomads' ),
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );



	/************************************************
	 *												*
	 *			 Add Custom Post Types 				*
	 *												*
	 *	_ Apartments 								*
	 *												*
	 ************************************************/

	function nomads_init_apartment() {
	  register_post_type( 'nomads_apartment',
	    array(
	      'labels' => array(
	        'name' 				=> __( 'Apartments' ),
	        'singular_name' 	=> __( 'Apartment' ),
	        'menu_name' 		=> __( 'Apartments' ),
	        'name_admin_bar' 	=> __( 'All Apartments' ),
	        'add_new' 			=> __( 'Add New Apartment' ),
	        'edit_item'		 	=> __( 'Edit Apartment' ),
	        'new_item'			=> __( 'Add New Apartment' ),
	        'view_item'			=> __( 'View Apartment' ),
	        'search_item'		=> __( 'Search Apartments' ),
	        'not_found'			=> __( 'No Apartments Found' )
	      ),
	      'public' => true,
	      'has_archive' => true,
	      'menu_icon'  => 'dashicons-location',
	      'supports' => array( 'title', 'editor', 'thumbnail' )
	    )
	  );
	}
	add_action( 'init', 'nomads_init_apartment' );



	/************************************************
	 *												*
	 *			 Add Custom Taxonomies 				*
	 *												*
	 *	_ Properties 								*
	 *												*
	 ************************************************/
	
	function nomads_init_property() {
		register_taxonomy(
			'property',	
			'nomads_apartment',
			array(
				'labels' => array(
					'name' 				=> __( 'Properties' ),
					'singular_name' 	=> __( 'Property' ),
					'menu_name'			=> __( 'Properties' ),
					'add_new_item' 		=> __( 'Add New Property' )
				),
				'rewrite' => array( 'slug' => 'property' ),
				'hierarchical' => true
			)
		);
	}
	add_action( 'init', 'nomads_init_property' );



	/************************************************
	 *												*
	 *			Enqueue Styles & Scripts 			*
	 *												*
	 *	_ Isotope									*
	 *	_ Bootstrap									*
	 *	_ Google Web Starter Kit					*
	 *												*
	 ************************************************/

	function nomads_theme() {
		wp_enqueue_script( 'nomads_script_isotope', get_template_directory_uri() . '/vendor/isotope.kpgd.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'nomads_script_bootstrap', get_template_directory_uri() . '/app/scripts/script.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'nomads_script', get_template_directory_uri() . '/app/scripts/script.js', array(), '1.0.0', true );	

		wp_enqueue_style( 'nomads_style_components', get_template_directory_uri() . '/dist/styles/components.css' );	
		wp_enqueue_style( 'nomads_style_bootstrap', get_template_directory_uri() . '/dist/styles/bootstrap.css' );	
		wp_enqueue_style( 'nomads_style_main', get_template_directory_uri() . '/dist/styles/main.css' );	
		wp_enqueue_style( 'nomads_style', get_template_directory_uri() . '/style.css' );	
	}
	add_action( 'wp_enqueue_scripts', 'nomads_theme' );

	
 ?>