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

<article id="post-<?php the_ID(); ?>" <?php post_class($col_classes); ?>>
	<div class="article-text-area">
	    <header class="entry-header">
	        <div class="entry-thumbnail">
		    <?php 
				if(get_post_type() == 'fd_opinion'){
					if(is_home()) {
						?>
<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/left-quote.svg" title="<?php the_title(); ?>" class="img-left-blockquote" style="margin-bottom:20px;opacity: 0.3;">
					<?php
					}else{
				   	echo get_avatar( get_the_author_meta( 'user_email' ), 150 );
					}
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
							the_post_thumbnail('lead5');
						else:
							the_post_thumbnail('thumbnail',array( 'class' => 'crop-image' )); // if not, use default thumbnail
						endif;	
					?> 
					<?php if( get_field('mvp_video_embed') ): ?>
						<img class="pos-abs" src="<?php echo home_url();?>/wp-content/themes/factordailyv2/images/play.svg"/>
					<?php endif; ?>
		            </a>
	            </picture> 
            <?php } ?>
	            
	       </div>	    
	    </header><!-- .entry-header -->
	    <div class="cover-image-text">
			<div class="entry-meta">
		   		<span class="author-name vcard">
					<?php if ( function_exists( 'coauthors_posts_links' ) ) {
					    coauthors_posts_links();
					} else {
					    the_author_posts_link();
					};?>
				</span>
	        </div><!--entry meta-->
	        <h1 class="entry-title">
	            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
	        </h1>
		    <div class="entry-content hidden-xs ">
		    <?php the_excerpt(); ?>
		    </div><!-- .entry-content -->
		   
			<span class="date">
			       <time class="entry-date" datetime="">
						<?php echo get_the_time('F j, Y') ?>
			       </time>
			</span>
		  	<span class="category-link ">
				<?php get_post_category(); ?>
	       		</span>		  
		    <footer class="entry-meta">
			    <?php fd_sharing_buttons(); ?>
		        <!-- Social Media Block -->
		    </footer><!-- .entry-meta -->
	    </div>
	</div>
</article>
