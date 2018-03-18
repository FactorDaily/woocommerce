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

<!-- 	for blockquote   -->
<style>
	.hero {
		background: url("http://factordaily.com/wp-content/uploads/2016/09/FactorBranded_Lead.jpg") no-repeat center center ;
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
		border: 0 !important;
		font-size: 2em;
		font-family: "adelle", serif;
		line-height: 1.8em;
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
		margin: 0 .2em .2em 0;
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
	#cover
	{position: relative; height: 100%; text-align: center; background: rgba(0, 0, 0, 0.2);}
	#title
	{position: absolute; bottom: 5%; padding: 10px 40px; width:100%; }

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

	.banner-h2, .banner-h4 {width: 50% !important; margin: 0px auto !important; }
	.banner-h2 {font-size: 60px; color: #fff; border-top: 1px #fff solid; padding: 20px 10px; text-shadow: 1px 1px #999;  border-bottom: 1px #fff solid;}
	.banner-h4 {font-size: 24px; color: #fff;  border-bottom: 1px #fff solid; padding: 5px 10px 20px; font-weight: 200; text-shadow: 1px 0px #999; text-transform: none !important; }

	.title-date{
		color: #aaa; font-size: 14px; text-shadow: none !important; line-height: 2;
	}

	@media only screen and (max-width: 767px) {    
		.banner-h2, .banner-h4 {width: 100% !important; margin: 0px auto !important; }

		.banner-h2{
			padding: 10px 0px 0px !important;
			font-size: 35px !important;
		}

		.banner-h4 {font-size: 20px;}

		.action-area{
			padding: 100px 0px !important;
		}

	}

</style>




<!-- 	for stats. bar  -->
<script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/waypoints.min.js?ver=1"></script>
<script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/wow.min.js?ver=1"></script>
<script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/wow-init.js?ver=1"></script>
<script>
jQuery(function(i){if(i(window).width()>1024){var n=i(window).height();i(".has-banner, .overlay").css("height",n),i(window).resize(function(){var n=i(window).height();i(".has-banner, .overlay").css("height",n)})}i(window).resize(function(){if("none"==i(".header-image").css("display")){var n=i(window).height();i(".has-banner, .overlay").css("height",n)}else i(".has-banner, .overlay").css("height","auto")})}),jQuery(function(i){i("#page").css("visibility","visible")}),jQuery(function(i){i(".sub-menu").hide(),i(".main-navigation .children").hide(),i(".menu-item").hover(function(){i(this).children(".sub-menu").slideDown()},function(){i(this).children(".sub-menu").hide()}),i(".main-navigation li").hover(function(){i(this).children(".main-navigation .children").slideDown()},function(){i(this).children(".main-navigation .children").hide()})}),jQuery(function(i){i(document).ready(function(){i("body").fitVids()})}),jQuery(function(i){i(".fact").waypoint(function(){i(".fact").each(function(){var n=i(this);i({Counter:0}).animate({Counter:n.attr("id")},{duration:5e3,easing:"swing",step:function(){n.text(Math.ceil(this.Counter))}})})},{offset:"90%",triggerOnce:!0}),i(".skill-bar").waypoint(function(){i(".skill-bar").each(function(){var n=i(this),e=i(this).attr("id"),t=e*n.width()/100;n.find("div").animate({width:t},1e3).html(e+"%&nbsp;")})},{offset:"90%",triggerOnce:!0})}),jQuery(function(i){i(window).bind("load",function(){i(".top-bar").sticky()})}),jQuery(function(i){i(".so-panel.widget, .panel.widget").addClass("container")}),jQuery(function(i){i(".social-area li a, .social-widget a").attr("target","_blank")}),jQuery(function(i){i('a[href*="#"]:not([href="#"],[class*="tab"] a,.wc-tabs a, .activity-content a)').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var n=i(this.hash),e=i(".top-bar").height();if(n=n.length?n:i("[name="+this.hash.slice(1)+"]"),"#site-navigation"!=this.hash&&i(window).width()>1024){if(n.length)return i("html,body").animate({scrollTop:n.offset().top-e+40},800),!1}else if(n.length)return i("html,body").animate({scrollTop:n.offset().top},800),!1}})}),jQuery(function(i){i(".nav-search").click(function(){i(".nav-search-box").addClass("search-visible")}),i(".search-close").click(function(){i(".nav-search-box").removeClass("search-visible")})});
</script>
<section class="hero">
	<div id="cover">
		<div id="title">
			<h2 class="banner-h2"> FactorBranded</h2>
		</div>
	</div>
</section>

<section class="row">
		<div class="container">
		<div class="row">
			<?php wp_reset_query(); while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>
			</div>
		</div>
</section>
<!-- #page -->
<?php get_footer(); ?>