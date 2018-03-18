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

<?php wp_reset_query(); while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', 'page' ); ?>
	<?php endwhile; // end of the loop. ?>
	

	<?php 

		$the_query = new WP_Query( array('posts_per_page' => -1, 'post_status' => 'publish') );
			$count = 0;
			while ( $the_query->have_posts() ) : $the_query->the_post();
				$word_count = str_word_count( strip_tags( apply_filters( 'the_content', $post->post_content ) ) );
				if($word_count > 3500){
					$count = $count + 1;
				}
			endwhile ;
			echo $count;
		?>

	
	
<?php get_footer(); ?>