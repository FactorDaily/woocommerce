<?php
/**
 * Template name: catlist
 *
*/

 ?>

<?php 
if(is_user_logged_in()){

	if(isset($_GET['download'])){
	
		if($_GET['download'] == 'true'){
		
// If queried is category
		if(isset($_GET['cat'])){
		$q = $_GET['cat'];
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => -1, 
				'order' => 'DESC', 
				'orderby' =>'date', 
				'fields' => 'ids', 
				'post_status' => 'publish', 
				'cat' => $q
			) );
		}

//If queried is tag
		if(isset($_GET['tag'])){
		$q = $_GET['tag'];
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => -1, 
				'order' => 'DESC', 
				'orderby' =>'date', 
				'fields' => 'ids', 
				'post_status' => 'publish', 
				'taxonomy' => 'post_tag',
				'tag' => $q
			) );
		}
					//get_header();
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
					header("Content-Disposition: attachment; filename=".urlencode(get_cat_name($q))."_posts.xls");  
					header("Pragma: no-cache");  
					header("Expires: 0");  	
			} 	else { // download == false

			//Is set Cat
				if(isset($_GET['cat'])){
					$q1 = $_GET['cat'];
					$the_query = new WP_Query( 
						array(
							'posts_per_page' => -1, 
							'order' => 'DESC', 
							'orderby' =>'date', 
							'fields' => 'ids', 
							'post_status' => 'publish', 
							'cat' => $q1
						) );
				}
			//Is set tag
				if(isset($_GET['tag'])){
					$q1 = $_GET['tag'];
					$the_query = new WP_Query( 
						array(
							'posts_per_page' => -1, 
							'order' => 'DESC', 
							'orderby' =>'date', 
							'fields' => 'ids', 
							'post_status' => 'publish', 
							'taxonomy' => 'post_tag',
							'tag' => $q1
						) );
				}

			//the loop
				if ( $the_query->have_posts() ) : 

					// Start the loop.
					echo '<table>';
					echo '<th>Sl.No</th><th>Title</th><th>Date</th><th>Link</th><th>Author</th>';
					$i = 1 ;
					while ( $the_query->have_posts() ) : $the_query->the_post();
					echo '<tr>';
					echo '<td>'.$i++.'</td>';
					echo  '<td>'.sanitize_title(get_the_title()).'</td>' ;
					echo '<td>'.get_the_date($post->ID).'</td>';
					echo '<td>'.get_the_permalink().'</td>'; 
					echo '<td>'.get_the_author($post->ID).'</td>';
					echo '</tr>';		
					// End the loop.
					endwhile;
					echo '</table>';
					?>
					<br /><a href="?cat=<?php echo $q1; ?>&download=true"><button type="button" class="btn btn-primary">Download Excel File</button></a>
						<a href="?"><button type="button" class="btn btn-primary">Back</button></a>
				
				<?php		
				endif;
			}//download true


	}//is set download

	else {
	get_header();
?>
<div class="row">
	<div class="col-sm-4 col-sm-offset-3">
		<h3>Fetch Posts by :</h3>

	<form id="category-select" class="category-select" action="" method="get">

        <div class="form-group">
		<label for="">Select Category</label>
                <?php wp_dropdown_categories( 'show_count=1&hierarchical=1&class=form-control' ); ?><br />
				<input type="hidden" name="download" value="false" />
                <input type="submit" name="" value="Submit" class="btn btn-primary"  />
        </div>
	</form>
	<form id="tag-select" class="category-select" action="" method="get">
        <div class="form-group">
		<label for="">Select Tag</label>
                <?php wp_dropdown_categories( 'show_count=1&hierarchical=1&class=form-control&taxonomy=post_tag&name=tag&value_field=slug' ); ?><br />
				<input type="hidden" name="download" value="false" />
                <input type="submit" name="" value="Submit" class="btn btn-primary"  />
        </div>
	</form>
	<form id="author-select" class="category-select" action="" method="get">

        <div class="form-group">
		<label for="">Select Author</label> 
                <?php wp_dropdown_users(array('name' => 'fd_author','class' => 'form-control') ); ?><br />
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
