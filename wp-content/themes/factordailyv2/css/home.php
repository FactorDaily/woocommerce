
<?php
session_start();
/*
* Template Name: Home
v 1
*
*/
get_header();
?>
<div class="wrap">
    
    	<?php 
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => 6, 
				'order' => 'ASC', 
				'orderby' =>'meta_value_num', 
				'meta_key' => 'ls_position', 
				'fields' => 'ids', 
				'post_status' => 'publish', 
				'post_type' => array('fd_opinion','fd_news','post','fd_longforms','shorthand_story')
			) );
?>

    <div class="container newlayout lead-stories remove-padding">
        <?php 
            $i = 0 ;
            $lead_array=array();
            while ( $the_query->have_posts() ) : $the_query->the_post();
            $i++;
            ?>
            
            <?php ob_start(); ?>
            <?php  $lead1 == ''; ?>
            <?php if($i == 1){  ?>
                <?php include( locate_template( 'content-lead-stories.php', false ,true ) ) ; ?>
                <?php $lead1 .=  ob_get_clean(); ?>
            <?php  } ; ?>

                <?php ob_start(); ?>
                <?php  $lead23 == ''; ?>
                <?php if($i == 2 || $i == 3 ){  ?>
                <div class="lead-story-single col-md-12 col-xs-6"><?php include( locate_template( 'content-lead-stories.php', false ,true ) ) ; ?></div>
                <?php $lead23 .=  ob_get_clean(); } ?>
                
                <?php ob_start(); ?>
                <?php  $lead45 == ''; ?>
                <?php if($i == 4 || $i == 5 ){  ?>
                <?php include( locate_template( 'content-lead-stories.php', false ,true ) ) ; ?>
                <?php $lead45 .=  ob_get_clean(); } ?>
        
                <?php ob_start(); ?>
                <?php  $lead6 == ''; ?>
                <?php if($i == 6 ){  ?>
                <?php include( locate_template( 'content-lead-stories.php', false ,true ) ) ; ?>
                <?php $lead6 .=  ob_get_clean(); } ?>
        
         <?php endwhile; ?>
        <!-- first row-->
        <div class="row">
                <div class="col-md-8 col-xs-12 lead-story-single first-lead remove-padding-mob">
                    <?php echo  $lead1 ;  ?>
                </div>
            <div class="col-md-4 col-xs-12 lead-story-single side-lead remove-padding-mob">
                    <?php echo  $lead23 ; ?>
            </div>
        </div>
        
        <!-- second row-->
        <div class="row">
            <div class="col-md-12 lead-story-multiple"><?php echo $lead45 ; ?></div>
        </div>
        
        <!-- whatsapp events etc-->
        <div class="row">
            <div class="col-md-6">Outliers</div>
            <div class="col-md-6">Events</div>
            <div class="col-md-6">
            			<div class="subscribe-whatsapp col-md-12 col-xs-12">
				<div class="col-md-6 col-sm-6 col-lg-6">
				<div class="text-area">
					<h2>Subscribe to our WhatsApp Alerts</h2>
				</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-6 hidden-xs">
					 <?php $_SESSION['whatsapp'] = 'web'; ?>
                     <form action="<?php bloginfo('stylesheet_directory'); ?>/whatsapp_process.php" method="post" name="whatsappdata" class="whatsapp-form" >
                      <input name="text" type="text" class="whatsappnameW" required title="Please enter your name, not number" pattern="[a-zA-Z\s]+" value=""/>
                      <button type="submit" class="whatsappsendW"><i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i></button>
                   	</form>
                    <div class="visible-md visible-lg visible-sm hidden-xs">
                    <p>Enter your name and press the WhatsApp icon</p>
                	</div>
                   </div>
                    <div class="visible-xs">
                    <p>Enter your name and press the WhatsApp icon</p>
                     <?php $_SESSION['whatsapp'] = 'mobile'; ?>
                    <form action="<?php bloginfo('stylesheet_directory'); ?>/whatsapp_process.php" method="post" name="whatsappdata" class="whatsapp-form " >
                    	<input type="hidden" name="type" value="mobile" />
                        <input name="text" type="text" class="whatsappname" required title="Please enter your name, not number" pattern="[a-zA-Z\s]+" value="" />
                        <button type="submit" class="whatsappsendW"><i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i></button>
                   </form>
					</div>
				</div>
            
            </div>
        </div>
        
        <!-- last story and news-->
        <div class="row">
        <?php if($i == 6 ){  ?>
            <div class="col-sm-4"><?php echo $lead6; ?></div>
        <?php } ?>
            <div class="col-sm-8 vert-grid row">
            <a href="/news"><h2>News</h2></a>
		<?php 
		$the_query = new WP_Query( array('posts_per_page' => 5, 'order' => 'DESC','post__not_in'=> $lead_array, 'orderby' =>'date', 'fields' => 'ids', 'post_status' => 'publish', 'post_type' => array('fd_news'), 'cat' => -15) );
		
			while ( $the_query->have_posts() ) : $the_query->the_post();
				array_push($lead_array, get_the_ID());
				get_template_part( 'content-more-stories', get_post_format() );
			endwhile ;
		?>
            
            </div>
        </div>
       
    </div>
    
	<div class="lead-stories">


	<!-- more stories section -->
	<div class="vert-grid row">

	</div> <!-- vert-grid-->
	
	<!-- end of more stories -->
	<div class="clearfix"></div>
	
