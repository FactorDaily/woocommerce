<?php
/**
 * Template Name: Display Main Categories
 //This page returns the posts under its page name category (Future, Culture etc) 
 */

get_header(); ?>

<?php 
	$cat_id_meta = get_post_meta( $post->ID, '_add_cat_id', true ); 
	$cat_name =  get_cat_name( $cat_id_meta );
	//$cat_tag_name = strtolower($cat_name);
	$cat_tag_name = sanitize_title_with_dashes($cat_name);
	//$cat_tag_class = preg_replace('/\s+/', '_', $cat_tag_name);
	//$cat_heading_class = preg_replace('/\s+/', '_', strtolower(get_the_title()));

?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="container-fluid">
		<div class="row vertical-align" <?php if($cat_tag_name == 'future-of-jobs') { echo "style='padding-top:20px;'"; } ?> >
		
			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12"> <h1 class="cat_title <?php echo $cat_tag_name; ?>"><?php the_title(); ?></h1></div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12"> <div class="category-description"><?php echo category_description( $cat_id_meta ); ?></div></div>
		</div>
			<div class="row <?php echo 'fd_'.$cat_tag_name ; ?>">
				<?php //category_tag_banner('tags-future-jobs',$cat_tag_name); ?>
				<?php category_tag_banner($cat_tag_name,$cat_tag_name); ?>
			</div>
		</div>
    <div class="wrap filter-stories">
    	<div class="content fetched-tags">

		</div>
		<?php $i = 0;
			echo  do_shortcode('[ajax_load_more repeater="template_1" post_type="post, shorthand_story" category="'. $cat_name .'" posts_per_page="12" scroll_distance="30"]'); ?>
      </div>
  </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>


