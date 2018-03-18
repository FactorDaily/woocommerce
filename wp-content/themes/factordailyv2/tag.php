<?php
/**
 * The template for displaying tags.
 *
 * @package WordPress
 * @subpackage Factordaily V2
 * @since Factordaily V2 1.0
 */

get_header(); ?>

			<style>
				picture a img {
					width: 100%;
					height: 100%;
				}
			</style>
			<?php if($tag == 'fd-show-all-posts') { echo 'work in progress'; exit; /* do this later GTS */ }; ?>
			<header class="page-header">
				<h1 class="page-title"><strong>#<?php echo $tag; ?></strong> stories</h1>

			</header><!-- .page-header -->
			<?php
			// Start the loop.
			$tag = get_query_var('tag'); 
			$query = new WP_Query( 'posts_per_page=20&order=DESC&orderby=post_date&ignore_sticky_posts=1&tag='.$tag.'' ); 
			while ( $query->have_posts() ) : $query->the_post(); ?>

				<div class="row">
					<div class="card verticle-grid-rows">
						<div class="col-md-4 col-xs-4 img-section">
							
							<?php 
								if(get_post_type() == 'fd_opinion'){
						        	echo get_avatar( get_the_author_meta( 'user_email' ), 150 );
								} else {
							?>
								<picture>    
						            <a href="<?php the_permalink(); ?>">
						            <?php 
							            
									$the_thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "lead5" );
									$thumbnail_src = $the_thumbnail_src[0];
									$check_thumb = strpos($thumbnail_src, '233x132');
									// if custom image size exist
									if( $check_thumb ):
									the_post_thumbnail('thumbnail');
									else:
									the_post_thumbnail('thumbnail'); // if not, use default thumbnail
									endif;	
									 ?> 
						            </a>
								</picture> 
							<?php } ?> 
							  
						</div>
						<div class="col-md-8 col-xs-8">
							<div class="card-block">
								<span class="author-name vcard">
											<?php if ( function_exists( 'coauthors_posts_links' ) ) {
											    coauthors_posts_links();
											} else {
											    the_author_posts_link();
											};?>
								</span>
								<h4 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<div class="entry-content hidden-xs ">
									<?php the_excerpt(); ?>
								</div><!-- .entry-content -->
								<span class="category-link ">      
								
									<?php
										get_post_category();
									?>
								
						        </span>
								
						        
								<br>
						        <time class="entry-date" datetime=""> 
									<?php echo get_the_time('F j, Y') ?>
								</time>
								
							</div>
							<footer class="entry-meta hidden-xs">
								<?php fd_sharing_buttons(); ?>

	    					</footer><!-- .entry-meta -->
						</div>
						<footer class="entry-meta visible-xs col-xs-12">
							<?php fd_sharing_buttons(); ?>

    					</footer><!-- .entry-meta -->
						
						<div class="clearfix"></div>
					</div>
				</div>
				<br>	
						<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				

			// End the loop.
			endwhile;
			wp_reset_postdata();
		?>

        <?php

$tag = get_query_var('tag'); 
echo do_shortcode('[ajax_load_more repeater="template_3" order="DESC" orderby="post_date" offset="20" post_type="post" tag="'.$tag.'"]');
?>
	
<?php get_footer(); ?>
