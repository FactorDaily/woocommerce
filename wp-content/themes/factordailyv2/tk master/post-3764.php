<?php
/**
* WP Post Template: Live feed
*/
get_header(); ?>

<style>
	.myframe{
		width: 100%;
		height:720px;
	}
	@media(max-width: 770px){
		.myframe{
			width: 100%;
			height:400px;
		}	
		.myPadFrame{
			padding-top: 70px !important;
		}
	}
	.single .page-title {
		background: none;
	}
</style>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<article id="post-<?php the_ID(); ?>" style="margin-top: 58px">
	<div class="entry-content">
		<div class="container">
			<h1 class="page-title myPadFrame" style="margin-top: 0px;padding: 0px;">
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
					<div class="pull-left">
						<?php echo get_avatar( $coauthor->user_email, '45' ); ?>
					</div>
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
		<div class="row">
			<div class="fb-video" data-href="https://www.facebook.com/HBR/videos/10154504199922787/"  data-show-text="false"><blockquote cite="https://www.facebook.com/HBR/videos/10154504199922787/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/HBR/videos/10154504199922787/"></a><p>What’s Your Biggest Fear About the Future Workplace? With Jeanne Meister. #HBRLive</p>Posted by <a href="https://www.facebook.com/HBR/">Harvard Business Review</a> on Thursday, October 27, 2016</blockquote></div>

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
					<!--
						<?php if( get_field('mvp_video_embed') ): ?>
						<div id="video-embed" class="">
						<?php echo get_field('mvp_video_embed'); ?>
						</div>video-embed
						<?php endif; ?>
					-->
					<h5 class="add-comment"><i class="fa fa-plus-circle"></i> Add & View Comments</h5>

					<div class="fb-comments" data-href="<?php the_permalink();?>" data-width="100%" data-numposts="5"></div>

				</div>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->


<?php get_footer(); ?>