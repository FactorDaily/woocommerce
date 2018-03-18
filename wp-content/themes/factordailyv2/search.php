<?php
/**
 * The template for displaying search results pages.
 * version 1.0
 */

get_header(); ?>

			<style>
				picture a img {
					width: 100%;
					height: 100%;
				}
			</style>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: <b>%s</b>', 'factordailyv2' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
		if(have_posts()) :
			while ( have_posts() ) : the_post(); ?>

				<div class="row">
					<div class="card verticle-grid-rows">
						<div class="col-md-4 col-xs-4 img-section">
							
							<?php 
								if(get_post_type() == 'fd_opinion'){
						        	echo get_avatar( get_the_author_meta( 'user_email' ), 150 );
								} else {
							?>
								<picture>    
						            <!-- use this if necessary
						            <source media="(max-width: 20em)" srcset="images/small/space-needle.jpg 1x,
						            images/small/space-needle-2x.jpg 2x, images/small/space-needle-hd.jpg 3x">
						            <source media="(max-width: 40em)" srcset="images/medium/space-needle.jpg 1x,
						            images/medium/space-needle-2x.jpg 2x, images/medium/space-needle-hd.jpg 3x"> -->   
						            <a href="<?php the_permalink(); ?>">
						            <?php 
									if( get_post_type() == 'fd_news' ):
										$image_id = get_post_meta( get_the_ID(), '_listing_image_id', true );
										$the_thumbnail_src = wp_get_attachment_image_src( $image_id, "lead3" );
										$thumbnail_src = $the_thumbnail_src[0];
										echo wp_get_attachment_image($image_id,array('233','132'));
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
			else :
echo "<p class='no-search-result'>No posts found</p>";
			endif ;
		?>


	
<?php get_footer(); ?>
