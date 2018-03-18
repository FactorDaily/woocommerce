<?php 
/* Template Name: Updated Articles

*/
add_action( 'pre_get_posts', function( $q )
{
    if( $title = $q->get( '_meta_or_title' ) )
    {
        add_filter( 'get_meta_sql', function( $sql ) use ( $title )
        {
            global $wpdb;

            // Only run once:
            static $nr = 0; 
            if( 0 != $nr++ ) return $sql;

            // Modified WHERE
            $sql['where'] = sprintf(
                " AND ( %s OR %s ) ",
                $wpdb->prepare( "{$wpdb->posts}.post_title like '%%%s%%'", $title),
                mb_substr( $sql['where'], 5, mb_strlen( $sql['where'] ) )
            );

            return $sql;
        });
    }
});

$meta_query = array();
$args = array();
$search_string = "fixed";

$meta_query[] = array(
    'key' => 'credits',
    'value' => $search_string,
    'compare' => 'LIKE'
);
$meta_query[] = array(
    'key' => 'disclaimer',
    'value' => $search_string,
    'compare' => 'LIKE'
);

//if there is more than one meta query 'or' them
if(count($meta_query) > 1) {
    $meta_query['relation'] = 'OR';
}

// The Query
$args['post_type'] = "post";
$args['_meta_or_title'] = $search_string; //not using 's' anymore
$args['meta_query'] = $meta_query;

$string = "Hellow world here!";
$output = strpos($string,'here',0);

print_r($output);

$the_queryx = new WP_Query($args)
// get_header(); ?>
<!-- looking for changed, fixed, corrected, updated in body and custom fields-->
<?php
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => 3, 
				'order' => 'DESC', 
				'orderby' =>'date', 
				'fields' => 'ids', 
				'post_status' => 'publish',
				'post_type' => array('fd_news','post','fd_opinion','shorthand_story'),
				's' => 'fixed + changed ',
//				'meta_query' => array(
//					'relation' => 'OR',
//					array(
//						'key' =>'credits',
//						'value' => 'fixed',
//						'compare' => 'LIKE'
//					),
//					'relation' => 'OR',
//					array(
//						'key' =>'credits',
//						'value' => 'corrected',
//						'compare' => 'LIKE'
//					),
//					'relation' => 'OR',
//					array(
//						'key' =>'credits',
//						'value' => 'changed',
//						'compare' => 'LIKE'
//					),
//					'relation' => 'OR',
//					array(
//						'key' =>'credits',
//						'value' => 'edited',
//						'compare' => 'LIKE'
//					),
//					'relation' => 'OR',
//					array(
//						'key' =>'disclosure',
//						'value' => 'fixed',
//						'compare' => 'LIKE'
//					),
//					'relation' => 'OR',
//					array(
//						'key' =>'disclosure',
//						'value' => 'corrected',
//						'compare' => 'LIKE'
//					),
//					'relation' => 'OR',
//					array(
//						'key' =>'disclosure',
//						'value' => 'changed',
//						'compare' => 'LIKE'
//					),
//					'relation' => 'OR',
//					array(
//						'key' =>'disclosure',
//						'value' => 'edited',
//						'compare' => 'LIKE'
//					)
//				)
			) );

					//get_header();
					// Start the loop.
					echo '<table>';
					echo '<th>Sl.No</th><th>Title</th><th>Date</th><th>Link</th><th>Author</th><th>Type</th><th>Updated Text</th>';
					$i = 1 ;
					while ( $the_query->have_posts() ) : $the_query->the_post();
					//$strings = get_post_meta(get_the_ID(), 'credits'); 
$meta = get_post_meta(get_the_ID(),'',true);

// Now convert them to singles
$meta = array_map(function($n) {return $n[0];}, $meta);
					//$strings = get_post_meta(get_the_ID(), 'Credits'); 

						echo '<tr>';
						echo '<td>'.$i++.'</td>';
						echo  '<td>'.sanitize_title(get_the_title()).'</td>' ;
						echo '<td>'.get_the_date('d-m-Y',$post->ID).'</td>';
						echo '<td>'.get_the_permalink().'</td>'; 
						echo '<td>'.get_the_author($post->ID).'</td>';
						echo '<td>'.get_post_type($post->ID).'</td>';
echo '<td>';
$ii = [] ;
//				foreach ($strings as $string) {
//					if (strpos($string, 'corrected') !== false || strpos($string, 'updat') !== false || $strings == '') {
//						echo $string ;
//					$ii++;
//					}
//				}	
//print_r($meta);
//			    foreach ($meta as $string) {
//					
//					//print_r($meta);	
//					if (
//						strpos($string, 'corrected') !== false ||  
//						strpos($string, 'updat') !== false ||
//						strpos($string, 'change') !== false ||
//						strpos($string, 'fixed') !== false 
//					) {
//						echo '<strong>'.$meta['key'].'</strong>'.$string ;
//					$ii++;
//					}
//						if (
//							preg_match('#^.*update.*$#', $string) !== false || preg_match('#^.*correct.*$#', $string) !== false||
//							preg_match('#^.*fixed.*$#', $string) !== false || 
//							preg_match('#^.*edited.*$#', $string) !== false) {
//							echo $string .'</br>';
//						}
				//}

echo '</td>';						echo '</tr>';	

					// End the loop.
					endwhile;
					echo '</table>';
//					header("Content-type: application/octet-stream; charset=utf-8");  
//					header("Content-Disposition: attachment; filename=updated_posts.xls");  
//					header("Pragma: no-cache");  
//					header("Expires: 0");  	
	
?>
<?php //get_footer(); ?>