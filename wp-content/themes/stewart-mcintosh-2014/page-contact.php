<?php
/*
Template Name: Contact Us
*/

get_header(); ?>

<?php get_sidebar(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<header class="entry-header">
					<h1 class="entry-title">Get in touch</h1>
				</header> 

				<div class="entry-content">

					<p><span>T:</span> 0141 334 8475</p>

					<p><span>M:</span> 07889 280 802</p>

					<p><span>E:</span> stewart.mcintosh@btinternet.com</p>

						<form action="submit.php" method="post">

					    <p>Your name: <input type="text" name="name" /></p>

					    <p>Your email: <input type="text" name="email" /></p>

					    <p class="antispam">Leave this empty: <input type="text" name="url" /></p>

					    <p><textarea name="message"></textarea></p>

					    <p><input type="submit" value="Send" /></p>

						</form>

				</div>
						
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
