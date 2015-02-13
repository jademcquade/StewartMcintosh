<?php get_header(); ?>

<div id="content">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div id="sidebar">

		<div id="featuredImage">

			<!-- <img src="http://localhost/stewart-mcintosh/wp-content/themes/stewart-mcintosh/images/sidebar.jpg" alt="clyde image" /> -->
			<?php the_post_thumbnail(); ?> 	

		</div>

	</div>

	<div id="entry">
		<h1><?php the_title(); ?></h1>
	 	<?php the_content(); ?>

	 	<?php endwhile; else : ?>

	 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

	 	<?php endif; ?>	

	</div>

</div><!-- #main-content -->

<?php get_footer();