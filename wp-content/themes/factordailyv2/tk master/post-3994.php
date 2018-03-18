<?php
/**
* WP Post Template: special story
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>">
	<div class="row">
		<div class="row">
			<div class="jumbotron" style="background:url(<?php the_post_thumbnail_url();?>) no-repeat center center; background-size:cover ; margin-top: 0px;">
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<img src="http://fdthird.wpengine.com/wp-content/uploads/2016/09/1111x625_transparent_bg.png" class="img-responsive">
				</div>
			</div>
		</div>
	</div>


	<div class="entry-content">
		<div class="container">
			<h1 class="page-title myPadFrame">
				<?php the_title(); ?>
			</h1>
		</div>
		<div class="col-sm-4 col-sm-offset-4" id="share-this" align="center"> 
			<h4>Share <strong>This</strong></h4>
			<?php echo do_shortcode ('[shareaholic app="share_buttons" id="25736967"]');?>  	
			<div class="clear"></div>
			<hr class="hidden-xs">
			<div class="row">
				<div class="col-sm-12">
					<?php foreach( get_coauthors() as $coauthor ) : ?>

						<?php echo get_avatar( $coauthor->user_email, '45' ); ?>

					<?php endforeach; ?>
					<?php if ( function_exists( 'coauthors_posts_links' ) ) {
					coauthors_posts_links();
					} else {
					the_author_posts_link();
					};?>
					<br><small><i class="fa fa-calendar-o"></i> <?php echo get_the_time('d-M-Y') ?></small>
				</div>
			</div>
		</div>
		
		<div class="container clear">
			<div class="row">
				<div class="col-sm-12" id="central-content">
					<?php if( get_field('top_quote') ): ?>
					<div class="top-quote">
						<div class="vertical-middle">
							<?php the_field('top_quote'); ?>
						</div>
					</div>
					<?php endif; ?>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		
		
		
		<div class="row">
			<iframe class="jumbotron myframe" style="height: 100vh" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" scrolling="no" frameborder="0" width="100%" height="600" src="https://s3-ap-southeast-1.amazonaws.com/hilviz/Pollution/pollution.html"></iframe>
		</div>
		
		
		
		<div class="container clear">
			<div class="row">
				<div class="col-sm-12" id="central-content">

					<?php the_field('second_text_area'); ?>
					<!--
						<?php if( get_field('mvp_video_embed') ): ?>
						<div id="video-embed" class="">
						<?php echo get_field('mvp_video_embed'); ?>
						</div>video-embed
						<?php endif; ?>
					-->
					<?php if( get_field('credits') ): ?>

					<small class="credits"><em><?php the_field('credits'); ?></em></small>
					<?php endif; ?>
					<hr>
					<div class="tail-text">
						<?php if(in_category('1056')): ?>
						<div class="row">
							<div class="col-md-6 col-md-offset-3" style="padding-left: 25px;">
								<p>Powered By</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<a href="http://www.careernetgroup.com/" target="_blank" style="border-bottom: none !important;">
									<img src="/wp-content/themes/_tk-master/images/CareerNet_Group_Logo.svg" >
								</a>
							</div>
						</div>
						<?php endif; ?>
						
						<p>
							<?php if( get_field('disclosure') ): ?>

							<?php the_field('disclosure'); ?>
							<?php endif; ?>
						</p>
					</div>
					<div id="related-items">
						Related Items <?php the_tags( '<div class="related-item">', '</div><div class="related-item">', '</div>' ); ?>
					</div>

					<hr>
					<div class="row" id="share-this">
					</div>
					<h5 class="add-comment"><i class="fa fa-plus-circle"></i> Add & View Comments</h5>

					<div class="fb-comments" data-href="<?php the_permalink();?>" data-width="100%" data-numposts="5"></div>

				</div>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->


<?php get_footer(); ?>