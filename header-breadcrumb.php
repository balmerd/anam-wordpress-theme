<?php
/**
 * Customize the header and add breadcrumbs.
 *
 * @package ANAM
 */
?>

<header class="entry-header">
  <h1>
    <?php if ( get_post_type($post) == "memorial" ) : ?>
      <?php echo sprintf( __( 'In memory of %s', 'anam' ), get_the_title() ); ?>
    <?php elseif ( is_search() ) : ?>
      <?php _e( 'Search Results', 'anam' ); ?>
    <?php else : ?>
      <?php the_title(); ?>
    <?php endif; ?>

    <?php if ( function_exists('yoast_breadcrumb') ) : ?>
      <?php yoast_breadcrumb('<span id="breadcrumbs">','</span>'); ?>
    <?php endif; ?>
  </h1>
</header><!-- .entry-header -->
