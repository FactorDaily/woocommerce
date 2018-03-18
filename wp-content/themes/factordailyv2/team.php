<?php
/**
 * Template Name: Team Page 1
 * Template to display the team members
 */


get_header(); ?>

<style>
	.author-card > img {
		margin-top: 20px !important;
		border:0px solid #ccc;
	}
</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="code-of-conduct">
<h1 class="default-page-title">About Us</h1>
<?php	//the_content(); ?>
	</div>
</main>
</div>
<section id="authors" class="row text-center" style="margin-top: 56px;">
		<div class="container">
			<div class="page-header" style="margin-bottom: 35px;">
				<h3 class="text-center"><span>FactorDaily <strong>Team</strong></span></h3>
			</div>
<?php
$blogusers = get_users( 'blog_id=1&orderby=rand&role=administrator&exclude=1,47,46,6,319,13,95,79' );
// Array of WP_User objects.
foreach ( $blogusers as $user ) {
	
    echo '<a href="'.get_author_posts_url( $user->ID ).'"><div class="col-xs-6 col-md-3 col-sm-4 col-lg-3"><div class="col-sm-12 author-card"><img src="'.$user->teampic.'" /><h4>'.$user->first_name.' '.$user->last_name.'</h4><h5>'.$user->teamrole.'</h5></div></div></a>';
};?>
<?php
$blogusers = get_users( 'blog_id=1&orderby=nicename&role=editor&exclude=79,13,319,53' );
// Array of WP_User objects.
foreach ( $blogusers as $user ) {
    echo '<a href="'.get_author_posts_url( $user->ID ).'"><div class="col-xs-6 col-md-3 col-sm-4 col-lg-3"><div class="col-sm-12 author-card"><img src="'.$user->teampic.'" /><h4>'.$user->first_name.' '.$user->last_name.'</h4><h5>'.$user->teamrole.'</h5></div></div></a>';
};?>
	</div>
</section>
<!-- 	CONTRIBUTOR start -->

	<div class="join-contributor hidden-xs row">
		<div class="text-area col-md-4 offset-md-4">
			<span></span>
			<h2>JOIN US. BE A CONTRIBUTOR.</h2>
			<p>More than 50 contributors in the network with us.</p>
			<a href="contributors-network">Write to us Now</a>
		</div>

		<div class="clearfix"></div>
	</div>
	<div class="join-contributor visible-xs row">
		<div class="contributor-content-area-mobile">
			<h2>JOIN US.</h2>
			<h2>BE A CONTRIBUTOR.</h2>
		</div>
    </div>

<!-- 	CONTRIBUTOR ends -->
<section id="authors" class="row text-center">
		<div class="container">
			<div class="page-header" style="margin-bottom: 35px;">
				<h3 class="text-center"><span>FactorDaily <strong>Contributors</strong></span></h3>
			</div>
<?php
$blogusers = get_users( 'blog_id=1&orderby=nicename&role=contributor&exclude=47,6,345' );
// Array of WP_User objects.
foreach ( $blogusers as $user ) {
    echo '<a href="'.get_author_posts_url( $user->ID ).'"><div class="col-xs-12 col-sm-4"><div class="col-sm-12 author-card">'.get_avatar($user->ID, 215).'<h5>'.$user->first_name.' '.$user->last_name.'</h5></div></div></a>';
};?>

	</div>
</section>

<?php get_footer(); ?>