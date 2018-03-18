<?php 
/* Template Name: Updated Articles
*/
?>
<!-- looking for changed, fixed, corrected, updated in body and custom fields-->
<?php
//-------------Step 1----------------//
//----------- All posts with credit or disclosure fields with keywords-----------//

$the_query = new WP_Query( 
			array(
				'posts_per_page' => -1, 
				'offset' => 0,
				'order' => 'DESC', 
				'orderby' =>'date', 
				'fields' => 'ids', 
				'post_status' => 'publish',
				'post_type' => array('fd_news','post','fd_opinion','shorthand_story'),			
//				's' => 'edited',
			));
					// Start the loop.
					echo '<table class="table">';
					echo '<th>Sl.No</th><th>Title</th><th>P ID</th><th>Date</th><th>Link</th><th>Type</th><th>Updated Text</th>';
					$i = 1 ;
					
					while ( $the_query->have_posts() ) : $the_query->the_post();
						$getmeta = get_post_meta(get_the_ID(), '',true);
						$creditmeta = get_post_meta(get_the_ID(), 'credits',true);
						
if(!$creditmeta == ''){
	
	if(
		strpos($creditmeta,'fixe') !== false ||
		strpos($creditmeta,'updat') !== false ||
		strpos($creditmeta,'change') !== false ||
		strpos($creditmeta,'edite') !== false ||
		strpos($creditmeta,'correct') !== false

	){
						$table = '<tr>';
						$table .='<td>'.$i++.'</td>';
						$table .=  '<td>'.sanitize_title(get_the_title()).'</td>' ;
						$table .=  '<td>'.get_the_ID().'</td>' ;
						$table .='<td>'.get_the_date('d-m-Y',get_the_ID()).'</td>';
						$table .= '<td>'.get_the_permalink().'</td>'; 
//						//$table .= '<td>'.get_the_author(get_the_ID()).'</td>';
						$table .= '<td>'.get_post_type(get_the_ID()).'</td>';
						$table .= '<td>';
						$table .= $creditmeta;
					$exclude_pid[] = get_the_ID();
						$table .= '</td></tr>';	
					echo $table ;
}
}			// End the loop.
					endwhile;	
$ic =  $i-1 ;
echo $ic;
//-------------Step 2----------------//
//---------- Search for keywords ---------//

$the_query1 = new WP_Query( 
			array(
				'posts_per_page' => -1, 
				'order' => 'DESC', 
				'orderby' =>'date', 
				'fields' => 'ids', 
				'post_status' => 'publish',
				'post_type' => array('fd_news','post','fd_opinion','shorthand_story'),
				'post__not_in' => $exclude_pid,
				's' => 'fixe',
			));

$the_query2 = new WP_Query( 
			array(
				'posts_per_page' => -1, 
				'order' => 'DESC', 
				'orderby' =>'date', 
				'fields' => 'ids', 
				'post_status' => 'publish',
				'post_type' => array('fd_news','post','fd_opinion','shorthand_story'),
				'post__not_in' => $exclude_pid,
				's' => 'update',
			));

$the_query3 = new WP_Query( 
			array(
				'posts_per_page' => -1, 
				'order' => 'DESC', 
				'orderby' =>'date', 
				'fields' => 'ids', 
				'post_status' => 'publish',
				'post_type' => array('fd_news','post','fd_opinion','shorthand_story'),
				'post__not_in' => $exclude_pid,
				's' => 'change',
			));

$the_query4 = new WP_Query( 
			array(
				'posts_per_page' => -1, 
				'order' => 'DESC', 
				'orderby' =>'date', 
				'fields' => 'ids', 
				'post_status' => 'publish',
				'post_type' => array('fd_news','post','fd_opinion','shorthand_story'),
				'post__not_in' => $exclude_pid,
				's' => 'edite',
			));

