<style>
	.hentry .post-content, .single .hentry, .page .hentry{
		padding: 30px;
		background-color: rgba(0,0,0,.35);
	}
	#more-factors-col {
		border-bottom: none;
	}
	h3.reduced-bottom {	
	    margin-bottom: 20px;
	}
</style>
<section class="hidden-xs" id="more-factors-section">
	<div class="container-fluid">
		<div align="center"> 
			<h3 class="reduced-bottom" style="color: #fff">More Flipkart News</h3>
		</div>
		<div class="row row-eq-height">
			<div class="col-sm-12" id="more-factors-col">
				<div id="more-factors">
					<div class="item">
						<?php query_posts( 's=flipkart&posts_per_page=4'); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-sm-3">
							<div id="post-<?php the_ID(); ?>" style="width:100%; height:300px; border-radius:6px; overflow:hidden; background-size:cover !important; background:url(<?php the_post_thumbnail_url('large');?>) center center no-repeat;">
								<div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?php the_permalink();?>" data-a2a-title="<?php the_title();?>">
									<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
								</div>
								<img style="opacity:0;" class="img-responsive img-rounded" src="<?php get_the_post_thumbnail_url(array( 400, 225));?>">
	
							</div>
							<a href="<?php the_permalink();?>">
							<h5 class="page-title">
							<?php if (strlen($post->post_title) > 150)
							{echo substr(the_title($before = '', $after = '', FALSE), 0, 150) . '...'; }
							else {the_title();} ?>
							</h5>
							</a>
							<small><i class="fa fa-calendar-o"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?><?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?></small>
						</div>
						<div class="modal fade" id="myModal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<?php include('modal-content.php');?>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- mobile view -->
<section id="latest-factors" class="visible-xs">
		<div class="container">
			<div class="page-header">
				<h3 class="text-center" style="color: #fff">
					<span>More Flipkart Stories</span>
				</h3>
			</div>
			<div class="mason-post">
				<?php query_posts( 's=flipkart&posts_per_page=4' ); ?>
				<?php while ( have_posts() ) : the_post(); ?>
						<div class="item" style="background:url(<?php the_post_thumbnail_url('large');?>) no-repeat center center; background-size:cover;">
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="border: none;background-image: none;">
								<div class="visible-xs mobile-img">
								<?php the_post_thumbnail('large', array('class' => 'img-rounded')); ?>
								</div>
								<div class="hidden-xs">
								<?php the_post_thumbnail('large', array('class' => 'img-rounded')); ?>
								</div>
								<div class="mobile-text visible-xs">
									<small>
										<?php echo get_avatar( get_the_author_meta( 'ID' ), 20 ); ?>
										<?php $author = the_author_meta('display_name'); echo $author; ?>
									</small>
									<a href="<?php the_permalink();?>">
									<h5 class="page-title">
										<?php if (strlen($post->post_title) > 150)
											{echo substr(the_title($before = '', $after = '', FALSE), 0, 150) . '...'; }
											else {the_title();} ?>
									</h5>
									</a>
									<small><i class="fa fa-calendar-o"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?><?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?>
									</small>
								</div>
									<div class="blurb">
									<div class="vertical-table hidden-xs">
										<div class="vertical-bottom">
											<small>
												<?php echo get_avatar( get_the_author_meta( 'ID' ), 20 ); ?>
												<?php $author = the_author_meta('display_name'); echo $author; ?>
											</small>
											<h5 class="page-title">
												<?php if (strlen($post->post_title) > 150)
													{echo substr(the_title($before = '', $after = '', FALSE), 0, 150) . '...'; }
													else {the_title();} ?>
											</h5>
											<small><i class="fa fa-calendar-o"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?><?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?></small>
										</div>
									</div>
								</div>
							</div>
						</div>
					<div class="modal fade" id="myModal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
											<div class="item" style="background:url(<?php the_post_thumbnail_url('medium');?>) center center no-repeat; background-size:cover;">
													<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
														<?php the_post_thumbnail('medium', array('class' => 'img-rounded')); ?>
														<div class="blurb"></div>
													</div>
												</div>
											<h4 class="modal-title" id="myModalLabel">
												<strong>
													<?php the_title();?>
												</strong>
											</h4>
											<div class="row">
												<div class="col-sm-12">
													<div class="pull-left">
														<small>
														<?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?>
														</small>
													</div>
													<small>
														<?php $author = the_author_meta('display_name'); echo $author; ?><br>
													<i class="fa fa-calendar-o"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?><?php if( get_field('read_time') ): ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min<?php endif; ?></small>
												</div>
											</div>
									      </div>
									      <div class="modal-body">
									      	<p><?php the_excerpt();?></p>
									      	<div class="white-fade"></div>
									      </div>
									      <div class="row">
									      	<div class="col-sm-12 text-center">
									      		<a href="<?php the_permalink();?>" class="btn btn-primary">Read More</a>
									      	</div>
									      </div>
									    </div>
									  </div>
									</div>
				<?php endwhile; ?>
			</div>
		</div>
</section>