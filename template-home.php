<?php /*
	Template Name: Home
*/ ?>
<?php
/**
 * The template for displaying home page -- with custom sidebars.
 *
 * @package ANAM
 */   

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="home-widgets" class="content-area" role="complementary">
    <div class="left-side">
      <?php if ( is_active_sidebar( 'home-page-left-side-widgets' ) ) : ?>
    	  <?php dynamic_sidebar( 'home-page-left-side-widgets' ); ?>
      <?php endif; ?>
    </div>
    <div class="right-side">
      <?php if ( is_active_sidebar( 'home-page-right-side-widgets' ) ) : ?>
    	  <?php dynamic_sidebar( 'home-page-right-side-widgets' ); ?>
      <?php endif; ?>
    </div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
  