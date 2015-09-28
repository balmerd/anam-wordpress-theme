<?php
/**
 * The HOME header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ANAM
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'anam' ); ?></a>

  <div class="page-header">
    <?php if ( get_header_image() ) : ?>
	    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	      <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	    </a>
	  <?php endif; // End header image check. ?>
    <div id="main-nav">
      <?php wp_nav_menu( array('menu' => 'Main Menu' )); ?>
    </div>
    <form id="global-search" role="search" method="get" class="search-form" action="http://alamedanavalairmuseum.org/">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="search&hellip;" name="s" value="">
				</label>
				<input class="search-submit" value="Search" type="submit">
			</form>
  </div>

	<div id="content" class="site-content">
