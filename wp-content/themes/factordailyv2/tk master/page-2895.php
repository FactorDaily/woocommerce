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
<!-- Featured Article -->
<div class="row">
	<?php 
		
/*
		
    $content = query_posts( 'posts_per_page=1' );
		var_dump($content->'WP_Post');
*/


	query_posts( 'posts_per_page=50&offset=200' );
        // Il Loop
		while ( have_posts() ) : the_post();
			$examplePost = get_post();
			$word_count = str_word_count( strip_tags( apply_filters( 'the_content', $examplePost->post_content ) ) );
			
			$readtime = round($word_count/200);
			echo $readtime;
			echo '   ';

			update_post_meta($post->ID, 'read_time', $readtime);
		endwhile;
		
		// Reset Query
        wp_reset_query();

/*
	$examplePost = get_post();

	$word_count = str_word_count( strip_tags( apply_filters( 'the_content', $examplePost->post_content ) ) );
	echo $word_count;
*/
	?>

<?php get_footer(); ?>