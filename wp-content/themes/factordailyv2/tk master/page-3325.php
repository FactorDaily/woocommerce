<?php
	$query_images_args = array(
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'post_status'    => 'inherit',
    'posts_per_page' => - 1,
);

$query_images = new WP_Query( $query_images_args );

$images = array();
echo sizeof($query_images);
$i = -1;

$data = array();

foreach ( $query_images->posts as $item ) {
    $i++;
    $id = $item->ID;
    $img = $item->guid;
    $author = $item->post_author;
    $title = $item->post_title;
    $excerpt = $item->post_excerpt;
    
    $hopefullyBool = (bool)true;
    
    echo $hopefullyBool;

    if(empty($excerpt)) {
        echo "=========================";
        $post_fields = "image_url=".$item->guid."&url=".$item->guid."&title=".$item->post_title."&author=".$item->post_author."&post_id=".$item->ID."&type=image&owner=PhotoRepo&es_flag=".$hopefullyBool;
    } else {
        $post_fields = "image_url=".$item->guid."&url=".$item->guid."&title=".$item->post_title."&author=".$item->post_author."&description=".$item->post_excerpt."&post_id=".$item->ID."&type=image&owner=PhotoRepo&es_flag=".$hopefullyBool;
    }
    
    echo $id, ' ', $img, ' ', $author, ' ', $title, ' ', $excerpt;
    echo "</br> </br>====================== ", $i;
    echo "</br> </br> </br>";

    
    var_dump($item);

    echo "</br> </br> </br>";

	
    
}

?>