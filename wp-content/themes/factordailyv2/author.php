<?php
/**
 * The template for Author and their stories.

 */

get_header(); ?>


<?php
	$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

	//Co author plus is messing up the post count. It brings only post type count. Disabling for now
			$user_post_count = count_user_posts( $curauth->ID , 'post' );	
		//	$user_news_count = count_user_posts( $curauth->ID , 'fd_news' );
		//	$user_opinion_count = count_user_posts( $curauth->ID , 'fd_opinion' );
	// variables
	if($curauth->ethics){ 
	$auth_class = 'col-md-12';
	$auth_hide_class = '';
	 }else {
	$auth_class = 'col-md-12';	
	$auth_hide_class = 'hidden-xl-down';	 
	 };
?>
		<?php 
			// Here is a dumb, slow way to get the total post count. :)

			$count_args = array( 
			'author' => $curauth->ID,
			'order' => 'DESC',
			'posts_per_page' => '-1',
			'post_type' => array('fd_news','fd_opinion','post','shorthand_story','fd_longforms') 
			); 	
			$count_query = new WP_Query($count_args);	
			$i = 0 ;
		?>
		<?php while ( $count_query->have_posts() ) : $count_query->the_post(); ?>
		<?php  $x[] = $i++ ; ?>
		<?php endwhile; ?>
		<?php $temp_post_count = count($x); ?>	

<div class="author-wrap">
	<div class="text-center">
		<div class="row">
	    
			<div class="<?php echo $auth_class; ?>">
				<div class="row top-main-area">
					<div class="avatar-picture <?php echo $auth_class; ?> col-sm-12">
				    
				    <?php echo get_avatar($curauth->ID, 150); ?>
					</div>
				    <h2 class="text-center  <?php echo $auth_class; ?>"><?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></h2>
				    <h5><?php echo $curauth->occupation; ?></h5>
					<div class="null-section  <?php echo $auth_class; ?>" style="padding: 5px 0px;">
					<?php if(!$temp_post_count == '' ) { ?>
						<span style="padding: 0px 10px; color: #FF6600 !important; font-family: 'Roboto'; font-weight: 500;"><?php echo $temp_post_count ?> Stories</span>
					<?php } ?>	
<!--   
						<span style="border-left: 1px solid #dfdfdf; padding: 0px 10px;"><?php //echo $user_news_count ?></span>
						<span style="border-left: 1px solid #dfdfdf; padding: 0px 10px;"><?php // echo $user_opinion_count ?></span>
	-->
					</div>
					<div class="central-content first-auth-description col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3"><?php echo $curauth->user_description; ?></div>
					<div class="social-media-icons  <?php echo $auth_class; ?>">
						<span><a  href="<?php echo $curauth->facebook; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
						<span><a href="<?php echo $curauth->twitter; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
						<span><a href="<?php echo $curauth->linkedin; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></span>
						<span><a href="mailto:<?php echo $curauth->user_email; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-offset-2 col-md-8 author-description <?php echo $auth_hide_class; ?>">
				<?php get_userdata($author_name);
					if ( $curauth->user_level == 0 ) {?>
					<h5><a href="<?php //echo $curauth->user_email; ?>"><?php echo $curauth->user_email; ?></a></h5>
				<?php }?>
				<?php if($curauth->ethics){ ?>
					<h4>Statement of Ethics</h4>
				<?php }?>
				<?php get_userdata($author_name);
					if ( $curauth->user_level == 7 ) {?>
					<div class="central-content"> <?php echo $curauth->ethics; ?></div>
					<h5><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></h5>
				<?php }?>
				<?php get_userdata($author_name);
					if ( $curauth->user_level == 10 ) {?>
					<div class="central-content"> <?php echo $curauth->ethics; ?></div>
					<h5><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></h5>
				<?php }?>
			</div>
	    </div>
	</div>
	
<?php if($temp_post_count > 0 ) { ?>	
	<div class="author-story-stack">
		<div class="page-header">
			<h2>Author Stories</h2>
		</div>
		<?php $args = array( 
			'author' => $curauth->ID,
			'order' => 'DESC',
			'posts_per_page' => '15',
			'post_type' => array('fd_news','fd_opinion','post','shorthand_story','fd_longforms') 
			); 	
			$query = new WP_Query($args);	
		?>
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
        	<?php $image_id = get_post_meta( get_the_ID(), '_listing_image_id', true );  ?>

         
			<div class="row">
				<div class="card verticle-grid-rows">
               <?php 
			   	if( $image_id == 0 ) { 
			   	$news_cols = 'col-md-12 col-xs-12'; 
				}else {
				$news_cols = 'col-md-8 col-xs-8';
				}; 
				
				if(get_post_type() == 'post' || get_post_type() == 'fd_longforms' || get_post_type() == 'shorthand_story'){ $news_cols = 'col-md-8 col-xs-8'; }
				
				?>

					<div class="col-md-4 col-xs-4 img-section">

							<picture>    
					            <a href="<?php the_permalink(); ?>">
					            <?php   
								if(get_post_type() == 'fd_opinion' || get_post_type() == 'fd_news')  {
								echo wp_get_attachment_image($image_id,'lead5','', array( "class" => "wp-post-image")); 
								}else{
								$the_thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "lead5" );
								
								$thumbnail_src = $the_thumbnail_src[0];
								$check_thumb = strpos($thumbnail_src, '233x132');
								// if custom image size exist
								if( $check_thumb ):
								the_post_thumbnail('thumbnail');
								else:
								the_post_thumbnail('thumbnail'); // if not, use default thumbnail
								endif;	
								}
								 ?> 
					            </a>
							</picture>

					</div>
					<div class="<?php echo $news_cols ;?>">
						<div class="card-block">
							<h4 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<div class="entry-content hidden-xs ">
							    <?php the_excerpt(); ?>
							</div><!-- .entry-content -->
							<span class="category-link ">      
							
								<?php
									get_post_category();
								?>
							
					        </span>
					        <time class="entry-date" datetime=""> 
								<?php echo get_the_time('F j, Y') ?>
							</time>
							
	
						</div>
						<div class="sharing-footer hidden-xs">
					    	<?php fd_sharing_buttons(); ?>
						</div>
					</div>
					<div class="sharing-footer col-xs-12 visible-xs">
				    	<?php fd_sharing_buttons(); ?>
					</div>
					<div class="clearfix"></div>
					
				</div>
			</div>
			<br>
		<?php endwhile; ?>
              <?php   wp_reset_postdata();
			  $author = get_the_author_meta('ID');
        echo do_shortcode('[ajax_load_more repeater="template_3" order="DESC" orderby="post_date" offset="15" post_type="post, fd_news, fd_opinion, shorthand_story, fd_longforms" author="'.$curauth->ID.'"]');
		?>
<?php } ?>
	</div>
</div>
<?php get_footer(); ?>