</div><!-- lead-stories-->


<!-- video section -->
	<div class="video-area row">
		<a href="/audio-video"><h2 class="title-head">Audio / Video</h2></a>
		<div class="main-video">
			
			<?php 
				$the_query = new WP_Query( array('category_name' => 'audio-video, video', 'post__not_in'=> $lead_array, 'posts_per_page' => 1, 'order' => 'DESC', 'post_status' => 'publish', 'post_type' => array('fd_opinion','fd_news','post')) );
				while ( $the_query->have_posts() ) : $the_query->the_post();
				array_push($lead_array, get_the_ID());
				?>
				
				<img src="<?php  the_post_thumbnail_url('full');?>" title="<?php echo get_the_title(); ?>" class="wp-post-image img-responsive"> 
				<div class="overlay" rel="bookmark">
					<img class="img-responsive" src="wp-content/themes/factordailyv2/images/play.svg" />
					<div class="text-overlay">
						<span class="video-author-name">
							<?php if ( function_exists( 'get_coauthors' ) ) { ?>
							<?php if ( function_exists( 'coauthors_posts_links' ) ) {
								coauthors_posts_links();
								} else {
								the_author_posts_link();
							};?>
							<?php }; ?>
						</span>
						<p><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></p>
						<span class="date">
					       	<time class="entry-date" datetime="">
								<?php echo get_the_time('F j, Y') ?>
							</time>
					    </span>
					</div>
				</div>
				<a href="<?php the_permalink(); ?>" class="video-link-overlay"></a>
			<?php
				endwhile ;
			?>
		</div>
		<div class="horz-grid">  
			<?php 
				$the_query = new WP_Query( array('category_name' => 'audio-video, video', 'post__not_in'=> $lead_array, 'posts_per_page' => 4, 'order' => 'DESC','orderby'=>'date', 'fields' => 'ids', 'post_status' => 'publish', 'post_type' => array('fd_opinion','fd_news','post')) );
				$col_classes = array('col-md-3','col-sm-12','col-xs-12');
				while ( $the_query->have_posts() ) : $the_query->the_post();
				//get_template_part( 'video', get_post_format() ); 
				include( locate_template( 'video.php', false, false ) );
				endwhile ;
			?>
			<div class="clearfix"></div>
		</div>
	</div>

<!-- end video section -->

