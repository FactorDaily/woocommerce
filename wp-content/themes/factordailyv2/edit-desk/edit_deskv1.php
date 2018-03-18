
<?php 
//defines the output for our related pages meta box
function display_related_pages_meta_box($post){
	//create nonce
wp_nonce_field('pages_meta_box','pages_meta_box_nonce');
	
//Queries I Posts
$post_args = array(
		'posts_per_page'	=> 15,
		'post_type'			=> array('post','fd_news','fd_opinion'),
		'post_status'		=> 'publish',
		'orderby'			=> 'published',
		'order'				=> 'DESC',
		'fields'			=> 'ids'
	);

//Queries II News Items (If we need them seperate)
$news_args = array(
		'posts_per_page'	=> 5,
		'post_type'			=> 'fd_news',
		'post_status'		=> 'publish',
		'orderby'			=> 'published',
		'order'				=> 'DESC',
		'fields'			=> 'ids'
	);

//Queries III Opinions (If we need them seperate)
$opinion_args = array(
		'posts_per_page'	=> 5,
		'post_type'			=> 'fd_opinion',
		'post_status'		=> 'publish',
		'orderby'			=> 'published',
		'order'				=> 'DESC',
		'fields'			=> 'ids'
	);
$posts = get_posts($post_args);
//$news = get_posts($news_args);
//$opinions = get_posts($opinion_args);
//if we have posts to display
					//====//
if($posts){
	echo '<div id="stories-desk">
			<div class="stories-description">Space for instructions for the editor</div><div class="column left first">';
		echo '<ul class="sortable-list drag-source" data-parent-name="drag-source-stories">'; // show all posts which doesn't have ls_position
			//loop through all posts
			$fetch_query = new WP_Query( $posts);
			while ( $fetch_query->have_posts() ) : $fetch_query->the_post();
			//foreach($posts as $post){
				$post_id = get_the_ID();
				$ls_position = get_post_meta($post_id, 'ls_position');
				$postTypeTitle = get_post_type_object(get_post_type($post_id));
				$post_type = esc_html($postTypeTitle->labels->singular_name);
				$post_date = get_the_date('d, F Y',$post_id);
				$post_attachment_id = get_post_meta($post_id, '_listing_image_id');
				$post_author = get_the_author();
	
				if(empty($ls_position)){
				//collect related pages (if we already have some)
					$post_thumb = get_the_post_thumbnail_url($post);
					$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
					if(empty($post_thumb)){
						$post_thumb = wp_get_attachment_url($post_attachment_id[0]);
					}
					$post_name = get_the_title($post_id);
					echo '<li class="sortable-item" data-page-id="' . $post_id . '">';   
					echo '<div class="thumb_image"  style="background-image:url('.$post_thumb.');"></div>
						  <p class="show_title">'.$post_name.'<br><span class="show_author">'.$post_author.' </span> | <span class="show_date">'.$post_date.'</span></p>' ;
					echo 	'<span class="remove_item remove"> X </span>';
					echo '</li> ';
				}
			endwhile ;//}
		echo '</ul>';
		echo "</div>";
} //if posts
	$ls_post_args = array(
			'posts_per_page'	=> 15,
			'post_type'			=> array('post','fd_news','fd_opinion'),
			'post_status'		=> 'publish',
			'order' 			=> 'ASC', 
			'orderby' 			=> 'meta_value_num', 
			'meta_key' 			=> 'ls_position', 
			'fields'			=> 'ids'
		);
	$ls_posts = get_posts($ls_post_args);
		echo '<div class="drop-area">';
			echo '<div class="stories ">';
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
}
             
		echo '</div>';
		echo '<div class="sidebar"><button class="save_data ls-position-reset">Reset</button><button class="save_data ls-position-save" disabled>Save</button><div class="desc_box"></div></div>';
	echo '</div></div>';
} //related_pages_meta_box

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
			'post_type'			=> array('post','fd_news','fd_opinion'),
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
//					print_r($existing_posts);
//					echo '<hr>';
//					print_r($positions);
//					echo '<hr>';
//					print_r($arr);					
					foreach ($arr as $remove_id){
						$the_query = new WP_Query( array('p' => $remove_id, 'post_type' => array('post','fd_news','fd_opinion')) );
						while ( $the_query->have_posts() ) : $the_query->the_post();
								delete_post_meta($remove_id, 'ls_position', '', false);	
						endwhile ;					
					}
				foreach($positions as $position => $pid){
			
				$the_query = new WP_Query( array('p' => $pid, 'post_type' => array('post','fd_news','fd_opinion')) );
				while ( $the_query->have_posts() ) : $the_query->the_post();
					update_post_meta($pid, 'ls_position', $position, false);
				endwhile ;
				}
				echo 'Layout Saved';		
			}
    wp_die();
}
?>

