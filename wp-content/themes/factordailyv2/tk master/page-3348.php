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
		background: url("") no-repeat center center ;
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

	.banner-h2, .banner-h4 {width: 80% !important; margin: 0px auto !important; }
	.banner-h2 {font-size: 45px; color: #fff; border-top: 1px #fff solid; padding: 20px 10px 0px; text-shadow: 1px 1px #444;}
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
</script>

<!--
<section class="hero">
	<div id="cover">
		<div id="title">
			<h2 class="banner-h2"> They killed Dabholkar, but his legacy is far from dead </h2>
			<h4 class="banner-h4"> By Shamsheer Yousaf 
				<span class="title-date"> <br /> October 12, 2016 </span>
			</h4> 
		</div>
	</div>
</section>
-->
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
												<p class="dropcap">
													Half an hour into Prashant Potdar’s exposition of godmen and miracles, a commotion breaks out among the audience seated at the back. Someone shouts loudly:  “Chamatkaari Baba Ki Jai! (Praise to the miraculous Baba)”. The entire audience, numbering in hundreds and neatly segregated by age and gender, turns towards the source of the disturbance.</p>

<p>A godman clad in saffron robes and a green headband, brandishing a trishul, is angrily making his way through the audience with his followers, who are raising slogans praising him.</p>
												</div>
										</div>
										<div class="col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
												<img src='http://factordaily.com/wp-content/uploads/2016/10/Dabholkar_story_inset_02.jpg' />
												<cite><p><i>Rationalist Prashant Potdar of ANIS addresses a rapt audience at an anti-superstition show at Chichondi Patil village, Ahmednagar</i></p></cite>
											</div>
										</div>
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">

<p>It’s an early September night in the village of Chichondi Patil, about 20 km east of the garrison town of Ahmednagar in central Maharashtra. The Maharashtra Andhashraddha Nirmoolan Samithi, known around the state by its Marathi abbreviation ANIS (it is also referred to as MANS), is holding a show titled “The world of superstition, the deception of miracles.” Before the “baba” gatecrashed the show, Potdar was demonstrating tricks used by godmen to cheat people.</p>
<p>
“How can you say that there are no miracles,” the religious leader thunders at Potdar.
	<br />
	Potdar, ANIS’s state secretary, wearing a Nehru coat over kurta and jeans, attempts to pacify the baba. “Calm down, Maharaj. Calm down.”
	<br />
	A verbal duel ensues.
</p>

<p>
	<blockquote> </blockquote>
</p>

<p class="dialoge"> <i>
	Potdar (addressing the audience): “These godmen who perform miracles are just cheats”.
	<br />
	Baba: “Cheats? How dare you call me a cheat?” 
	<br />
	Potdar: “Those who exploit people in the name of faith are cheats.”
	<br />
	Baba: “Do I come across as a cheat to you?”
	<br />
	Potdar: “Ok then. If you have any divine powers, show it to us.”
</i> </p>

<p>The Baba springs forward, grabs a coconut and smashes it on the ground. The coconut splits open, and a red ribbon emerges from the inside. He then takes a trishul from his assistant, and drives it through his tongue to pierce it. </p>

<p>His supporters shout again “Chamatkaari Baba Ki Jai!”. 
												</p>
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
				<div id="pl-2040">
					<div class="panel-grid" id="pg-2040-0">
						<div class="panel-row-style-hello hello panel-row-style">
							<div class="panel-grid-cell" id="pgc-2040-0-0">
								<section id="services" class="services-area">
									<div class="container">
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
												<p class="dropcap"> 
													The duel started off seriously, but a couple of minutes into it, the tone turns farcical. The baba’s followers, pleased with landing on the stage, are beaming, while the baba himself looks distracted. Potdar’s barbs are addressed more at the audience than at him. When the baba is inserting the trishul into his tongue, the children in the front row ask pointedly that if the piercing is real, where’s the blood? </p>
<p>The confrontation is made up, part of a skit that ANIS has performed in hundreds of villages across Maharashtra. An act that has taken them years to polish, and which they now perform once every 15 days.</p>

<p>
	<blockquote> 
		The miracles performed on stage are chosen from the repertoire of various godmen that ANIS has discredited over the years
	</blockquote>
</p>

<p>Bhagwan Randive, Potdar’s 55-year-old colleague who plays the role of Chamatkaari Baba, has been working specifically on exposing fraud charlatans — like the one he plays on stage. Investigating cases related to fraud godmen, challenging them in public or working with the police to conduct sting operations to expose them has formed a major part of his work at ANIS for the last 20 years.</p>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
				
				<div id="pl-2040">
					<div class="panel-grid" id="pg-2040-1-2">
						<div class="panel-grid-cell" id="pgc-2040-1-0">
							<section>
									<iframe class="jumbotron myframe" src="https://www.youtube.com/embed/9xTCXcg0Zlw" frameborder="0" marginwidth="0" allowfullscreen></iframe>
							</section>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
				<div class="clearfix"> </div>
				<div id="pl-2040">
					<div class="panel-grid" id="pg-2040-0">
						<div class="panel-row-style-hello hello panel-row-style">
							<div class="panel-grid-cell" id="pgc-2040-0-0">
								<section id="services" class="services-area">
									<div class="container">
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
												<p class="dropcap"> 
The miracles performed on stage are chosen from the repertoire of various godmen that ANIS has discredited over the years -- such as the one that involves lighting a lamp filled with water (after making an audience member drink the water to certify that it is indeed water and not oil). Another trick involves releasing a chain held between two interlocking chains, which two men from the audience are unable to untangle. </p>

<p>"There are the tricks that have been often used to fool people. We choose tricks that many people bought into and that made some fraud babas very famous," says Potdar.</p>

<p>As the show goes on, Potdar begins to reveal the truth behind the various miracles. </p>

<p>The water lamp trick: A piece of calcium carbide is hidden in the lamp, which produces acetylene gas when water drops fall on it. The acetylene burns when it comes in contact with air. </p>

<p>The piercing of the tongue with the trishul: Instead of one, there are, in fact, two trishuls, one of which has a U-shaped bend that goes around the tongue to make it look like a piercing has taken place.</p>

<p>The bed of nails: Simple physics. All the nails are equidistant and of the same height. If a body lies on it, the force exerted by the nails is spread across the entire area of the bed of nails.</p>

<p>Potdar is an accomplished performer, who understands that his message would not sink in unless he keeps his audience entertained. In particular, his rapport with children shines through as he gets them to scream, sigh, laugh, and sit in rapt attention during the entire three-hour show.</p>

<p>
	<blockquote> 
		Instead of one, there are, in fact, two trishuls, one of which has a U-shaped bend that goes around the tongue to make it look like a piercing has taken place.
	</blockquote>
</p>

<p>"The performance that you see today has taken me 15 years to perfect. When I first started learning this in 1995-96 by watching Doctor (Dr Dabholkar) perform, I fumbled a lot. For the water lamp trick, I would drop the calcium carbide tablet that I needed to hide,” says Potdar. Similarly, in a trick that involved pouring water from an empty vessel, the water level would be too high or too low, ruining the performance. “ Now, I can perform in front of an audience with no preparation," he says. 
												</p>
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
				<div id="pl-2040">
					<div class="panel-grid" id="pg-2040-0">
						<div class="panel-row-style-hello hello panel-row-style">
							<div class="panel-grid-cell" id="pgc-2040-0-0">
								<section id="services" class="services-area">
									<div class="container">
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
												<p class="dropcap">
													The origin of these village shows where the science behind miracles is explained goes back to the 70’s and 80’s when a large number of ‘action groups’ mushroomed in Maharashtra. One of the pioneering groups was the B Premanand group, which organised science fairs across different parts of Maharashtra. Premanand’s group pulled large numbers for shows in which the scientific principles behind ‘miracles’ were explained to people.</p>
 
<p>Narendra Dabholkar, a qualified MBBS doctor who flitted between various action groups and stopped his medical practice, decided to take up the same programme across the state. In 1989, Dabholkar founded ANIS and began work earnestly. Headquartered in Satara, ANIS campaigned against superstitions, confronting dubious godmen and self-proclaimed holy men who promised 'miracle cures' for ailments. He writes about the early days:</p>

<p><i>We exposed the secret behind bhanamati (black magic) like the sudden movement of things from one place to another, burning or ripping of clothes, spots of bibya (marking nut) appearing all over the body, and so on… We conducted psychoanalysis of a woman feeling possessed by a goddess or why a man feels possessed by a ghost... The curiosity of the masses helped us reach their hearts.</i> <br />
(Excerpts from 'Writings Against Silence'; Edited by K Satchidanandan)</p>

<p>Public education was not the only means of eradicating black magic. ANIS campaigned for several years for an anti-superstition law to be enacted in Maharashtra.  But pockets of resistance to Dabholkar’s work remained, particularly among those who had the most to lose. A godman, Narendra Maharaj, instigated his men in a public speech to cut off Dabholkar’s hands and legs; a godwoman’s disciples physically assaulted and registered criminal cases against him; and MLAs of the Shiv Sena and BJP demanded a ban on Dabholkar’s organisation and demanded his expulsion from Maharashtra.</p>
<p>The danger was real — on August 20, 2013, Dabholkar was shot down by two unidentified gunmen in Pune while on a morning walk. He was shot in the head and chest, and died before reaching the hospital.</p>
<p>Potdar was in Bengaluru attending a training session when he heard about Dabholkar’s death. “I was shocked. I could not believe it,” Potdar recalls. “Doctor’s death affected me more than a death in my own family.”
</p> 
<p>
	<blockquote> 
		The danger was real — on August 20, 2013, Dabholkar was shot down by two unidentified gunmen in Pune while on a morning walk.
	</blockquote>
</p>
<p>He got back to Satara that night, but missed the last rituals. After 'Doctor’s' death, there were many challenges for the organisation. “We felt broken,” says Potdar. Many feared that the organisation would not survive the death of its leader. “But we all knew that we had to complete what we started.”</p>	
											</div>
										</div>
										<div class="col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
												<img src='http://factordaily.com/wp-content/uploads/2016/10/Dabholkar_story_inset_04.jpg' />
												<cite><p><i>Prashant Potdar (left) and Bhagwan Randive (right) standing in front of a portrait of Dr Narendra Dabholkar</i></p></cite>
											</div>
										</div>
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
<p>On September 1, a state level meeting was held in Satara in which over 3,000 activists took part. At the meeting, a resolution was passed to take forward Dabholkar’s work. In the three years since Dabholkar’s death, Potdar says that their membership and branches have actually grown substantially. Today, there are nearly 340 branches of ANIS and 4,000 members across Maharashtra. “We have a presence in every single taluk across the state,” says Potdar. </p>
<p>Dabholkar’s death also accelerated the passage of the anti-superstition Bill. Four days after his death, the Bill was promulgated via an ordinance, and before the end of the year, it was passed by the state Assembly.</p>
<p>The new Act criminalised 12 classes of superstitious practices — ranging from claiming to perform miracles, psychic surgery, and encouraging human sacrifices. While activists have their reservations about the efficacy of the Act, it has had an impact on the ground. Earlier only Section 420 or cheating was applicable, which was often too mild for the crime. “The Act has made our lives easier as these are laws specific to the kind of cases we come across. It has also made it much easier to get co-operation from the police on these cases. Now, a person can be imprisoned for upto seven years, and they have to pay a fine between Rs 5,000 and Rs 50,000,” Potdar informs us.</p>
<p>Since the Act was passed three years ago, 270 cases have been filed under the Maharashtra Anti Superstition Act. Of these, there have been three convictions so far, with judgements putting black magic practitioners behind bars for upto three years.</p>
<p>Once a complaint arrives at the ANIS office, the team studies the case extensively. “We verify how much of the complaint is actually true, and only once we are convinced do we get in touch with the police,” says Potdar. ANIS sends an agent, usually from another village, to check on the suspect.</p>
<p>Once the case has been verified to be genuine, they begin working with the police. “Why should we take the law in our hands?” asks Potdar. “<i>Police hai naa</i>.”</p>
<p>In most cases, the ANIS team directly contacts the local Superintendent of Police (SP), although there are chances that local police may be hand-in-glove with the culprits. “We have seen that happen,” says Potdar. But that’s a chance they have to take if they want to catch the culprits, and usually, the police and ANIS’s activists together plan a sting operation.</p> 
<p>In some instances, one of the activists, usually Randive, contacts the suspect, and lays a trap to catch him or her in the middle of the action. ANIS ensures that the sting operation is recorded on video. </p>
												</div>
										</div>
										<div class="col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
												<img src='http://factordaily.com/wp-content/uploads/2016/10/Dabholkar_story_inset_01.jpg' />
												<cite><p><i>Prashant Potdar explains the provisions of the Maharashtra Anti-superstition and Black Magic Act at an anti-superstition show in Chichondi Patil village</i></p></cite>
											</div>
										</div>
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
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
				<div id="pl-2040">
					<div class="panel-grid" id="pg-2040-0">
						<div class="panel-row-style-hello hello panel-row-style">
							<div class="panel-grid-cell" id="pgc-2040-0-0">
								<section id="services" class="services-area">
									<div class="container">
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
												<p class="dropcap">
													Take, for instance, the Guru Aai case. Subhas Jagannath Yadav, an ex-serviceman, was fleeced by a guru earlier this year in Karad, a lush town in the sugar bowl of Maharashtra. Yadav had been struggling over the last few years: at the local sugar factory where he worked, a driver he had hired to run the employer’s tractor made off with some money. This incident hurt Yadav’s finances, but more damagingly, his reputation took a steep dive. </p>
													
<p>Yadav’s uncle suggested that he get in touch with Guru Aai (‘Aai’ means mother in Marathi), a 40-year-old transgender individual who lived in a slum in a nearby village called Wahaaganv. Guru Aai, whose real name is Aatish Patil, had built up a substantial following in and around Karad.</p>

<p>To get rid of the so-called “karni” (black magic) on his house, the guru asked Yadav to procure the following items — a black blouse, camphor, a pack of incense sticks, a saree, two coconuts, a Gandhi topi, and cloth pieces for a shirt and a pant.</p>

<p>Guru Aai took the black blouse in her hand and placed the coconut and camphor in it. Yadav’s family was in attendance. She handed the black blouse and its contents to Yadav and told the family that a ‘Bhovati’ (spirit) roams around in his house. Aai then took back the material from Yadav’s hands, and kept it aside. Suddenly, a great flame encircled the coconut and camphor. “See, there is karni in your house,” she shouted at them. “There’s a lot of danger to your family. To fix this, you need to spend a lot of money.” </p>

<p>She put some water and basil leaves over the burning coconut and told Yadav that pumpkins and goats would be needed to remove the karni, and it would cost Rs 20,000.</p>
 <p>Next day, Yadav took an additional loan of Rs 20,000 on the jewellery that he had already pledged and handed it to the guru.  Over the course of the next two days, she maked additional demands  — another Rs 4,000, a nine-yard sari, a pair of trousers and a shirt, five blouse pieces and so on. </p>

<p>Finally, fed up with her demands, Yadav called her and told her he wasn’t going to spend a paisa more. That afternoon, Guru Aai turned up at his house and began to shout dramatically, flailing and thrashing her arms and legs as if in an epileptic fit. “If you don’t give me the money, my deva will not leave you. Your karni will come back to harm you,” she screamed. “Blood will flow from your nose, your family and your children’s lives will be ruined.”</p>


												</div>
										</div>
										<div class="col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
												<img src='http://factordaily.com/wp-content/uploads/2016/10/Dabolkar_Story_Bharani_2.jpg' />
												<cite><p><i>Women being "possessed" by demons and spirits is a common superstition across India, especially in the rural areas. Picture used for representational purposes only.</i></p></cite>
											</div>
										</div>
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">


<p>Yadav was terrified. After all, Aai had set fire to a coconut at will.</p>

<p>Finally, Yadav contacted Maruti Thorat, a local member of ANIS he had met a few days ago. Through Thorat, the case reached ANIS’s headquarters at Satara, and the table of Prashant Potdar. Potdar immediately recognised the trick. “This trick had turned up in our older cases too. In Latur, Beed, and others parts of the Marathwada region,” he says. </p>
<p>This is how the trick was probably played: Guru Aai would have, by sleight of hand, placed a piece of phosphorus in the black cloth. Phosphorus, once it comes in contact with air, burns spontaneously. To delay the burning, she would have soaked the phosphorus in kerosene, which insulates it from the air. Place the kerosone-soaked phosphorus in the black cloth, wait for the kerosene to naturally evaporate, and when it comes in contact with the air, it burns spontaneously.</p> 
<p>Once the ‘miracle’ was cracked, the team along with the police landed up at Aai’s house. From the video recording made by ANIS, you can see that the house — from the outside — looks like any unplastered house in a slum. But the interiors tell a different story —  a lush black sofa, white and red curtains draping the living room, and a flatscreen TV mounted on the wall. </p>
<p>Sub-inspector Vidhya Popatrao Jadhav began questioning Aai, asking about her work. “I have been doing god’s work in this village for the last two years,” she replied. Jadhav pointed at Yadav, and asked if she had taken any money from him. “I have taken Rs 23,000 from him. He asked me to get rid of his bad luck and not to worry about expenses,” she replied.</p>
<p>Aai recounted the puja that she performed, but omitted any references to the burning coconut. Potdar jumped in: “You set fire to the coconut and camphor, right?”</p>
<p>
	<blockquote> 
	</blockquote>
</p>
<p class="dialoge"> <i>
	The cop asked her again. “What else did you put in the cloth?”
	<br />
	Aai: “Just that.”  
	<br />
	SI: “So how did it burn?” 
	<br />
	Aai: “It burnt because of the camphor.”
	<br />
	SI: “But how can the camphor burn on its own?”
</i> </p>

<p>She was taken aback by the reference. “I’m just a little tense,” she said. “Can I get some water?” </p>
<p>This conversation went back and forth a couple of times. At one point, she said that the coconut burnt because of <i>karni</i> (black magic). The cop repeated the question. Finally, Aai replied: “To protect one lie, I do not want to tell more lies. I accept my mistakes. I’m ready to return all the money I have taken.”</p>
<p>“Please don’t trouble me. If people learn that I have been taken to the police, it’ll cause me a lot of trouble,” she added.</p>
<p>The police escorted her to the local police station. </p>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
				<div id="pl-2040">
					<div class="panel-grid" id="pg-2040-1-2">
						<div class="panel-grid-cell" id="pgc-2040-1-0">
							<section id="call-to-action">
									 <iframe class="jumbotron myframe" src="https://www.youtube.com/embed/f8qahQmaKZE"  frameborder="0" marginwidth="0" allowfullscreen></iframe>
							</section>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>	
				<div class="clearfix"> </div>
				<div id="pl-2040">
					<div class="panel-grid" id="pg-2040-0">
						<div class="panel-row-style-hello hello panel-row-style">
							<div class="panel-grid-cell" id="pgc-2040-0-0">
								<section id="services" class="services-area">
									<div class="container">
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
												<p class="dropcap">
													ANIS’s cases are not just restricted to rural areas — one of the recent cases they tackled was a phenomenon called “mid-brain activation.” Training programmes for mid-brain activation claim that you can activate children’s “third eye” by training them through various methods, which helps to improve their memory and intelligence. The mid-brain is “activated” by making them read texts while blindfolded.</p>
<p>The trick, Potdar says, is to use a cotton swab between the blindfold and the eye, which creates a slight gap. “You will be able to see whatever is right under you”, he says, drawing a line from his eye to the floor. Potdar says that these courses have become popular across India, and in particular in Maharashtra. </p>
<p>To disprove mid-brain activation, ANIS challenged a popular private school in Satara that enrolled children into mid-brain activation programmes for fees ranging from Rs 5,000 to Rs 10,000. Potdar went to the school and did two things to disprove this.</p>
<p>First, he showed that he could also read text with the blindfold on. Just like the children, but without any training.</p>
<p>Secondly, he called children whose midbrain had been ‘activated’. He placed his fingers on their eyelids, and asked them to use their “third eye” to read. The children were unable to.</p><p>“This is so problematic. They are essentially teaching children to lie,” says Potdar. ANIS’s campaign resulted in the school shutting the programme down and refunding money to the parents. Similar programmes were shut in Pune, Dhule, Aurangabad and Solapur after ANIS’s intervention.
												</p>
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
				<div id="pl-2040">
					<div class="panel-grid" id="pg-2040-0">
						<div class="panel-row-style-hello hello panel-row-style">
							<div class="panel-grid-cell" id="pgc-2040-0-0">
								<section id="services" class="services-area">
									<div class="container">
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="text-font-family" style="visibility: visible; ">
												<p class="dropcap">
													It has been three years since Dabholkar’s murder, but the threat against those fighting superstitions have only grown. Govind Pansare, the trade unionist from Kolhapur who also fought against backward religious practices, was murdered in February 2015 in a fashion similar to Dabholkar. In August 2015, the Dharwad based scholar M M Kalburgi, who supported implementing the Anti Superstition Act in Karnataka, was murdered by two unidentified men.</p>
<p>
	<blockquote> 
		For activists like Potdar and Randive, each case brings its own risks. “There is not a single day when our lives are not at risk,” says Potdar.
	</blockquote>
</p>
<p>In these cases, police investigations point to the work of extreme right wing groups such as the Sanatan Sanstha and the Hindu Janajagran Samithi.</p>
<p>For activists like Potdar and Randive, each case brings its own risks. “There is not a single day when our lives are not at risk,” says Potdar. 
												</p>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
				
				<div id="pl-2040">
					<div class="panel-grid" id="pg-2040-0">
						<div class="panel-row-style-hello hello panel-row-style">
							<div class="panel-grid-cell" id="pgc-2040-0-0">
								<section id="services" class="services-area">
									<div class="container">
										<div class="service col-md-offset-2 col-md-8 col-xs-12">
											<div class="clearfix"> </div>
											<hr>
											<small class="credits">
												With inputs from Monica Jha.
											</small>
											<br />
											<small class="credits">
												Edited By: Shrabonti Bagchi.
											</small>
<!--
											<div class="tail-text">
												updates
											</div>
-->
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