<?php
/**
 * Template Name: NAS Units
 * 
 * Used to display the NAS Units page.
 *
 * When clicking on a single unit link, it will render 'single-nas-unit.php'.
 *
 * @package ANAM
 */

get_header(); ?>

	<section id="primary" class="content-area">
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
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