<!-- makers -->
	<?php 
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => 4, 
				'orderby' => 'date',
				'order' => 'DESC', 
				'tag' => 'makers',
				'post_status' => 'publish', 
				'post_type' => array('fd_opinion','fd_news','post'),
				'post__not_in'=> $lead_array,
				'cat' => -1056 // Future of jobs
			) 
		);
		$i = 0 ;
	?>
	<div>
		<a href="/makers">
			<h2 class="title-head">Stories of Makers</h2>
		</a>
	</div>
	<div class="future-stories row">
		<div class="hidden-xs">	
		<?php 
	
			$i = 0 ;
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$i++;
	
			if($i == 1 ) {
				$cols = 'post';
				echo "<div class='lead-story col-md-3 col-sm-12'>";
				include( locate_template( 'future.php', false, false ) );
				echo "</div><p class='visible-sm'>&nbsp;</p>";
			} else {
				if($i == 2 || $i == 4){
					echo "<div class='lead-story side-story col-md-3 col-sm-4 padding-right-odd'>";				}
				if($i == 3){
					echo "<div class='lead-story side-story col-md-3 col-sm-4 padding-left-even'>";
				}
				include( locate_template( 'future.php', false, false ) );
				//if($i == 3 ){
					echo "</div>";
				//}
			}
			endwhile ;
		?>
		</div>
		<div class="visible-xs">
			<div class="swiper-container">
		        <div class="swiper-wrapper ">   
				
				<?php
					while ( $the_query->have_posts() ) : $the_query->the_post();
					$i++;
					$cols = array('col-md-3','col-sm-6','col-xs-6', 'swiper-slide', 'post');
					include( locate_template( 'future.php', false, false ) );
					endwhile ;
				?>
		        </div>
			</div>	
		</div>
	</div>

<!-- end makers -->
<p>&nbsp;</p>

<!-- 	makers tag section -->
	<div class="hidden-xs">
		<?php main_tag_banner(3981); ?>
	</div>
<!--    end of makers tag section -->

<!-- future section -->
	<?php 
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => 3, 
				'orderby' => 'date',
				'order' => 'DESC', 
				'category_name' => 'future',
				'post_status' => 'publish', 
				'post_type' => array('fd_opinion','fd_news','post'),
				'post__not_in'=> $lead_array,
				'cat' => -1056 // Future of jobs
			) 
		);
		$i = 0 ;
	?>
	<div>
		<a href="/future">
			<h2 class="title-head">Future</h2>
		</a>
	</div>
	<div class="future-stories row">
		<div class="hidden-xs">	
		<?php 
	
			$i = 0 ;
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$i++;
	
			if($i == 1 ) {
				$cols = 'post';
				echo "<div class='lead-story col-md-6'>";
				include( locate_template( 'future.php', false, false ) );
				echo "</div>";
				//echo "<div class='side-stories  col-md-3 col-xs-12'>";
			} else {
				if($i == 2){
					echo "<div class='lead-story side-story col-md-3 col-xs-6 padding-right-odd'>";				}
				if($i == 3){
					echo "<div class='lead-story side-story col-md-3 col-xs-6 padding-left-even'>";
				}
				include( locate_template( 'future.php', false, false ) );
				//if($i == 3 ){
					echo "</div>";
				//}
			}
			endwhile ;
		?>
		</div>
		<div class="visible-xs">
			<div class="swiper-container">
		        <div class="swiper-wrapper ">   
				
				<?php
					while ( $the_query->have_posts() ) : $the_query->the_post();
					$i++;
					$cols = array('col-md-3','col-sm-6','col-xs-6', 'swiper-slide', 'post');
					include( locate_template( 'future.php', false, false ) );
					endwhile ;
				?>
		        </div>
			</div>	
		</div>
		
	<div class="clearfix"></div>	
		<span></span>
		<div class="lead-stories">
			<div class="subscribe-whatsapp col-md-12 col-xs-12">
				<div class="col-md-6 col-sm-6 col-lg-6">
				<div class="text-area">
					<h2>Subscribe to our WhatsApp Alerts</h2>
				</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-6 hidden-xs">
					 <?php $_SESSION['whatsapp'] = 'web'; ?>
                     <form action="<?php bloginfo('stylesheet_directory'); ?>/whatsapp_process.php" method="post" name="whatsappdata" class="whatsapp-form" >
                      <input name="text" type="text" class="whatsappnameW" required title="Please enter your name, not number" pattern="[a-zA-Z\s]+" value=""/>
                      <button type="submit" class="whatsappsendW"><i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i></button>
                   	</form>
                    <div class="visible-md visible-lg visible-sm hidden-xs">
                    <p>Enter your name and press the WhatsApp icon</p>
                	</div>
                   </div>
                    <div class="visible-xs">
                    <p>Enter your name and press the WhatsApp icon</p>
                     <?php $_SESSION['whatsapp'] = 'mobile'; ?>
                    <form action="<?php bloginfo('stylesheet_directory'); ?>/whatsapp_process.php" method="post" name="whatsappdata" class="whatsapp-form " >
                    	<input type="hidden" name="type" value="mobile" />
                        <input name="text" type="text" class="whatsappname" required title="Please enter your name, not number" pattern="[a-zA-Z\s]+" value="" />
                        <button type="submit" class="whatsappsendW"><i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i></button>
                   </form>
					</div>
				</div>

				<div class="image">
					<!--<img img-responsive src="wp-content/themes/factordailyv2/images/Whatsapp-FD.gif"/>-->
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- end of future section -->

