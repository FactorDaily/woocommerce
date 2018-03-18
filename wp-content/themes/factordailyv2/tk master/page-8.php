<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>
<div class="row">
	<?php query_posts( 'category_name=featured_companies&posts_per_page=1' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="jumbotron" style="background:url(<?php the_post_thumbnail_url();?>) no-repeat center center; background-size:cover">
						<div class="black-overlay">
							<div id="post-<?php the_ID(); ?>" class="category-companies">
								<img src="http://placehold.it/1111x625" class="img-responsive">
								<div class="blurb mobile-blurb">
									<div class="vertical-table">
										<div class="vertical-bottom">
											<h5 class="authorinfo">
<?php foreach( get_coauthors() as $coauthor ) : ?>
    <?php echo get_avatar( $coauthor->user_email, '30' ); ?>
<?php endforeach; ?>
<?php if ( function_exists( 'coauthors_posts_links' ) ) {
    coauthors_posts_links();
} else {
    the_author_posts_link();
};?>
											</h5>
										<a href="<?php the_permalink();?>">
											<h1 class="page-title" style=" text-shadow: 1px 1px rgba(0,0,0,0.5)">
												<?php if (strlen($post->post_title) > 150)
													{echo substr(the_title($before = '', $after = '', FALSE), 0, 150) . '...'; }
													else {the_title();} ?>
											</h1>
										</a>
											<small><i class="fa fa-calendar-o"></i> <?php echo get_the_time('d-M-Y') ?><?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?></small>
										</div>
									</div>
								</div>
							</div>
						</div>
			</div>
		<?php endwhile; ?>
</div>	
<!-- Latest Factors -->

<section id="latest-factors" class="row">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-6 col-sm-offset-3">
				<h2><span>Companies</span></h2>
				<br />
				<p><?php echo category_description(11); ?></p>
			</div>
		</div>
		<div id="companies" class="row row-margin-bottom">
			<?php query_posts( 'category_name=companies&order=DSC&posts_per_page=70' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-md-4 no-padding lib-item" data-category="view">
					<div class="item" style="background:url(<?php the_post_thumbnail_url('large');?>) no-repeat center center; background-size:cover;margin-bottom: 20px;">
						<div class="black-overlay">
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?php the_permalink();?>" data-a2a-title="<?php the_title();?>">
								    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
								    <?php if( get_field('mvp_video_embed') ): ?>
										<a class="video_icon"></a>
									<?php endif; ?>
								</div>
								<div class="mobile-text visible-xs">
									<small class="authorinfoMobile">
										<?php foreach( get_coauthors() as $coauthor ) : ?>
										<?php echo get_avatar( $coauthor->user_email, '20' ); ?>
										<?php endforeach; ?>
										<?php if ( function_exists( 'coauthors_posts_links' ) ) {
											coauthors_posts_links();
											} else {
											the_author_posts_link();
										};?>
									</small>
									<a href="<?php the_permalink();?>">
									<h5 class="page-title">
										<?php if (strlen($post->post_title) > 150)
											{echo substr(the_title($before = '', $after = '', FALSE), 0, 150) . '...'; }
											else {the_title();} ?>
									</h5>
									<small><i class="fa fa-calendar-o"></i> <?php echo get_the_time('d-M-Y') ?><?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?>
									</small>
									</a>
								</div>
								<div class="blurb">
									<div class="vertical-table hidden-xs">
										<div class="vertical-bottom">
<small class="authorinfo">
<?php foreach( get_coauthors() as $coauthor ) : ?>
    <?php echo get_avatar( $coauthor->user_email, '20' ); ?>
<?php endforeach; ?>
<?php if ( function_exists( 'coauthors_posts_links' ) ) {
    coauthors_posts_links();
} else {
    the_author_posts_link();
};?>
</small>
					<a href="<?php the_permalink();?>">
											<h5 class="page-title">
												<?php if (strlen($post->post_title) > 150)
													{echo substr(the_title($before = '', $after = '', FALSE), 0, 150) . '...'; }
													else {the_title();} ?>
											</h5>
					</a>
											<small><i class="fa fa-calendar-o"></i> <?php echo get_the_time('d-M-Y')?><?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?></small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>