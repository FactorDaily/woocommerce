<?php 
$pid = $_POST['pid'];
//$related_pages = get_post_meta($pid,'related_pages',true);
//echo $related_pages;
?>
<?php 
include('dbclass.php');
global $wpdb;
$results = $wpdb->get_results( 'SELECT * FROM wp_post_meta WHERE post_id = '.$pid, OBJECT );
print_r($results);
?>