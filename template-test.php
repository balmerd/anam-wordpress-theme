<?php /*
	Template Name: Test
*/ ?>
<?php
/**
 * The template for displaying home page -- with custom sidebars.
 *
 * @package ANAM
 */   

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <h1>primary->main here</h1>
		</main><!-- #main -->
	</section><!-- #primary -->

	<section id="home-widgets" class="content-area" role="complementary">
    <div class="left-side">left</div>
    <div class="right-side">
      <?php if ( is_active_sidebar( 'home-page-widgets' ) ) : ?>
    	  <?php dynamic_sidebar( 'home-page-widgets' ); ?>
      <?php endif; ?>
    </div>
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
  