<?php
/*
Template Name: News Page
*/
get_header();
get_sidebar(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* Hide query to output posts until Stewart has created them

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<header class="entry-header">
					<h1><?php the_title(); ?></h1>
				</header> 

			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			<?php wp_reset_query(); ?>

			<?php query_posts('category_name=News');

				while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );					

				endwhile;
				twentyfourteen_paging_nav();

			?>
			*/ ?>

			<header class="entry-header">
				<h1><?php the_title(); ?></h1>
			</header> 

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