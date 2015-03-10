<?php
/**
 * The template for displaying all pages
 */
get_header();
get_sidebar(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<header class="entry-header"> 
					<h1><?php the_title(); ?></h1>
				</header>			

				<div class="entry-content">
					
					<?php the_content(); ?>

					<div id="prev"><?php previous_post_link( '%link', 'Previous post', TRUE ); ?></div>

					<div id="next"><?php next_post_link( '%link', 'Next post', TRUE ); ?></div>
				</div>				
						
			<?php endwhile; else : ?>
				<p><?php_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>


		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_footer();
