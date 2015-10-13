<?php
/**
 * Display a list of Event post type summaries.
 *
 * Included in template-current-events.php and template-recent-events.php
 *
 * @package ANAM
 */

  get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <article>
        <?php get_template_part( 'header', 'breadcrumb' ); ?>
      </article>

      <div class="entry-content">
        <?php the_content(); ?>

        <div class="event-list">
          <?php
            if ( $query->have_posts() ) :
              while ( $query->have_posts() ) :
                $query->the_post();
                get_template_part('content', 'event-summary');
			        endwhile;
            else :
              _e( 'Sorry, no events were found.', 'anam' );
            endif;
          ?>
        </div>
      </div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php wp_reset_query(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
