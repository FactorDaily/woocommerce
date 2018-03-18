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
	<div>
			<div>
				<div>
					<div class="col-sm-6 col-sm-offset-3">
						
						
							<h1 class="page-title" style="margin-top: 100px;">
								We are busy writing great stories, but you can talk to our bot 
							</h1>
							<div>
						
		<?php
			
			echo do_shortcode("[elizaibot-chat chatbot=carlos width=300 height=300 showlink=0]");
        ?>
							</div>
					</div>
				</div>
			</div>
	</div>
</div>	

<?php get_footer(); ?>