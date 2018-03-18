<?php
/**
 * The main template file for pages
 *
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="code-of-conduct">
				<?php if ( have_posts() ) : ?>
		
					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php endif; ?>
		
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
					the_title('<h1 class="default-page-title">','</h1>'); // removed entry-title - animesh
					the_content();
		
					// End the loop.
					endwhile;
		
					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
						'next_text'          => __( 'Next page', 'twentyfifteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
					) );
		
				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'content', 'none' );
		
				endif;
				?>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
