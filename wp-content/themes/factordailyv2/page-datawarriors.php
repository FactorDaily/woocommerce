<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages under Data warriors
 */

//get_header('headermodified.php'); 
include('datawarriors/header.php');
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		    <img src="<?php echo get_stylesheet_directory_uri(); ?>/datawarriors/images/Traxn_lead.jpg"  alt=""/> 
	    </div>
	</div>

	<div class="row">
		<div class="col-md-4">
			Content in columns
		</div>
		<div class="col-md-6">
			Content in columns
		</div>
		<div class="col-md-2">
			Content in columns
		</div>
	</div>
		
</div><!--container-fluid-->

<?php include('datawarriors/footer.php'); ?>
