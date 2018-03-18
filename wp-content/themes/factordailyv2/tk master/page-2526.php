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
<section id="authors" class="row text-center">
		<div class="container">
			<div class="page-header">
				<h3 class="text-center"><span>FactoryDaily <strong>Authors</strong></span></h3>
			</div>
<?php
	//list 5 latest contributors
	$authors =  array();
	$count = 0;
	$args=array(
	  'post_type' => 'post',
	  'post_status' => 'publish',
	  'posts_per_page' => -1
	);
	$my_query = null;
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
	  while ($my_query->have_posts()) : $my_query->the_post();
	    $author_id=$my_query->post->post_author;
	    $user = new WP_User( $author_id );
	    if ( !empty( $user->roles ) && is_array( $user->roles ) && in_array('admin',$user->roles) ) {
	      if (!in_array($author_id,$authors)) {
	      	echo '<a href="';
	      	echo get_author_posts_url( get_the_author_meta( "ID" ) );
	        echo '"><div class="col-xs-12 col-sm-4">';
	        echo '<div class="col-sm-12 author-card">';
	        echo get_avatar($author_id, 215);
	        echo '<h5>';
	        the_author($author_id);
	        echo '</h5>';
	        echo '</div>';
	        echo '</div>';
	        echo '</a>';
	        $authors[]=$author_id;
	      }
	    }
	  endwhile;
	}
	wp_reset_query();  // Restore global post data stomped by the_post().
	?>
<?php
	//list 5 latest contributors
	$authors =  array();
	$count = 0;
	$args=array(
	  'post_type' => 'post',
	  'post_status' => 'publish',
	  'posts_per_page' => -1
	);
	$my_query = null;
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
	  while ($my_query->have_posts()) : $my_query->the_post();
	    $author_id=$my_query->post->post_author;
	    $user = new WP_User( $author_id );
	    if ( !empty( $user->roles ) && is_array( $user->roles ) && in_array('author',$user->roles) ) {
	      if (!in_array($author_id,$authors)) {
	      	echo '<a href="';
	      	echo get_author_posts_url( get_the_author_meta( "ID" ) );
	        echo '"><div class="col-xs-12 col-sm-4">';
	        echo '<div class="col-sm-12 author-card">';
	        echo get_avatar($author_id, 215);
	        echo '<h5>';
	        the_author($author_id);
	        echo '</h5>';
	        echo '</div>';
	        echo '</div>';
	        echo '</a>';
	        $authors[]=$author_id;
	      }
	    }
	  endwhile;
	}
	wp_reset_query();  // Restore global post data stomped by the_post().
	?>
			<?php
	//list 5 latest contributors
	$authors =  array();
	$count = 0;
	$args=array(
	  'post_type' => 'post',
	  'post_status' => 'publish',
	  'posts_per_page' => -1
	);
	$my_query = null;
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
	  while ($my_query->have_posts()) : $my_query->the_post();
	    $author_id=$my_query->post->post_author;
	    $user = new WP_User( $author_id );
	    if ( !empty( $user->roles ) && is_array( $user->roles ) && in_array('contributor',$user->roles) ) {
	      if (!in_array($author_id,$authors)) {
	      	echo '<a href="';
	      	echo get_author_posts_url( get_the_author_meta( "ID" ) );
	        echo '"><div class="col-xs-12 col-sm-4">';
	        echo '<div class="col-sm-12 author-card">';
	        echo get_avatar($author_id, 215);
	        echo '<h5>';
	        the_author($author_id);
	        echo '</h5>';
	        echo '</div>';
	        echo '</div>';
	        echo '</a>';
	        $authors[]=$author_id;
	      }
	    }
	  endwhile;
	}
	wp_reset_query();  // Restore global post data stomped by the_post().
	?>
	</div>
</section>

<?php include('tell-your-story.php');?>

<?php get_footer(); ?>