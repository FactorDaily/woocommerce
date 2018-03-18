<?php 
/* Template Name: Updated Articles New

*/

// get_header(); ?>
<a href="?searchin=cf"><button type="button" class="btn btn-primary">Display by custom field</button></a>
<a href="?searchin=post"><button type="button" class="btn btn-primary">Display by post content</button></a>
<?php

if(is_user_logged_in()){
		$the_query = '
	SELECT $wpdb->postmeta.post_id FROM $wpdb->postmeta WHERE $wpdb->postmeta.meta_key = "credits" 
INNER JOIN $wpdb->posts
ON $wpdb->postmeta.post_id = $wpdb->posts.ID';


if(isset($_GET['searchin']) && $_GET['searchin'] == 'post' ){
 $querystr = "
    SELECT * 
    FROM $wpdb->posts, $wpdb->postmeta
    WHERE $wpdb->posts.ID = $wpdb->postmeta.post_id 
     
    AND $wpdb->posts.post_content LIKE '%update%' 
    AND $wpdb->posts.post_status = 'publish' 

    AND $wpdb->posts.post_date < NOW()
    ORDER BY $wpdb->posts.post_date DESC
 ";
}
if(isset($_GET['searchin']) && $_GET['searchin'] == 'cf' || !isset($_GET)){
 $querystr = "
    SELECT * 
    FROM $wpdb->posts, $wpdb->postmeta
    WHERE $wpdb->posts.ID = $wpdb->postmeta.post_id 
     
    AND $wpdb->postmeta.meta_value LIKE '%update%' 
    AND $wpdb->posts.post_status = 'publish' 

    AND $wpdb->posts.post_date < NOW()
    ORDER BY $wpdb->posts.post_date DESC
 ";
}
 $pageposts = $wpdb->get_results($querystr, OBJECT);
$pageposts = '';
exit;
//print_r($pageposts);
?>
 <?php if ($pageposts): ?>
 <?php global $post; ?>
<?php 
					echo '<table>';
					echo '<th>Sl.No</th><th>Title</th><th>Date</th><th>Link</th><th>Author</th><th>Type</th><th>Updated Text</th>';
					$i = 1 ;
?>
 <?php foreach ($pageposts as $post): ?>
 <?php setup_postdata($post); ?>

<?php
						echo '<tr>';
						echo '<td>'.$i++.'</td>';
						echo  '<td>'.sanitize_title(get_the_title()).'</td>' ;
						echo '<td>'.get_the_date('d-m-Y',$post->ID).'</td>';
						echo '<td>'.get_the_permalink().'</td>'; 
						echo '<td>'.get_the_author($post->ID).'</td>';
						echo '<td>'.get_post_type($post->ID).'</td>';
						$meta = get_post_meta(get_the_ID(), 'credits'); 
						echo '<td>';
							
									foreach ($meta as $string) {
											if (preg_match('#^.*update.*$#', $string) !== false || preg_match('#^.*correct.*$#', $string) !== false) {
												echo $string .'</br>';
											}
										}
										
						echo '</td>';						
						echo '</tr>';	
?>

 <?php endforeach; ?>
<?php echo '</table>';?>
					
						
<?php
if(isset($_GET['download'])) {
					header("Content-type: application/octet-stream; charset=utf-8");  
					header("Content-Disposition: attachment; filename=updated_posts.xls");  
					header("Pragma: no-cache");  
					header("Expires: 0");  	
}

?>
<br /><a href="?download=true"><button type="button" class="btn btn-primary">Download CSV File</button></a>
<?php endif; ?>

<?php }//user logged in
else{
header('Location:https://factordaily.com');
} ?>