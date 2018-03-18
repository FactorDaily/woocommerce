<?php
session_start();
/*
* Template Name: Home Test
// Whenever we need to test something on the home page, it goes here first
*
*/
get_header();
?>
<div class="wrap">
	<div class="lead-stories">
	<?php 
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => 5, 
				'order' => 'ASC', 
				'orderby' =>'meta_value_num', 
				'meta_key' => 'ls_position', 
				'fields' => 'ids', 
				'post_status' => 'publish', 
				'post_type' => array('fd_opinion','fd_news','post','fd_longform')
			) );

		$i = 0 ;
		$lead_array=array();
		while ( $the_query->have_posts() ) : $the_query->the_post();

		$i++;

		array_push($lead_array, get_the_ID());
		
		if($i === 1) { $main_story = 'main-story-head'; }else{ $main_story = ''; }
		if($i == 1 ||  $i == 5) {
			if($i == 5){ $col5 = 'col-xs-6 col-md-4 ';}
			echo "<div class='lead-story-single story_".$i ." ". $col5."'>";
			//get_template_part( 'content-lead-stories' );
			include( locate_template( 'content-lead-stories.php', false, false ) );
			//if($i == 2) { echo '<div class="horz-line hidden-xs"></div>'; }
			echo "</div>";
		}
		if($i == 2 ) {
			echo "<div class='lead-story-single col-sm-6 col-md-6 col-lg-6 col-xs-6'>";
			include( locate_template( 'content-lead-stories.php', false, false ) );			
			echo "</div>";	
			echo "<div class='lead-story-single col-sm-6 col-md-6 col-lg-6 col-xs-6  hidden-xs tag-box'>";
			?>
	
	<div class=" vert-grid row">
		<h2 class="hidden-xs">Discover</h2>
		
		 <?php $tags_array = get_tags( array(
				'taxonomy' => 'post_tag',
				'order' => 'DESC', 
				'orderby' =>'count',
				'number' => 15

			) );
			$html = '<div class="post_tags">';
			foreach ( $tags_array as $tag ) {
				$tag_link = get_tag_link( $tag->term_id );
				$tag_link1 = get_tag_link( '1261' );
				$tag_link2 = get_tag_link( '1420');
				$tag_link3 = get_tag_link( '1347' );
				$tag_link4 = get_tag_link( '1368' );
				$tag_link5 = get_tag_link( '416' );
								
				$html .= "<button class='btn btn-default tag_buttons home-tag'><a href='{$tag_link}'>"; 
				$html .= "#{$tag->name}</a> </button> &nbsp";

			}
				$html .= "<button class='btn btn-default tag_buttons home-tag'><a href='".$tag_link1."'>"; 
				$html .= "#Outliers</a> </button> &nbsp";
				$html .= "<button class='btn btn-default tag_buttons home-tag'><a href='".$tag_link2."'>"; 
				$html .= "#FactorFuture</a> </button> &nbsp";
				$html .= "<button class='btn btn-default tag_buttons home-tag'><a href='".$tag_link3."'>"; 
				$html .= "#Anchors and Prospects</a> </button> &nbsp";
				$html .= "<button class='btn btn-default tag_buttons home-tag'><a href='".$tag_link4."'>"; 
				$html .= "#r00t access</a> </button> &nbsp";
				$html .= "<button class='btn btn-default tag_buttons home-tag'><a href='".$tag_link5."'>"; 
				$html .= "#New Worlds Weekly</a> </button> &nbsp";
			$html .= '</div>';
			echo $html;
		?>
	</div> <!-- vert-grid-->            
            <?php
			echo "</div>";
			 echo '<div class="horz-line hidden-xs clearfix"></div>';			
		}
		if($i == 3 ) {
			echo "<div class='lead-story-multiple'>";
			include( locate_template( 'content-lead-stories.php', false, false ) );
		}
		if($i == 4 ) {
			include( locate_template( 'content-lead-stories.php', false, false ) );
			echo '<div class="horz-line hidden-xs"></div></div>'; 
		}
		endwhile ;
		 //get_template_part( 'content-lead-stories', get_post_format() ); 
	?>


	<!-- more stories section -->
	<div class="vert-grid row">
		<a href="/news">
			<h2>News</h2>
		</a>
		<?php 
		$the_query = new WP_Query( array('posts_per_page' => 5, 'order' => 'DESC','post__not_in'=> $lead_array, 'orderby' =>'date', 'fields' => 'ids', 'post_status' => 'publish', 'post_type' => array('fd_news'), 'cat' => -15) );
		
			while ( $the_query->have_posts() ) : $the_query->the_post();
				array_push($lead_array, get_the_ID());
				get_template_part( 'content-more-stories', get_post_format() );
			endwhile ;
		?>
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
	<div>
		<a href="/makers">
			<h2 class="title-head">Makers</h2>
		</a>
	</div>
		<div class="visible-xs">
			<div class="swiper-container">
		        <div class="swiper-wrapper ">   
				
				<?php
					while ( $the_query->have_posts() ) : $the_query->the_post();
					$i++;
					$cols = array('col-md-3','col-sm-6','col-xs-6', 'swiper-slide', 'post');
					include( locate_template( 'maker-stories.php', false, false ) );
					endwhile ;
				?>
		        </div>
			</div>	
		</div>