<!--     future of jobs section  -->
	<div class="horz-grid row">
		<a href="/future-of-jobs">
		<h2 class="title-head">Future of Jobs</h2>
		</a>    
		<?php 
			$the_query = new WP_Query( array('category_name' => 'future-of-jobs', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC',  'post_status' => 'publish', 'post_type' => array('fd_opinion','fd_news','post')) );
			$i = 0;
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$i++;
			if($i % 2 == 0){
				$col_classes = array('col-md-3','col-sm-6','col-xs-6', 'padding-left-even');
			} else {
				if($i == 3){
					$col_classes = array('col-md-3','col-sm-6','col-xs-6', 'padding-right-odd', 'clearfix-mobile');
				} else {
					$col_classes = array('col-md-3','col-sm-6','col-xs-6', 'padding-right-odd');
				}
			}
			if(is_home() ||  is_front_page() ) {
				array_push($col_classes, 'post');
			}

			include( locate_template( 'content.php', false, false ) );
			//get_template_part( 'content', get_post_format() ); 
			endwhile ;
		?>
		<div class="clearfix"></div>
	</div>
<!--   end  future of jobs section  -->

<!-- companies section -->
	<?php 
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => 3, 
				'orderby' => 'date',
				'order' => 'DESC', 
				'category_name' => 'Companies',
				'post_status' => 'publish', 
				'post_type' => array('fd_opinion','fd_news','post'),
				'post__not_in'=> $lead_array
			) ); 

		$i = 0 ;
	?>
	<div>
		<a href="/companies">
			<h2 class="title-head">Companies</h2>
		</a>
	</div>
	<div class="culture-stories row">
		<div class="hidden-xs">
			<?php
				while ( $the_query->have_posts() ) : $the_query->the_post();
				$i++;
				$cols = 'post';
				if($i == 1 ) {
					echo "<div class='lead-story main-story col-md-6'>";
					include( locate_template( 'culture.php', false, false ) );
					echo "</div>";
				} else {
					if($i == 2){
						echo "<div class='lead-story side-story col-md-3 col-xs-6 padding-right-odd'>";
					}
					if($i == 3){
						echo "<div class='lead-story side-story col-md-3 col-xs-6 padding-left-even'>";
					}
					include( locate_template( 'culture.php', false, false ) );
					echo "</div>";
				}
				endwhile ;
				 //get_template_part( 'content-lead-stories', get_post_format() ); 
			?>
		</div>

			<div class="visible-xs">
				<div class="swiper-container">
			        <div class="swiper-wrapper ">   
					
					<?php
						while ( $the_query->have_posts() ) : $the_query->the_post();
						$i++;
						$cols = array('col-md-3','col-sm-6','col-xs-6', 'swiper-slide', 'post');
						include( locate_template( 'culture.php', false, false ) );
						//get_template_part( 'content', get_post_format() ); 
						endwhile ;
					?>
			        </div>
				</div>
			</div>
			
<!-- 		<div class="news-bot col-md-6 col-xs-12">
			<h2>Chat with our <br> News Bot</h2>
			<p>All new way. Get curated news<br> via Messenger.</p>
			<a href="https://m.me/fdecombot" target="_blank"><button>KNOW MORE</button></a>
			<img class="img-responsive" src="wp-content/themes/factordailyv2/images/messenger.svg"/>
		</div> -->
		<div class="clearfix"></div>
	</div>
