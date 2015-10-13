<?php
/**
 * Enqueue scripts and styles.
 */

if ( ! function_exists( 'anam_js_and_css' ) ) :

  function anam_js_and_css() {
	  wp_enqueue_style( 'anam-style', get_stylesheet_uri() );

	  wp_enqueue_style( 'anam-custom', get_template_directory_uri() . '/custom.css', array(), '20150312', 'all' );

	  wp_enqueue_script( 'anam-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	  wp_enqueue_script( 'anam-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		  wp_enqueue_script( 'comment-reply' );
	  }
  }

  add_action( 'wp_enqueue_scripts', 'anam_js_and_css' );

endif;
?>
