<?php 
// all the code for Editing Desk is here V
// Version 1.0 9-2-17 - gts
//defines the output for our related pages meta box
function display_related_pages_meta_box($post){
	//create nonce
wp_nonce_field('pages_meta_box','pages_meta_box_nonce');
	
//Queries I Most Recent Posts
$post_args = array(
		'posts_per_page'		=> 30,
		'post_type'			=> array('post', 'fd_news','fd_opinion','fd_longforms','shorthand_story'),
		'post_status'			=> 'publish',
		'orderby'			=> 'date',
		'order'				=> 'DESC',
		'fields'			=> 'ids',
		'meta_query' 			=> array('key' => '_listing_image_id','key' => '_thumbnail_id' )
	);

//Queries II Posts with position
$ls_post_args = array(
			'posts_per_page'	=> 5,
			'post_type'			=> array('post', 'fd_news','fd_opinion','fd_longforms','shorthand_story'),
			'post_status'		=> 'publish',
			'order' 			=> 'ASC', 
			'orderby' 			=> 'meta_value_num', 
			'meta_key' 			=> 'ls_position', 
			'fields'			=> 'ids'
		);


$ls_posts = get_posts($ls_post_args);
//if we have posts to display
?>
<div id="stories-desk">
	<div class="stories-description">Space for instructions for the editor</div>
	<div class="drop-area">
		<div class="stories ">
<?php
if($ls_posts){
			$pps = array(0 =>'',1 => '',2 => '',3 => '',4 => '');	
			foreach ($pps as $key => $value){
				$ul = '<ul class="sortable-list story" id="story_'.$key.'" data-position-id="'.$key.'"></ul>';
				foreach($ls_posts as $ls_key => $ls_value){
						$p_id = $ls_value;
						$lsp = get_post_meta($p_id, 'ls_position');	
						$postTypeTitle = get_post_type_object(get_post_type($p_id));
						$post_type = esc_html($postTypeTitle->labels->singular_name);
						$post_thumb = get_the_post_thumbnail_url($p_id);
						$post_attachment_id = get_post_meta($p_id, '_listing_image_id');
						if(empty($post_thumb)){
						$post_thumb = wp_get_attachment_url($post_attachment_id[0]);
						}
						$post_name = get_the_title($p_id);
						$post_date = get_the_date('d, F Y',$p_id);
						$post_author = get_the_author($p_id);
						foreach($lsp as $lsp_value){
	
						}
						if($key == $lsp_value){
							$ul = '<ul class="sortable-list story" id="story_'.$lsp_value.'" data-position-id="'.$lsp_value.'">		
							<li class="sortable-item " data-page-id="' . $p_id . '">
							<span class="thumb_image"  style="background-image:url('.$post_thumb.');"></span>
							<p class="show_title">'.$post_name.'<br><span class="show_author">'.get_the_author().'</span> | <span class="show_date">'.$post_date.'</span></p><span class="remove_item remove active"> X </span></li></ul>';	
						}
				}
				echo $ul;								
			}
				
}else{
	echo '<ul class="sortable-list story" id="story_0" data-position-id="0"></ul>';
	echo '<ul class="sortable-list story" id="story_1" data-position-id="1"></ul>';
	echo '<ul class="sortable-list story" id="story_2" data-position-id="2"></ul>';
	echo '<ul class="sortable-list story" id="story_3" data-position-id="3"></ul>';
	echo '<ul class="sortable-list story" id="story_4" data-position-id="4"></ul>';
  } //if ls_posts 
            
		echo '</div>';
		echo '<div class="sidebar"><button class="save_data ls-position-reset">Reset</button><button class="save_data ls-position-save" disabled>Save</button><div class="desc_box"></div></div>';
	    echo '</div><div class="column left first">';
		?>
<form role="search" method="get" id="editor_search_form" action="">
<div>
<input type="text" value="" name="s" id="s" />
<input type="hidden" value="1" name="sentence" />
</div>
</form>
        <?php
		echo '<ul class="sortable-list drag-source" data-parent-name="drag-source-stories">'; // show all posts which doesn't have ls_position

			//loop through all posts
			$fetch_query = new WP_Query( $post_args);
			while ( $fetch_query->have_posts() ) : $fetch_query->the_post();
			//foreach($posts as $post){
				$post_id = get_the_ID();
				$ls_position = get_post_meta($post_id, 'ls_position');
				$postTypeTitle = get_post_type_object(get_post_type());
				$post_type = esc_html($postTypeTitle->labels->singular_name);
				$post_date = get_the_date('d, F Y',$post_id);
				$post_attachment_id = get_post_meta($post_id, '_listing_image_id');
				$post_author = get_the_author();
				$post_permalink = get_permalink();
	
				if(empty($ls_position)){
					$post_thumb = get_the_post_thumbnail_url($post);
					$post_thumbnail_id = get_post_thumbnail_id( $post_id );
					if(empty($post_thumb)){
						if(!empty($post_attachment_id)) {
						$post_thumb = wp_get_attachment_url($post_attachment_id[0]);
						}
					}
					$post_name = get_the_title($post_id);
					//echo 'img :'. $post_thumb ;
                   if($post_thumb == '') {
					//echo 'no image' ;
					} else {
					echo '<li class="sortable-item" data-page-id="' . $post_id . '">';   
					echo '<div class="thumb_image"  style="background-image:url('.$post_thumb.');"></div>
						  <p class="show_title"><a href="'.$post_permalink.'" target="_blank">'.$post_name.'</a><br><span class="show_author">'.$post_author.' </span> | <span class="show_date">'.$post_date.' | '. $post_type .'</span></p>' ;
					echo 	'<span class="remove_item remove"> X </span>';
					echo '</li> ';
         }
				}
			endwhile ;//}
		echo '</ul>';
 echo '</div>';


}
function editing_desk_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	display_related_pages_meta_box($post);
}

