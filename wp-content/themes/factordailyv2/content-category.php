<?php
/**
 * The default template for displaying category

 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="entry-thumbnail">
            <picture>    
	            <a href="<?php the_permalink(); ?>">
		            <?php 
						$the_thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "lead3" );
						$thumbnail_src = $the_thumbnail_src[0];
						$check_thumb = strpos($thumbnail_src, 'lead3'); 
						// if custom image size exist
						if( $check_thumb ):
							the_post_thumbnail('lead3');
						else:
							the_post_thumbnail('medium',array( 'class' => 'crop-image' )); // if not, use default thumbnail
						endif;	
					?> 
				</a>
            </picture> 
       </div>
       <!-- do you want to add a shadow here ^ animesh? -->
       <div class="entry-meta">
           <span class="author-name vcard">
           <?php if ( function_exists( 'get_coauthors' ) ) { ?>
 				<?php foreach( get_coauthors() as $coauthor ) : ?>
				<?php //echo get_avatar( $coauthor->user_email, '20' ); ?>
				<?php endforeach; ?>
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
			<span class="category-link ">
        		<?php
					get_post_category();
				?>

			</span><br>
			<span class="date">
               <a href="" title="" rel="bookmark">
                   <time class="entry-date" datetime="">
						<?php echo get_the_time('F j, Y') ?>
                        <?php if ( function_exists( 'get_field' ) ) { ?>
                        <?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> 
                        <?php the_field('read_time');?>min<?php endif; ?>
                        <?php }; ?>
                   </time>
               </a>
           </span>
          
      </div><!-- .entry-meta -->
    </header><!-- .entry-header -->
</article>
