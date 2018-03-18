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
<?php //var_dump( get_intermediate_image_sizes() ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	<div class="cover-image">  
        <div class="cover-image-picture hidden-lg" align="center">
			<?php 
				if(get_post_type() == 'fd_opinion'){
		        	echo get_avatar( get_the_author_meta( 'user_email' ), 150 );
				} else {
			?>
            <picture>    
	            <a href="<?php the_permalink(); ?>">
		            <?php 
						$post_id = get_the_id();
						$post_attachment_id = get_post_meta($post_id, '_listing_image_id');
						$thumbnail_src = $the_thumbnail_src[0];
						$check_thumb = strpos($thumbnail_src, '233x132'); 
					?> 
					<?php
						if(get_post_type() == 'post'){
							the_post_thumbnail('lead5');
						}else{
							//$img_size = $img_size . ' wp-post-image';
							echo  wp_get_attachment_image($post_attachment_id[0], 'lead5','',array('class'=>'wp-post-image'));
						}
					?>
	            </a>
            </picture>
            <?php } ?>  
        </div>  
    <div class="cover-image-text">
	    
        <h1 class="entry-title">
           <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h1>
       <span class="author-name vcard">
			<?php if ( function_exists( 'coauthors_posts_links' ) ) {
			   echo get_the_author_meta('display_name');
			} else {
			   echo get_the_author_meta('display_name');
			};?>
		</span>    
       <div class="entry-meta">
        	<time class="entry-date" datetime=""> 
				<?php echo get_the_time('F j, Y') ?>
			</time>
       	</div><!--entry meta--> 
    </div><!--cover-image-text-->
    </div><!--cover-image-->

</article>

