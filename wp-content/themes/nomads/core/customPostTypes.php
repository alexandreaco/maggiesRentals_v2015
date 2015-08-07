<?php

  // Apartment Custom Post Type
  function cpt_apartment_init() {
  $labels = array(
    'name'               => __( 'Apartments', 'nomads' ),
    'singular_name'      => __( 'Apartment', 'nomads' ),
    'menu_name'          => __( 'Apartments', 'nomads' ),
    'name_admin_bar'     => __( 'Apartment', 'nomads' ),
    'add_new'            => __( 'Add New', 'nomads' ),
    'add_new_item'       => __( 'Add New Apartment', 'nomads' ),
    'new_item'           => __( 'New Apartment', 'nomads' ),
    'edit_item'          => __( 'Edit Apartment', 'nomads' ),
    'view_item'          => __( 'View Apartment', 'nomads' ),
    'all_items'          => __( 'All Apartments', 'nomads' ),
    'search_items'       => __( 'Search Apartments', 'nomads' ),
    'parent_item_colon'  => __( 'Parent Apartments:', 'nomads' ),
    'not_found'          => __( 'No apartments found.', 'nomads' ),
    'not_found_in_trash' => __( 'No apartments found in Trash.', 'nomads' )
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'apartment' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 20,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'menu_icon'          => 'dashicons-building'
  );

  register_post_type( 'apartments', $args );
  }

  add_action( 'init', 'cpt_apartment_init' );

 ?>
