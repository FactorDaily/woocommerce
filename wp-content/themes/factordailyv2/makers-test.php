<?php 
/* Template part for makers */

?>
<div class="makers-section horz-grid">
<?php 
	$the_query = new WP_Query( array('tag' => 'makers', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC',  'post_status' => 'publish', 'post_type' => array('fd_opinion','fd_news','post')) );
	while ( $the_query->have_posts() ) : $the_query->the_post();	
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
<?php 	endwhile; ?>
	<div style="clear: both;"></div>
	<div class="makers-bg visible-xs"></div>
	<div class="overlay-text-area">
		<p class="overlay-text-area-heading">FactorDaily Loves Makers</p>
		<p class="hidden-xs">Tracking all maker movements in India</p>
		<div class="read-story-contact-maker">
				<div class="read-story col-md-offset-2 col-md-2 col-xs-offset-0 col-xs-6">
					<a href="<?php home_url(); ?>/makers"> <!-- give the link here-->
					<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/makers-tools-readmore.svg" alt="read">
					<p>Read <b>Makers Stories</b></p>
					<p class="hidden-xs">India’s top makers, startups and their stories.</p>
					</a>
				</div>
			
				<div class="contact-maker col-md-offset-4 col-md-2 col-xs-offset-0 col-xs-6">
					<a href="<?php home_url(); ?>/makers">
						<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/makers-pen-contact.svg" alt="contact">
						<p>Makers <b>Contact</b></p>
						<p class="hidden-xs">Want us to feature your story? Fill up this simple form.</p>
					</a>
				</div>
 <!-- set up a popup contact form-->
			<div class="clearfix"></div>
		</div>
	</div>
</div>
