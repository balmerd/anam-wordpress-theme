<?php
require get_template_directory() . '/anam-recent-events-widget.php';
require get_template_directory() . '/anam-current-events-widget.php';

/**
 * Create and register ANAM widgets.
 */
function anam_widgets_init() {
  
  // Register widget areas

  register_sidebar( array(
		'name'          => __( 'Widget Area', 'anam' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'anam' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Home Page Left Side Widgets', 'anam' ),
		'id'            => 'home-page-left-side-widgets',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Home Page Right Side Widgets', 'anam' ),
		'id'            => 'home-page-right-side-widgets',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

  // Register and load the widget(s)
  
  anam_create_recent_events_widget();
  anam_create_current_events_widget();
}

add_action( 'widgets_init', 'anam_widgets_init' );
?>
