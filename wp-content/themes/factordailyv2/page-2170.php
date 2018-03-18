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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="code-of-conduct">
        <h1 class="default-page-title" style="text-align: center;">About Us</h1>
        <?php	the_content(); ?>
            </div>
		</main>
	</div>
<section id="authors" class="row text-center" style="margin-top: 56px;">
		<div class="container">
			<div class="page-header" style="margin-bottom: 35px;">
				<h3 class="text-center"><span>FactorDaily <strong>Team</strong></span></h3>
			</div>
<p>Journalists, design folks, mad hatters. Meet the FactorDaily team.</p>
<?php
$blogusers = get_users( 'blog_id=1&order=DESC&orderby=display_name&role=administrator&exclude=1,47,6,319,13,95' );
// Array of WP_User objects.
foreach ( $blogusers as $user ) {
	
    echo '<a href="'.get_author_posts_url( $user->ID ).'"><div class="col-xs-6 col-md-3 col-sm-4 col-lg-3"><div class="col-sm-12 author-card"><img src="'.$user->teampic.'" /><h4>'.$user->first_name.' '.$user->last_name.'</h4><h5>'.$user->teamrole.'</h5></div></div></a>';
};?>
<?php
$blogusers = get_users( 'blog_id=1&orderby=post_count&order=DESC&role=editor&exclude=13,319' );
// Array of WP_User objects.
foreach ( $blogusers as $user ) {
    echo '<a href="'.get_author_posts_url( $user->ID ).'"><div class="col-xs-6 col-md-3 col-sm-4 col-lg-3"><div class="col-sm-12 author-card"><img src="'.$user->teampic.'" /><h4>'.$user->first_name.' '.$user->last_name.'</h4><h5>'.$user->teamrole.'</h5></div></div></a>';
};?>
	</div>
</section>

<section id="authors" class="row text-center">
		<div class="container">
			<div class="page-header" style="margin-bottom: 35px;">
				<h3 class="text-center"><span>FactorDaily <strong>Contributors</strong></span></h3>
			</div>
<p>The top writers, columnists and thought leaders from the world of tech. </p>
<?php
$blogusers = get_users( 'blog_id=1&orderby=rand&role=contributor&exclude=47,6,345' );
// Array of WP_User objects.
foreach ( $blogusers as $user ) {
    echo '<a href="'.get_author_posts_url( $user->ID ).'" class="team-member-area"><div class="col-xs-12 col-sm-2 block-wrapper"><div class="col-sm-12 author-card">'.get_avatar($user->ID, 215).'<h5>'.$user->first_name.' '.$user->last_name.'</h5></div></div></a>';
};?>

	</div>
</section>
<!-- 	CONTRIBUTOR start -->
	<div class="join-contributor hidden-xs row">
		<div class="text-area col-md-12" style="text-align: center;">
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

<?php get_footer(); ?>