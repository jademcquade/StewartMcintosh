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
					<h1>Services</h1>
				</header>			

				<div class="entry-content">
					<?php
						the_content();
						previous_post_link( '%link', 'Previous post', TRUE );
						next_post_link( '%link', 'Next post', TRUE );
					?>
				</div>				
						
			<?php endwhile; else : ?>
				<p><?php_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>


		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_footer();
