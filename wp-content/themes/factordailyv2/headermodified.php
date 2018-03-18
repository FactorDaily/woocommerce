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

<body <?php body_class(); ?>>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <button type="button" class="close closebtn" data-dismiss="modal" aria-hidden="true">&times;</button>
      <div class="modal-body">
		  	<?php get_search_form(); ?>
      </div>
    </div>
  </div>
</div>
<div id="page" class="hfeed site">
	<div id="SearchNav" class="search-overlay" style="z-index: 9">

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
					<span><a href="https://www.facebook.com/factordaily/" target="_blank"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/bn-fb.svg"></a></span>
				  <span><a href="https://twitter.com/factordaily"  target="_blank"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/bn-tw.svg"></a></span>
				  <span><a href="https://www.instagram.com/factordaily/"  target="_blank"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/bn-in.svg"></a></span>
				</div>
				<div class="logo-img"><a href="/"><img id="scroll-visible-toggle" class="img-responsive" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo.svg"/><a></div>
				<div id="visible-button-toggle" class="head-buttons-search-subscribe search-subs-sticky-header hidden-xs">
 <button class="visible-button-toggle" data-toggle="modal" data-target="#myModal">
 <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/search.svg"/><span>Search</span>
</button> 
				<?php //$icon = "<button id='visible-button-toggle'><i class='fa fa-envelope-o' style='color: #9D9D9D; font-size: 17px;'></i><span>Subscribe</span></button>"; ?>
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
		 <div id="desktop-search-btn-visibility-toggle" class="head-buttons-search-subscribe desktop-share-search hidden-xs">
 <button class="visible-button-toggle" data-toggle="modal" data-target="#myModal">
 <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/search.svg"/><span>Search</span>
</button> 
			<?php //$icon = "<button id='button-transform' class='search-subscribe'><i class='fa fa-envelope-o' style='color: #9D9D9D; font-size: 17px;'></i><span>Subscribe</span></button>"; ?>
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
					        <span><a href="https://www.facebook.com/factordaily/"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/bn-fb.svg" style="width: 21px; height: 21px; vertical-align: super;"></a></span>
		    			</div>
					</div>
				</nav>
				<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div class="logo container"><a href="/"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo.svg"/></a></div>
				</nav>
				<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div class="container">
						<i onclick="openSearchx()" data-toggle="modal" data-target="#myModal">
							<img class="search-subscribe-buttons" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/search.svg"/>
						</i>
					</div>
				</nav>
				<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div class="container">
						<!--<img class="search-subscribe-buttons" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/news.svg"/>-->
<?php //$mobileicon = "<img class='search-subscribe-buttons' src='".get_bloginfo('stylesheet_directory')."/images/news.svg'/>"; ?>
<?php //echo do_shortcode('[rapidology_on_click_intent optin_id=optin_10 display=inline]'.$mobileicon.' [/rapidology_on_click_intent]'); ?>
					</div>
				</nav>
			</div>
	    </div>
	    
	    
	    
    </header>
	<div id="content" class="site-content">