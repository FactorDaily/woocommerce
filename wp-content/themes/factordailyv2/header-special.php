<?php
/**
 * The template for displaying the header on special stories
 *
 * Displays all of the head element.
 *
 * @package WordPress
 * @subpackage Factor_Daily_V2
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- DO NOT MODIFY -->
<!-- Quora Pixel Code (JS Helper) -->
<script>
!function(q,e,v,n,t,s){if(q.qp) return; n=q.qp=function(){n.qp?n.qp.apply(n,arguments):n.queue.push(arguments);}; n.queue=[];t=document.createElement(e);t.async=!0;t.src=v; s=document.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s);}(window, 'script', 'https://a.quora.com/qevents.js');
qp('init', '1e94e638d65f4a65bcc9a7ba5eec7b5c');
qp('track', 'ViewContent');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://q.quora.com/_/ad/1e94e638d65f4a65bcc9a7ba5eec7b5c/pixel?tag=ViewContent&noscript=1"/></noscript>
<!-- End of Quora Pixel Code -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

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
    <header class="hidden-xs">
      	<div id='contentasda' class="head-wrapper  head-scroll">
	      	<div class="sticky-header">
				<div class="social-media-head-icons">
					<span><a href="https://facebook.com"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/bn-fb.svg"></a></span>
				  <span><a href="https://twitter.com"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/bn-tw.svg"></a></span>
				  <span><a href="https://mail.google.com"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/bn-in.svg"></a></span>
				</div>
				<div class="logo-img"><a href="/"><img id="transform-img" class="img-responsive logo-transform" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo.svg"/><a></div>
				<div class="head-buttons-search-subscribe search-subs-sticky-header hidden-xs">
	<!-- 				<button class="search-subscribe"><img src="../wp-content/themes/factordailyv2/images/search.svg"/><span><?php get_search_form(); ?></span></button> -->
					<button class="search-subscribe" onclick="openSearch()"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/search.svg"/><span>Search</span></button>

				<?php //$icon = "<button class='search-subscribe'><img src='".get_bloginfo('stylesheet_directory')."/images/news.svg'/><span>Subscribe</span></button>"; ?>
				<?php //echo do_shortcode('[rapidology_on_click_intent optin_id=optin_10 display=inline]'.$icon.' [/rapidology_on_click_intent]'); ?>

				</div>
		        <div class="navigation-list">
				<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
		        </div>
		        <div class="clearfix"></div>
	      	</div>
	    </div>
        <?php if(is_home() || is_front_page()) { ?>
	    <div class="logo-area">
	    	<div class="logo col-md-6"></div>
			<div class="vertical-line"></div>
			<div class="logo-tag hidden-xs">
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
		<div class="head-buttons-search-subscribe hidden-xs">
<!-- 			<button class="search-subscribe"><img src="../wp-content/themes/factordailyv2/images/search.svg"/><span><?php get_search_form(); ?></span></button> -->
			<button class="search-subscribe" onclick="openSearch()"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/search.svg"/><span>Search</span></button>
			<?php //$icon = "<button class='search-subscribe'><img src='".get_bloginfo('stylesheet_directory')."/images/news.svg'/><span>Subscribe</span></button>"; ?>
			<?php //echo do_shortcode('[rapidology_on_click_intent optin_id=optin_10 display=inline]'.$icon.' [/rapidology_on_click_intent]'); ?>
		</div>
        <?php } ?>
    </header>
    
    <header class="visible-xs">

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
								<li><a href="http://fdthird.staging.wpengine.com/companies/">Companires</a></li>
								<li><a href="http://fdthird.staging.wpengine.com/culture/">Culture</a></li>
								<li><a href="http://fdthird.staging.wpengine.com/future/">Future</a></li>
								<li><a href="http://fdthird.staging.wpengine.com/lifestyle/">Lifestyle</a></li>
							</ul>

						</div>
					</div>
				</nav>
				<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div class="container">
						<div class="navbar-header">
					        <span><a href="https://facebook.com"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/bn-fb.svg" style="width: 21px; height: 21px; vertical-align: super;"></a></span>
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
					<div class="container">
						<img class="search-subscribe-buttons" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/news.svg"/>
					</div>
				</nav>
			</div>
	    </div>
	    
	    
	    
    </header>
