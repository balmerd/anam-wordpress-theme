<?php
/**
 * @package ANAM
 */
?>

<header class="entry-header">
  <h1>
    <?php if ( get_post_type($post) == "memorial" ) : ?>
      In memory of <?php the_title(); ?>
    <?php elseif ( is_search() ) : ?>
      Search Results
    <?php else : ?>
      <?php the_title(); ?>
    <?php endif; ?>
    <?php if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb('<span id="breadcrumbs">','</span>');
    } ?>
  </h1>
</header><!-- .entry-header -->
