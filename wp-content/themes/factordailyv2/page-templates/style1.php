<?php
/**
 * Template Name: Style 1
 To display a better version of a page
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			get_template_part( 'content-style1', get_post_format() );
		endwhile;
		?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
