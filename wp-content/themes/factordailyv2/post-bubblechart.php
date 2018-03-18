<?php
/**
 *WP Post Template: AI Market Bubble chart
 Template Name: AI Market Bubble chart
 Template Post Type: post
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="text-center single-story-category">
			<?php
$curr_post_id = get_the_ID(); // The id of the main story - to be excluded from the query below
			if(get_post_type() == 'fd_opinion') {
				echo '<button class="btn btn-warning btn-sm cat-opinion">';
				echo '<a href="/opinions">Opinion</a>';
			} elseif (get_post_type() == 'fd_news') {
				echo '<button class="btn btn-warning btn-sm cat-news">';
				echo '<a href="/news">News</a>';
			} elseif (get_post_type() == 'post'){
				foreach((get_the_category()) as $category) {
					if ($category->category_parent == 0) {
						if($category->name == 'Future' || $category->name == 'Culture' || $category->name == 'Lifestyle' || $category->name == 'Companies') {
							$singlePageCategory = $category->name;
							echo '<button class="btn btn-warning btn-sm cat-'.$category -> slug.'">';
							echo '<a class="cat-'.esc_html( $category -> slug ).'" href="/' .  $category->name  . '">' . esc_html( $category->name) . '</a>';
							break;
						}
					}
				}
			
			}
			?>
		</button>
	</div>
	<?php 
	
		if(get_post_type() == 'fd_opinion'){
		        get_template_part( 'template-parts/content','opinion-header',get_post_format() );
		}elseif(get_post_type() == 'fd_news'){
		        get_template_part( 'template-parts/content','news-header',get_post_format() );
		}elseif(get_post_type() == 'post'){
		        get_template_part( 'template-parts/content','single-header',get_post_format() );
		}
	?>

	<div class="entry-content">
		<div class="container clear">
			<div class="row">
		
				<div class="col-md-7 col-md-offset-2 " id="central-content">
					<?php if( get_field('top_quote') ): ?>
					<div class="top-quote">
						<div class="vertical-middle">
							<?php the_field('top_quote'); ?>
						</div>
					</div>
					<?php endif; ?>
					<?php if( get_field('bullet_summary_1') ): ?>
					<div class="break visible-xs"></div>
                		<p class="story-highlight-p">Story Highlights</p>
						<ul class="story-highlight-ul">
                         <?php 
							if(get_field('bullet_summary_1')) {
								echo "<li>".get_field('bullet_summary_1')."</li>" ;
							}
							if(get_field('bullet_summary_2')) {
								echo "<li>".get_field('bullet_summary_2')."</li>" ;
							}
							if(get_field('bullet_summary_3')) {
								echo "<li>".get_field('bullet_summary_3')."</li>" ;
							}
						 ?>
						</ul>
					<?php endif; ?>
					<?php the_content(); ?>
				</div><!-- cutting in between-->
				<div class="col-sm-12 col-md-12 col-lg-12 hidden-xs">
				<?php include_once('fd-bubble-chart/index.html');?>
				</div>
				<div class="visible-xs">
				<script id="infogram_0_e8660409-b9fa-49d7-ad1a-46fdbb42037b" title="AI Marketmap" src="https://e.infogram.com/js/dist/embed.js?U4V" type="text/javascript"></script>
<div style="padding: 8px 0; font-family: Arial!important; font-size: 13px!important; line-height: 15px!important; text-align: center; border-top: 1px solid #dadada; margin: 0 30px;"><a style="color: #989898!important; text-decoration: none!important;" href="https://infogram.com/e8660409-b9fa-49d7-ad1a-46fdbb42037b" target="_blank" rel="noopener">AI Marketmap</a>
<a style="color: #989898!important; text-decoration: none!important;" href="https://infogram.com" target="_blank" rel="nofollow noopener">Infogram</a></div>
				</div>
				<div class="col-md-7 col-md-offset-2 " id="central-content">
					<div id="test-popup" class="white-popup mfp-hide">
				  	<div class="row">
						<div class="col-md-8 col-md-offset-2"><?php include('mailerliteformpopup.html'); ?></div>
					 </div>
					</div>
					
						<?php if( get_field('mvp_video_embed') ): ?>
						<div id="video-embed" class="">
						<?php echo get_field('mvp_video_embed'); ?>
						</div>video-embed
						<?php endif; ?>
					
					<?php if( get_field('credits') ): ?>
						<small class="credits"><em><?php the_field('credits'); ?></em></small>
					<?php endif; ?>
					
		<p class="subscribe-link">To get more stories like this on email, <a href="#test-popup" class="open-popup-link"> click here </a> and subscribe to our daily brief.</p>
		<p>&nbsp;</p>
		
			<div class="donate-div" id="razor_response" style="display: none;">
				
					<p><strong>Thank you for reading FactorDaily</strong></p>
<p>We hope this story worked for you. Our stories are put together with great care and effort by some of the smartest in the business. It costs us to bring you good journalism. If you like what you read here, consider donating. We don't have a paywall because we believe access to good journalism must be free, especially when it is in public interest, and not restricted to a few who can pay. Thanks.</p>
		  		
			  		<p><strong>I'd like to donate</strong></p>

			  		<input  id="amount"  type="hidden" name="num" value="500" ></input>
			  		<button   id="rzp-button" onClick="getvalue(this)"  class="abc" value="500" >&#8377; 500</button>
			  		
			  		<input id="amount1"  type="hidden" name="num" value="1000" ></input>
			  		<button id="rzp-button1" onClick="getvalue(this)" class="abc"  value="1000" >&#8377; 1000</button>
			  		
			  		<input id="amount2"  type="hidden" name="num" value="2000"></input>
			  		<button id="rzp-button2" onClick="getvalue(this)" class="abc"  value="2000">&#8377; 2000</button><br>
			  		
			  		<input id="amount3" class="payinput" placeholder="&#8377;  &nbsp;   Other amount"  type="text" name="num"></input><button id="rzp-button3" class="paybutton">Pay</button>

	<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
	<script>  
							
	function getvalue(razval) {	
	  var amount = razval.value;
	  var amountInPaise = amount * 100;
	
		var options = {
		"key": "rzp_test_FQpO2IkkuG9vBl",
		"amount": amountInPaise,
		"name": "FactorDaily",
		"description": "Donation for independant journalism",
		"image": "/wp-content/themes/factordailyv2/images/logo.svg",
		"handler": function (response){
				document.getElementById("razor_response").innerHTML = '<h2 class="single-story-title">Thank you for your support!</h2><strong>Ask your friends too!</strong>  <p>&nbsp;</p><a href="mailto:?Subject=I support good journalism&amp;Body=I%20just%20made%20a%20contribution%20to%20support%20good%20journalism%20@factordaily.%20You%20should%20too!%20https://factordaily.com/support-good-journalism/"><i class="fa fa-envelope" aria-hidden="true"></i></a><a href="http://www.facebook.com/sharer.php?u=https://factordaily.com/support-good-journalism/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="https://plus.google.com/share?url=https://factordaily.com/support-good-journalism/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://factordaily.com/support-good-journalism/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="https://twitter.com/share?url=https://factordaily.com/support-good-journalism/&amp;text=I%20just%20made%20a%20contribution%20to%20support%20good%20journalism%20@factordaily.%20You%20should%20too!" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a><style>.donate-div .fa {font-size: 32px; margin: 10px 10px; color: #e3e3e3;}.donate-div a:hover .fa{	color: #333; }</style>';
		},
		"theme": {
			"color": "#F37254"
		},
	};
		
		var rzp1 = new Razorpay(options);

		rzp1.open();
		e.preventDefault();
	}

	document.getElementById("rzp-button3").addEventListener('click', function(e){
	  var amount = document.getElementById('amount3').value;
	  var amountInPaise = amount * 100;
		function fadeOutEffect() {
		var fadeTarget = document.getElementById("target");
		var fadeEffect = setInterval(function () {
			if (!fadeTarget.style.opacity) {
				fadeTarget.style.opacity = 1;
			}
			if (fadeTarget.style.opacity < 0.1) {
				clearInterval(fadeEffect);
			} else {
				fadeTarget.style.opacity -= 0.1;
			}
		}, 200);
	}

	  var options = {
		"key": "rzp_test_FQpO2IkkuG9vBl",
		"amount": amountInPaise,
		"name": "FactorDaily",
		"description": "Donation for independant journalism",
		"image": "/wp-content/themes/factordailyv2/images/logo.svg",
		"handler": function (response){
				document.getElementById("razor_response").innerHTML = '<h2 class="single-story-title">Thank you for your support!</h2><strong>Ask your friends too!</strong>  <p>&nbsp;</p><a href="mailto:?Subject=I support good journalism&amp;Body=I%20just%20made%20a%20contribution%20to%20support%20good%20journalism%20@factordaily.%20You%20should%20too!%20https://factordaily.com/support-good-journalism/"><i class="fa fa-envelope" aria-hidden="true"></i></a><a href="http://www.facebook.com/sharer.php?u=https://factordaily.com/support-good-journalism/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="https://plus.google.com/share?url=https://factordaily.com/support-good-journalism/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://factordaily.com/support-good-journalism/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="https://twitter.com/share?url=https://factordaily.com/support-good-journalism/&amp;text=I%20just%20made%20a%20contribution%20to%20support%20good%20journalism%20@factordaily.%20You%20should%20too!" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a><style>.donate-div .fa {font-size: 32px; margin: 10px 10px; color: #e3e3e3;}.donate-div a:hover .fa{	color: #333; }</style>';

		},
		"theme": {
			"color": "#F37254"
		},
	};

	  var rzp1 = new Razorpay(options);

		rzp1.open();
		e.preventDefault();
	});

	</script>
</div>


					<?php if ( !has_shortcode( get_the_content(), 'whatsapp_form' ) ) { 
							echo do_shortcode('[whatsapp_form]');	
						} ?> 
					<div class="single-story-sm-icons full-bleed-mobile"><?php fd_sharing_buttons(); ?></div>

					<hr>
					<div class="tail-text">
						<?php if(in_category('1056')): ?>
						<div class="row">
							<div class="col-md-6 col-md-offset-3" style="padding-left: 25px;">
								<p>Powered By</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<a href="http://www.careernetgroup.com/?utm_source=FactorDaily&utm_medium=Website&utm_campaign=FutureOfJobs" target="_blank" style="border-bottom: none !important;">
									<img class="img-responsive" src="/wp-content/themes/factordailyv2//images/CareerNet_Group_Logo.svg" >
								</a>
							</div>
						</div>
						<?php endif; ?>
							<?php 
								$disclosure = get_post_meta(get_the_ID(),'disclosure');
								echo '<p>'.$disclosure[0].'</p>';
								?>

							<?php 
							//News disclosure
							if ( get_post_type( get_the_ID() ) == 'fd_news' ) {
   								 if( get_field('disclosure_news') ):
									?>
									<p> <?php  the_field('disclosure_news'); ?> </p>
							<?php
								 endif;
							}
							 ?>

							
					</div>
					<?php if( has_tag() ): ?>
						<div class="tag-area">
							<?php the_tags( '<button class="btn btn-warning btn-sm">', '</button>&nbsp;<button class="btn btn-warning btn-sm">', '</button>' );?>
						</div>
					<?php endif; ?>
				</div>
                <?php 	
		
					$word_count = str_word_count( strip_tags( get_the_content() ) ); 
					if($word_count > 250) { // show the top stories only if the word count is more than 250
					?>
				<div class="col-md-3 other-stories-side hidden-xs hidden-sm">
					<h4 class="other-stories-title">Other top <strong>Stories</strong> </h4>
					<?php
						
						// avoid a particlar story from loading
						$curr[0] = $curr_post_id;
						$curr[1] = 7557 ;

						wp_reset_query();
						$arg = array(
							'posts_per_page'   => 3, 
							'post_type'    	=> array('post','fd_news','fd_opinion'),
							'orderby'	=> 'post_views',
							'order' => 'DESC',
							'suppress_filters'	=> false,
							'post_status'	=> 'publish',
							'date_query' => array( 'after' => '1 weeks ago'),
							'post__not_in'	=>  array($curr),
							'ignore_sticky_posts' => true
						); 
						$query1 = new WP_Query($arg);
					?>
					<?php 
						
						while ($query1->have_posts() ) : $query1->the_post(); 
					?>
					<div class="card">
<?php 
$curr[] = get_the_id();

?>
						<div class="row">

							<div class="col-md-11 col-md-offset-1 ">
								
								<picture>    
									<a href="<?php the_permalink(); ?>">
										<?php 
											$the_thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "lead5" );
											$thumbnail_src = $the_thumbnail_src[0];
											$check_thumb = strpos($thumbnail_src, '233x132'); 
											the_post_thumbnail('thumbnail',array( 'class' => 'crop-image img-responsive' )); // if not, use default thumbnail	
										?> 
										<?php if( get_field('mvp_video_embed') ): ?>
											<img class="pos-abs" src="/wp-content/themes/factordailyv2/images/play.svg"/>
										<?php endif; ?>
									</a>
								</picture>
							</div>
							<div class="col-md-11 col-md-offset-1">
								<div class="card-block">
									<h4 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								</div>
							</div>
						</div>
					</div>
					<!-- <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> -->

					<?php endwhile;  wp_reset_query(); ?>
					
				</div>
                <?php } ?>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

<!-- recommanded cards -->
<div class="row recommended-stories horz-grid">
	<?php 
//if(!$top_story_ids == '') {
//		array_push( $top_story_ids, $curr_post_id );
//
//}else{
//		$top_story_ids[0] = $curr_post_id ;
//		$curr_id = array_push($top_story_ids, $curr);
//}
//	if(is_user_logged_in()) { print_r($curr) ; }
//global $post;
	
	$tags = wp_get_post_tags( $post->ID, array( 'fields' => 'slugs' ) );
	$curr[] = array();
$curr[0] = $curr_post_id ;
// The related posts by tags 9 May 2017 GTS
	$the_query = new WP_Query( array('taxonomy' => 'post_tag', 'tag_slug__in' => $tags, 'post__not_in'  =>  $curr, 'posts_per_page' => 4,  'orderby' =>'relevance', 'order' => 'DESC', 'fields' => 'ids', 'post_status' => 'publish', 'post_type' => array('post','shorthand_story') ) );
	?>
			
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
		if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){ 
			
		?>
		<div class="vert-grid row">
				<?php
					while ( $the_query->have_posts() ) : $the_query->the_post();
						get_template_part( 'content-more-stories', get_post_format() ); 
					endwhile;
                ?>
		</div>
		<?php }else {
				while ( $the_query->have_posts() ) : $the_query->the_post();
			 ?>
			<div class="col-sm-3">
			    <div class="card card-block">
				    <?php get_template_part( 'content' ); ?>

				</div>
			</div>
		<?php 
				endwhile;
				wp_reset_query();
			}
		?>
	
</div>

<div class="fb-comments col-md-7 col-md-offset-2" data-href="<?php echo get_permalink($curr_post_id); ?>" data-width="100%" data-numposts="5"></div>



<?php	endwhile; 	?>
		<?php //echo do_shortcode('[fbcomments]'); ?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
