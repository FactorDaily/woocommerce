<?php 
/* Template Name: FB chat
*/
get_header();
add_thickbox();
?>
 <a href="https://m.me/143948582832756?ref=Welcome%20message?TB_iframe=true&width=300&height=200&view=preview" class="thickbox" target="_blank">Chat </a>
 
<!--<iframe  src="https://m.me/143948582832756?ref=Welcome%20message" width="300" height="200"></iframe>-->
<iframe src="https://www.facebook.com/plugins/page.php?href=https:%2F%2Fwww.facebook.com%2FDemotldrbotfd-143948582832756?ref=Welcome%20message&tabs=messages&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=496223437090509" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

<!--m.me/143948582832756?ref=Welcome%20message-->
<?php 
$homepage = file_get_contents('https://m.me/143948582832756?ref=Welcome%20message');
echo '<div>'.$homepage.'</div>';
?>