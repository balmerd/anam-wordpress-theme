<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ANAM
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( is_page('Home') ) : ?>
	  <header class="entry-header">
      <h1><?php bloginfo('description'); ?> </h1>
	  </header><!-- .entry-header -->
  <?php else : ?>
    <?php get_template_part( 'header', 'breadcrumb' ); ?>
  <?php endif; ?>

	<div class="entry-content">
    
    <?php if ( is_page( 'Memorials' )) {
      get_template_part( 'navigation', 'memorial' );
    }?>

		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'anam' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'anam' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
