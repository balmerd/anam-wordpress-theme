<?php
/**
 * The template for displaying the content of a single Memorial post.
 *
 * @package ANAM
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php get_template_part( 'header', 'breadcrumb' ); ?>

	<div class="entry-content">
    <?php get_template_part( 'navigation', 'memorial' ); ?>

		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'anam' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php anam_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
