<?php 
/* Template part for makers */

?>
<div class="makers-section">
	<img class="img-responsive hidden-xs" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/makers-stories.jpg" alt="makers-image">
	<div class="makers-bg visible-xs"></div>
	<div class="overlay-text-area">
		<p class="overlay-text-area-heading">FactorDaily Loves Makers</p>
		<p class="hidden-xs">Tracking all maker movements in India</p>
		<div class="read-story-contact-maker">
				<div class="read-story col-md-offset-2 col-md-2 col-xs-offset-0 col-xs-6">
					<a href="<?php home_url(); ?>/makers"> <!-- give the link here-->
					<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/makers-tools-readmore.svg" alt="read">
					<p>Read <b>Makers Stories</b></p>
					<p class="hidden-xs">India’s top makers, startups and their stories.</p>
					</a>
				</div>
			
				<div class="contact-maker col-md-offset-4 col-md-2 col-xs-offset-0 col-xs-6">
					<a href="<?php home_url(); ?>/makers">
						<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/makers-pen-contact.svg" alt="contact">
						<p>Makers <b>Contact</b></p>
						<p class="hidden-xs">Want us to feature your story? Fill up this simple form.</p>
					</a>
				</div>
 <!-- set up a popup contact form-->
			<div class="clearfix"></div>
		</div>
	</div>
</div>