<!-- companies section end -->

<!-- 	makers tag section -->
	<div class="hidden-xs">
		<?php main_tag_banner(4433); ?>
	</div>
<!--    end of makers tag section -->

<!-- Culture section -->
	<?php 
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => 3, 
				'order' => 'DESC', 
				'category_name' => 'Culture',
				'post_status' => 'publish', 
				'post_type' => array('fd_opinion','fd_news','post'),
				'post__not_in'=> $lead_array
			) ); 

		$i = 0 ;
	?>
	<div>
		<a href="/culture">
			<h2 class="title-head">Culture</h2>
		</a>
	</div>
	<div class="culture-stories row">
		<div class="hidden-xs">
			<?php
				while ( $the_query->have_posts() ) : $the_query->the_post();
				$i++;
				$cols = 'post';
				if($i == 1 ) {
					echo "<div class='lead-story main-story col-md-6'>";
					include( locate_template( 'culture.php', false, false ) );
					echo "</div>";
				} else {
					if($i == 2){
						echo "<div class='lead-story side-story col-md-3 col-xs-6 padding-right-odd'>";
					}
					if($i == 3){
						echo "<div class='lead-story side-story col-md-3 col-xs-6 padding-left-even'>";
					}
					include( locate_template( 'culture.php', false, false ) );
					echo "</div>";
				}
				endwhile ;
				 //get_template_part( 'content-lead-stories', get_post_format() ); 
			?>
		</div>

			<div class="visible-xs">
			<div class="swiper-container">
		        <div class="swiper-wrapper ">   
				
				<?php
					while ( $the_query->have_posts() ) : $the_query->the_post();
					$i++;
					$cols = array('col-md-3','col-sm-6','col-xs-6', 'swiper-slide', 'post');
					include( locate_template( 'culture.php', false, false ) );
					//get_template_part( 'content', get_post_format() ); 
					endwhile ;
				?>
		        </div>
			</div>
			</div>
			
	<!--	<div class="news-bot col-md-6 col-xs-12 hidden-xs">
			<h2>Chat with our <br> News Bot</h2>
			<p>Some text text instruction type.<br>1.5 line only</p>
			<button>KNOW MORE</button>
			<img class="img-responsive" src="wp-content/themes/factordailyv2/images/messenger.svg"/>
		</div> -->
		<div class="clearfix"></div>
	</div>
<!-- Culture section end -->

