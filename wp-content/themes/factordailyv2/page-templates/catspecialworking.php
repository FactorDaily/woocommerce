<?php
/**
 * Template name: catlist
 *
*/
if(is_user_logged_in()){
	if(isset($_GET['download'])){
	if($_GET['download'] == 'true'){
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => -1, 
				'order' => 'DESC', 
				'orderby' =>'date', 
				'fields' => 'ids', 
				'post_status' => 'publish', 
				'cat' => $_GET['cat']
			) );
					// Start the loop.
					echo '<table>';
					echo '<th>Sl.No</th><th>Title</th><th>Date</th><th>Link</th><th>Author</th>';
					$i = 1 ;
					while ( $the_query->have_posts() ) : $the_query->the_post();
					echo '<tr>';
					echo '<td>'.$i++.'</td>';
					echo  '<td>'.sanitize_text_field(get_the_title()).'</td>' ;
					echo '<td>'.get_the_date($post->ID).'</td>';
					echo '<td>'.get_the_permalink().'</td>'; 
					echo '<td>'.get_the_author($post->ID).'</td>';
					echo '</tr>';		
					// End the loop.
					endwhile;
					echo '</table>';
					header("Content-type: application/octet-stream; charset=utf-8");  
					header("Content-Disposition: attachment; filename=".urlencode(get_cat_name($_GET['cat']))."_posts.xls");  
					header("Pragma: no-cache");  
					header("Expires: 0");  	
			} 	else { // download == true

	if(isset($_GET['cat'])){
		$cat = $_GET['cat'];
		get_header();
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => -1, 
				'order' => 'DESC', 
				'orderby' =>'date', 
				'fields' => 'ids', 
				'post_status' => 'publish', 
				'cat' => $_GET['cat']
			) );
?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php
					// Start the loop.
					echo '<table>';
					echo '<th>Sl.No</th><th>Title</th><th>Date</th><th>Link</th><th>Author</th>';
					$i = 1 ;
					while ( $the_query->have_posts() ) : $the_query->the_post();
					echo '<tr>';
					echo '<td>'.$i++.'</td>';
					echo  '<td>'.sanitize_text_field(get_the_title()).'</td>' ;
					echo '<td>'.get_the_date($post->ID).'</td>';
					echo '<td>'.get_the_permalink().'</td>'; 
					echo '<td>'.get_the_author($post->ID).'</td>';
					echo '</tr>';		
					// End the loop.
					endwhile;
					echo '</table>';
					?>
					<br /><a href="?cat=<?php echo $_GET['cat']; ?>&download=true"><button type="button" class="btn btn-primary">Download Excel File</button></a>
						<a href="?"><button type="button" class="btn btn-primary">Select Category</button></a>
				
				<?php		
				endif;
			}//GET cat
		}//download == false

	}//is set download

	else {
	get_header();
?>
<div class="row">
	<div class="col-sm-4 col-sm-offset-3">
	<form id="category-select" class="category-select" action="" method="get">
        <div class="form-group">
		<label for="">Select Category</label>
                <?php wp_dropdown_categories( 'show_count=1&hierarchical=1&class=form-control' ); ?><br />
				<input type="hidden" name="download" value="false" />
                <input type="submit" name="" value="Submit" class="btn btn-primary"  />
        </div>
	</form>
	</div>
</div>
<?php
	}

}//user logged in
?>
