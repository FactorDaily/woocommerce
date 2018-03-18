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
		background: url("http://factordaily.com/wp-content/uploads/2016/11/contributors.jpg") no-repeat center center ;
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

.author-card > img {
	margin-top: 20px !important;
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
			<h2 class="banner-h2" style="border-bottom: 1px #fff solid;"> FactorDaily Contributors Network</h2>
<!-- 			<h4 class="banner-h4"> Tracking all maker movements in India</h4> -->
		</div>
	</div>
</section>





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
												
												<h3 class="widget-title" style="padding-top: 50px !important;"> Post Guidelines </h3>
												<p><br /> We regularly publish articles from people who wish to reach our discerning audience. Keeping the readers interests in mind, we've set the following guidelines.</p><p>

1) The post should be original and preferably written exclusively for FactorDaily.</p><p>

2) Plagiarism is a strict no for us. While quoting or using excerpts from other sources, do mention or link-back to them.</p><p>

3) Articles should be marketing-neutral and written with an intent to help the reader. It must not plug the authors product, company or work.</p><p>

4) We'll credit the author in the article with a brief bio and links to the author's social profiles.</p><p>

The decision to publish a post rests completely with FactorDaily's editorial team.</p>

											</div>
										</div>
										
										
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
				
<!--
				<section id="authors" class="text-center" >
					<div class="container">
						<div class="page-header">
							<h3 class="text-center"><span>FactorDaily <strong>Team</strong></span></h3>
						</div>
						<?php
					//list 5 latest contributors
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
					  while ($my_query->have_posts() && $count < 3) : $my_query->the_post();
					    $author_id=$my_query->post->post_author;
					    $user = new WP_User( $author_id );
					    if ( !empty( $user->roles ) && is_array( $user->roles ) && in_array('contributor',$user->roles) ) {
					      if (!in_array($author_id,$authors)) {
					      	echo '<a href="';
					      	echo get_author_posts_url( get_the_author_meta( "ID" ) );
					        echo '"><div class="col-xs-12 col-sm-4">';
					        echo '<div class="col-sm-12 author-card">';
					        echo get_avatar($author_id, 215);
					        echo '<h5>';
					        the_author($author_id);
					        echo '</h5>';
					        echo '<h6>Latest Contributor</h6>';
					        echo '</div>';
					        echo '</div>';
					        echo '</a>';
					        $count++;
					        $authors[]=$author_id;
					      }
					    }
					  endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
					?>
						<a href="/about-us-team/"><button class="btn btn-info">Meet the Team</button></a>
					</div>
				</section>
-->
<!-- 				<?php include('author-team.php');?> -->
				
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