<?php
/**
 * The template for archives
 *
 */


get_header();  ?>
	<header class="page-header">
 		<h1 class="page-title">Stories from <strong><?php echo get_the_archive_title(); ?></strong></h1>
	</header><!-- .page-header -->
        
<div class="author-wrap">     
    <div class="author-story-stack">
<?php 	$query = new WP_Query( 'posts_per_page=15&order=DESC&orderby=post_date&ignore_sticky_posts=1' );  ?>
		<?php while ( $query->have_posts() ) :  $query->the_post(); ?>
		<?php
		if(get_post_type() == 'fd_opinion' || get_post_type() == 'fd_news'){ 
			$image_id = get_post_meta( get_the_ID(), '_listing_image_id', true );  
		}else{
			$image_id = get_post_thumbnail_id( $post_id );  
		}
		?>
			<div class="row">
				<div class="card verticle-grid-rows">
				<?php if($image_id == '' || $image_id == 0 ) { $news_cols = 'col-md-12 col-xs-12'; }else {$news_cols = 'col-md-8 col-xs-8';}; ?>
					<div class="col-md-4 col-xs-4 img-section">
							<picture>    
	            <a href="<?php the_permalink(); ?>">
		            <?php 
						
						$the_thumbnail_src = wp_get_attachment_image_src( $image_id, "lead3" );
						$thumbnail_src = $the_thumbnail_src[0];
						$check_thumb = strpos($thumbnail_src, 'lead3'); 
						echo wp_get_attachment_image($image_id,array('233','132'));

					?> 
				</a>
							</picture>
						</div>
					<div class="<?php echo $news_cols ;?>">
						<div class="card-block">
								<span class="author-name vcard">
											<?php if ( function_exists( 'coauthors_posts_links' ) ) {
											    coauthors_posts_links();
											} else {
											    the_author_posts_link();
											};?>
								</span>
							<h4 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<div class="entry-content hidden-xs ">
							    <?php the_excerpt(); ?>
							</div><!-- .entry-content -->
							<span class="category-link ">      
								<?php get_post_category(); ?>
							
					        </span>
					        <time class="entry-date" datetime=""> 
								<?php echo get_the_time('F j, Y') ?>
							</time>
							
	
						</div>
						<div class="sharing-footer entry-meta hidden-xs">
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
        echo do_shortcode('[ajax_load_more repeater="template_3" scroll_distance="30" order="DESC" orderby="post_date" offset="15" post_type="fd_news"]');
        ?>
	</div>
</div>

<?php get_footer(); ?>