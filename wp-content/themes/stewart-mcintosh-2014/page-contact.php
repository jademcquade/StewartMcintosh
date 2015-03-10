<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<header class="entry-header">
					<h1>Get in touch</h1>
				</header> 

				<div class="entry-content">

					<p><span class="red bold">T:</span> 0141 334 8475</p>

					<p><span class="red bold">M:</span> 07889 280 802</p>

					<p><span class="red bold">E:</span> stewart.mcintosh@btinternet.com</p>

						<h3>Or send us a message</h3>

						<form id="contact" action="http://localhost/stewart-mcintosh/wp-content/themes/stewart-mcintosh-2014/sendMail.php" method="POST">

							<input type="text" id="name" name="name" class="contact" placeholder="Enter your name" /><br/>

							<input type="text" id="subject" name="subject" class="contact" placeholder="Subject of message" /><br/>

							<input type="text" id="email" name="email" class="contact" placeholder="someone@example.com" /><br/>

							<textarea id="message" name="message" class="contact" placeholder="Say hello here"></textarea>

							<input type="submit" id="send" value="Send message" onclick="return validateForm()" />

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
