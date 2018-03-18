<div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
													<div id="post-<?php the_ID(); ?>" class="post-img">
														<?php the_post_thumbnail('medium', array('class' => 'img-rounded')); ?>
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
														<?php echo get_avatar( get_the_author_meta( 'ID' ), 45 ); ?>
														</small>
													</div>
													<small>
														<?php $author = the_author_meta('display_name'); echo $author; ?><br>
														<i class="fa fa-calendar-o"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> – <i class="fa fa-clock-o"></i> <?php the_field('read_time');?>min
													</small>
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