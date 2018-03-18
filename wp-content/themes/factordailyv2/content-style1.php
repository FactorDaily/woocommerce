<?php
/**
Better looking pages
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="text-center single-story-category"><p>&nbsp;</p><br>
			<?php
$curr_post_id = get_the_ID(); // The id of the main story - to be excluded from the query below
?>
		</button>
	</div>
	<?php 

		        get_template_part( 'template-parts/content','style1-header',get_post_format() );
	
	?>

	<div class="entry-content">
		<div class="container clear">
			<div class="row">

				<div class="col-md-6 col-md-offset-3 " id="central-content">

					<?php the_content(); ?>
<br>

			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

