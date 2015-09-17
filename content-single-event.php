<?php
/**
 * The template for displaying the content of a single Event post.
 *
 * @package ANAM
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php get_template_part( 'header', 'breadcrumb' ); ?>

	<div class="entry-content">
    <?php
      // check if the post has a Post Thumbnail assigned to it.
      if ( has_post_thumbnail() ) {
	      the_post_thumbnail();
    } ?>

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
