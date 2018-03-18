<?php
/**
* WP Post Template: special story
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>">
	<div class="text-center single-story-category">

			<?php
				foreach((get_the_category()) as $category) {
					if ($category->category_parent == 0) {
						if($category->name == 'Future' || $category->name == 'Culture' || $category->name == 'Lifestyle' || $category->name == 'Companies') {
							$singlePageCategory = $category->name;
							echo '<button class="btn btn-warning btn-sm cat-'.$category -> slug.'">';
							echo '<a class="cat-'.esc_html( $category -> slug ).'" href="/' .  $category->name  . '">' . esc_html( $category->name) . '</a></button>';
							break;
						}
					}
				}

			?>
	</div>
<?php get_template_part( 'template-parts/content','single-header',get_post_format() ); ?>

	<div class="entry-content">

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
					<?php if( has_tag() ): ?>
						<div class="tag-area">
						<p>Related Items</p>
							<?php the_tags( '<button class="btn btn-warning btn-sm">', '</button>&nbsp;<button class="btn btn-warning btn-sm">', '</button>' );?>
						</div>
					<?php endif; ?>

					<hr>
					<div  class="fb-comments col-sm-8 col-md-8 col-xs-12 col-sm-offset-2 col-md-offset-2" data-href="<?php the_permalink();?>" data-width="100%" data-numposts="5"></div>

				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->


<?php get_footer(); ?>