<?php 
/* Select Share */

function select_to_share_script() {
	if(is_single()) {
		wp_enqueue_script ('select-share-script', get_template_directory_uri() . '/sharing/script.js', '20170627' );			
	}
}
add_action( 'wp_enqueue_scripts', 'select_to_share_script' );

function select_to_share($content) {
	if(is_single()) {
	$content .= '<div class="sharing"><div class="sharing__buttons">';
	$content .= '<button id="share" title="Share"><i class="fa fa-facebook"></i></button>';
    $content .= '<button id="tweet" title="Tweet"><i class="fa fa-twitter"></i></button>';
    $content .= '</div><span class="sharing__triangle"></span></div>';
	}
	
	return $content ;
}
add_filter('the_content','select_to_share');
// Add signature or ad after post content

function wpb_after_post_content($content){
if (is_single()) {	
	$content .= 'Your signature or ad code goes here';
}
	return $content;
}
add_filter( "the_content", "wpb_after_post_content" );
