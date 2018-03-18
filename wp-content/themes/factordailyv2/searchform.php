<?php
/**
 * Template for displaying search forms
 
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="col-md-9 col-xs-12">
		<span class="screen-reader-text"><?php echo _x( '', 'label', 'factordailyv2' ); ?></span>
		<input autofocus id="search-field" type="search" class="search-field col-md-offset-2 col-md-10" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'factordailyv2' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
	</label>
	<button type="submit" class="search-submit col-md-1"><img src="<?php echo home_url(); ?>/wp-content/themes/factordailyv2/images/search.svg"/></button>
</form>