$the_query5 = new WP_Query( 
			array(
				'posts_per_page' => -1, 
				'order' => 'DESC', 
				'orderby' =>'date', 
				'fields' => 'ids', 
				'post_status' => 'publish',
				'post_type' => array('fd_news','post','fd_opinion','shorthand_story'),
				'post__not_in' => $exclude_pid,
				's' => 'correct',
			));
					while ( $the_query1->have_posts() ) : $the_query1->the_post();
						$getmeta = get_post_meta(get_the_ID(), 'credit',true);
						$getmeta_disclosure = get_post_meta(get_the_ID(), 'disclosure',true);
						$table = '<tr>';
						$table .='<td>'.$i++.'</td>';
						$table .=  '<td>'.sanitize_title(get_the_title()).'</td>' ;
						$table .=  '<td>'.get_the_ID().'</td>' ;
						$table .='<td>'.get_the_date('d-m-Y',get_the_ID()).'</td>';
						$table .= '<td>'.get_the_permalink().'</td>'; 
						//$table .= '<td>'.get_the_author(get_the_ID()).'</td>';
						$table .= '<td>'.get_post_type(get_the_ID()).'</td>';
						$table .= '<td>';
						$table .= $getmeta ;
						if(
							strpos($getmeta_disclosure,'fixe') !== false ||
							strpos($getmeta_disclosure,'updat') !== false ||
							strpos($getmeta_disclosure,'change') !== false ||
							strpos($getmeta_disclosure,'edite') !== false ||
							strpos($getmeta_disclosure,'correct') !== false 
							

						){
						$table .= $getmeta_disclosure;
						}
						$table .= '</td></tr>';
					echo $table ;
					$exclude_pid[] = get_the_ID();
					endwhile;


					while ( $the_query2->have_posts() ) : $the_query2->the_post();
						$getmeta = get_post_meta(get_the_ID(), 'credit',true);
						$getmeta_disclosure = get_post_meta(get_the_ID(), 'disclosure',true);
						$table = '<tr>';
						$table .='<td>'.$i++.'</td>';
						$table .=  '<td>'.sanitize_title(get_the_title()).'</td>' ;
						$table .=  '<td>'.get_the_ID().'</td>' ;
						$table .='<td>'.get_the_date('d-m-Y',get_the_ID()).'</td>';
						$table .= '<td>'.get_the_permalink().'</td>'; 
						//$table .= '<td>'.get_the_author(get_the_ID()).'</td>';
						$table .= '<td>'.get_post_type(get_the_ID()).'</td>';
						$table .= '<td>';
						$table .= $getmeta ;
						if(
							strpos($getmeta_disclosure,'fixe') !== false ||
							strpos($getmeta_disclosure,'updat') !== false ||
							strpos($getmeta_disclosure,'change') !== false ||
							strpos($getmeta_disclosure,'edite') !== false ||
							strpos($getmeta_disclosure,'correct') !== false

						){
						$table .= $getmeta_disclosure;
						}
						$table .= '</td></tr>';
					echo $table ;
					endwhile;

					while ( $the_query3->have_posts() ) : $the_query3->the_post();
						$getmeta = get_post_meta(get_the_ID(), 'credit',true);
						$getmeta_disclosure = get_post_meta(get_the_ID(), 'disclosure',true);
						$table = '<tr>';
						$table .='<td>'.$i++.'</td>';
						$table .=  '<td>'.sanitize_title(get_the_title()).'</td>' ;
						$table .=  '<td>'.get_the_ID().'</td>' ;
						$table .='<td>'.get_the_date('d-m-Y',get_the_ID()).'</td>';
						$table .= '<td>'.get_the_permalink().'</td>'; 
						//$table .= '<td>'.get_the_author(get_the_ID()).'</td>';
						$table .= '<td>'.get_post_type(get_the_ID()).'</td>';
						$table .= '<td>';
						$table .= $getmeta ;
						if(
							strpos($getmeta_disclosure,'fixe') !== false ||
							strpos($getmeta_disclosure,'updat') !== false ||
							strpos($getmeta_disclosure,'change') !== false ||
							strpos($getmeta_disclosure,'edite') !== false ||
							strpos($getmeta_disclosure,'correct') !== false

						){
						$table .= $getmeta_disclosure;
						}
						$table .= '</td></tr>';
					echo $table ;
					endwhile;

					while ( $the_query4->have_posts() ) : $the_query4->the_post();
						$getmeta = get_post_meta(get_the_ID(), 'credit',true);
						$getmeta_disclosure = get_post_meta(get_the_ID(), 'disclosure',true);
						$table = '<tr>';
						$table .='<td>'.$i++.'</td>';
						$table .=  '<td>'.sanitize_title(get_the_title()).'</td>' ;
						$table .=  '<td>'.get_the_ID().'</td>' ;
						$table .='<td>'.get_the_date('d-m-Y',get_the_ID()).'</td>';
						$table .= '<td>'.get_the_permalink().'</td>'; 
						//$table .= '<td>'.get_the_author(get_the_ID()).'</td>';
						$table .= '<td>'.get_post_type(get_the_ID()).'</td>';
						$table .= '<td>';
						$table .= $getmeta ;
						if(
							strpos($getmeta_disclosure,'fixe') !== false ||
							strpos($getmeta_disclosure,'updat') !== false ||
							strpos($getmeta_disclosure,'change') !== false ||
							strpos($getmeta_disclosure,'edite') !== false ||
							strpos($getmeta_disclosure,'correct') !== false

						){
						$table .= $getmeta_disclosure;
						}
						$table .= '</td></tr>';
					echo $table ;
					endwhile;

					while ( $the_query5->have_posts() ) : $the_query5->the_post();
						$getmeta = get_post_meta(get_the_ID(), 'credit',true);
						$getmeta_disclosure = get_post_meta(get_the_ID(), 'disclosure',true);
						$table = '<tr>';
						$table .='<td>'.$i++.'</td>';
						$table .=  '<td>'.sanitize_title(get_the_title()).'</td>' ;
						$table .=  '<td>'.get_the_ID().'</td>' ;
						$table .='<td>'.get_the_date('d-m-Y',get_the_ID()).'</td>';
						$table .= '<td>'.get_the_permalink().'</td>'; 
						//$table .= '<td>'.get_the_author(get_the_ID()).'</td>';
						$table .= '<td>'.get_post_type(get_the_ID()).'</td>';
						$table .= '<td>';
						$table .= $getmeta ;
						if(
							strpos($getmeta_disclosure,'fixe') !== false ||
							strpos($getmeta_disclosure,'updat') !== false ||
							strpos($getmeta_disclosure,'change') !== false ||
							strpos($getmeta_disclosure,'edite') !== false ||
							strpos($getmeta_disclosure,'correct') !== false

						){
						$table .= $getmeta_disclosure;
						}
						$table .= '</td></tr>';
					echo $table ;
					endwhile;
					echo '</table>';

					header("Content-type: application/octet-stream; charset=utf-8");  
					header("Content-Disposition: attachment; filename=updated_posts.xls");  
					header("Pragma: no-cache");  
					header("Expires: 0");  	

