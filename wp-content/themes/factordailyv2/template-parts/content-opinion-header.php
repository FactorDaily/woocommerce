<?php
/* The header part for opinion post type */

?>

	<div align="center">
		
	</div>
         <div class="row">
        	<div class="col-lg-8 col-sm-8 col-lg-offset-2 col-sm-offset-2"><hr /></div>
        </div>

    <div class="row vertical-align"> 
        <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 ">
	        <img src="<?php echo get_stylesheet_directory_uri();?>/images/left-quote.svg" title="<?php echo get_the_title(); ?>" class="img-left-blockquote">
	         <h2 class="single-story-title"><?php echo the_title(); ?></h2>
	    </div>
        <div class="col-md-2 col-lg-2 col-sm-2"> 
        <!-- 	get authors list	 -->
	
				<?php 
					if ( function_exists( 'get_coauthors' ) ) {
						$coauthors = get_coauthors();
						foreach ( $coauthors as $coauthor ) {
							$archive_link = get_author_posts_url( $coauthor->ID, $coauthor->user_nicename );
							$link_title =  $coauthor->display_name;
							
							if(count($coauthors) == 1) { $author_class = 'single-author';}else{ $author_class = '';}
				?>		

				                    <a href="<?php echo $archive_link ?>" class="author-link story-page-author-name" title="<?php echo esc_attr( $link_title ); ?>">
										<?php //echo esc_attr( $link_title ); ?>
                                        <?php echo get_avatar( get_the_author_meta( 'user_email' ), 150 ); ?>
				                    </a>

				<?php
						}
					// treat author output normally
					} else {
						$archive_link = get_author_posts_url( get_the_author_meta( 'ID' ) );
						$link_title =  the_author();
				?>
						<a class="author-link" href="<?php echo $archive_link ?>" title="<?php echo esc_attr( $link_title ); ?>"><?php echo get_avatar( get_the_author_meta( 'user_email' ), 45 ); ?> <?php //echo esc_attr( $link_title ); ?></a>
			  <?php } ?>        
        </div>
      </div>
 
        <div class="row">
        <div class="col-lg-8 col-sm-8 col-lg-offset-2 col-sm-offset-2 author-name text-center">
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
        <div class="single-story-sm-icons hidden-xs sharing-desktop"><?php fd_sharing_buttons(); ?></div>
        
        <div class="row">
        <div class="col-lg-8 col-sm-8 col-lg-offset-2 col-sm-offset-2 "><hr /></div>
        
        </div>
        <div class="row visible-xs">
        	<div id="anchor-point" class="single-story-sm-icons social-visibility"><?php fd_sharing_buttons(); ?></div>
      	</div>
 <!-- Enabled this on Prakriti's request on 3 May 2017 -->
          <?php 
			$post_id = get_the_id();
			$enable_image = get_post_meta($post_id,'_show_on_single_post'); 
			if($enable_image[0] == 'true'){
			?>
      		<?php if( get_field('mvp_video_embed')  ): ?>
			<div class="row">
			<iframe class="jumbotron myframe" src=<?php the_field('mvp_video_embed');?> frameborder="0" marginwidth="0" allowfullscreen></iframe>
			</div>
		<?php else : ?>
	<?php
		// give padding-bottom according to the image ratio
		$post_attachment_id = get_post_meta(get_the_id(), '_listing_image_id');
		$imgdim = wp_get_attachment_metadata( $post_attachment_id[0]);
		$imgtype = get_post_mime_type( $post_attachment_id[0]);
		if($imgtype == 'image/gif'){
			$imgsize = 'full';
		}else{
			$imgsize = 'medium';
		}

		if($imgdim['height']  == '' || $imgdim['width'] == '') {
			$padding = '';
		}else{
			$padding = ($imgdim['height'] / $imgdim['width'])*100 ;
		}

	?>
			<div class="row">
				<div class="story-main-image" style="padding-bottom:<?php echo $padding; ?>%">
                <?php 
				$post_attachment_id = get_post_meta($post_id, '_listing_image_id'); 
				echo  wp_get_attachment_image($post_attachment_id[0], $imgsize, '', array( 'class' => 'img-responsive' ));	
				?>
				</div>
			</div>
		<?php 
			endif;
			} // if show on single page is enabled
			?>          