<!-- 	CONTRIBUTOR start -->
	<div class="join-contributor hidden-xs row">
		<div class="text-area col-md-6">
			<span></span>
			<h2>JOIN US. BE A CONTRIBUTOR.</h2>
			<p>More than 50 contributors in the network with us.</p>
			<a href="contributors-network">Write to us Now</a>
		</div>
		
		<div class="img-section col-md-3 hidden-xs">
			<?php
				$authors =  array();
				$count = 0;
				$args=array(
				  'post_type' => 'post',
				  'posts_per_page' => -1,
				  'orderby' => 'date',
				  'order' => 'Desc'
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				  while ($my_query->have_posts() && $count < 9) : $my_query->the_post();
				    $author_id=$my_query->post->post_author;
				    $user = new WP_User( $author_id );
				    if ( !empty( $user->roles ) && is_array( $user->roles ) && in_array('contributor',$user->roles) ) {
				      if (!in_array($author_id,$authors)) {
				      	echo '<span class="col">';
				        echo get_avatar($author_id, 150);
				        echo '</span>';

				        $count++;
				        $authors[]=$author_id;
				      }
				    }
				  endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
			?>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="join-contributor visible-xs row">
		<div class="contributor-content-area-mobile">
			<h2>JOIN US.</h2>
			<h2>BE A CONTRIBUTOR.</h2>
			<div class="contributor-image">
				<?php
					$authors =  array();
					$count = 0;
					$args=array(
					  'post_type' => 'post',
					  'posts_per_page' => -1,
					  'orderby' => 'date',
					  'order' => 'Desc'
					);
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					  while ($my_query->have_posts() && $count < 6) : $my_query->the_post();
					    $author_id=$my_query->post->post_author;
					    $user = new WP_User( $author_id );
					    if ( !empty( $user->roles ) && is_array( $user->roles ) && in_array('contributor',$user->roles) ) {
					      if (!in_array($author_id,$authors)) {
					      	echo '<span class="col">';
					        echo get_avatar($author_id, 150);
					        echo '</span>';
	
					        $count++;
					        $authors[]=$author_id;
					      }
					    }
					  endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
				?>
			</div>
			<p>50+ hand picked experts and influencers are with us.</p>
			<p class="write-to-us"><a href="contributors-network">Write to us Now</a></p>
		</div>
	</div>
<!-- 	CONTRIBUTOR ends -->

<!-- Lifestyle section -->
	<?php 
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => 3, 
				'order' => 'DESC', 
				'category_name' => 'Lifestyle',
				'post_status' => 'publish', 
				'post_type' => array('fd_opinion','fd_news','post'),
				'post__not_in'=> $lead_array
			) 
		);
		$i = 0 ;
	?>
	<div>
		<a href="/lifestyle">
		<h2 class="title-head">Lifestyle</h2>
		</a>
	</div>
	<div class="future-stories row">
		<div class="hidden-xs">	
		<?php 
	
			$i = 0 ;
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$i++;
	
			if($i == 1 ) {
				$cols = 'post';
				echo "<div class='lead-story col-md-5'>";
				include( locate_template( 'future.php', false, false ) );
				echo "</div>";
				echo "<div class='side-stories  col-md-3 col-xs-12'>";
			} else {
				if($i == 2){
					$cols = 'col-xs-6 col-md-12 col-sm-6 padding-right-odd post';
				}
				if($i == 3){
					$cols = 'col-xs-6 col-md-12 col-sm-6 padding-left-even post';
				}
				include( locate_template( 'future.php', false, false ) );
				if($i == 3 ){
					echo "</div>";
				}
			}
			endwhile ;
			 //get_template_part( 'content-lead-stories', get_post_format() ); 
		?>
		</div>
		<div class="visible-xs">
			<div class="swiper-container">
		        <div class="swiper-wrapper ">   
				
				<?php
					while ( $the_query->have_posts() ) : $the_query->the_post();
					$i++;
					$cols = array('col-md-3','col-sm-6','col-xs-6', 'swiper-slide', 'post');
					include( locate_template( 'future.php', false, false ) );
					//get_template_part( 'content', get_post_format() ); 
					endwhile ;
				?>
		        </div>
			</div>	
		</div>
		
		
		<span></span>
		<div class="lead-stories hidden-xs">
			<div class="news-tip col-md-4 col-xs-12">
				<div class="wrapper">
					<div class="text-area">
						<h2>Tip Us</h2>
						<p>Do you know about the next big thing happening? Want to share it with Factordaily?</p>
					</div>
	
					<div class="image-bubble">
						<img img-responsive src="wp-content/themes/factordailyv2/images/chat-bubble.svg"/>
					</div>
					<div class="send-tip-email"><a href="mailto:hello@factordaily.com">Send us an email at hello@factordaily.com</a></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="fd-team row">
		<div class="text-area">
			<a href="http://factordaily.com/about/">
				<span></span>
				<h2>FactorDaily Team</h2>
				<p>Designers, coders, journalists and mad hatters. This is our team.</p>
			</a>
		</div>
		<div class="group-picture" >

<img class="img-src" src="wp-content/themes/factordailyv2/images/factordaily_team.jpg"/>

		</div>
	</div>
	
<!-- -->
	<style>
       .swiper-container {
        width: 100%;
        padding-top: 15px;
        padding-bottom: 50px;
    }
    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        min-height: 300px;
    } 

    </style>

    <!-- Swiper -->
    
 

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchReleaseOnEdges: 'true',
        loop: true,
        coverflow: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true
        }
    });
    </script>

<!-- end of Lifestyle section -->

<?php get_footer(); ?>