<?php
/* The header part for  post type */

?>
        <div class="row">
        <div class="col-lg-6 col-sm-6 col-lg-offset-3 col-sm-offset-3 "><hr /></div>
        </div>
        <div class="row">
			<div class="col-lg-8 col-md-8 col-sm-6 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 text-center " > <h2 class="single-story-title"><?php echo the_title(); ?></h2></div>      
  	    </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 text-center "> 
			<?php 
					if ( function_exists( 'get_coauthors' ) ) {
						$coauthors = get_coauthors();
						foreach ( $coauthors as $coauthor ) {
							$archive_link = get_author_posts_url( $coauthor->ID, $coauthor->user_nicename );
							$link_title =  $coauthor->display_name;
							
							if(count($coauthors) == 1) { $author_class = 'single-author';}else{ $author_class = '';}
				?>		
				                    <a href="<?php echo $archive_link ?>" class="author-link story-page-author-name" title="<?php echo esc_attr( $link_title ); ?>">
										<?php echo esc_attr( $link_title ); ?>
				                    </a>
				<?php
							}
					// treat author output normally
					} else {
						$archive_link = get_author_posts_url( get_the_author_meta( 'ID' ) );
						$link_title =  the_author();
				?>
						<a class="author-link" href="<?php echo $archive_link ?>" title="<?php echo esc_attr( $link_title ); ?>"> <?php echo esc_attr( $link_title ); ?></a>
			  <?php } ?> 
              
               	<small class="story-page-date"><?php echo get_the_time('F j, Y') ?></small>   
				<?php if ( function_exists( 'get_field' ) ) { ?>
		        <?php if( get_field('read_time') ): ?>
		        <small class="story-page-time"> <?php the_field('read_time');?> min<?php endif; ?> </small>
		        <?php }; ?>     
       		 </div>
      </div>
      <div class="row visible-xs">
        <div id="anchor-point" class="single-story-sm-icons social-visibility"><?php fd_sharing_buttons(); ?></div>
      </div>
      <div class="row hidden-xs hidden-sm">
        <div  class="single-story-sm-icons sharing-desktop"><?php fd_sharing_buttons(); ?></div>
      </div>
          <div class="row"><div class="col-lg-6 col-sm-6 col-lg-offset-3 col-sm-offset-3 "><hr /></div></div> 
          
      		<?php if( get_field('mvp_video_embed')  ): ?>
			<div class="row">
			<iframe class=" myframe" src=<?php the_field('mvp_video_embed');?> frameborder="0" marginwidth="0" allowfullscreen></iframe>
			</div>
		<?php else : ?>
	<?php
		// give padding-bottom according to the image ratio
		$post_attachment_id = get_post_meta(get_the_id(), '_listing_image_id');
		if(get_post_type() == 'post') {
			$imgdim = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), $img_size );
			if(!$imgdim == '') {
				$padding = ($imgdim[2] / $imgdim[1])*100 ;
			}			
		}else{
			$imgdim = wp_get_attachment_metadata( $post_attachment_id[0]);
			if(!$imgdim == '') {
				$padding = ($imgdim['height'] / $imgdim['width'])*100 ;
			}
		}
	?>
			<div class="row">
				<div class="story-main-image" style="padding-bottom:<?php echo $padding; ?>%; height:auto;">
					<img  class="img-responsive" src="<?php the_post_thumbnail_url('full');?>"/>
				</div>
			</div>
		<?php endif; ?>    