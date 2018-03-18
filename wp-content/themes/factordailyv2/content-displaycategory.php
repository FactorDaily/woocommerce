<?php
/**
 * 
 //This page returns the posts under its page name category (Future, Culture etc) 
 */

 ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
    <header class="entry-header">
        <div class="entry-thumbnail">
<!--            <picture>    
//	            <a href="<?php the_permalink(); ?>">
//		            <?php 
//						$the_thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "lead3" );
//						$thumbnail_src = $the_thumbnail_src[0];
//						$check_thumb = strpos($thumbnail_src, 'lead3'); 
//						// if custom image size exist
//						if( $check_thumb ):
//							the_post_thumbnail('lead3');
//						else:
//							the_post_thumbnail('medium',array( 'class' => 'crop-image' )); // if not, use default thumbnail
//						endif;	
//					?> 
//				</a>
//            </picture> -->
        <picture class='<?php echo $column ?>'>
	        <a href="<?php the_permalink(); ?>">
				<?php
					if(get_post_type() == 'post'){
						the_post_thumbnail($img_size);
					}else{
						$img_size = $img_size . ' wp-post-image';
						echo  wp_get_attachment_image($post_attachment_id[0], $img_size);
					}
				?>
        	</a>
        </picture>
       </div>
    </header>
    <div class="article-text-area">
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
 	    <div class="entry-content hidden-xs">
	   <?php the_excerpt(); ?>
	   </div><!-- .entry-content -->       
        <div class="entry-meta">
			<span class="category-link ">
							<?php
								get_post_category();
							?>
			</span>
			<span class="date">
                <a href="" title="" rel="bookmark">
                    <time class="entry-date" datetime="">
						<?php echo get_the_time('F j, Y') ?>
                        <?php if ( function_exists( 'get_field' ) ) { ?>
                        <?php if( get_field('read_time') ): ?>
                        <small class="category-page-time"> <?php the_field('read_time');?> min<?php endif; ?> </small>
                        <?php }; ?>
                    </time>
                </a>
            </span>         
        </div><!-- .entry-meta -->
        <footer class="entry-meta ">
		    <?php fd_sharing_buttons(); ?>
	    </footer><!-- .entry-meta -->
    </div><!-- .entry-header -->
</article>