<!-- end makers -->


<!-- 	makers tag section -->
	<div class="hidden-xs">
		<?php main_tag_banner(3981); ?>
	</div>
<!--    end of makers tag section -->

<!-- future section -->
	<?php 
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => -1, 
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
			while ( $the_query->have_posts() ) : $the_query->the_post();

// check whether url is https
$url = parse_url(get_permalink(get_the_ID()));
if($url['scheme'] == 'https'){
   // is https;
$oldurl =  preg_replace('/^https(?=:\/\/)/i','http',get_permalink(get_the_ID()));
}else{
//$input = get_permalink(get_the_ID());

}

/*  the logic I am working 
1. Get urls before https
2. If the url is before https then convert the url to http
3. Run the fb code with http
4. Else run fb code on https
*/
//echo get_permalink(get_the_ID()) ;
//				$urlarr = get_permalink(get_the_ID());		
//				$fbresponse = wp_remote_get( 'http://graph.facebook.com/?ids='.get_permalink(get_the_ID()));
//				$redresponse = wp_remote_get('http://www.reddit.com/api/info.json?url='.$urlarr);
//				$body = wp_remote_retrieve_body( $fbresponse );
//				$data = json_decode($body, true);
//				echo $data[$url]['share']['share_count'];
//				foreach ($data as $d) {
//				
//						$fbcount = $d['share']['share_count'];
//
//				if($fbcount < 1 ) {
//
////
//					$fbresponse1 = wp_remote_get( 'http://graph.facebook.com/?ids='.$oldurl);
//					//echo $fbresponse1.'<br>';
//						$body = wp_remote_retrieve_body( $fbresponse1 );
//						$data = json_decode($body, true);
//						foreach ($data as $d) {
//						
//								$fbcount = $d['share']['share_count'];	
//								echo $fbcount ;				
//						}
//						}
//				echo $fbcount ;
//				}

//				$body = wp_remote_retrieve_body( $twresponse );
//				$data = json_decode($body, True);
//				
//				$body = wp_remote_retrieve_body( $redresponse );
//				$data = json_decode($body, true);
//				$redditcount = $data['data']['children'][0]['data']['ups'];
?>
<!--<a data-url="https://factordaily.com/longform/making-girish-mathrubootham/" href="http://www.facebook.com/share.php?u=https://factordaily.com/longform/making-girish-mathrubootham/" class="share-facebook fa fa-facebook" target="_blank"> <?php echo $fbcount ; ?></a><br />
<a data-url="https://factordaily.com/indian-superheroes-organic-farm-farmville/" href="http://www.facebook.com/share.php?u=https://factordaily.com/indian-superheroes-organic-farm-farmville/" class="share-facebook fa fa-reddit" target="_blank"> <?php echo $redditcount ; ?></a>

--><?php
			endwhile;
?>
		<?php 
	
			$i = 0 ;
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$i++;



?>

<?php	
			if($i == 1 ) {
				$cols = 'post';
				echo "<div class='lead-story col-md-6'>";
				//include( locate_template( 'future.php', false, false ) );
				echo "</div>";
				//echo "<div class='side-stories  col-md-3 col-xs-12'>";
			} else {
				if($i == 2){
					echo "<div class='lead-story side-story col-md-3 col-xs-6 padding-right-odd'>";				}
				if($i == 3){
					echo "<div class='lead-story side-story col-md-3 col-xs-6 padding-left-even'>";
				}
				//include( locate_template( 'future.php', false, false ) );
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
					<div class="send-tip-email"><a href="mailto:hello@factordaily.com">Send us email at hello@factordaily.com</a></div>
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
		<div class="group-picture onhome" >
<?php
$a = array("id","login","post_count","display_name");

$b = array("ASC","DESC");

$random_keys=array_rand($a);
$random_order = array_rand($b);

$blogusers = get_users( 'blog_id=1&orderby='.$a[$random_keys].'&order='.$b[$random_order].'&role=administrator&exclude=1,47,6,319,13,95' );
// Array of WP_User objects.
foreach ( $blogusers as $user ) {
	
    echo '<a href="'.get_author_posts_url( $user->ID ).'"><div class="author-card"><img src="'.$user->teampichome.'" /></div></a>';
};?>
<?php
$blogusers = get_users( 'blog_id=1&orderby='.$a[$random_keys].'&order='.$b[$random_order].'&role=editor&exclude=13,319,53,79' );
// Array of WP_User objects.
foreach ( $blogusers as $user ) {
    echo '<a href="'.get_author_posts_url( $user->ID ).'"><div class="author-card"><img src="'.$user->teampichome.'" /></div></a>';
};
?>

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