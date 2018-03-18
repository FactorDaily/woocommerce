
<?php
/**
* WP Post Template: FOJ EVENT
*/
get_header(); 
?>

<!-- 	for blockquote   -->
<style>
	
	@font-face {
				font-family: BEYNO;
				src: url("https://s3-ap-southeast-1.amazonaws.com/factordaily.com/fonts/BEYNO.otf") format("opentype");
				}
	
/*
	.container-fluid
	{	padding-left: 0px !important;
		padding-right: 0px !important;
	}
*/

	div
	{overflow-x: hidden !important}
	
	.hero {
		background: url("http://factordaily.com/wp-content/uploads/2016/11/Future_of_Jobs-event.jpg") no-repeat center center ;
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
	body {
		margin: 0;
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

	.facts-area {
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
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover;
		z-index: -1;
		padding: 300px 0px !important;
	}

	cite p{ 
		line-height: 1.2; 
		font-size: 1.2em; 
		padding: 5px !important; 
		margin: 0px 0px 5px !important; 
		color: #777;
		font-weight: 400;
		font-family: "brandon-grotesque";
		text-decoration: none;
	}
	cite p i{ 
		color: #999;
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
	{position: relative; height: 100%; text-align: center; background: rgba(0, 0, 0, 0.5);}
	#title
	{position: absolute; bottom: 20%; padding: 10px 40px; width:100%; text-align: center }

	@media only screen and (min-width: 767px){ 
	.desktop-right{
		text-align: right
	}
	}
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
		
		.desktop-right{
		text-align: center;
		}
	}

	.banner-h2, .banner-h4 {width: 60% !important; margin: 0px auto !important; }
	.banner-h2 {font-size: 4em; color: #fff; border-top: 1px #fff solid; padding: 20px 10px 0px; text-shadow: 1px 1px #444; font-family: BEYNO;}
	.banner-h4 {font-size: 24px; color: #fff;  border-bottom: 1px #fff solid; padding: 5px 10px 20px; font-weight: 200; text-shadow: 1px 0px #444; text-transform: none !important; }
	
	.subheading{font-size: 20px; color: #fff; opacity: 0.8; text-shadow: none !important;}

	.title-date{
		
		color: #aaa; font-size: 20px; text-shadow: none !important; line-height: 1; padding-top: 3vh; display: block;
	}

	.dialoge{
		display: block;
		margin: 40px 0px 20px 40px !important; 
		line-height: 1.2;
		font-size: 2em;
	}

	@media only screen and (max-width: 767px) {    
		.banner-h2, .banner-h4 {width: 100% !important; margin: 0px auto !important; }

		.banner-h2{
			padding: 10px 0px 0px !important;
			font-size: 35px !important;
		}
		
	.title-date{
		
		font-size: 16px; 

	}

	.subheading{ display: none}
		.banner-h4 {font-size: 20px;}

		.action-area{
			padding: 100px 0px !important;
		}
		
		.dialoge{
			margin: 40px 0px 20px 10px !important; 
		}
		

		.speaker-img-mobile
		{
			text-align: center !important;
		}
		
		.speaker-img-mobile img{
			width: 75%;
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
	color:#fff;
	text-decoration:none;
	font-weight:700;
	font-size: 1em ;
	line-height:32px;
	padding:0 35px;
	font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif;
	text-align: center;
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
	background:#f6f6f6;
}
#primary_nav_wrap ul li:hover a
{
	color: #333 !important;
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

}
.sticky-header {
	display: none;
}
.fixedElement {
	background-color: #ef7e22;
    position:fixed;
    top:0;
    left: 0;
    width:100%;
    z-index:1000;
}

.name-foj{
	text-align: center;
	color: #fff;
	padding-top: 3vh;
	line-height: .6em;
	}
.name{
	font-family: "brandon-grotesque";
	font-size: 1.8em;
}

.designation{
	font-size: .8em; 
	display: block;
	line-height: 1.2;
	padding-top: 2vh;
	color: #7d9dcc;
}


.grey-gradient
{
background: rgba(250,247,250,1);
background: -moz-linear-gradient(top, rgba(250,247,250,1) 0%, rgba(237,237,237,1) 50%, rgba(240,240,240,1) 51%, rgba(254,254,254,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(250,247,250,1)), color-stop(50%, rgba(237,237,237,1)), color-stop(51%, rgba(240,240,240,1)), color-stop(100%, rgba(254,254,254,1)));
background: -webkit-linear-gradient(top, rgba(250,247,250,1) 0%, rgba(237,237,237,1) 50%, rgba(240,240,240,1) 51%, rgba(254,254,254,1) 100%);
background: -o-linear-gradient(top, rgba(250,247,250,1) 0%, rgba(237,237,237,1) 50%, rgba(240,240,240,1) 51%, rgba(254,254,254,1) 100%);
background: -ms-linear-gradient(top, rgba(250,247,250,1) 0%, rgba(237,237,237,1) 50%, rgba(240,240,240,1) 51%, rgba(254,254,254,1) 100%);
background: linear-gradient(to bottom, rgba(250,247,250,1) 0%, rgba(237,237,237,1) 50%, rgba(240,240,240,1) 51%, rgba(254,254,254,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#faf7fa', endColorstr='#fefefe', GradientType=0 );
}


.partner-tags
{
	text-align: center;
	font-family: "brandon-grotesque";
	
}

.tags-bkg
 {
	background: #bbb;
	color: #eee;
	padding: 3px 6px;
	border-radius: 3px;
}

.association{
	color: #333;
/* 	text-align: center !important; */
	font-family: "brandon-grotesque";
 }
 
@media only screen and (max-width: 767px) {    
	
	.association{
		text-align: center !important;
	 }
}


.hrr
{
	color: #aaa;
}

</style>




<!-- 	for stats. bar  -->
<script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/waypoints.min.js?ver=1"></script>
<script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/wow.min.js?ver=1"></script>
<script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/wow-init.js?ver=1"></script>
<script type="text/javascript">
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
  if ($(this).scrollTop() > 350 && !isPositionFixed){ 
    $('.fixedElement').css({'position': 'fixed', 'top': '43px'}); 
  }
  if ($(this).scrollTop() < 350 && isPositionFixed)
  {
    $('.fixedElement').css({'position': 'static', 'top': '0px'}); 
  } 
});


</script>

<section class="hero">
	<div id="cover">
		<div id="title">

			<div class="container-fluid">
					<div class="row">
						<div class=" col-md-2 col-md-offset-2 col-xs-4">
							<img src="/wp-content/themes/factordailyv2/images/factordaily-white.svg" style="max-width: 60%;" align="Left">
						</div>					
						<div class="col-md-4 col-xs-3">
							<p class="association" style="text-align: center;">   </p>
						</div>
						<div class="col-md-2 col-xs-5">
							<a href="http://www.careernetgroup.com" target="_blank">
								<img src="/wp-content/themes/factordailyv2/images/CareerNet_Group_Logo-white.svg" style="max-width: 90%;" align="right">
							</a>
						</div>
					</div>
					
			</div>
			
			<div class="clearfix"> </div>								
			<div class="clearfix hidden-xs"> </div>								


			<h2 class="banner-h2"> Future of Jobs in India Summit</h2>
			<h4 class="banner-h4"> Make sense of technology disrupting the workplace 
				<span class="title-date"> <br /> November 21, 2016 | 3:45 pm onwards
				<br />Grand Ballroom, The Leela Palace, Bangalore
				</span>
			</h4>
		</div>
	</div>
</section>

<div class="hidden-xs row">
	<div class="foj-nav fixedElement">
		<div class="container">
			<div class="service col-md-offset-2 col-md-10 col-xs-12">
	
				<nav id="primary_nav_wrap">
				<ul>
	<!-- 			  <li class="current-menu-item"><a href="#">Home</a></li> -->
				  <li><a href="#about">About</a>
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
				  <li><a href="#speakers">Speakers</a>
	<!--
				    <ul>
				      <li><a href="#">Sub Menu 1</a></li>
				      <li><a href="#">Sub Menu 2</a></li>
				      <li><a href="#">Sub Menu 3</a></li>
				    </ul>
	-->
				  </li>
<!-- 				  <li><a href="#">Event Details</a> -->
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

				  </li>
				  <li><a href="#">Menu 4</a></li>
				  <li><a href="#">Menu 5</a></li>
				  <li><a href="#">Menu 6</a></li>
	-->
				  <li><a href="#invite">Get an invite!</a></li>

				  <li><a href="#agenda">Agenda</a></li>
	
				  <li><a href="#partners">Partners</a></li>
				</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
 <a name="about" style="color: white;">.</a>


<!-- #masthead -->		
<div class="clearfix"> </div>
<div id="content" class="site-content clearfix ">
	<div id="primary" class="fp-content-area">
		<main id="main" class="site-main" role="main">
			<div class="entry-content">
				

				<div id="pl-2040" class="agenda-area">
					<div class="panel-grid" id="pg-2040-0">
						<div class="panel-row-style-hello hello panel-row-style">
							<div class="panel-grid-cell" id="pgc-2040-0-0">
								<section id="services" class="services-area">
									<div class="container">
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
												<h3 class="widget-title" style="margin-top: 0;">
													About the event
                                       			</h3>
                                       			
												<p>
													FactorDaily in association with CareerNet presents, The Future of Jobs in India Summit: Make sense of technology disrupting the workplace. 
												</p>
												<p>
The summit will bring together leaders and disruptors under one roof to debate ideas and share learnings on what the workplace of the future is going to be like. Technology is either disrupting or transforming jobs and work in India, just like it is in the rest of the world. But, as with everything, there is a unique India cut to this transition. After all, India is home to the world’s youngest people among large nations — our median age is around 27, two out of three Indians are 35 or younger, and a million Indians celebrate their 18th birthday every month, ready to join the workforce. <a name="speakers" style="color: white;">.</a>
												</p>
												<p>
In this context, the takeover, if you will, of existing jobs in software services, back-office, and low-end manufacturing by self-learning software, robots or other forms of automation will have huge implications for the economy and the society. That will just be the beginning as automation spreads to other sectors of the economy. On the other hand, there is a trend of jobs being created thanks to technology disruptions in banking and financial services, retail, transportation, and services in general — jobs that never existed before. 
												<p>
The Future of Jobs in India Summit aims to make sense of this change in the workplace by bringing together the finest minds shaping the future. <a name="speakers" style="color: white;">.</a>
												</p>
												

											<style>.codegena{position:relative;width:100%;height:0;padding-bottom:56.27198%;}.codegena iframe{position:absolute;top:0;left:0;width:100%;height:100%;}/*Youtube Embed Code : Created with Codegena.com */</style>
											<div class="codegena"><iframe width='600' height='424' src="https://www.youtube.com/embed/fGIgsbvQtaU?&theme=light&autohide=2&modestbranding=1&showinfo=0&rel=0"frameborder="1"></iframe></div><div style='font-size: 0.8em'>
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
				<div class="clearfix"> </div>	

				<div>
					<div>
						<div>
							<section style="background-color: #2a388f" class="hidden-xs">
									<h3 class="widget-title" style="color: #fff;">
										Speakers
                                    </h3>

<!---------------speaker row 1---- -->												

                                    <div class="row">
											
											<div class="container">
<!---------------speaker---- -->												
												<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile" style="margin-left: 3%;">
													<img src="http://factordaily.com/wp-content/uploads/2016/11/Abhijit_Bhaduri.jpg">
													<p class="name-foj">
														<span class="name">Abhijit Bhaduri</span>
														<br />
														<span class="designation">Author of The Digital Tsunami, Leadership coach and Influencer</span>
													</p>
												</div>
											

<!---------------speaker---- -->												
												<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
													<img src="http://factordaily.com/wp-content/uploads/2016/11/Anshuman.jpg">
													<p class="name-foj">
														<span class="name">Anshuman Das</span>
														<br />
														<span class="designation">Co-founder, CareerNet Group</span>
													</p>
												</div>



<!---------------speaker---- -->												
												<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
													<img src="http://factordaily.com/wp-content/uploads/2016/11/Ashwini_Ashokan.jpg">
													<p class="name-foj">
														<span class="name">Ashwini Asokan</span>
														<br />
														<span class="designation">Co-founder & CEO, Mad Street Den & Mad Street Labs</span>
													</p>
												</div>

                                    </div>

								<div class="clearfix hidden-xs"> </div>								
								<div class="clearfix hidden-xs"> </div>


<!---------------speaker row 2---- -->												

                                    <div class="row">
											
											<div class="container">

<!---------------speaker---- -->												
												<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile" style="margin-left: 3%;">
													<img src="http://factordaily.com/wp-content/uploads/2016/11/Hema.jpg">
													<p class="name-foj">
														<span class="name">Hema Ravichandar</span>
														<br />
														<span class="designation">Strategic HR Advisor & Board Member</span>
													</p>
												</div>
												
<!---------------speaker---- -->												
												<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
													<img src="http://factordaily.com/wp-content/uploads/2016/11/Mohit-Tandon.jpg">
													<p class="name-foj">
														<span class="name">Mohit Tandon</span>
														<br />
														<span class="designation">Co-founder & CSO, Delhivery</span>
													</p>
												</div>
												
<!---------------speaker---- -->												
												<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
													<img src="http://factordaily.com/wp-content/uploads/2016/11/Nandan_Nilekani.jpg">
													<p class="name-foj">
														<span class="name">Nandan Nilekani</span>
														<br />
														<span class="designation">Co-founder & Chairman, EkStep</span>
													</p>
												</div>
																								
											</div>
                                    </div>

								<div class="clearfix hidden-xs"> </div>								
								<div class="clearfix hidden-xs"> </div>


<!---------------speaker row3---- -->												

                                    <div class="row">
											
											<div class="container">

<!---------------speaker---- -->												
												<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile" style="margin-left: 3%;">
													<img src="http://factordaily.com/wp-content/uploads/2016/11/Rashmi_Daga.jpg">
													<p class="name-foj">
														<span class="name">Rashmi Daga</span>
														<br />
														<span class="designation">Founder, FreshMenu</span>
													</p>
												</div>


<!---------------speaker---- -->												
												<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
													<img src="http://factordaily.com/wp-content/uploads/2016/11/Ravi_Venkatesan.jpg">
													<p class="name-foj">
														<span class="name">Ravi Venkatesan</span>
														<br />
														<span class="designation">Chairman, Bank of Baroda</span>
													</p>
												</div>


<!---------------speaker---- -->												
												<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
													<img src="http://factordaily.com/wp-content/uploads/2016/11/Rishi_Das.jpg">
													<p class="name-foj">
														<span class="name">Rishi Das</span>
														<br />
														<span class="designation">Co-founder & CEO, CareerNet Group</span>
													</p>
												</div>
											
												
											</div>
                                    </div>

								<div class="clearfix hidden-xs"> </div>								
								<div class="clearfix hidden-xs"> </div>


<!---------------speaker row4---- -->												

                                    <div class="row">
											
											<div class="container">

<!---------------speaker---- -->												
<!--
												<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
													<img src="http://factordaily.com/wp-content/uploads/2016/11/Sachin_Bansal.jpg">
													<p class="name-foj">
														<span class="name">Sachin Bansal</span>
														<br />
														<span class="designation">Executive Chairman & Co-founder, Flipkart</span>
													</p>
												</div>
-->

<!---------------speaker---- -->												
												<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile" style="margin-left: 3%;">
													<img src="http://factordaily.com/wp-content/uploads/2016/11/Shanmugam_Nagarajan.jpg">
													<p class="name-foj">
														<span class="name">Shanmugam Nagarajan</span>
														<br />
														<span class="designation">Co-Founder & CPO, [24]7 Inc</span>
													</p>
												</div>

											
<!---------------speaker---- -->												
												<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
													<img src="http://factordaily.com/wp-content/uploads/2016/11/Sharad_Sharma.jpg">
													<p class="name-foj">
														<span class="name">Sharad Sharma</span>
														<br />
														<span class="designation">Co-founder, iSPIRT</span>
													</p>
												</div>
												
												<!---------------speaker---- -->												
												<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
													<img src="http://factordaily.com/wp-content/uploads/2016/11/Shashank_ND.jpg">
													<p class="name-foj">
														<span class="name">Shashank ND</span>
														<br />
														<span class="designation">Founder & CEO, Practo</span>
													</p>
												</div>

											</div>
                                    </div>
											

								<div class="clearfix hidden-xs"> </div>								
								<div class="clearfix hidden-xs"> </div>
 
 <!---------------speaker row5---- -->												

                                    <div class="row">
											
											<div class="container" style="text-align: center;">




<!---------------speaker---- -->												
												<div class="col-md-3 col-xs-12 speaker-img-mobile" style="margin-left: 3%;">
													<img src="http://factordaily.com/wp-content/uploads/2016/11/TK_Kurien.jpg">
													<p class="name-foj">
														<span class="name">TK Kurien</span>
														<br />
														<span class="designation">Executive Vice-Chairman, Wipro</span>
													</p>
												</div>
<!---------------speaker---- -->												
<!--
												<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
													<img src="http://factordaily.com/wp-content/uploads/2016/11/Vijay_Shekhar_Sharma.jpg">
													<p class="name-foj" name="invite">
														<span class="name">Vijay Shekhar Sharma</span>
														<br />
														<span class="designation">CEO & Founder, One97/Paytm</span>
													</p>
												</div>
-->


											</div>

                                    </div>


								<div class="clearfix hidden-xs"> </div>								
								<div class="clearfix hidden-xs"> </div>
 
                                    
							</section>
						</div>
					</div>
				</div>
				
				<section id="latest-factors" class="row visible-xs" style="background-color: #2a388f">
					<div class="container-fluid">
						<h3 class="widget-title" style="color: #fff;">
							Speakers
                        </h3>
						<div id="companies">
							<div class="item" >
								<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
									<img src="http://factordaily.com/wp-content/uploads/2016/11/Abhijit_Bhaduri.jpg">
									<p class="name-foj">
										<span class="name">Abhijit Bhaduri</span>
										<br />
										<span class="designation">Author of The Digital Tsunami, Leadership coach and Influencer</span>
									</p>
								</div>
							</div>
							<div class="item">
								<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
									<img src="http://factordaily.com/wp-content/uploads/2016/11/Anshuman.jpg">
									<p class="name-foj">
										<span class="name">Anshuman Das</span>
										<br />
										<span class="designation">Co-founder, CareerNet Group</span>
									</p>
								</div>
							</div>
							<div class="item">
								<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
									<img src="http://factordaily.com/wp-content/uploads/2016/11/Ashwini_Ashokan.jpg">
									<p class="name-foj">
										<span class="name">Ashwini Asokan</span>
										<br />
										<span class="designation">Co-founder & CEO, Mad Street Den & Mad Street Labs</span>
									</p>
								</div>
							</div>
							<div class="item">
								<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
									<img src="http://factordaily.com/wp-content/uploads/2016/11/Hema.jpg">
									<p class="name-foj">
										<span class="name">Hema Ravichandar</span>
										<br />
										<span class="designation">Strategic HR Advisor & Board Member</span>
									</p>
								</div>
							</div>
							<div class="item">
								<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
									<img src="http://factordaily.com/wp-content/uploads/2016/11/Mohit-Tandon.jpg">
									<p class="name-foj">
										<span class="name">Mohit Tandon</span>
										<br />
										<span class="designation">Co-founder & CSO, Delhivery
</span>
									</p>
								</div>
							</div>
							<div class="item">
								<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
									<img src="http://factordaily.com/wp-content/uploads/2016/11/Nandan_Nilekani.jpg">
									<p class="name-foj">
										<span class="name">Nandan Nilekani</span>
										<br />
										<span class="designation">Co-founder & Chairman, EkStep</span>
									</p>
								</div>
							</div>
							<div class="item">
								<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
									<img src="http://factordaily.com/wp-content/uploads/2016/11/Rashmi_Daga.jpg">
									<p class="name-foj">
										<span class="name">Rashmi Daga</span>
										<br />
										<span class="designation">Founder, FreshMenu</span>
									</p>
								</div>
							</div>
							<div class="item">
								<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
									<img src="http://factordaily.com/wp-content/uploads/2016/11/Ravi_Venkatesan.jpg">
									<p class="name-foj">
										<span class="name">Ravi Venkatesan</span>
										<br />
										<span class="designation">Chairman, Bank of Baroda</span>
									</p>
								</div>
							</div>
							<div class="item">
								<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
									<img src="http://factordaily.com/wp-content/uploads/2016/11/Rishi_Das.jpg">
									<p class="name-foj">
										<span class="name">Rishi Das</span>
										<br />
										<span class="designation">Co-founder & CEO, CareerNet Group</span>
									</p>
								</div>
							</div>
<!--
							<div class="item">
								<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
									<img src="http://factordaily.com/wp-content/uploads/2016/11/Sachin_Bansal.jpg">
									<p class="name-foj">
										<span class="name">Sachin Bansal</span>
										<br />
										<span class="designation">Executive Chairman & Co-founder, Flipkart</span>
									</p>
								</div>
							</div>
-->
							<div class="item">
								<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
									<img src="http://factordaily.com/wp-content/uploads/2016/11/Shanmugam_Nagarajan.jpg">
									<p class="name-foj">
										<span class="name">Shanmugam Nagarajan</span>
										<br />
										<span class="designation">Co-Founder & CPO, [24]7 Inc</span>
									</p>
								</div>
							</div>
							<div class="item">
								<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
									<img src="http://factordaily.com/wp-content/uploads/2016/11/Sharad_Sharma.jpg">
									<p class="name-foj">
										<span class="name">Sharad Sharma</span>
										<br />
										<span class="designation">Co-founder, iSPIRT</span>
									</p>
								</div>
							</div>
							<div class="item">
								<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
									<img src="http://factordaily.com/wp-content/uploads/2016/11/Shashank_ND.jpg">
									<p class="name-foj">
										<span class="name">Shashank ND</span>
										<br />
										<span class="designation">Founder & CEO, Practo</span>
									</p>
								</div>
							</div>
							<div class="item">
								<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
									<img src="http://factordaily.com/wp-content/uploads/2016/11/TK_Kurien.jpg">
									<p class="name-foj">
										<span class="name">TK Kurien</span>
										<br />
										<span class="designation">Executive Vice-Chairman, Wipro</span>
									</p>
								</div>
							</div>
<!--
							<div class="item">
								<div class="col-md-3 col-md-offset-1 col-xs-12 speaker-img-mobile">
									<img src="http://factordaily.com/wp-content/uploads/2016/11/Vijay_Shekhar_Sharma.jpg">
									<p class="name-foj" name="invite">
										<span class="name">Vijay Shekhar Sharma</span>
										<br />
										<span class="designation">CEO & Founder, One97/Paytm</span>
									</p>
								</div>
							</div>
-->

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
									<div class="container hidden-xs">
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
												<h3 class="widget-title">
													Invite Form
                                       			</h3><a name="agenda" style="color: #fff;">.</a> 
												<div class="typeform-widget " data-url="https://factordaily1.typeform.com/to/ugdrS8" data-text="Registration Form" style="width:100%;height:50vh;"></div>
<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
<div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px; text-align: center;"><a href="https://www.typeform.com/examples/forms/registration-form-template/?utm_campaign=ugdrS8&amp;utm_source=typeform.com-4663843-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded-registrationform&amp;utm_term=EN" style="color: #999" target="_blank">Registration form</a>powered by Typeform</div>
											</div>
										</div>
									</div>
									<div class=" visible-xs">
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
												<h3 class="widget-title hidden-xs">
													Invite Form
												</h3>
												<h3 class="widget-title visible-xs">
													Get an invite!
												</h3>
											</div>
											<div style="text-align: center;">
												<a href="https://factordaily1.typeform.com/to/ugdrS8" target="_blank">
													<button class="btn btn-primary" type="button" data-dismiss="modal">Click to register</button> 
												</a>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>


				<div class="clearfix"></div>
				<div class="clearfix"> </div>	
				<div>
					<div>
						<div>
							<section>
									<div class="container-fluid">
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; text-align: center;">
									
												<h3 class="widget-title">
													Agenda
			                                    </h3>


																	<p align="center" class="partner-tags">  <span class="tags-bkg">3:45 – 4:15 PM - Registration</span> </p>

																<div class="clearfix"> </div>

																<hr class="hrr">
				                                    			<p> <b>4:15 – 4:25 PM</b></p>

																<p> Welcome & Introduction  </p>
																<div class="clearfix"> </div>

																<hr class="hrr">


				                                    			<p> <b>4:30 – 5:00 PM</b> | Session - 1</p>
				                                    			<blockquote> </blockquote>
				                                    			<p></p>
																<p class="dialoge"> <i>
																	How Tech is Disrupting Jobs in India Today, and Tomorrow</i> </p>
																<p>Context setting with a discussion on the broad trends, the shift from the industrial economy to a creative one, changes that have transpired in the past year & those expected in the coming 12 to 24 months.
																</p>					
				                                    			<cite>
				                                    				<p>
					                                    				Nandan Nilekani | <i>Co-founder & Chairman, EkStep</i>	
					                                    				<br />	
					                                    				Abhijit Bhaduri | <i>Author of The Digital Tsunami, Leadership Coach & Influencer</i>
					                                    			</p>
					                                    		</cite>

																<div class="clearfix"> </div>

																<hr class="hrr">

				                                    			<p> <b>5:05 – 5:30 PM</b> | Session - 2</p>
				                                    			<blockquote> </blockquote>
				                                    			<p></p>
																<p class="dialoge"> <i>
																	Finance & Banking Jobs as the Money Business goes the FinTech way</i> </p>
																<p>Though it took them some time, India’s banks have embraced technology for better customer experiences and to drive down costs. Even as the sector expands to cover every other Indian, fewer jobs will be created as tech assumes a bigger role. What’s next for the sector?
																</p>					
				                                    			<cite>
				                                    				<p>
<!--
					                                    				Vijay Shekhar Sharma | <i>CEO & Founder, One97/Paytm</i> 
					                                    				<br />
-->
					                                    				Ravi Venkatesan | <i>Chairman, Bank of Baroda</i>
					                                    				<br />
					                                    				Pankaj Mishra | <i>Editor-in-chief & Co-founder, FactorDaily</i>

					                                    			</p>
					                                    		</cite>

																<div class="clearfix"> </div>
																<hr class="hrr">



				                                    			<p> <b>5:35– 6:10 PM</b> | Session - 3</p>
				                                    			<blockquote> </blockquote>
				                                    			<p></p>
																<p class="dialoge"> <i>
																	Logistics, Retail and Distribution: The Then, Now and Next for jobs</i> </p>
																	<p>
																		India has about 15 million retail outlets that employ some 40 million people. The rapid shift of consumers to organised and online retail has huge implications for these jobs -- both in numbers and skills. What can we expect?
																	</p>
				                                    			<cite>
				                                    				<p>
					                                    				Mohit Tandon   | <i>Co-founder & CSO, Delhivery</i>
					                                    				<br />
					                                    				Rashmi Daga | <i>Founder, FreshMenu</i>
					                                    				<br />
					                                    				Josey Puliyenthuruthel John | <i>Consulting Editor, FactorDaily</i>
<!--
					                                    				<br />
					                                    				Sachin Bansal | <i>Executive Chairman & Co-founder, Flipkart</i>
-->

					                                    			</p>
					                                    		</cite>

																<div class="clearfix"> </div>
																<hr class="hrr">



				                                    			<p> <b>6:15 – 6:40 PM</b> | Session - 4</p>
				                                    			<blockquote> </blockquote>
				                                    			<p></p>
																<p class="dialoge"> <i>
																	Technology & Healthcare: Doctors or Data Scientists?</i> </p>
																<p>Wearable diagnostics, personalised medicines & treatment breakthroughs promise big changes in health outcomes. What does this mean in terms of skilling our doctors and healthcare professionals? Can this be accelerated to take advantage of India’s demographic dividend?
																</p>					
				                                    			<cite>
				                                    				<p>
					                                    				Shashank ND | <i>Founder & CEO, Practo</i> 
					                                    				<br />
					                                    				Jaydevan PK  | <i>Managing Editor & Co-founder, FactorDaily</i> 
					                                    			</p>
					                                    		</cite>


																<div class="clearfix"> </div>
																<div class="clearfix"> </div>


																	<p align="center" class="partner-tags">  <span class="tags-bkg">6:45 - 7:00 PM - Tea-Break</span> </p>


																<div class="clearfix"> </div>
																<div class="clearfix"> </div>


				                                    			<p> <b>7:05 - 7:15 PM</b> | Session - 5</p>
				                                    			<blockquote> </blockquote>
				                                    			<p></p>
																<p class="dialoge"> <i>
																	HR Playbook in the new, new world</i> </p>
																	<p>
																		The Internet of Things and the related Human capital challenges along with the increasing trend of work from home and what individuals, organisations and managers need to do to make it successful, is a topic of crucial brainstorming. Are HR companies and other fields of the like going to be at the premium in the world?
																	</p>
				                                    			<cite>
				                                    				<p>
					                                    				Hema Ravichandar   | <i>Strategic HR Advisor & Board Member</i>
					                                    				<br />
					                                    				Pankaj Mishra | <i>Editor-in-chief & Co-founder, FactorDaily</i>
					                                    			</p>
					                                    		</cite>

																<div class="clearfix"> </div>
																<hr class="hrr">



				                                    			<p> <b>7:20 - 7:55 PM</b> | Session - 6</p>
				                                    			<blockquote> </blockquote>
				                                    			<p></p>
																<p class="dialoge"> <i>
																	 Robotics, Automation and Tech Disruption: The Road Ahead for IT</i> </p>
																<p>Self-healing software, blockchain databases, artificial intelligence, bots, predictive analytics... The world of IT is being wrung like never before. Will the predicted five-fold growth in India’s 2.2 million tech workforce happen? 
																</p>					
				                                    			<cite>
				                                    				<p>
					                                    				TK Kurien | <i>Executive Vice-Chairman, Wipro</i>	
																		<br />
																		Shanmugam Nagarajan | <i>Co-founder & CPO, [24]7 Inc</i>
																		<br />
																		Ashwini Asokan | <i>Co-founder & CEO, Mad Street Den & Mad Street Labs</i>																		
																	</p>
																</cite>


																<div class="clearfix"> </div>
																<hr class="hrr">


				                                    			<p> <b>7:55 – 8:30 PM</b> | Session - 7</p>
				                                    			<blockquote> </blockquote>
				                                    			<p></p>
																<p class="dialoge"> <i>
																	Are Startups Going to be The Biggest Job Creators?
</i> </p>
																<p>Small businesses have been big contributors to the economy and new jobs in India for long. What we see new is an acceleration in the value created by startups, and, along with that, high value jobs. How can this trajectory be extended? </p>					
				                                    			<cite>
				                                    				<p>
					                                    				Sharad Sharma | <i>Co-founder, iSPIRT</i>
					                                    				<br />	
					                                    				Rishi Das | <i>Co-founder and CEO, CareerNet Group</i>
					                                    				<br />	
					                                    				Anshuman Das
 | <i>Co-founder, CareerNet Group</i>
					                                    			</p>
					                                    		</cite>
																
																<div class="clearfix"> </div>

																<hr class="hrr">
				                                    			<p> <b>8:30 – 8:35 PM</b></p>

																<p> Summary & Thank You  </p>
				                                    			<cite>
				                                    				<p>
					                                    				Josey Puliyenthuruthel John | <i>Consulting Editor, FactorDaily</i>
					                                    			</p>
					                                    		</cite>

																<div class="clearfix"> </div>
																<a name="partners" style="color: #fff;">.</a> 
																<hr class="hrr">
																<p class="partner-tags" style="text-align: left;"> "November 21, 2016, 12:20 pm IST: The page was updated to remove the names of two panellists -- Vijay Shekhar Sharma of Paytm and Flipkart's Sachin Bansal -- who couldn't be there at the summit." </p>
																<hr class="hrr">

																	<p align="center" class="partner-tags">  <span class="tags-bkg">8:35 PM onwards - Dinner & cocktails</span></p>
																

																
												
											</div>
										</div>
									</div>
							</section>
						</div>
					</div>
				</div>
								
				<div class="clearfix"> </div>
                <div class="clearfix"> </div>
                

				<div>
					<div>
						<div>
							<section>
									<div class="container-fluid">
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
									
												<h3 class="widget-title">
													Event brought to you by
			                                    </h3>
				                                    
												<div class="row">
													<div class="container-fluid">
														
														<div class="col-xs-2 visible-xs">
															
														</div>

														<div class="col-md-2 col-md-offset-2 col-xs-8 speaker-img-mobile">
															<img src="/wp-content/themes/factordailyv2/images/factordaily-black.svg">
														</div>
														
														<div class="clearfix visible-xs"> </div>	
														<div class="clearfix visible-xs"> </div>	
														
														
														<div class="col-md-3 hidden-xs">
															<p class="association desktop-right"> in association with </p>
														</div>
															<p class="association visible-xs" style=" text-align: center"> in association with </p>
										
														<div class="col-xs-2 visible-xs">
															
														</div>

														<div class="col-md-1 hidden-xs">
															
														</div>
														<div class="col-md-3 col-xs-8">
															<a href="http://www.careernetgroup.com" target="_blank">
																<img src="/wp-content/themes/factordailyv2/images/CareerNet_Group_Logo.svg">
															</a>
														</div>
										
													</div>
												</div>
											</div>
										</div>
									</div>
							</section>
						</div>
					</div>
				</div>

  
				<div class="clearfix"> </div>
				<div class="clearfix"> </div>

				<section>

                    <div class="grey-gradient">
					
						<div class="clearfix"> </div>
						<div class="clearfix"> </div>

						<p align="center" class="partner-tags"> <span class="tags-bkg">Demo Partners</span> </p>
	                    
						<div class="row">
	                        <div class="container-fluid" style="text-align: center">
								<div class="service col-md-3 col-xs-6">
									<a href="http://coitor.com" target="_blank"><img src="http://factordaily.com/wp-content/uploads/2016/11/Coitor.png"></a>
								</div>


								<div class="service col-md-3 col-xs-6">
										<a href="http://www.3ding.in" target="_blank"><img src="http://factordaily.com/wp-content/uploads/2016/11/3Ding.png"></a>
								</div>


								<div class="service col-md-3 col-xs-6">
									<a href="http://shoonyavr.com" target="_blank"><img src="http://factordaily.com/wp-content/uploads/2016/11/shoonya.png"></a>
								</div>
								

								<div class="service col-md-3 col-xs-6">
									<a href="http://www.ideaforge.co.in/home/" target="_blank"><img src="http://factordaily.com/wp-content/uploads/2016/11/ideaForge.png"></a>
								</div>



							</div>
						</div>

						<div class="clearfix"> </div>
						<div class="clearfix"> </div>
											

						<p align="center" class="partner-tags">  <span class="tags-bkg">Beverage Partner</span> </p>
						
						<div class="row">
							<div class="container-fluid">
								
								<div class="service col-md-offset-2 col-md-2 col-xs-4">
								</div>


								<div class="service col-md-offset-1 col-md-2 col-xs-4">
									<a href="http://www.teabox.com" target="_blank"><img src="http://factordaily.com/wp-content/uploads/2016/11/Teabox.png"></a>
								</div>


								<div class="service col-md-offset-1 col-md-2 col-xs-4">
								</div>

							</div>
						</div>
					</div>

                    <div class="clearfix"> </div>
				</section>

				<div class="clearfix"> </div>
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