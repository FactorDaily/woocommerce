<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 */

get_header(); ?>
<style>
	.verticle-grid-rows {
		width: 75%;
    margin: 0 auto;
    padding-bottom: 20px;
    padding-top: 20px;
    border-bottom: 1px solid #dfdfdf;
		
	}
	
	.container-fluid
	{	padding-left: 0px !important;
		padding-right: 0px !important;
	}
	.hero {
/*
		background: url("http://factordaily.com/wp-content/uploads/2017/03/Outliers_page_lead.jpg") no-repeat center center ;
		background-size: cover;
*/
		margin-top: 20px;
	}
	.hero:before {
		content: '';
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		opacity: .8;
	}
	.hero .intro {
		padding: 3rem;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
	}
	.hero h1 {
		color: #fff;
		font-size: 1.5rem;
		line-height: 1.5em;
		letter-spacing: -0.025em;
		font-weight: 300;
		text-align: center;
	}
	.hero p {
		color: #fff;
		line-height: 1.75em;
		font-weight: 200;
		text-align: center;
		margin-bottom: 2rem;
	}
	.visible-xs-mobile {
		display: none;
	}
	.sound-cloud-margin {
		margin: 0px 0px 0px 75px;
	}
	@media only screen and (min-width: 40.063em) {
		.hero .tech-img {
			height: 18rem;
			width: 18rem;
		}
		.hero h1 {
			padding-top: 4.5rem;
			text-align: right;
			font-size: 2.5rem;
		}
		.hero p {
			text-align: right;
		}
	}
	.blockquote-area .widget-title {
		margin-bottom: 90px !important;
	}
	blockquote {
		margin: 10px 0px 10px 0px;
		border: 0 !important;
		font-size: 2em;
		font-family: "adelle", serif;
		line-height: 1.4em;
		color: #ed2b17;
	}
	blockquote:before{
		float: left !important;
		margin-right: 10px !important;
		font-family: FontAwesome !important;
		font-size: 30px !important;
		line-height: 1 !important;
		content: '\f10d' !important;
		color: #ff6b53 !important;
		width: auto !important;
		height: auto !important;
		background: none !important;
	}   

	p.dropcap::first-letter {
		float: left;
		font-size: 5em;
		margin: 0 .2em .1em 0;
	}

	p a, p a:hover{
		color: #ff6b53;
	}

	section .widget-title {
		position: relative;
		margin-bottom: 30px;
		padding: 20px 0px 0px !important;
		border-bottom: 0;
		text-align: center;
		font-family: "brandon-grotesque" !important;
		font-size: 3em;
	}

	section .widget-title::after {
		position: absolute;
		left: calc(50% - 3.5em);
		width: 7em;
		content: "";
		border-bottom: 6px double #ff6b53;
		bottom: -10px;
	}

	section .container{
		padding: 0px !important;
	}

	.facts-area{
		padding-bottom: 40px !important;
		text-align: center;
	}

	.fact {
		font-size: 50px;
		border-bottom: 1px solid #ebebeb;
		font-family: 'Roboto Condensed', sans-serif;
		color: #ef7e22;
	}

	.action-area{
		display: block;	
		background-repeat: : no-repeat;
		background-position: center center;
		background-size: cover;
		z-index: -1;
		padding: 300px 0px !important;
	}

	cite p{ 
		line-height: 1.2; 
		font-size: 1em; 
		padding: 5px !important; 
		margin: 0px 5px 5px !important; 
		text-align: center;
		color: #888;
		font-family: "brandon-grotesque";
		text-decoration: none;
	}

	.chatbot-button {
		background-color: #ef7e22 !important; 
		color: white !important; 
		font-size: 18px !important; 
		border-radius: 50px; 
		font-weight: 400; 
		margin-top: 30px; 
	}
	.clearfix{
		clear: both;
		margin-top: 20px;
	}
	#cover
	{position: relative; height: 100%; text-align: center; background: rgba(0, 0, 0, 0.2);}
	#title
	{position: absolute; bottom: 35%; padding: 10px 40px; width:100%; }

	@media only screen and (min-width: 1025px) { .has-banner,.has-banner::after { max-height:1440px; } }
	@media only screen and (min-width: 1199px) { .has-banner,.has-banner::after { max-height:1440px; } }
	@media only screen and (min-width: 991px) { .welcome-info { top:100px; } }
	@media only screen and (min-width: 1199px) { .welcome-info { top:100px; } }
	@media only screen and (max-width: 320px) { 	#title
	{position: absolute; bottom: 15%; padding: 10px 40px; width:100%; }  }
	@media only screen and (max-width: 767px){ 
		.stats-chart{
			padding-bottom: 20px;
		}
		section .widget-title {
			font-size: 2em !important;
		}
	}

	.banner-h2, .banner-h4 {width: 60% !important; margin: 0px auto !important; }
	.banner-h2 {font-size: 4em; color: #fff; border-top: 1px #fff solid; padding: 20px 10px 0px; text-shadow: 1px 1px #444;}
	.banner-h4 {font-size: 24px; color: #fff;  border-bottom: 1px #fff solid; padding: 5px 10px 20px; font-weight: 200; text-shadow: 1px 0px #444; text-transform: none !important; }
	
	.subheading{font-size: 20px; color: #fff; opacity: 0.8; text-shadow: none !important;}

	.title-date{
		color: #aaa; font-size: 14px; text-shadow: none !important; line-height: 2;
	}

	.dialoge{
		display: block;
		margin: 40px 0px 20px 40px !important; 
		line-height: 1.8;
		
	}

	@media only screen and (max-width: 767px) {    
		.banner-h2, .banner-h4 {width: 100% !important; margin: 0px auto !important; }

		.banner-h2{
			padding: 10px 0px 0px !important;
			font-size: 35px !important;
		}
	.subheading{ display: none}
		.banner-h4 {font-size: 20px;}

		.action-area{
			padding: 100px 0px !important;
		}
		
		.dialoge{
			margin: 40px 0px 20px 10px !important; 
		}

		#services p {padding: 5px 20px;}
		.makers-story-area-heading {
			padding-left: 20px;
		}
		.visible-xs-mobile {
			display: inline-block;
		}
		.hidden-xs {
			display: none;
		}
		.mobile-right-none {
			margin-right: 0px !important;
		}
		.mobile-left-none {
			margin-left: 0 !important;
		}
		.sound-cloud-margin {
			margin: 10px;
		}
	}

	.homepage-hero-module {
    border-right: none;    border-left: none;
    position: relative;
}
.no-video .video-container video,
.touch .video-container video {
    display: none;
}
.no-video .video-container .poster,
.touch .video-container .poster {
    display: block !important;
}
.video-container {
    position: relative;
    bottom: 0%;
    left: 0%;
    height: 100%;
    width: 100%;
    overflow: hidden;
    background: #000;
}
.video-container .poster img {
    width: 100%;
    bottom: 0;
    position: absolute;
}
.video-container .filter {
    z-index: 100;
    position: absolute;
    background: rgba(0, 0, 0, 0.4);
    width: 100%;
}
.video-container video {
    position: absolute;
    z-index: 0;
    bottom: 0;
}
.video-container video.fillWidth {
    width: 100%;
}
	
	
	
	
	#primary_nav_wrap
{
	margin-top:15px
}

#primary_nav_wrap ul
{
	list-style:none;
	position:relative;
	float:left;
	margin:0;
	padding:0
}

#primary_nav_wrap ul a
{
	display:block;
	color:#333;
	text-decoration:none;
	font-weight:700;
	font-size:12px;
	line-height:32px;
	padding:0 15px;
	font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif
}

#primary_nav_wrap ul li
{
	position:relative;
	float:left;
	margin:0;
	padding:0
}

#primary_nav_wrap ul li.current-menu-item
{
	background:#ddd
}

#primary_nav_wrap ul li:hover
{
	background:#f6f6f6
}

#primary_nav_wrap ul ul
{
	display:none;
	position:absolute;
	top:100%;
	left:0;
	background:#fff;
	padding:0
}

#primary_nav_wrap ul ul li
{
	float:none;
	width:200px
}

#primary_nav_wrap ul ul a
{
	line-height:120%;
	padding:10px 15px
}

#primary_nav_wrap ul ul ul
{
	top:0;
	left:100%
}

#primary_nav_wrap ul li:hover > ul
{
	display:block
}
	

.foj-nav
{
	background-color: #ddd;
}

.fixedElement {
    background-color: #c0c0c0;
    position:fixed;
    top:0;
    width:100%;
    z-index:1000;
}


</style>




<!-- 	for stats. bar  -->
<script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/waypoints.min.js?ver=1"></script>
<script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/wow.min.js?ver=1"></script>
<script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/wow-init.js?ver=1"></script>
<script>
jQuery(function(i){if(i(window).width()>1024){var n=i(window).height();i(".has-banner, .overlay").css("height",n),i(window).resize(function(){var n=i(window).height();i(".has-banner, .overlay").css("height",n)})}i(window).resize(function(){if("none"==i(".header-image").css("display")){var n=i(window).height();i(".has-banner, .overlay").css("height",n)}else i(".has-banner, .overlay").css("height","auto")})}),jQuery(function(i){i("#page").css("visibility","visible")}),jQuery(function(i){i(".sub-menu").hide(),i(".main-navigation .children").hide(),i(".menu-item").hover(function(){i(this).children(".sub-menu").slideDown()},function(){i(this).children(".sub-menu").hide()}),i(".main-navigation li").hover(function(){i(this).children(".main-navigation .children").slideDown()},function(){i(this).children(".main-navigation .children").hide()})}),jQuery(function(i){i(document).ready(function(){i("body").fitVids()})}),jQuery(function(i){i(".fact").waypoint(function(){i(".fact").each(function(){var n=i(this);i({Counter:0}).animate({Counter:n.attr("id")},{duration:5e3,easing:"swing",step:function(){n.text(Math.ceil(this.Counter))}})})},{offset:"90%",triggerOnce:!0}),i(".skill-bar").waypoint(function(){i(".skill-bar").each(function(){var n=i(this),e=i(this).attr("id"),t=e*n.width()/100;n.find("div").animate({width:t},1e3).html(e+"%&nbsp;")})},{offset:"90%",triggerOnce:!0})}),jQuery(function(i){i(window).bind("load",function(){i(".top-bar").sticky()})}),jQuery(function(i){i(".so-panel.widget, .panel.widget").addClass("container")}),jQuery(function(i){i(".social-area li a, .social-widget a").attr("target","_blank")}),jQuery(function(i){i('a[href*="#"]:not([href="#"],[class*="tab"] a,.wc-tabs a, .activity-content a)').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var n=i(this.hash),e=i(".top-bar").height();if(n=n.length?n:i("[name="+this.hash.slice(1)+"]"),"#site-navigation"!=this.hash&&i(window).width()>1024){if(n.length)return i("html,body").animate({scrollTop:n.offset().top-e+40},800),!1}else if(n.length)return i("html,body").animate({scrollTop:n.offset().top},800),!1}})}),jQuery(function(i){i(".nav-search").click(function(){i(".nav-search-box").addClass("search-visible")}),i(".search-close").click(function(){i(".nav-search-box").removeClass("search-visible")})});
</script>

