<?php
/**
 * The template for read more
 */
?>
<?php 
// Set all the variables ready 

if(in_category('companies')){
	$bgimage = get_bloginfo('stylesheet_directory').'/images/CompanyUnicorn.jpg';
	$readmore = 'Read More';
}elseif(in_category(array('audio-video','video'))) {
	$bgimage = get_bloginfo('stylesheet_directory').'/images/OutliersWithPankaj.jpg';
	$readmore = 'Listen to more Outliers';
	$teaser = 'A podcast about the ones who chose to take the road not taken. It’s about the crazy and the curious. ';
	$morelink = home_url().'/podcasts';
}elseif(in_category('future')){
	$bgimage = get_bloginfo('stylesheet_directory').'/images/FutureOrigami.jpg';
	$readmore = 'Read More';
}
if(in_category('future')){
		$teaser = 'Analyses and imagination put to play to tell you what’s coming around the corner, who’s shaping your future, and how your future will be very different from your past.';
		$morelink = home_url().'/future';
}
if(in_category('companies')){
		$teaser = 'Reporting from Ground Zero of businesses disrupting life as we know it. As also, stories on the ecosystem and those getting disrupted. ';
		$morelink = home_url().'/companies';
}

//array_push($cols,'readmoremobile');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($cols); ?>>
	<header class="entry-header">
		<div class="entry-thumbnail">
	            <picture>    
		            <a href="<?php echo $morelink; ?>">
						<img src="<?php echo $bgimage ; ?>" class="crop-image" />
		            <?php 
//						$the_thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "lead3" );
//						$thumbnail_src = $the_thumbnail_src[0];
//						$check_thumb = strpos($thumbnail_src, '540x304'); 
//						// if custom image size exist
//						if( $check_thumb ):
//							the_post_thumbnail('lead3');
//						else:
//							the_post_thumbnail('medium',array( 'class' => 'crop-image' )); // if not, use default thumbnail
//						endif;	
					 ?> 
		            </a>
	            </picture> 

		</div>
		
	</header><!-- .entry-header -->
	<div class="side-story-text-wrap">
		<div class="entry-meta">
<!--
	       <span class="author-name vcard">
			<p>&nbsp;</p>
	       </span>    
-->
		</div><!--entry meta-->
		<h1 class="entry-title">
			<a href="<?php echo $morelink; ?>"><?php echo $readmore ; ?></a>
	    </h1>
		   <br>
			<span class="category-link ">
				<p><?php echo $teaser ; ?></p>
	       	</span>	
		<footer class="entry-meta">
			<?php //fd_sharing_buttons(); ?>
			<p>&nbsp;</p>
		</footer><!-- .entry-meta -->
	</div>

</article>
