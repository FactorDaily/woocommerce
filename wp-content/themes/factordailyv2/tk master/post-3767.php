<?php
/**
* WP Post Template: Quiz
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

<article id="post-<?php the_ID(); ?>" style="margin-top: 58px">
	<div class="entry-content">
		<div class="container">
			<h1 class="page-title myPadFrame" style="margin-top: 0px;padding: 0px;">
				<?php the_title(); ?>
			</h1>
		</div>
		
		
		<div class="col-sm-2 col-sm-offset-1 col-xs-12" id="share-this" align="left"> 
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
		

		<div class="col-sm-8 col-xs-12" id="share-this" align="left"> 
			<a href="https://4screens.net/e/581af475aaf5af0100bca3b2">hjslkklksjklsksjklskskl</a>
			<div data-fsid="e.581af475aaf5af0100bca3b2" data-width="100%" data-height="auto"></div>
			<script src="https://4screens.net/4screens-service-loader.js"></script>
		</div>		
		
	</div><!-- .entry-content -->

</article><!-- #post-## -->
<div class="clear break hidden-xs"> </div>






<?php get_footer(); ?>