<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>
<div class="container" style="top: 50px;position: relative;">
<div align="center">
	<h1 class="page-title">
		<?php the_title();?>
	</h1>
</div>
<!-- Latest Factors -->
<section>
		<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
			<?php wp_reset_query(); while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
			</div>
		</div>
</section>
</div>
<div class="clear break">
	
</div>
<?php get_footer(); ?>