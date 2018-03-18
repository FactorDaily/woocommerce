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
	.author-card > img {
		margin-top: 20px !important;
	}
</style>

<section id="authors" class="row text-center" style="margin-top: 56px;">
		<div class="container">
			<div class="page-header" style="margin-bottom: 35px;">
				<h3 class="text-center"><span>FactoryDaily <strong>Team</strong></span></h3>
			</div>
<?php
$blogusers = get_users( 'blog_id=1&orderby=nicename&role=administrator&exclude=1,47,46, 6' );
// Array of WP_User objects.
foreach ( $blogusers as $user ) {
    echo '<a href="'.get_author_posts_url( $user->ID ).'"><div class="col-xs-12 col-sm-4"><div class="col-sm-12 author-card">'.get_avatar($user->ID, 215).'<h5>'.$user->first_name.' '.$user->last_name.'</h5></div></div></a>';
};?>
<?php
$blogusers = get_users( 'blog_id=1&orderby=nicename&role=editor' );
// Array of WP_User objects.
foreach ( $blogusers as $user ) {
    echo '<a href="'.get_author_posts_url( $user->ID ).'"><div class="col-xs-12 col-sm-4"><div class="col-sm-12 author-card">'.get_avatar($user->ID, 215).'<h5>'.$user->first_name.' '.$user->last_name.'</h5></div></div></a>';
};?>
	</div>
</section>
<?php include('tell-your-story.php');?>
<section id="authors" class="row text-center">
		<div class="container">
			<div class="page-header" style="margin-bottom: 35px;">
				<h3 class="text-center"><span>FactoryDaily <strong>Contributors</strong></span></h3>
			</div>
<?php
$blogusers = get_users( 'blog_id=1&orderby=nicename&role=contributor&exclude=47,6' );
// Array of WP_User objects.
foreach ( $blogusers as $user ) {
    echo '<a href="'.get_author_posts_url( $user->ID ).'"><div class="col-xs-12 col-sm-4"><div class="col-sm-12 author-card">'.get_avatar($user->ID, 215).'<h5>'.$user->first_name.' '.$user->last_name.'</h5></div></div></a>';
};?>

	</div>
</section>

<?php get_footer(); ?>