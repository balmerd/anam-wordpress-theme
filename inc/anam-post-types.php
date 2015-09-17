<?php
/**
 * Add "Event", "Memorial", and NAS Unit" post types.
 *
 * @package ANAM
 */

if ( ! function_exists( 'anam_create_event_post_type' ) ) :
  /**
   * Define "Event" custom post type.
   */ 
  function anam_create_event_post_type() {

	  $labels = array(
		  'name'                => 'Events',
		  'singular_name'       => 'Event',
		  'menu_name'           => 'Events',
		  'parent_item_colon'   => 'Parent Item:',
		  'all_items'           => 'All Events',
		  'view_item'           => 'View Event',
		  'add_new_item'        => 'Add New Event',
		  'add_new'             => 'Add New',
		  'edit_item'           => 'Edit Event',
		  'update_item'         => 'Update Event',
		  'search_items'        => 'Search Events',
		  'not_found'           => 'Not found',
		  'not_found_in_trash'  => 'Not found in Trash',
	  );

	  $capabilities = array(
		  'edit_post'           => 'edit_post',
		  'read_post'           => 'read_post',
		  'delete_post'         => 'delete_post',
		  'edit_posts'          => 'edit_posts',
		  'edit_others_posts'   => 'edit_others_posts',
		  'publish_posts'       => 'publish_posts',
		  'read_private_posts'  => 'read_private_posts',
	  );

	  $args = array(
		  'labels'              => $labels,
		  'supports'            => array( 'title', 'editor', 'thumbnail', 'comments', ),
		  'hierarchical'        => false,
		  'public'              => true,
		  'show_ui'             => true,
		  'show_in_menu'        => true,
		  'show_in_nav_menus'   => true,
		  'show_in_admin_bar'   => true,
		  'menu_position'       => 5, /* "Below Posts" SEE: http://generatewp.com/post-type */
      'capability_type'     => 'post',
      'map_meta_cap'        => true, /* REQUIRED: otherwise you get "cannot edit this post" */
		  'can_export'          => true,
		  'has_archive'         => true,
		  'exclude_from_search' => false,
		  'publicly_queryable'  => true,
      'capabilities'        => $capabilities,
      'taxonomies'          => array('post_tag'), /* so we can add tags to this custom post type */
	  );

	  register_post_type( 'event', $args );
  }
endif; // anam_create_event_post_type

if ( ! function_exists( 'anam_create_memorial_post_type' ) ) :
  /**
   * Define "Memorial" custom post type.
   */ 
  function anam_create_memorial_post_type() {

	  $labels = array(
		  'name'                => 'Memorials',
		  'singular_name'       => 'Memorial',
		  'menu_name'           => 'Memorials',
		  'parent_item_colon'   => 'Parent Item:',
		  'all_items'           => 'All Memorials',
		  'view_item'           => 'View Memorial',
		  'add_new_item'        => 'Add New Memorial',
		  'add_new'             => 'Add New',
		  'edit_item'           => 'Edit Memorial',
		  'update_item'         => 'Update Memorial',
		  'search_items'        => 'Search Memorials',
		  'not_found'           => 'Not found',
		  'not_found_in_trash'  => 'Not found in Trash',
	  );

	  $capabilities = array(
		  'edit_post'           => 'edit_post',
		  'read_post'           => 'read_post',
		  'delete_post'         => 'delete_post',
		  'edit_posts'          => 'edit_posts',
		  'edit_others_posts'   => 'edit_others_posts',
		  'publish_posts'       => 'publish_posts',
		  'read_private_posts'  => 'read_private_posts',
	  );

	  $args = array(
		  'labels'              => $labels,
		  'supports'            => array( 'title', 'editor', 'thumbnail', 'comments', ),
		  'hierarchical'        => false,
		  'public'              => true,
		  'show_ui'             => true,
		  'show_in_menu'        => true,
		  'show_in_nav_menus'   => true,
		  'show_in_admin_bar'   => true,
		  'menu_position'       => 5, /* "Below Posts" SEE: http://generatewp.com/post-type */
      'capability_type'     => 'post',
      'map_meta_cap'        => true, /* REQUIRED: otherwise you get "cannot edit this post" */
		  'can_export'          => true,
		  'has_archive'         => true,
		  'exclude_from_search' => false,
		  'publicly_queryable'  => true,
      'capabilities'        => $capabilities,
      'taxonomies'          => array('post_tag'), /* so we can add tags to this custom post type */
	  );

	  register_post_type( 'memorial', $args );
  }
endif; // anam_create_memorial_post_type

if ( ! function_exists( 'anam_create_nas_unit_post_type' ) ) :
  /**
   * Define "NAS Unit" custom post type.
   */ 
  function anam_create_nas_unit_post_type() {

	  $labels = array(
		  'name'                => 'NAS Units',
		  'singular_name'       => 'NAS Unit',
		  'menu_name'           => 'NAS Units',
		  'parent_item_colon'   => 'Parent Item:',
		  'all_items'           => 'All Units',
		  'view_item'           => 'View Unit',
		  'add_new_item'        => 'Add New Unit',
		  'add_new'             => 'Add New',
		  'edit_item'           => 'Edit Unit',
		  'update_item'         => 'Update Unit',
		  'search_items'        => 'Search Units',
		  'not_found'           => 'Not found',
		  'not_found_in_trash'  => 'Not found in Trash',
	  );

	  $capabilities = array(
		  'edit_post'           => 'edit_post',
		  'read_post'           => 'read_post',
		  'delete_post'         => 'delete_post',
		  'edit_posts'          => 'edit_posts',
		  'edit_others_posts'   => 'edit_others_posts',
		  'publish_posts'       => 'publish_posts',
		  'read_private_posts'  => 'read_private_posts',
	  );

	  $args = array(
		  'labels'              => $labels,
		  'supports'            => array( 'title', 'editor', 'thumbnail', 'comments', ),
		  'hierarchical'        => false,
		  'public'              => true,
		  'show_ui'             => true,
		  'show_in_menu'        => true,
		  'show_in_nav_menus'   => true,
		  'show_in_admin_bar'   => true,
		  'menu_position'       => 5, /* "Below Posts" SEE: http://generatewp.com/post-type */
      'capability_type'     => 'post',
      'map_meta_cap'        => true, /* REQUIRED: otherwise you get "cannot edit this post" */
		  'can_export'          => true,
		  'has_archive'         => true,
		  'exclude_from_search' => false,
		  'publicly_queryable'  => true,
      'capabilities'        => $capabilities,
      'taxonomies'          => array('post_tag'), /* so we can add tags to this custom post type */
	  );

	  register_post_type( 'nas-unit', $args );
  }
endif; // anam_create_nas_unit_post_type

add_action( 'init', 'anam_create_event_post_type', 0 );
add_action( 'init', 'anam_create_memorial_post_type', 0 );
add_action( 'init', 'anam_create_nas_unit_post_type', 0 );
?>
