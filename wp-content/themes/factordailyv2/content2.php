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

<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	<div class="hidden-xs" style="background:url(<?php the_post_thumbnail_url('large');?>) no-repeat center center; background-size:cover;">
	<img class="category-story-bg img-responsive visible-xs" src="<?php the_post_thumbnail_url('large');?>" style="position: relative;"/>
	    <!--Content-->
	    <div class="white-text text-xs-center">
	        <div class="card-block">
	            <header class="entry-header">
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
			        
			        <div class="entry-meta">
					      
			           <span class="tags-links">
			               <?php //the_tags(' | ');?>
			           </span>
			        
			           <span class="edit-link">
			              
			           </span>        
			      </div><!-- .entry-meta -->
			    </header><!-- .entry-header -->
			
			    <div class="entry-content">
			   <?php the_excerpt(); ?>
			   </div><!-- .entry-content -->
			   
				<span class="date">
				       <time class="entry-date" datetime="">
						<?php echo get_the_time('F j, Y') ?>
                        <?php if ( function_exists( 'get_field' ) ) { ?>
                        <?php if( get_field('read_time') ): ?>
                        <small class="category-page-time"> <?php the_field('read_time');?> min<?php endif; ?> </small>
                        <?php }; ?>
                    </time>
				</span>
			    
			    <footer class="entry-meta">
				    <?php fd_sharing_buttons(); ?>
			    </footer>
	        </div>
	    </div>
	</div>
	<div class="cover-image visible-xs">  
        <div class="cover-image-picture">
            <picture>    
				<!-- use this if necessary
				<source media="(max-width: 20em)" srcset="images/small/space-needle.jpg 1x,
				images/small/space-needle-2x.jpg 2x, images/small/space-needle-hd.jpg 3x">
				<source media="(max-width: 40em)" srcset="images/medium/space-needle.jpg 1x,
				images/medium/space-needle-2x.jpg 2x, images/medium/space-needle-hd.jpg 3x"> -->   
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
				</a>
            </picture>   
        </div>  
		<div class="cover-image-text">
	    	<div class="entry-meta">
		    	<span class="author-name vcard">
					<?php if ( function_exists( 'coauthors_posts_links' ) ) {
				    	coauthors_posts_links();
					} else {
				    	the_author_posts_link();
					};?>
				</span>
	    	</div>
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

        	<footer class="entry-meta">
				    <?php fd_sharing_buttons(); ?>
			    </footer>
     	</div><!--cover-image-text-->
   </div><!--cover-image-->
</article>
