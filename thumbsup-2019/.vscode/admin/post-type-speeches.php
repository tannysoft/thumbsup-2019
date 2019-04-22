<?php
function register_post_type_speeches_init() {
  $labels = array(
    'name' 					=> _x( 'Speeches','post type general name','pwd'),
    'singular_name' 		=> _x( 'Speeches','post type general name','pwd'),
    'add_new' 				=> __( 'Add New','pwd'),
    'add_new_item' 			=> __( 'Add New Speeches','pwd'),
    'edit_item' 			=> __( 'Edit Speeches','pwd'),
    'new_item' 				=> __( 'New Speeches','pwd'),
    'all_items' 			=> __( 'All Speeches','pwd'),
    'view_item' 			=> __( 'View Speeches','pwd'),
    'search_items' 			=> __( 'Search Speeches','pwd'),
    'not_found' 			=> __( 'No Speeches found','pwd'),
    'not_found_in_trash' 	=> __( 'No Speeches found in Trash', 'pwd'),
    'menu_name' 			=> __( 'speeches','pwd'),
  );
  $args = array(
    'labels' 				=> $labels,
    'public' 				=> true,
    'publicly_queryable' 	=> true,
    'show_ui' 				=> true, 
    'show_in_menu' 			=> true, 
    'query_var' 			=> true,
    'rewrite' 				=> array( 'slug' => 'speeches' ),
    'capability_type' 		=> 'page',
    'has_archive' 			=> true, 
    'hierarchical' 			=> true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-clipboard',
    'supports' 				=> array( 'title', 'editor', 'thumbnail', 'excerpt','page-attributes' )
  ); 
  register_post_type( 'speeches', $args );


}
add_action( 'init', 'register_post_type_speeches_init' );
?>