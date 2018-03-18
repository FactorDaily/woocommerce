<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>
<!--
<div class="container" style="top: 50px;position: relative;">
	<div class="row text-center">
		<div class="col-sm-6 col-sm-offset-3">
			<h2><span>All stories tagged Makers</i></span></h2>
		</div>
	</div>

	<section>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
				<?php wp_reset_query(); while ( have_posts() ) : the_post(); ?>
				<?php the_content('content', 'page'); ?>
				<?php endwhile; // end of the loop. ?>
				</div>
			</div>
	</section>
	<section id="latest-factors" class="row">
	    <div class="container" style="padding-top: 0px;">
	        <div class="row text-center">
		        <div class="col-sm-6 col-sm-offset-3">
			        <p><br /> At FactorDaily, we’ve been featuring some of the best hardware startups in India. If you’d like to tell your story, fill up the form below and you’ll hear from us soon.

			        </p>
			        <p>

Here are a few pointers before you fill up the form at the bottom of this page. Submit the form only if you are a maker or have come across a great product which you think must be featured on FactorDaily.

			        </p>
			        <p>
We’re a small team of humans behind this form. So please be patient with us. In case you don’t hear from us, it means two things: we are overwhelmed or we’ve found that your product can’t be featured on our site.
			        </p>
			        <p> Here are some of our recent videos.</p>
		        </div>
	        </div>
	        <div id="companies" class="row row-margin-bottom">
	            <?php   
	                if($tag !== 0){
	                    $args = array(
	                        'tag' => 'makers',
	                        'posts_per_page' => '-1'
	                    ); 
	                    $tag_posts = new WP_Query( $args );
	                }
	                if ( $tag_posts->have_posts() ) : 
	            ?>
	            <?php /* Start the Loop */ ?>
	            <?php  while (  $tag_posts->have_posts() ) {  $tag_posts->the_post(); ?>
	               <div class="col-md-4 no-padding lib-item" data-category="view">
									<div class="item" style="background:url(<?php the_post_thumbnail_url('large');?>) no-repeat center center; background-size:cover;margin-bottom: 20px;">
										<div class="black-overlay">
											<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
												<div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?php the_permalink();?>" data-a2a-title="<?php the_title();?>">
												    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
												    <?php if( get_field('mvp_video_embed') ): ?>
														<a class="video_icon"></a>
													<?php endif; ?>
												</div>
												<div class="mobile-text visible-xs">
													<small class="authorinfoMobile">
														<?php foreach( get_coauthors() as $coauthor ) : ?>
														<?php echo get_avatar( $coauthor->user_email, '20' ); ?>
														<?php endforeach; ?>
														<?php if ( function_exists( 'coauthors_posts_links' ) ) {
															coauthors_posts_links();
															} else {
															the_author_posts_link();
														};?>
													</small>
													<a href="<?php the_permalink();?>">
													<h5 class="page-title">
														<?php if (strlen($post->post_title) > 150)
															{echo substr(the_title($before = '', $after = '', FALSE), 0, 150) . '...'; }
															else {the_title();} ?>
													</h5>
													<small><i class="fa fa-calendar-o"></i> <?php echo get_the_time('d-M-Y') ?><?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?>
													</small>
													</a>
												</div>
												<div class="blurb">
													<div class="vertical-table hidden-xs">
														<div class="vertical-bottom">
				<small class="authorinfo">
				<?php foreach( get_coauthors() as $coauthor ) : ?>
				    <?php echo get_avatar( $coauthor->user_email, '20' ); ?>
				<?php endforeach; ?>
				<?php if ( function_exists( 'coauthors_posts_links' ) ) {
				    coauthors_posts_links();
				} else {
				    the_author_posts_link();
				};?>
				</small>
									<a href="<?php the_permalink();?>">
															<h5 class="page-title">
																<?php if (strlen($post->post_title) > 150)
																	{echo substr(the_title($before = '', $after = '', FALSE), 0, 150) . '...'; }
																	else {the_title();} ?>
															</h5>
									</a>
															<small><i class="fa fa-calendar-o"></i> <?php echo get_the_time('d-M-Y')?><?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?></small>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
	            <?php } ?>
	            <?php else : ?>
	
	                <?php get_template_part('no-results', 'index'); ?>
	
	            <?php endif; ?>
	        </div>
	    </div>
	</section>
