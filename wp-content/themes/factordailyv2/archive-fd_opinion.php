<?php
/**
 * The template for displaying all opinions
 *
 */


get_header();  ?>

			<header class="page-header">
				<h1 class="page-title">Opinions</h1>
			</header><!-- .page-header -->
        
<div class="author-wrap">     
    <div class="author-story-stack">
<?php 	$query = new WP_Query( 'posts_per_page=15&order=DESC&orderby=post_date&ignore_sticky_posts=1&post_type=fd_opinion' );  ?>
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="row">
				<div class="card verticle-grid-rows">
					<div class="col-md-4 col-xs-4 img-section">
						<?php 

					        	echo get_avatar( get_the_author_meta( 'user_email' ), 150 );

						?>

					</div>
					<div class="col-md-8 col-xs-8">
						<div class="card-block">
							<h4 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<div class="entry-content hidden-xs ">
							    <?php the_excerpt(); ?>
							</div><!-- .entry-content -->
							<span class="category-link ">      
							
								<?php
									get_post_category();
								?>
							
					        </span>
					        <time class="entry-date" datetime=""> 
								<?php echo get_the_time('F j, Y') ?>
							</time>
							
	
						</div>
						<div class="sharing-footer hidden-xs">
					    	<?php fd_sharing_buttons(); ?>
						</div>
					</div>
					<div class="sharing-footer col-xs-12 visible-xs">
				    	<?php fd_sharing_buttons(); ?>
					</div>
					<div class="clearfix"></div>
					
				</div>
			</div>
			<br>
		<?php endwhile; ?>
      <?php   wp_reset_postdata();
        echo do_shortcode('[ajax_load_more repeater="template_5" order="DESC" orderby="post_date" offset="15" post_type="fd_opinion"]');
        ?>
	</div>
</div>

<?php get_footer(); ?>