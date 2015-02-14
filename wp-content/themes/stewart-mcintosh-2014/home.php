<?php get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<div id="trio" class="entry-content">

				<div>
					<?php query_posts( 'category_name=clarity' );

					while ( have_posts() ) : the_post();
					    echo '<h2 class="red">'; the_title(); echo '</h2>';

					    echo '<p>'; the_content(); echo '</p>';
					endwhile;

					wp_reset_query();
					?>
				</div>

				<div>
					<?php query_posts( 'category_name=brevity' );

					while ( have_posts() ) : the_post();
					    echo '<h2 class="red">'; the_title(); echo '</h2>';

					    echo '<p>'; the_content(); echo '</p>';
					endwhile;

					wp_reset_query();
					?>
				</div>

				<div>
					<?php query_posts( 'category_name=verity' );

					while ( have_posts() ) : the_post();
					    echo '<h2 class="red">'; the_title(); echo '</h2>';

					    echo '<p>'; the_content(); echo '</p>';
					endwhile;

					wp_reset_query();
					?>
				</div>

			</div>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_footer();
