<?php
/*
Template Name: Our Awards
*/
get_header();
get_sidebar(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="entry-header">
				<h1>Our Awards</h1>
			</header>

			<?php /* Hide query to output posts until Stewart has created them
			<?php
				query_posts('category_name=Awards');
					while ( have_posts() ) : the_post();
				
						get_template_part( 'content', get_post_format() );

					endwhile;
					twentyfourteen_paging_nav();
			?>

			*/ ?>

				<?php // temporary loop till Stewart has created posts ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

				<?php endwhile; else : ?>

				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php endif; ?> 

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();