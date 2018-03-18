

<div class="wrap" data-masonry='{ "columnWidth":".grid-item",  "itemSelector": ".grid-item","gutter":0 }'>
<div class="row " >	
	
    <?php 
	if(isset($_POST['tags'])){ 	$tag_ids = $_POST['tags']; }
	if(isset($_POST['cat'])){ 	$cat_id = $_POST['cat']; }
	
$args = array(
	'post_type' => 'post', // add other post types
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'post_tag',
			'field'    => 'term_id',
			'terms'    => $tag_ids,
		),
		array(
			'taxonomy' => 'category',
			'field'    => 'term_id',
			'terms'    => $cat_id,
			'operator' => 'NOT IN',
		),
	),
);
$query = new WP_Query( $args );

	    while ($query->have_posts() ) : $query->the_post();
			$col = 'col-md-3' ;
			echo '<div class="'. $col .' grid-item">';
			get_template_part( 'content-category', get_post_format() );
			echo '</div>';
		endwhile ;
    ?>
    </div>
</div>

