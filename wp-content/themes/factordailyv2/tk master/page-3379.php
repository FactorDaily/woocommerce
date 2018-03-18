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


<style>
	
	.container-fluid
	{padding-left: 0px !important;
		padding-right: 0px !important;
	}
	.row{ margin: 0px !important}
	.hero {
		background: url(/wp-content/themes/_tk-master/images/arduino_back.jpg) no-repeat center center ;
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


	#cover
	{position: relative; height: 100%; text-align: center; background: rgba(0, 0, 0, 0.2);}
	#title
	{position: absolute; top: 40vh; padding: 10px 40px; width:100%; }

	@media only screen and (min-width: 1025px) { .has-banner,.has-banner::after { max-height:1440px; } }
	@media only screen and (min-width: 1199px) { .has-banner,.has-banner::after { max-height:1440px; } }
	@media only screen and (min-width: 991px) { .welcome-info { top:100px; } }
	@media only screen and (min-width: 1199px) { .welcome-info { top:100px; } }

	.banner-h2, .banner-h4 {width: 80% !important; margin: 0px auto !important; }
	.banner-h2 {font-size: 6em; color: #fff; /* border-top: 1px #fff solid;  */padding: 5px 0px 10px; text-shadow: 1px 1px #444;}
	.banner-h4 {font-size: 24px; color: #fff; /*  border-bottom: 1px #fff solid;  */padding: 5px 10px 20px; font-weight: 200; text-shadow: 1px 0px #444; text-transform: none !important; }
	
	.subheading{font-size: 20px; color: #fff; opacity: 0.8; text-shadow: none !important;}

	.title-date{
		color: #aaa; font-size: 14px; text-shadow: none !important; line-height: 2;
	}


	@media only screen and (max-width: 768px) {    
		.banner-h2, .banner-h4 {width: 100%; margin: 0px auto !important; }

		.banner-h2{
			padding: 10px 0px 0px !important;
			font-size: 35px !important;
		}
		
		#title
		{ padding: 0px; top:20vh; }
		
		.hero {
			height: 70vh; 
		}


	.subheading{ display: none}
		.banner-h4 {font-size: 20px;}

	}

.upcoming
{
	background: #fff;
	color: #333;
	padding: 3px 6px;
	font-size: .8em;
	border-radius: 2px;
	opacity: 0.7;
}

.other-events
{
	background-repeat:no-repeat; background-position: center center; background-size: cover;
	padding: 10vh;
}

.white-border
{
	text-align: center; 
	border: 1px double rgba(255, 255, 255, .5);	
}

.white-border h1
{
	color: #fff; font-size: 2em; text-shadow: 1px 1px rgba(0,0,0,0.5);
}

.btn-evnt
{
	
}



</style>

<section class="hero">
	<div id="cover">
		<div id="title">
			<Span class="upcoming"> UPCOMING </Span>
			<h2 class="banner-h2"> Future of Jobs</h2>
			<h4 class="banner-h4"> Making Sense of Technology Disruption 
				<span class="title-date"> <br /> November 21, 2016 </span>
			</h4> 
			<div class="clear break"> </div>
			<a href="/event" target="_blank">
				<button class="btn btn-primary">Register</button>
			</a>

		</div>
	</div>
</section>


	<div class="row">

		<div class="container-fluid">
			<div class="col-sx-12 col-md-4 other-events" style="background-image:url('/wp-content/themes/_tk-master/images/Arduino_Event-14.jpg');">

			
				<div class="white-border">
					<h1>
						Electronic <strong>Prototyping</strong>
					</h1>
					<p class= "side-text">
						sample text sample text sample text sample
					</p>
					<div class="clear break"> </div>
					<a href="/event">
						<button class="btn btn-evnt">Know More</button>
					</a>
					<div class="clear break"> </div>
					
				</div>
			</div>


		<div class="container-fluid">
			<div class="col-sx-12 col-md-4 other-events" style="background-image:url('/wp-content/themes/_tk-master/images/Drone Struck_2.jpg');">
				
				
				
				<div  class="white-border">
					<h1>
						Drone<strong> Struck</strong>
					</h1>
					<p class= "side-text">
						sample text sample text sample text sample
					</p>
					<div class="clear break"> </div>
					<a href="/event">
						<button class="btn btn-evnt">Know More</button>
					</a>
					<div class="clear break"> </div>
					
				</div>
			</div>



		<div class="container-fluid">
			<div class="col-sx-12 col-md-4 black-overlay other-events" style="background-image:url('/wp-content/themes/_tk-master/images/Arduino_Event-14.jpg');">
				
				
				<div class="white-border">
					<h1>
						Factor<strong>Events</strong>
					</h1>
					<p class= "side-text">
						sample text sample text sample text sample
					</p>
					<div class="clear break"> </div>
					<a href="/event">
						<button class="btn btn-evnt">Know More</button>
					</a>
					<div class="clear break"> </div>
					
					
				</div>

				
				
				
			</div>




		</div>
	</div>


<?php get_footer(); ?>