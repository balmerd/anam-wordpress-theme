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
      $post_id = get_the_ID();
      $anam_event_date = get_post_meta( $post_id, 'event_date', true);
      $anam_event_time = get_post_meta( $post_id, 'event_time', true);
      $anam_event_datetime = date("l, F j, Y", strtotime($anam_event_date)) . ' ' . $anam_event_time;

      // check if the post has a Post Thumbnail assigned to it.
      if ( has_post_thumbnail() ) {
	      the_post_thumbnail();
    } ?>

    <h2 class="event-date"><?php echo $anam_event_datetime ?></h2>

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
