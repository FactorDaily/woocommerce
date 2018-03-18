<?php 
/* Template Name: Updated Articles

*/

// get_header(); ?>

<?php
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => -1, 
				'order' => 'DESC', 
				'orderby' =>'date', 
				'fields' => 'ids', 
				'post_status' => 'publish',
				'post_type' => array('fd_news','post','fd_opinion')
			) );

					//get_header();
					// Start the loop.
					echo '<table>';
					echo '<th>Sl.No</th><th>Title</th><th>Date</th><th>Link</th><th>Author</th><th>Type</th><th>Updated Text</th>';
					$i = 1 ;
					while ( $the_query->have_posts() ) : $the_query->the_post();
					$strings = get_post_meta(get_the_ID(), 'credits'); 
					//$strings = get_post_meta(get_the_ID(), 'Credits'); 

						echo '<tr>';
						echo '<td>'.$i++.'</td>';
						echo  '<td>'.sanitize_title(get_the_title()).'</td>' ;
						echo '<td>'.get_the_date('d-m-Y',$post->ID).'</td>';
						echo '<td>'.get_the_permalink().'</td>'; 
						echo '<td>'.get_the_author($post->ID).'</td>';
						echo '<td>'.get_post_type($post->ID).'</td>';
echo '<td>';
				foreach ($strings as $string) {
					//if (strpos($string, 'upda') !== false) {
						echo $string ;
				//	}
				}	
echo '</td>';						echo '</tr>';	

					// End the loop.
					endwhile;
					echo '</table>';
					header("Content-type: application/octet-stream; charset=utf-8");  
					header("Content-Disposition: attachment; filename=updated_posts.xls");  
					header("Pragma: no-cache");  
					header("Expires: 0");  	
	
?>
<?php //get_footer(); ?>