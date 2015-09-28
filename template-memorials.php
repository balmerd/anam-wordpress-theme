<?php
/**
 * Template Name: Memorials
 * 
 * Used to display the Memorials page, or a list of memorial post types having a specific tag.
 *
 * When clicking on a single Memorial link, it will render 'single-memorial.php'.
 *
 * @package ANAM
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <?php
        if ( get_query_var('tag') ) {
          $tag = get_query_var('tag');
          $tag = strtoupper(substr($tag, 0, 1));
          query_posts('post_type=memorial&tag=' . $tag . '&orderby=title&order=ASC&posts_per_page=-1' );
        }
      ?>

      <?php if ($tag) : // show Memorials having this tag ?>
        <article>
          <?php get_template_part( 'header', 'breadcrumb' ); ?>
        </article>
        
        <div class="entry-content">
          <?php get_template_part( 'navigation', 'memorial' ); ?>

          <?php if ( have_posts() ) : ?>
            <div class="memorial-list">
			        <?php while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
			        <?php endwhile; // end of the loop. ?>
            </div>
            <div class="clear:both;"></div>
          <?php else : ?>
            <div style="margin:1rem 0;">
              Sorry, no Memorials were found for last names starting with "<?php echo $tag; ?>".
            </div>
          <?php endif; ?>
        </div>
      <?php else : // show the Memorials page instead ?>

			  <?php while ( have_posts() ) : the_post(); ?>
	
  			  <?php get_template_part( 'content', 'page' ); ?>

				  <?php
					  // If comments are open or we have at least one comment, load up the comment template
					  if ( comments_open() || get_comments_number() ) :
					  	comments_template();
					  endif;
				  ?>
			  <?php endwhile; // end of the loop. ?>
      <?php endif; ?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
