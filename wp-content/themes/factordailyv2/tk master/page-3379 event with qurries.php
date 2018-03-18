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
			<div class="col-sx-12 col-md-4 black-overlay other-events" style="background-image:url('/wp-content/themes/_tk-master/images/Arduino_Event-14.jpg');">


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
			<div class="col-sx-12 col-md-4 black-overlay other-events" style="background-image:url('/wp-content/themes/_tk-master/images/Drone Struck_2.jpg');">
				
				
				
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
<!--
<div class="row">
	<?php query_posts( 'category_name=events&posts_per_page=1' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>
				<div class="jumbotron" style="background:url(<?php the_post_thumbnail_url();?>) no-repeat center center; background-size:cover">
							<div id="post-<?php the_ID(); ?>" class="category-future">
								<img src="http://placehold.it/1111x625" class="img-responsive">
								<div class="blurb">
									<div class="vertical-table">
										<div class="vertical-bottom">
											<h5 class="authorinfo">
											<small class="authorinfo">
											<?php foreach( get_coauthors() as $coauthor ) : ?>
											    <?php echo get_avatar( $coauthor->user_email, '30' ); ?>
											<?php endforeach; ?>
											<?php if ( function_exists( 'coauthors_posts_links' ) ) {
											    coauthors_posts_links();
											} else {
											    the_author_posts_link();
											};?>
											</small>
											</h5>
										<a href="<?php the_permalink();?>">
											<h1 class="page-title">
												<?php the_title();?>
											</h1>
										</a>
											<small><i class="fa fa-calendar-o"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?><?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?></small>
										</div>
									</div>
								</div>
							</div>
						</div>
		<?php endwhile; ?>
</div>	
-->

<!--
<section id="latest-factors" class="row">
		<div class="container">
		<div class="row text-center">
			<div class="col-sm-6 col-sm-offset-3">
				<h2><span>Events</span></h2>
				<br />
				<p><?php echo category_description(9); ?></p>
			</div>
		</div>
		</div>
</section>
-->

<!-- future of jobs Factors -->
<section id="latest-factors" class="row">
		<div class="container">
			<div id="future" class="row row-margin-bottom">
				<?php query_posts( 'cat=999&order=DSC&posts_per_page=70' ); ?>
				<?php while ( have_posts() ) : the_post(); ?>
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
<!--
										<small>
											<?php echo get_avatar( get_the_author_meta( 'ID' ), 20 ); ?>
											<?php $author = the_author_meta('display_name'); echo $author; ?>
										</small>
-->
										<a href="<?php the_permalink();?>">
											<h5 class="page-title">
													<?php if (strlen($post->post_title) > 150)
													{echo substr(the_title($before = '', $after = '', FALSE), 0, 150) . '...'; }
													else {the_title();} ?>
	
											</h5>
	<!--
											<small><i class="fa fa-calendar-o"></i> <?php echo get_the_time('d-m-Y'); ?><?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?>
											</small>
-->
										</a>
									</div>
									<div class="blurb">
										<div class="vertical-table hidden-xs">
											<div class="vertical-bottom">
<!--
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
-->
										<a href="<?php the_permalink();?>">	
																<h5 class="page-title">
																	<?php if (strlen($post->post_title) > 150)
																		{echo substr(the_title($before = '', $after = '', FALSE), 0, 150) . '...'; }
																		else {the_title();} ?>
																</h5>
										</a>
<!-- 												<small><i class="fa fa-calendar-o"></i> <?php echo get_the_time('d-m-Y'); ?><?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?></small> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
</section>

<?php get_footer(); ?>