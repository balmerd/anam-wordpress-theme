<?php
/**
 * Template Name: Current Events
 * 
 * Used to display a list of upcoming Event post types.
 *
 * When clicking on a single Event link, it will render 'single-event.php'.
 *
 * @package ANAM
 *
 * SEE: https://gist.github.com/aderaaij/6827478
 */

  $anamEvent = new ANAMEvent();

  $query = $anamEvent->getCurrentEvents();

  $no_events_msg = 'Sorry, no Current Events were found.';

  get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <article>
        <?php get_template_part( 'header', 'breadcrumb' ); ?>
      </article>

      <div class="entry-content">
        <style>
          .sharedaddy { display: none; } /* hide social sharing links that appear before event list */
        </style>
        <?php the_content(); ?>

        <?php if ( $query->have_posts() ) : ?>
          <div class="event-list">
			      <?php
              while ( $query->have_posts() ) :
                $query->the_post();
                get_template_part('event-summary');
			        endwhile;
            ?>
          </div>
        <?php else : ?>
          <div style="margin-bottom:1rem;">
            <?php echo $no_events_msg ?>
          </div>
        <?php endif;                
        wp_reset_query();
        ?>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>