</div>
<div class="clear break"></div>
<div class="clear break"></div>
<div class="clear break"></div>
-->

<!-- 	for blockquote   -->
<style>
	.container-fluid
	{	padding-left: 0px !important;
		padding-right: 0px !important;
	}
	.hero {
		background: url("http://factordaily.com/wp-content/uploads/2016/11/tools-498202_1920.jpg") no-repeat center center ;
		background-size: cover;
		height: 90vh; 
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
		margin-bottom: 60px;
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


	}

	.homepage-hero-module {
    border-right: none;
    border-left: none;
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
		<div id="title">
			<a name="chapter4"></a> 
			<h2 class="banner-h2"> FactorDaily Loves Makers</h2>
			<h4 class="banner-h4"> Tracking all maker movements in India</h4> 
		</div>
	</div>
</section>

<!--
<div class="homepage-hero-module">
    <div class="video-container">
        <div id="cover"  class="filter">
	        
	          <div id="title" style="opacity: 0.9">
			<h2 class="banner-h2"> 'They killed Dabholkar, but they couldn't kill his ideas'</h2>
			<span class="subheading">Fighting superstition and irrationality with science, one death threat at a time</span>	
			
			
			<h4 class="banner-h4"> By Shamsheer Yousaf 
				<span class="title-date"> <br /> October 13, 2016 </span>
			</h4> 
		</div>
	        
        </div>
      
        <video autoplay  loop class="fillWidth" preload="auto" poster="http://factordaily.com/wp-content/uploads/2016/10/Dabholkar_thumb1.jpg">
            <source src="https://s3.ap-south-1.amazonaws.com/fdvids/Dabholkar_bg.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src="https://s3.ap-south-1.amazonaws.com/fdvids/Dabholkar1.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class="poster hidden">
            <img src="http://factordaily.com/wp-content/uploads/2016/10/Dabholkar_story_inset_03.jpg" alt="">
        </div>
    </div>
</div>
-->

<div class="foj-nav fixedElement" style="display: none">
	<div class="container">
		<div class="service col-md-offset-2 col-md-8 col-xs-12">

			<nav id="primary_nav_wrap">
			<ul>
<!-- 			  <li class="current-menu-item"><a href="#">Home</a></li> -->
			  <li><a href="#chapter4">About Makers</a>
<!--
			    <ul>
			      <li><a href="#">Sub Menu 1</a></li>
			      <li><a href="#">Sub Menu 2</a></li>
			      <li><a href="#">Sub Menu 3</a></li>
			      <li><a href="#">Sub Menu 4</a>
			        <ul>
			          <li><a href="#">Deep Menu 1</a>
			            <ul>
			              <li><a href="#">Sub Deep 1</a></li>
			              <li><a href="#">Sub Deep 2</a></li>
			              <li><a href="#">Sub Deep 3</a></li>
			                <li><a href="#">Sub Deep 4</a></li>
			            </ul>
			          </li>
			          <li><a href="#">Deep Menu 2</a></li>
			        </ul>
			      </li>
			      <li><a href="#">Sub Menu 5</a></li>
			    </ul>
-->
			  </li>
			  <li><a href="#">Maker videos at FactorDaily</a>
<!--
			    <ul>
			      <li><a href="#">Sub Menu 1</a></li>
			      <li><a href="#">Sub Menu 2</a></li>
			      <li><a href="#">Sub Menu 3</a></li>
			    </ul>
-->
			  </li>
			  <li><a href="#">Submit your product</a>
<!--
			    <ul>
			      <li class="dir"><a href="#">Sub Menu 1</a></li>
			      <li class="dir"><a href="#">Sub Menu 2 THIS IS SO LONG IT MIGHT CAUSE AN ISSEUE BUT MAYBE NOT?</a>
			        <ul>
			          <li><a href="#">Category 1</a></li>
			          <li><a href="#">Category 2</a></li>
			          <li><a href="#">Category 3</a></li>
			          <li><a href="#">Category 4</a></li>
			          <li><a href="#">Category 5</a></li>
			        </ul>
			      </li>
			      <li><a href="#">Sub Menu 3</a></li>
			      <li><a href="#">Sub Menu 4</a></li>
			      <li><a href="#">Sub Menu 5</a></li>
			    </ul>
-->
			  </li>
<!--
			  <li><a href="#">Menu 4</a></li>
			  <li><a href="#">Menu 5</a></li>
			  <li><a href="#">Menu 6</a></li>
-->

			</ul>
			</nav>
		</div>
	</div>
</div>



<!-- #masthead -->		
<div class="clearfix"> </div>

<div id="content" class="site-content clearfix ">
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
												<p><br /> At FactorDaily, we’ve been featuring some of the best hardware startups in India. If you’d like to tell your story, fill up the form below and you’ll hear from us soon.

			        </p>
			        <p>

Here are a few pointers before you fill up the form at the bottom of this page. Submit the form only if you are a maker or have come across a great product which you think must be featured on FactorDaily.

			        </p>
			        <p>
We’re a small team of humans behind this form. So please be patient with us. In case you don’t hear from us, it means two things: we are overwhelmed or we’ve found that your product can’t be featured on our site.
			        </p>
			        <p> Here are some of our recent videos.</p>
											</div>
										</div>
										
										
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
				
				<section id="latest-factors" class="row hidden-xs">
				<div class="container" style="padding-top: 0px;">
					<div id="culture" class="row row-margin-bottom">
			            <?php   
			                if($tag !== 0){
			                    $args = array(
			                        'tag' => 'makers',
			                        'posts_per_page' => '-1'
			                    ); 
			                    $tag_posts = new WP_Query( $args );
			                }
			                if ( $tag_posts->have_posts() ) : 
			            ?>
			            <?php /* Start the Loop */ ?>
			            <?php  while (  $tag_posts->have_posts() ) {  $tag_posts->the_post(); ?>
			               <div class="col-md-4 no-padding lib-item " data-category="view">
											<div class="item" style="background:url(<?php the_post_thumbnail_url('large');?>) no-repeat center center; background-size:cover;margin-bottom: 20px;">
												<div class="black-overlay">
													<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
														<div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?php the_permalink();?>" data-a2a-title="<?php the_title();?>">
														    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
														    <?php if( get_field('mvp_video_embed') ): ?>
																<a class="video_icon"></a>
															<?php endif; ?>
														</div>
														<div class="mobile-text visible-xs">
															<small class="authorinfoMobile">
																<?php foreach( get_coauthors() as $coauthor ) : ?>
																<?php echo get_avatar( $coauthor->user_email, '20' ); ?>
																<?php endforeach; ?>
																<?php if ( function_exists( 'coauthors_posts_links' ) ) {
																	coauthors_posts_links();
																	} else {
																	the_author_posts_link();
																};?>
															</small>
															<a href="<?php the_permalink();?>">
															<h5 class="page-title">
																<?php if (strlen($post->post_title) > 150)
																	{echo substr(the_title($before = '', $after = '', FALSE), 0, 150) . '...'; }
																	else {the_title();} ?>
															</h5>
															<small><i class="fa fa-calendar-o"></i> <?php echo get_the_time('d-M-Y') ?><?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?>
															</small>
															</a>
														</div>
														<div class="blurb">
															<div class="vertical-table hidden-xs">
																<div class="vertical-bottom">
						<small class="authorinfo">
						<?php foreach( get_coauthors() as $coauthor ) : ?>
						    <?php echo get_avatar( $coauthor->user_email, '20' ); ?>
						<?php endforeach; ?>
						<?php if ( function_exists( 'coauthors_posts_links' ) ) {
						    coauthors_posts_links();
						} else {
						    the_author_posts_link();
						};?>
						</small>
											<a href="<?php the_permalink();?>">
																	<h5 class="page-title">
																		<?php if (strlen($post->post_title) > 150)
																			{echo substr(the_title($before = '', $after = '', FALSE), 0, 150) . '...'; }
																			else {the_title();} ?>
																	</h5>
											</a>
																	<small><i class="fa fa-calendar-o"></i> <?php echo get_the_time('d-M-Y')?><?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?></small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
			            <?php } ?>
			            <?php else : ?>
			
			                <?php get_template_part('no-results', 'index'); ?>
			
			            <?php endif; ?>
			        </div>				
				</div>
				</section>
				
				<section id="latest-factors" class="row visible-xs">
						<div class="container-fluid">
							<div class="page-header">
				<!--
								<h3 class="text-center">
									<span>Companies</span>
								</h3>
				-->
							<div id="companies">
									<?php   
						                if($tag !== 0){
						                    $args = array(
						                        'tag' => 'makers',
						                        'posts_per_page' => '-1'
						                    ); 
						                    $tag_posts = new WP_Query( $args );
						                }
						                if ( $tag_posts->have_posts() ) : 
						            ?>
						            <?php /* Start the Loop */ ?>
						            <?php  while (  $tag_posts->have_posts() ) {  $tag_posts->the_post(); ?>
										<div class="item" style="background: url(<?php the_post_thumbnail_url('large');?>) no-repeat center center; background-size:cover;">
											<div class="black-overlay">
												<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
													<div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?php the_permalink();?>" data-a2a-title="<?php the_title();?>">
													    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
													    <?php if( get_field('mvp_video_embed') ): ?>
															<a class="video_icon"></a>
														<?php endif; ?>
													</div>
													<div class="mobile-text visible-xs">
														<small class="authorinfoMobile">
															<?php foreach( get_coauthors() as $coauthor ) : ?>
															<?php echo get_avatar( $coauthor->user_email, '20' ); ?>
															<?php endforeach; ?>
															<?php if ( function_exists( 'coauthors_posts_links' ) ) {
																coauthors_posts_links();
																} else {
																the_author_posts_link();
															};?>
														</small>
														<a href="<?php the_permalink();?>">
														<h5 class="page-title">
															<?php if (strlen($post->post_title) > 150)
																{echo substr(the_title($before = '', $after = '', FALSE), 0, 150) . '...'; }
																else {the_title();} ?>
														</h5>
														<small><i class="fa fa-calendar-o"></i> <?php get_the_time('d-M-Y'); ?><?php if( get_field('read_time')): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?>
														</small>
														</a>
													</div>
													<div class="blurb">
														<div class="vertical-table hidden-xs">
															<div class="vertical-bottom">
					<small class="authorinfo">
					<?php foreach( get_coauthors() as $coauthor ) : ?>
					    <?php echo get_avatar( $coauthor->user_email, '20' ); ?>
					<?php endforeach; ?>
					<?php if ( function_exists( 'coauthors_posts_links' ) ) {
					    coauthors_posts_links();
					} else {
					    the_author_posts_link();
					};?>
					</small>
										<a href="<?php the_permalink();?>">
																<h5 class="page-title">
																	<?php if (strlen($post->post_title) > 150)
																		{echo substr(the_title($before = '', $after = '', FALSE), 0, 150) . '...'; }
																		else {the_title();} ?>
																</h5>
										</a>
																<small><i class="fa fa-calendar-o"></i> <?php echo get_the_time('d-M-Y') ?><?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?></small>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
								<?php } ?>
					            <?php else : ?>
					
					                <?php get_template_part('no-results', 'index'); ?>
					
					            <?php endif; ?>
							</div>
							<span  class="jssora11l prevcompanies">
				            </span>
				            <!-- Arrow Right -->
				            <span class="jssora11r nextcompanies">
				            </span>
						</div>
						<script>
							$(document).ready(function() {
							  $("#companies").owlCarousel({
							      items : 3,
							      itemsDesktop : [1199,3],
							      itemsDesktopSmall : [979,3]
							  });
							  $(".nextcompanies").click(function(){
							    $("#companies").trigger('owl.next');
							  })
							  $(".prevcompanies").click(function(){
							    $("#companies").trigger('owl.prev');
							  })
							});
						</script>
				</section>

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


<!-- #page -->

<?php get_footer(); ?>