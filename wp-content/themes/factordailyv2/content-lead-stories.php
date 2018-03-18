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
		// Image size according to the loop
		if($i  == 1 ) {
			$img_size = 'lead3';
			$column = '';
		}elseif($i == 2){
			$img_size = 'lead3';
			//$column = 'col-md-7';		
		}elseif($i == 3){
			$img_size = 'lead3';
			$column = '';			
		}elseif($i == 4){
			$img_size = 'lead3';
			$column = '';			
		}elseif($i == 5){
			$img_size = 'lead3';
			$column = '';		
		}elseif($i == 6){
			$img_size = 'lead4_vertical';
			$column = '';		
		}
		//if(get_post_type() = 'post'
		?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?> >
	<?php
		$post_id = get_the_id();
		$post_attachment_id = get_post_meta($post_id, '_listing_image_id');
		// give padding-bottom according to the image ratio
		if(get_post_type() == 'post' || get_post_type() == 'fd_longforms' || get_post_type() == 'shorthand_story') {
			$imgdim = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), $img_size );
			$padding = ($imgdim[2] / $imgdim[1])*100 ;
		}else{
			$imgdim = wp_get_attachment_metadata( $post_attachment_id[0]);		
			$padding = ($imgdim['sizes']['lead3']['height'] / $imgdim['sizes']['lead3']['width'])*100 ;
		}
	?>
    <div class="cover-image">
        <picture class='<?php echo $column ?>' style=" padding-bottom:<?php echo $padding ?>%">
        <?php //print_r($imgdim); //print_r($imgdim[2]); ?>
	        <a href="<?php the_permalink(); ?>">
				<?php
					if(get_post_type() == 'post' || get_post_type() == 'fd_longforms' || get_post_type() == 'shorthand_story'){
                        if(has_post_thumbnail()){
						the_post_thumbnail($img_size);
                        }
					}else{
                        if(has_post_thumbnail()){
							
						$img_class = $img_size . ' wp-post-image';
						
						//	echo $img_size ;
						//wp_get_attachment_image( $attachment_id, $size, $icon, $attr );
						echo  wp_get_attachment_image($post_attachment_id[0], $img_size,'',array('class'=> $img_class));
                        }
					}
				?>
        	</a>
        </picture>
       
        <?php if($i == 1 || $i == 2 || $i == 3 ) { $main_story = 'main-story-head'; } else { $main_story = '';}?>
		<div class="cover-image-text <?php echo $main_story; ?>">
		<?php if($i == 1 || $i == 2 || $i == 3) {  ?>  
            <?php if(get_post_type() == 'fd_news') {
                    $catlink = 'News';
                    }elseif(get_post_type() == 'fd_opinion') {
                    $catlink = 'Opinion';
                    }else{
                    $catlink  = '';
                } ?>
			<span class="category-link "> <?php get_post_category() ; ?> </span>
            
			<div class="clear"></div>
	        <h1 class="entry-title">
	           <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
	        </h1>
	        <div class="entry-meta <?php echo $date_format; ?>">
				<span class="author-name vcard">
					<?php foreach( get_coauthors() as $coauthor ) : ?>
					    <?php echo get_avatar( $coauthor->user_email, '30' ); ?>
					<?php endforeach; ?>
					<?php if ( function_exists( 'coauthors_posts_links' ) ) {
					    coauthors_posts_links();
					} else {
					    the_author_posts_link();
					};?>
				</span>   
				<time class="entry-date" datetime=""> 
				<?php echo get_the_time('F j, Y') ?>
				</time>
			</div><!--entry meta-->
		<?php } else { ?>
		<div class="entry-meta">
			<span class="author-name vcard">
				<?php foreach( get_coauthors() as $coauthor ) : ?>
				    <?php echo get_avatar( $coauthor->user_email, '30' ); ?>
				<?php endforeach; ?>
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
		<span class="category-link ">
			<?php
				get_post_category();
			?>
        </span>  
        <time class="entry-date" datetime=""> 
			<?php echo get_the_time('F j, Y') ?>
		</time>
        <?php fd_sharing_buttons(); ?>  
       <?php } ?>
    </div><!--cover-image-text-->
    </div><!--cover-image-->
</article>
<?php if($i == 3) { ?> <div class="clearfix-mobile"></div> <?php } ?>
