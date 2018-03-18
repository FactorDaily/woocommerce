<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element.
 *
 * @package WordPress
 * @subpackage Factor_Daily_V2
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta name="google-site-verification" content="qKPREi4rMTu3HmXWievulcKHNFKh-XQM7RIL7e38rMI" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta og:url="http://factordaily.com/">
	<meta og:type="website">
	<meta og:title="FactorDaily">
	<meta og:description="Stories from the intersection of Technologies and Life">
	<meta og:image="http://factordaily.com/wp-content/uploads/2017/02/SNS_Cover1-1024x537.png">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php if(get_post_type() == 'shorthand_story') { echo 'id="story-body"'; } ?>>
<?php 
if(get_post_type($post->ID) == 'shorthand_story') {
//do not load the default elements
}else{
?>

<div id="page" class="hfeed site">

	<div id="SearchNav" class="search-overlay" style="z-index: 9">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeSearch()">&times;</a>
		  <div class="search-overlay-content">
		  	<?php get_search_form(); ?>
		  </div>
	</div>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>   
        <?php wp_nav_menu(array('theme_location' => 'flyout'));?>
        <!--animesh here goes your second menu on header.php-->
<hr>
         <?php wp_nav_menu(array('theme_location' => 'flyout-secondary')); ?>
        </div>
	</div>
    <header class="hidden-xs hidden-sm">
      	<div id='contentasda' class="head-wrapper  head-scroll">

	      	<div class="sticky-header">
				<div class="social-media-head-icons">
					<span><a href="https://www.facebook.com/factordaily/" target="_blank"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/bn-fb.svg"></a></span>
				  <span><a href="https://twitter.com/factordaily"  target="_blank"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/bn-tw.svg"></a></span>
				  <span><a href="https://www.instagram.com/factordaily/"  target="_blank"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/bn-in.svg"></a></span>
				</div>
				<div class="logo-img"><a href="/"><img id="scroll-visible-toggle" class="img-responsive" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo.svg"/><a></div>
				<!--<div class="fdtopeventbar"><h5><a class="event-head">ProductHunt Bengaluru Meetup on September 07, 2017&nbsp;&nbsp;</a><a class="btn btn-warning" href="https://factordaily.com/product-hunt-bengaluru-factordaily-meetup-2017/" target="_blank">Sign up!</a></span></h5></div>-->
				<div  class="head-buttons-search-subscribe search-subs-sticky-header hidden-xs">
					<button  onclick="openSearch()"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/search.svg"/><span>Search</span></button>

				<?php $icon = "<button id='visible-button-toggle'><i class='fa fa-envelope-o' style='color: #9D9D9D; font-size: 17px;'></i><span>Subscribe</span></button>"; ?>
				<?php //echo do_shortcode('[rapidology_on_click_intent optin_id=optin_10 display=inline]'.$icon.' [/rapidology_on_click_intent]'); ?>

				</div>
		        <div class="navigation-list">
				<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
		        </div>
		        <div class="clearfix"></div>
	      	</div>
	    </div>
        <?php if(is_home() || is_front_page() || is_404()) { ?>
        
	    <div class="logo-area">
	    	<div class="logo col-md-6">
		    	<div class="big-logo-img">
			    	<img id="shrink-invisible" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo.svg"/>
			    </div>
	    	</div>
			<div class="vertical-line"></div>
			<div class="logo-tag col-md-3 hidden-xs">
            	<?php 
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<h2 class="site-description"><?php echo $description; ?></h2>
					<?php endif;
				?>
				<span><?php echo date('d F Y'); ?></span>
			</div>
	    </div>
	    <div id="anchor-point-desktop"></div>

		</div>
        <?php } ?> 
    </header>
    
    <header class="visible-xs visible-sm">

	    <div id='contentmobile2' class="head-wrapper head-scroll" style="display: none; background: #f2f2f2">
			<div class="sticky-header">
				<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" onclick="openNav()">
								<span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						    </button>
		    			</div>
					</div>
				</nav>
				<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div class="logo container"><a href="/"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo.svg"/></a></div>
				</nav>
				<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div id="social-sharing-append"></div>
				</nav>
				
			</div>
	    </div>
	    
	    
	    
	    
	   
<!--<div style="display:flex; justify-content: space-around; padding-top: 20px;"> -->
		<div id='contentmobile' class="head-wrapper head-scroll">
			<div class="sticky-header" >
				
				<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" onclick="openNav()">
								<span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						    </button>
		    			</div>
		
					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
							<ul class="nav navbar-nav">
						<li><a href="https://factordaily.com/companies/" data-wpel-link="internal">Companies</a></li>
						<li><a href="https://factordaily.com/future/" data-wpel-link="internal">Future</a></li>
						<li><a href="https://factordaily.com/podcasts/" data-wpel-link="internal">Podcasts</a></li>
								</ul>
						</div>
					</div>
				</nav>
				<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div class="container">
						<div class="navbar-header">
					        <span><a href="https://www.facebook.com/factordaily/"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/bn-fb.svg" style="width: 21px; height: 21px; vertical-align: super;"></a></span>
		    			</div>
					</div>
				</nav>
				<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div class="logo container"><a href="/"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo.svg"/></a></div>
				</nav>
				<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div class="container">
						<i onclick="openSearch()">
							<img class="search-subscribe-buttons" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/search.svg"/>
						</i>
					</div>
				</nav>
				<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
					<!--<a href="https://factordaily.com/product-hunt-bengaluru-factordaily-meetup-2017/"><div class="container event-styling">
						<img class="animate-event" style="" src="<?php //echo get_bloginfo('stylesheet_directory'); ?>/images/product.png"/>
						<span class="animate-event animation-styling"> 1 </span> -->
<?php //$mobileicon = "<img class='search-subscribe-buttons' src='".get_bloginfo('stylesheet_directory')."/images/news.svg'/>"; ?>
<?php //echo do_shortcode('[rapidology_on_click_intent optin_id=optin_10 display=inline]'.$mobileicon.' [/rapidology_on_click_intent]'); ?>
					</div></a>
				</nav>
			</div>
	    </div>
	    
	    
	    
    </header>
    <script>
/*
	    // left: 37, up: 38, right: 39, down: 40,
		// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
		var keys = {37: 1, 38: 1, 39: 1, 40: 1};
		function preventDefault(e) {
		  e = e || window.event;
		  if (e.preventDefault)
		      e.preventDefault();
		  e.returnValue = false;  
		}
		
		function preventDefaultForScrollKeys(e) {
		    if (keys[e.keyCode]) {
		        preventDefault(e);
		        return false;
		    }
		}
		
		function disableScroll() {
		  if (window.addEventListener) // older FF
	      window.addEventListener('DOMMouseScroll', preventDefault, false);
		  window.onwheel = preventDefault; // modern standard
		  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
		  window.ontouchmove  = preventDefault; // mobile
		  document.onkeydown  = preventDefaultForScrollKeys;
		}
		
		function enableScroll() {
		    if (window.removeEventListener)
	        window.removeEventListener('DOMMouseScroll', preventDefault, false);
		    window.onmousewheel = document.onmousewheel = null; 
		    window.onwheel = null; 
		    window.ontouchmove = null;  
		    document.onkeydown = null;  
		}
		
*/
    	function openSearch() {
		    document.getElementById("SearchNav").className = "search-overlay open-modal-search";
		}
		
		function closeSearch() {
		    document.getElementById("SearchNav").className = "search-overlay";
		}
		function openNav() {
		    document.getElementById("mySidenav").style.width = "100%";
// 		    disableScroll();
		    
		}
		
		function closeNav() {
		    document.getElementById("mySidenav").style.width = "0";
// 		    enableScroll();
		}
    </script>
<?php } ?>
	<div id="content" class="site-content">