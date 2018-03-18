<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<?php 
	$the_query = new WP_Query( array('tag' => 'makers', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC',  'post_status' => 'publish', 'post_type' => array('fd_opinion','fd_news','post')) );
	while ( $the_query->have_posts() ) : $the_query->the_post();	
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($cols); ?>>
<?php if(get_post_type() == 'fd_opinion'){  ?>
		<div class="opinion-wrap-lp">
			<span class="category-link "><?php echo get_post_category();?></span>
			<div class="opinion-text-area">
				<img class="block-quote-left" src="<?php echo get_stylesheet_directory_uri(); ?>/images/left-quote.svg"  />
				<div class="opinion-title">
					<h1 class="entry-title">
				        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				    </h1>				
			        <span class="author-name vcard">
			        <?php if ( function_exists( 'get_coauthors' ) ) { ?>
						<?php if ( function_exists( 'coauthors_posts_links' ) ) {
								coauthors_posts_links();
								} else {
								the_author_posts_link();
							};?>
			        <?php }; ?>
			        </span>
				</div>
			</div>
			<span class="date">
			        <time class="entry-date" datetime="">
						<?php echo get_the_time('F j, Y') ?>
	
			            <?php if ( function_exists( 'get_field' ) ) { ?>
			            <?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> 
			            <?php the_field('read_time');?>min<?php endif; ?>
			            <?php }; ?>
			       </time>
			</span>
		
			<footer class="entry-meta">
				<?php fd_sharing_buttons(); ?>
			</footer><!-- .entry-meta -->
		</div>
	<?php 	} else { ?>
	
	<header class="entry-header">
		<div class="entry-thumbnail">
			
			<?php 
				if(get_post_type() == 'fd_opinion'){
		        	echo get_avatar( get_the_author_meta( 'user_email' ), 300 );
				} else {
			?>
	            <picture>    
		            <a href="<?php the_permalink(); ?>">
		            <?php 
						$the_thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "lead3" );
						$thumbnail_src = $the_thumbnail_src[0];
						$check_thumb = strpos($thumbnail_src, '540x304'); 
						// if custom image size exist
						if( $check_thumb ):
							the_post_thumbnail('lead3');
						else:
							the_post_thumbnail('medium',array( 'class' => 'crop-image' )); // if not, use default thumbnail
						endif;	
					 ?> 
		            </a>
	            </picture> 
            <?php } ?>
			
		</div>
		
	</header><!-- .entry-header -->
	<div class="side-story-text-wrap">
		<div class="entry-meta">
		   <span class="author-name vcard">
		   <?php if ( function_exists( 'get_coauthors' ) ) { ?>
				<?php if ( function_exists( 'coauthors_posts_links' ) ) {
						coauthors_posts_links();
						} else {
						the_author_posts_link();
					};?>
		   <?php }; ?>
		   </span>    
		</div><!--entry meta-->
		<h1 class="entry-title">
		    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
	
		<div class="entry-content hidden-xs">
	   <?php the_excerpt(); ?>
	   </div><!-- .entry-content -->
 
		<span class="date">
		       <time class="entry-date" datetime="">
					<?php echo get_the_time('F j, Y') ?>

		            <?php if ( function_exists( 'get_field' ) ) { ?>
		            <?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> 
		            <?php the_field('read_time');?>min<?php endif; ?>
		            <?php }; ?>

		       </time>
		</span>
		<span class="category-link ">
			<?php get_post_category(); ?>
	        </span>			
		<footer class="entry-meta">
			<?php fd_sharing_buttons(); ?>
		</footer><!-- .entry-meta -->
	</div>
<?php  } ?>	  
</article>
<?php endwhile ;?>