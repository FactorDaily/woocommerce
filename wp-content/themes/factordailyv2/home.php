<?php
session_start();
/*
* 
Template Name: Home Grid
*
*/
get_header();
?>

<!-- Subscribe pop-up 22-12-2017-->
					<div id="test-popup" class="white-popup mfp-hide">
				  	<div class="row">
						<div class="col-md-8 col-md-offset-2"><?php include('mailerliteformpopup.html'); ?></div>
					 </div>
					</div>

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
				'post_type' => array('fd_opinion','fd_news','post','fd_longform','shorthand_story')
			) );

		$i = 0 ;
		$lead_array=array();

	   ?>
<!--------Grid : Col1  Lead Story 1 ------------>
		<div class="row">
			<?php
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$i++;
			array_push($lead_array, get_the_ID());
			
	   		if($i == 1){
		   ?>	<div class="col-sm-8 col-xs-12 no-padding grid-item-1">
				<?php include( locate_template( 'content-lead-stories.php', false, false ) ); ?>	
				</div>
			<?php } ?>
						
			<?php if($i == 2  ){ ?>

<!--------Grid : Col2 ------------>
			<div class="col-sm-4 grid-item-2">
				<div class="rowx">
			<?php } ?>

			<?php if($i == 2 || $i == 3  ){ ?>
			
<!--------Grid : Col2 Lead Story 2 and 3    ------------>
				<div class="col-sm-12 col-xs-6 grid-item-23">
				<?php include( locate_template( 'content-lead-stories.php', false, false ) ); ?>
				</div>
			<?php } ?>
						
			<?php if($i == 3  ){ ?>
				</div>
			</div>
		<div class="clearfix" style="margin-bottom: 20px;"></div>
			<?php } ?>
		
			<?php if($i == 4 || $i == 5 ){ ?>
			
<!--------Grid : Row 2 Lead Story 4 and 5     ------------>			
				<div class="col-sm-6 grid-item-45" >
					<?php include( locate_template( 'content-lead-stories.php', false, false ) ); ?>
				</div>
			
			<?php } ?>
		
			<?php 
			endwhile ; 
			wp_reset_query();
			?>			
		</div>

	<div class="clearfix"></div>
	
</div><!-- lead-stories-->
<div class="clearfix"></div><br>
<?php include('mailerliteform.html'); ?>
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
				array_push($lead_array, get_the_ID());
			
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
			wp_reset_query();
				?>

		</div>
	
		<div class="clearfix"></div>

			<div class="visible-xs">
				<div class="swiper-container">
			        <div class="swiper-wrapper ">   
					
					<?php
						while ( $the_query->have_posts() ) : $the_query->the_post();
						$i++;
						array_push($lead_array, get_the_ID());
						$cols = array('col-md-3','col-sm-6','col-xs-6', 'swiper-slide', 'post');
						if($i % 3 == 0 ){
							include( locate_template( 'readmoremobile.php', false, false ) );
						}
						include( locate_template( 'culture.php', false, false ) );
						endwhile ;
					?>
		
			        </div>
				</div>
			</div>
		<div class="clearfix"></div>
	</div>
<!-- companies section end -->

						
<!-- 	Longform tag section -->
	<div class="hidden-xs">
		<?php main_tag_banner(3981); ?>
	</div>
<!--    end of Longform tag section -->

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
	<div class="culture-stories row">
		<div class="hidden-xs">	
		<?php 
	
			$i = 0 ;
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$i++;
			array_push($lead_array, get_the_ID());
			if($i == 1 ) {
				$cols = 'post';
				echo "<div class='lead-story col-md-6'>";
				include( locate_template( 'future.php', false, false ) );
				echo "</div>";
			} else {
				if($i == 2){
					echo "<div class='lead-story side-story col-md-3 col-xs-6 padding-right-odd'>";				}
				if($i == 3){
					echo "<div class='lead-story side-story col-md-3 col-xs-6 padding-left-even'>";
				}
				include( locate_template( 'future.php', false, false ) );
				
					echo "</div>";
				}
			endwhile ;
			wp_reset_query();
		?>
		</div>
			
		<div class="visible-xs">
			<div class="swiper-container">
		        <div class="swiper-wrapper ">   
				
				<?php
					while ( $the_query->have_posts() ) : $the_query->the_post();
					$i++;
					array_push($lead_array, get_the_ID());
					$cols = array('col-md-3','col-sm-6','col-xs-6', 'swiper-slide', 'post');
					if($i % 3 == 0 ){
							include( locate_template( 'readmoremobile.php', false, false ) );
						}
					include( locate_template( 'future.php', false, false ) );
					endwhile ;
					wp_reset_query();
				?>
		        </div>
			</div>	
		</div>
		
	<div class="clearfix"></div>	
	</div>
<!-- end of future section -->

<!-- 	Obsession section -->
	<div class="hidden-xs">
		<?php main_tag_banner(5898); ?>
	</div>
<!--    Obsession section -->
<br>
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
<!--
                    <div class="visible-md visible-lg visible-sm hidden-xs">
                    <p>Enter your name and press the WhatsApp icon</p>
                	</div>
-->
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
				<div class="clearfix"></div>
			</div>


<!-- podcast section -->
	<?php 
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => 3, 
				'orderby' => 'date',
				'order' => 'DESC', 
				'category_name' => 'audio-video,video',
				'post_status' => 'publish', 
				'post_type' => array('fd_opinion','fd_news','post'),
				'post__not_in'=> $lead_array
			) ); 

		$i = 0 ;
	?>
	<div>
		<a href="/podcasts">
			<h2 class="title-head">Podcasts</h2>
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
			 
			?>
		</div>

			<div class="visible-xs">
				<div class="swiper-container">
			        <div class="swiper-wrapper ">   
					
					<?php
						while ( $the_query->have_posts() ) : $the_query->the_post();
						$i++;
						$cols = array('col-md-3','col-sm-6','col-xs-6', 'swiper-slide', 'post');
						if($i % 3 == 0 ){
							include( locate_template( 'readmoremobile.php', false, false ) );
						}
							include( locate_template( 'culture.php', false, false ) );
						
						endwhile ;
					?>
						
			        </div>
				</div>
			</div>
			

		<div class="clearfix"></div>
	</div>
<!-- podcast section ends -->


<hr>

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
.home .fd-team .group-picture { display:flex;  flex-direction: row-reverse;}
.home .fd-team .group-picture a { flex-grow:1; margin-right:-20px;}

    </style>

    <!-- Swiper -->
    
 

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: '1.7',
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