add_action( 'wp_ajax_add_lsp', 'prefix_ajax_add_lsp' );

function prefix_ajax_add_lsp() {
		if(isset($_POST['positions'])){ 
			$positions = $_POST['positions'];	
	$ls_post_args = array(
			'posts_per_page'	=> 5,
			'post_type'			=> array('post', 'fd_news','fd_opinion','fd_longforms','shorthand_story'),
			'post_status'		=> 'publish',
			'order' 			=> 'ASC', 
			'orderby' 			=> 'meta_value_num', 
			'meta_key' 			=> 'ls_position', 
			'fields'			=> 'ids'
		);
				$check_query = new WP_Query( $ls_post_args);	
				$existing_posts = array();
				while ( $check_query->have_posts() ) : $check_query->the_post();
					$lcp1 = get_post_meta(get_the_ID(), 'ls_position');					
					$existing_posts[$lcp1[0]] = get_the_ID();
				endwhile ;						
					$arr = array_diff($existing_posts, $positions);
			
					foreach ($arr as $remove_id){
						$the_query = new WP_Query( array('p' => $remove_id, 'post_type' => array('post', 'fd_news', 'fd_opinion','fd_longforms','shorthand_story')) );
						while ( $the_query->have_posts() ) : $the_query->the_post();
								delete_post_meta($remove_id, 'ls_position', '', false);	
						endwhile ;					
					}
				foreach($positions as $position => $pid){
			
				$the_query = new WP_Query( array('p' => $pid, 'post_type' => array('post','fd_news','fd_opinion','fd_longforms','shorthand_story')) );
				while ( $the_query->have_posts() ) : $the_query->the_post();
					update_post_meta($pid, 'ls_position', $position, false);
				endwhile ;
				}
				echo 'Layout Saved';		
			}
    wp_die();
}
add_action('wp_ajax_nopriv_dhemy_ajax_search','dhemy_ajax_search');
add_action('wp_ajax_dhemy_ajax_search','dhemy_ajax_search');
 
function dhemy_ajax_search(){

$term = $_GET['term'] ;
// creating a search query
echo $term;
$args = array(
 'post_type' =>array('post', 'fd_news', 'fd_opinion','fd_longforms','shorthand_story'),
'post_status' => 'publish',
'order' => 'DESC',
'orderby' => 'date',
's' => $term,
'posts_per_page' =>-1
 );

$query = new WP_Query( $args );
 
// display results
if($query->have_posts()){
 
while ($query->have_posts()) {
	
$query->the_post();
						$p_id = get_the_ID();
						$postTypeTitle = get_post_type_object(get_post_type($p_id));
						$post_type = esc_html($postTypeTitle->labels->singular_name);
						$post_thumb = get_the_post_thumbnail_url($p_id);
						$post_attachment_id = get_post_meta($p_id, '_listing_image_id');
						if(empty($post_thumb)){
						$post_thumb = wp_get_attachment_url($post_attachment_id[0]);
						}
						$post_name = get_the_title($p_id);
						$post_date = get_the_date('d, F Y',$p_id);
						$post_author = get_the_author($p_id);
						
echo '<li class="sortable-item " data-page-id="' . $p_id . '">';
echo '<span class="thumb_image"  style="background-image:url('.$post_thumb.');"></span>';
echo '<p class="show_title">'.$post_name.'<br><span class="show_author">'.get_the_author().'</span> | <span class="show_date">'.$post_date.'</span></p><span class="remove_item remove active"> X </span></li>';

}
}else{
 
?>
<li><a href="#">Use more key words</a></li>
<?php
 
}
exit;

}

 function wpc_search_by_title_only( $search, &$wp_query )  
{  
if(is_admin()){
	$screen = get_current_screen();
	if($screen == 'The Editing Desk') { // The search limited to title and to the Editing Desk page
    global $wpdb;  
    if ( empty( $search ) )  
        return $search; // skip processing - no search term in query  
    $q = $wp_query->query_vars;  
    $n = ! empty( $q['exact'] ) ? '' : '%';  
    $search =  
    $searchand = '';  
    foreach ( (array) $q['search_terms'] as $term ) {  
        $term = esc_sql( like_escape( $term ) );  
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";  
        $searchand = ' AND ';  
    }  
    if ( ! empty( $search ) ) {  
        $search = " AND ({$search}) ";  
        if ( ! is_user_logged_in() )  
            $search .= " AND ($wpdb->posts.post_password = '') ";  
    }  
    return $search;  
}  
add_filter( 'posts_search', 'wpc_search_by_title_only', 500, 2 ); 
}
}
?>
