<?php 
/* To display all the categories */

get_header();
?>


<div class="row">
	<div class="col-md-6"><h2 class="big_cat_title"><?php echo single_cat_title(); ?></h2></div>									
    <div class="col-md-6"><?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?></div>
</div>
<div class="wrap" data-masonry='{ "columnWidth":".grid-item",  "itemSelector": ".grid-item","gutter":0 }'>
<div class="row container-fluid" >	
	
    <?php 
	
		$i = 0;
		echo "<div class='col-md-6 grid-item'>";
                while (have_posts() ) : the_post();
		$i++;
			if($i == 0 || $i == 5) {
				$col = 'col-md-6' ;
			}else {
				$col = 'col-md-3' ;
			}

			get_template_part( 'content-category', get_post_format() );
			echo '</div><div class="'. $col .' grid-item">';

                endwhile ;
		echo "</div>";
    ?>
      <?php   wp_reset_postdata();
        echo do_shortcode('[ajax_load_more repeater="template_3" order="DESC" orderby="post_date" offset="10" post_type="'.get_post_type().'"]');
        ?>
    </div>
</div>

