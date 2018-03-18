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
<div class="row">

				<div class="jumbotron" style="background:url(<?php the_post_thumbnail_url('large');?>) no-repeat center center; background-size:cover">
							<div id="post-<?php the_ID(); ?>" class="category-future">
								<img src="http://placehold.it/1111x625" class="img-responsive">
								<div class="blurb">
									<div class="vertical-table">
										<div class="vertical-bottom">
											<h5 class="authorinfo">

											</h5>
										
											<h1 class="page-title">
												<?php the_title();?>
											</h1>
									
											
										</div>
									</div>
								</div>
							</div>
						</div>
</div>	
<!-- Latest Factors -->
<section class="row">
		<div class="container">
		<div class="row">
			<?php wp_reset_query(); while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
			</div>
		</div>
</section>

<?php get_footer(); ?>