//if(empty($creditmeta)){
	
//						$table = '<tr>';
//						$table .='<td>'.$i++.'</td>';
//						$table .=  '<td>'.sanitize_title(get_the_title()).'</td>' ;
//						$table .='<td>'.get_the_date('d-m-Y',get_the_ID()).'</td>';
//						$table .= '<td>'.get_the_permalink().'</td>'; 
////						//$table .= '<td>'.get_the_author(get_the_ID()).'</td>';
//						$table .= '<td>'.get_post_type(get_the_ID()).'</td>';
//						$table .= '<td>';
					
//							foreach($getmeta as $metakey => $metavalue){
//									
//									if(
//										strpos($metavalue[0], 'update') == true||
//										$metakey == 'credits' && strpos($metavalue[0],'edite')||
//										$metakey == 'credits' && strpos($metavalue[0],'fixe')||
//										$metakey == 'credits' && strpos($metavalue[0],'change')||
//										$metakey == 'credits' && strpos($metavalue[0],'correcte')||
//										
//										$metakey == 'disclosure' && strpos($metavalue[0],'update')||
//										$metakey == 'disclosure' && strpos($metavalue[0],'edite')||
//										$metakey == 'disclosure' && strpos($metavalue[0],'fixe')||
//										$metakey == 'disclosure' && strpos($metavalue[0],'change')||
//										$metakey == 'disclosure' && strpos($metavalue[0],'correcte')
//									   ){
//										//$table .= $metavalue[0];
//										}
//
//								}
?>
<?php //get_footer(); ?>