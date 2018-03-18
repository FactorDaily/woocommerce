<?php
/**
 * Template name: catlist
 * For the admin guys to get a list of posts by category, tag or author exported in excel sheet
*/
if(is_user_logged_in()){
	if(isset($_GET['download'])){
	
		if($_GET['download'] == 'true'){
//1 Create the query	
			$qry = array(
				'posts_per_page' => -1, 
				'order' => 'DESC', 
				'orderby' =>'date', 
				'fields' => 'ids', 
				'post_type' => array('fd_news','post','fd_opinion'),
				'post_status' => 'publish', 
			) ;
			
//2 Add additional category / tag values to array 	
			if(isset($_GET['cat'])){ $qry['cat'] = $_GET['cat']; $key = 'cat'; $title = get_cat_name($_GET['cat']); }
			if(isset($_GET['tag'])){ $qry['taxonomy'] = 'post_tag'; $qry['tag'] = $_GET['tag']; $key = 'tag'; $title = $_GET['tag'];}
			if(isset($_GET['fd_author'])){ $qry['author'] = $_GET['fd_author']; $key = 'author'; $title = get_the_author_meta( 'display_name', $_GET['fd_author'] ); }

//3 Create the loop
		$the_query = new WP_Query($qry);

//4 Create the table
					echo '<table>';
					echo '<th>Sl.No</th><th>Title</th><th>Date</th><th>Link</th><th>Author</th>';
					$i = 1 ;
					while ( $the_query->have_posts() ) : $the_query->the_post();
					echo '<tr>';
					echo '<td>'.$i++.'</td>';
					echo  '<td>'.sanitize_text_field(get_the_title()).'</td>' ;
					echo '<td>'.get_the_date('d-m-Y',$post->ID).'</td>';
					echo '<td>'.get_the_permalink().'</td>'; 
					echo '<td>'.get_the_author($post->ID).'</td>';
					echo '</tr>';		
					// End the loop.
					endwhile;
					echo '</table>';
					$filename = $key.'_'.urlencode(sanitize_title($title))."_posts.xlsx";

////5 Convert and download
//$file = "myfile.xlsx" ;
header('Content-Disposition: attachment; filename=' . $filename );
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Length: ' . filesize($filnamee));
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate');
header('Pragma: public');

//					header("Content-type: application/octet-stream; charset=utf-8");  
//					header("Content-Disposition: attachment; filename=".$filename);  
//					header("Pragma: no-cache");  
					header("Expires: 0");  	
wp_reset_query();
		}elseif($_GET['download'] == 'false'){

//1 Create the query	
			$qry = array(
				'posts_per_page' => -1, 
				'order' => 'DESC', 
				'orderby' =>'date', 
				'fields' => 'ids', 
				'post_status' => 'publish', 
				'post_type' => array('fd_news','post','fd_opinion')
			) ;
			
//2 Add additional category / tag values to array 	
			if(isset($_GET['cat'])){ $qry['cat'] = $_GET['cat']; $key = 'cat'; $title = get_cat_name($_GET['cat']); }
			if(isset($_GET['tag'])){ $qry['taxonomy'] = 'post_tag'; $qry['tag'] = $_GET['tag']; $key = 'tag'; $title = $_GET['tag'];}
			if(isset($_GET['fd_author'])){ $qry['author'] = $_GET['fd_author']; $key = 'fd_author'; $title = get_the_author_meta( 'display_name', $_GET['fd_author'] ); }
//3 Create the loop
		$the_query = new WP_Query($qry);

//4 Create the table
					get_header();
					if(isset($_GET['cat'])) {
					echo '<br><h3>Posts from <i>'.$title.'</i> category </h3><br>';
					}
					if(isset($_GET['tag'])) {
					echo '<br><h3>Posts with <i>'.$title.'</i> tag </h3><br>';
					}
					if(isset($_GET['fd_author'])) {
					echo '<br><h3>Posts by <i>'.$title.'</i></h3><br>';
					}
					echo '<table  class="table table-striped table-hover">';
					echo '<th>Sl.No</th><th>Title</th><th>Date</th><th>Link</th><th>Author</th>';
					$i = 1 ;
					while ( $the_query->have_posts() ) : $the_query->the_post();
					echo '<tr>';
					echo '<td>'.$i++.'</td>';
					echo  '<td>'.sanitize_text_field(get_the_title()).'</td>' ;
					echo '<td>'.get_the_date('d-m-Y',$post->ID).'</td>';
					echo '<td>'.get_the_permalink().'</td>'; 
					echo '<td>'.get_the_author($post->ID).'</td>';
					echo '</tr>';		
					// End the loop.
					endwhile;
					echo '</table>';
//Pass the key value differently through button
					if(isset($_GET['cat'])){ $keyvalue = $_GET['cat']; }
					if(isset($_GET['tag'])){ $keyvalue = sanitize_title($title);}	
					if(isset($_GET['fd_author'])){ $keyvalue = $_GET['fd_author'];}	
?>
					<br /><a href="?<?php echo $key.'='.$keyvalue; ?>&download=true"><button type="button" class="btn btn-primary">Download Excel File</button></a>
						<a href="?"><button type="button" class="btn btn-primary">Back</button></a>
<!--======================================================forms=======================================-->

<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<hr />
		<br /><h3>Fetch Posts by Category, Tag or Author</h3><br />
	<form id="category-select" class="category-select form-inline" action="" method="get">
		<div class="row">
            <div class="col-sm-3"><label  for="">Category</label></div>
            <?php wp_dropdown_categories( 'show_count=1&hierarchical=1&class=form-control col-sm-3' ); ?>
            <input type="hidden" name="download" value="false" />
            <div class="col-sm-3"> <input type="submit" name="" value="Submit" class="btn btn-primary"  /></div>
		</div>
 	</form>
<br />
	<form id="tag-select" class="category-select form-inline" action="" method="get">
		<div class="row">
            <div class="col-sm-3"><label for="">Tag</label></div>
             <?php wp_dropdown_categories( 'show_count=1&hierarchical=1&class=form-control col-sm-3&taxonomy=post_tag&name=tag&value_field=slug' ); ?>
            <input type="hidden" name="download" value="false" />
            <div class="col-sm-3"> <input type="submit" name="" value="Submit" class="btn btn-primary"  /></div>
     	</div>
	</form>
<br />
	<form id="author-select" class="category-select form-inline" action="" method="get">
		<div class="row">
            <div class="col-sm-3"><label for="">Author</label> </div>
            <?php wp_dropdown_users(array('name' => 'fd_author','class' => 'form-control col-sm-3', 'optioncount' => 1) ); ?>
            <input type="hidden" name="download" value="false" />
            <div class="col-sm-3"> <input type="submit" name="" value="Submit" class="btn btn-primary"  /></div>
		</div>
	</form>
	</div>
</div>

<!--======================================================forms=======================================-->
<?php
		}
	}else{// isset download
get_header();
?>
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<br /><h3>Fetch Posts by Category, Tag or Author</h3><br />
	<form id="category-select" class="category-select form-inline" action="" method="get">
		<div class="row">
            <div class="col-sm-3"><label  for="">Category</label></div>
            <?php wp_dropdown_categories( 'show_count=1&hierarchical=1&class=form-control col-sm-3' ); ?>
            <input type="hidden" name="download" value="false" />
            <div class="col-sm-3"> <input type="submit" name="" value="Submit" class="btn btn-primary"  /></div>
		</div>
 	</form>
<br />
	<form id="tag-select" class="category-select form-inline" action="" method="get">
		<div class="row">
            <div class="col-sm-3"><label for="">Tag</label></div>
             <?php wp_dropdown_categories( 'show_count=1&hierarchical=1&class=form-control col-sm-3&taxonomy=post_tag&name=tag&value_field=slug' ); ?>
            <input type="hidden" name="download" value="false" />
            <div class="col-sm-3"> <input type="submit" name="" value="Submit" class="btn btn-primary"  /></div>
     	</div>
	</form>
<br />
	<form id="author-select" class="category-select form-inline" action="" method="get">
		<div class="row">
            <div class="col-sm-3"><label for="">Author</label> </div>
            <?php wp_dropdown_users(array('name' => 'fd_author','class' => 'form-control col-sm-3', 'optioncount' => 1) ); ?>
            <input type="hidden" name="download" value="false" />
            <div class="col-sm-3"> <input type="submit" name="" value="Submit" class="btn btn-primary"  /></div>
		</div>
	</form>
	</div>
</div>
<?php
}
}//user logged in
else{
header('Location:https://factordaily.com');
}
?>
