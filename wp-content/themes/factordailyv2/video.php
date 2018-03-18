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
<article id="post-<?php the_ID(); ?>" <?php post_class($col_classes ); ?>>
	<div class="article-text-area">
	    <header class="entry-header">
	        <div class="entry-thumbnail">
                <div class="cover-image">  
                    <div class="cover-image-picture">
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
						<img class="pos-abs" src="wp-content/themes/factordailyv2/images/play.svg"/>
					<?php endif; ?>
		            </a>
	            </picture> 
		    </div>
		</div>
		</div>
		    
	        
	    </header><!-- .entry-header -->
	    
	    <div class="video-content-wrapper"> 
	        <span class="author-name vcard">
	        <?php if ( function_exists( 'get_coauthors' ) ) { ?>
				<?php if ( function_exists( 'coauthors_posts_links' ) ) {
					coauthors_posts_links();
				} else {
					the_author_posts_link();
				};?>
	        <?php }; ?>
	        </span>
			<h1 class="entry-title">
		        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<span class="category-link ">
				<?php
					get_post_category();
				?>
	        </span>
		        
			<div class="entry-meta">
		        <time class="entry-date" datetime=""> 
				   <?php echo get_the_time('F j, Y') ?>
		        </time>
	       	</div><!--entry meta--> 
	       	<footer class="entry-meta hidden-xs">
			    <?php fd_sharing_buttons(); ?>
		<!--
				<div class="social-media-icons">
		          <span><a href="https://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
		          <span><a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
		          <span><a href="https://mail.google.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></span>
		        </div>
		-->
		        <!-- Social Media Block -->
		    </footer><!-- .entry-meta -->
	    </div>

	    
	    
	</div>
</article>