<script>
	//jQuery is required to run this code
$( document ).ready(function() {

    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});

function scaleVideoContainer() {

    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){

    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
    windowHeight = $(window).height() + 5,
    videoWidth,
    videoHeight;

    console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

            $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    });
}

$(window).scroll(function(e){ 
  var $el = $('.fixedElement'); 
  var isPositionFixed = ($el.css('position') == 'fixed');
  if ($(this).scrollTop() > 250 && !isPositionFixed){ 
    $('.fixedElement').css({'position': 'fixed', 'top': '75px'}); 
  }
  if ($(this).scrollTop() < 250 && isPositionFixed)
  {
    $('.fixedElement').css({'position': 'static', 'top': '0px'}); 
  } 
});


</script>

<section class="hero">
	<div id="cover">
		<img src="http://490z7i45htbb1f4tty9mdpi6.wpengine.netdna-cdn.com/wp-content/uploads/2017/03/Outliers_page_lead.jpg" class="img-responsive" />
	</div>
</section>


<!-- #masthead -->		
<div class="clearfix"> </div>

<div class="content-area clearfix ">
	<div id="primary" class="fp-content-area">
		<main id="main" class="site-main" role="main">
			<div class="entry-content">
				
				<div id="pl-2040">
					<div class="panel-grid" id="pg-2040-0">
						<div class="panel-row-style-hello hello panel-row-style">
							<div class="panel-grid-cell" id="pgc-2040-0-0">
								<section id="services" class="services-area">
									<div class="container">
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
												<p><br /> FactorDaily Outliers — a podcast about the ones who chose to take the road not taken. It’s about the crazy and the curious. Those that dared to stand out, and stand alone. It’s about their journey through hope and disillusionment, failures and pitfalls, joys and successes, pain and bliss. It’s a candid exploration of experiences and ideas that have driven some of the shining stars, told as is.
			        							</p>
			        							<p style="text-align:center; font-family: Roboto; font-weight: 500; margin-bottom: -10px; text-decoration: underline; ">Subscribe</p>
			        							<div align="center">
			        							<a href="https://itunes.apple.com/in/podcast/outliers/id1190890158?mt=2"  target="_blank"><img src="http://factordaily.com/wp-content/uploads/2017/03/1489760300_itunes_A.png" class="mobile-left-none" style="width: 80px;margin: 0px 10px;"></a>
			        							<a href="http://feeds.soundcloud.com/users/soundcloud:users:190754011/sounds.rss" class="visible-xs-mobile" target="_blank"><img src="http://factordaily.com/wp-content/uploads/2017/03/1489760296_RSS.png" style="width: 35px;margin: 0px 30px;"></a>
			        							<a href="https://soundcloud.com/factordaily" target="_blank"><img src="http://factordaily.com/wp-content/uploads/2017/03/1489760304_soundcloud.png" class="mobile-right-none sound-cloud-margin" style="width: 80px;"></a>
			        							</div>
											</div>
										</div>
										
										
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
				<div class="wrap filter-stories">
					
			        <h2 class="makers-story-area-heading"> Here are some of our recent podcasts.</h2>
					<div class="hidden-xs">
			    	<div class="content"></div>
			      <?php 
				    $i = 0;
			        $count = 0;
			
			        $the_query = new WP_Query( 
						          array(
						          'tag' => 'podcast',
								  'posts_per_page' => '-1'
								  ) );
			        while ( $the_query->have_posts() ) : $the_query->the_post();?>
			        
			        <div class="row">
					<div class="card verticle-grid-rows">
						<div class="col-md-4 col-xs-4 img-section">
							
							<?php 
								if(get_post_type() == 'fd_opinion'){
						        	echo get_avatar( get_the_author_meta( 'user_email' ), 150 );
								} else {
							?>
								<picture>    
						            <a href="<?php the_permalink(); ?>">
						            <?php 
							            
									$the_thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "lead5" );
									$thumbnail_src = $the_thumbnail_src[0];
									$check_thumb = strpos($thumbnail_src, '233x132');
									// if custom image size exist
									if( $check_thumb ):
									the_post_thumbnail('thumbnail');
									else:
									the_post_thumbnail('thumbnail'); // if not, use default thumbnail
									endif;	
									 ?> 
						            </a>
								</picture> 
							<?php } ?> 
							  
						</div>
						<div class="col-md-8 col-xs-8">
							<div class="card-block">
								<span class="author-name vcard">
											<?php if ( function_exists( 'coauthors_posts_links' ) ) {
											    coauthors_posts_links();
											} else {
											    the_author_posts_link();
											};?>
								</span>
								<h4 class="card-title"><a href="<?php the_permalink(); ?>" style="font-family: 'Oswald';color: #333;font-size: 1.2em;"><?php the_title(); ?></a></h4>
								<div class="entry-content hidden-xs ">
									<?php the_excerpt(); ?>
								</div><!-- .entry-content -->
								<span class="category-link ">      
								
									<?php
										get_post_category();
									?>
								
						        </span>
								
						        
								<br>
						        <time class="entry-date" datetime=""> 
									<?php echo get_the_time('F j, Y') ?>
								</time>
								
							</div>
							<footer class="entry-meta hidden-xs">
								<?php fd_sharing_buttons(); ?>

	    					</footer><!-- .entry-meta -->
						</div>
						<footer class="entry-meta visible-xs col-xs-12">
							<?php fd_sharing_buttons(); ?>

    					</footer><!-- .entry-meta -->
						
						<div class="clearfix"></div>
					</div>
				</div>
				<br>
			        
			        <?php			        
			        endwhile ;
			      ?>
			      </div>
				</div>
				<div class="visible-xs">
					<div class="swiper-container">
				        <div class="swiper-wrapper ">   
						
						<?php
							$i = 0;
				        $count = 0;
				
				        $the_query = new WP_Query( 
							          array(
							          'tag' => 'podcast',
									  'posts_per_page' => '-1'
									  ) );
							while ( $the_query->have_posts() ) : $the_query->the_post();
							$i++;
							$cols = array('col-md-3','col-sm-6','col-xs-6', 'swiper-slide');
							include( locate_template( 'culture.php', false, false ) );
							//get_template_part( 'content', get_post_format() ); 
							endwhile ;
						?>
				        </div>
					</div>
				</div>
			
				<div class="clearfix"> </div>
				<div id="pl-2040">
					<div class="panel-grid" id="pg-2040-0">
						<div class="panel-row-style-hello hello panel-row-style">
							<div class="panel-grid-cell" id="pgc-2040-0-0">
								<section id="services" class="services-area">
									<div class="container">
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
												<div class="col-md-12">
													<?php wp_reset_query(); while ( have_posts() ) : the_post(); ?>
													<?php the_content('content', 'page'); ?>
													<?php endwhile; // end of the loop. ?>
													</div>
												</div>
											</div>
											
											
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
				
			</div>
		<!-- .entry-content -->
		</main>
	<!-- #main -->
	</div>
<!-- #primary -->
</div>
<style>
    body {
        background: #fff;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }
    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 300px;
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
        coverflow: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true
        }
    });
    </script>

        
<?php get_footer(); ?>
