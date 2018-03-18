<?php 
/*Template Name: FB test */

get_header();

?>

<?php 
	$qry = array(
	'post_type' => array('post','fd_news','fd_opinion'),
	'taxonomy' => 'post_tag',
	'field' => 'slug',
	'term' => 'put-funda',
	'posts_per_page' => -1
	);
$qry = get_posts($qry);
$arr1 = '';
$ix = 0;
foreach($qry as $key){
	$ix++;
	if($ix == 1 ){$comma = '';}else{$comma = ',';}
	$arr1 .= $comma.$key->ID;
}
print_r($arr1);
?>
	<?php 
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => -1, 
				'orderby' => 'date',
				'order' => 'DESC', 
				'category_name' => 'future',
				'post_status' => 'publish', 
				'post_type' => array('fd_opinion','fd_news','post'),
				'post__not_in'=> $lead_array,
				'cat' => -1056 // Future of jobs
			) 
		);
		$i = 0 ;
echo '<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>';
			while ( $the_query->have_posts() ) : $the_query->the_post();
echo '<p>&nbsp;</p>';
			the_title('<h6>','</h6>');
				$urlarrx = get_permalink(get_the_ID());	
                $urlarr = preg_replace('/nextgenfd.staging.wpengine.com/','factordaily.com',$urlarrx);
                echo $urlarr;
				$fbresponse = wp_remote_get( 'http://graph.facebook.com/?ids='.$urlarr);
				$redresponse = wp_remote_get('http://www.reddit.com/api/info.json?url='.$urlarr);
				$body = wp_remote_retrieve_body( $fbresponse );
				$data = json_decode($body, true);
				print_r($data);
				$fbcount = $data[$urlarr]['share']['share_count'];
				echo $fbcount ;
			
				if($fbcount < 1) {
								$urlarr1x =  preg_replace('/^https(?=:\/\/)/i','http',get_permalink(get_the_ID()));
                                $urlarr1 = preg_replace('/nextgenfd.staging.wpengine.com/','factordaily.com',$urlarrx1x);
								$fbresponse1 = wp_remote_get( 'http://graph.facebook.com/?ids='.$urlarr1);
								$redresponse1 = wp_remote_get('http://www.reddit.com/api/info.json?url='.$urlarr1);
								$body1 = wp_remote_retrieve_body( $fbresponse1 );
								$data1 = json_decode($body1, true);
								//print_r($data);
								$fbcount1 = $data1[$urlarr1]['share']['share_count'];
								echo '<strong>'.$fbcount1.'</strong>' ;
								//echo '<br>'.$urlarr1 ;
				}

			endwhile ;
	?>
<?php 
//$fbresponse = wp_remote_get( 'http://graph.facebook.com/?ids=https://factordaily.com/longform/making-girish-mathrubootham/' );
//$redresponse = wp_remote_get('http://www.reddit.com/api/info.json?url=https://factordaily.com/indian-superheroes-organic-farm-farmville/');
//$twresponse = wp_remote_get( 'https://cdn.api.twitter.com/1/urls/count.json?url=https://factordaily.com/longform/making-girish-mathrubootham/' );
//
//
//$body = wp_remote_retrieve_body( $fbresponse );
//$data = json_decode($body, true);
//echo $data['https://factordaily.com/longform/making-girish-mathrubootham/']['share']['share_count'];
//foreach ($data as $d) {
//		//print_r($data);
//		$fbcount = $d['share']['share_count'];
//}
//
//$body = wp_remote_retrieve_body( $twresponse );
//$data = json_decode($body, True);
//
//$body = wp_remote_retrieve_body( $redresponse );
//$data = json_decode($body, true);
//$redditcount = $data['data']['children'][0]['data']['ups'];

?>
<!--<a data-url="https://factordaily.com/longform/making-girish-mathrubootham/" href="http://www.facebook.com/share.php?u=https://factordaily.com/longform/making-girish-mathrubootham/" class="share-facebook fa fa-facebook" target="_blank"> <?php echo $fbcount ; ?></a><br />
<a data-url="https://factordaily.com/indian-superheroes-organic-farm-farmville/" href="http://www.facebook.com/share.php?u=https://factordaily.com/indian-superheroes-organic-farm-farmville/" class="share-facebook fa fa-reddit" target="_blank"> <?php //echo $redditcount ; ?></a>
-->
<?php
//require "twitteroauth/autoload.php";
//
//use Abraham\TwitterOAuth\TwitterOAuth;
//$connection = new TwitterOAuth('Cuv3z1H4Q2jzJm3VEVgpaYckw', 'PMKAKzJVTK8xUIYK8TK5Dp4t3snSE0rpds5nW8oreWM0mwmXSr', $access_token, $access_token_secret);
//$content = $connection->get("statuses/home_timeline.json?count=25&exclude_replies=true");
//$body = wp_remote_retrieve_body('https://api.twitter.com/1.1/statuses/home_timeline.json?count=25&exclude_replies=true');
//print_r($content);
?>