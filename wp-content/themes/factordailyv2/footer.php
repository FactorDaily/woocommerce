<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

</div><!-- .site -->
	</div><!-- .site-content -->
<?php 
if(get_post_type($post->ID) == 'shorthand_story') {
//do not load the default elements
}else{
?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php 				//footer credits 				?>
<?php if ( is_active_sidebar( 'footer_widget_1' ) || is_active_sidebar('footer_widget_2')) : ?>
	<div id="footer-widget-area" class="footer-widget-area widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer_widget_1' ); ?>
		<?php if ( is_active_sidebar( 'footer_widget_2' ) ) : ?>
                <?php dynamic_sidebar( 'footer_widget_2' ); ?>
        <?php endif; ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>


		</div><!-- .site-info -->
	</footer><!-- .site-footer -->
<?php } ?>


<?php wp_footer(); ?>
<script>
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user = getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    } else {
        user = prompt("Please enter your name:", "");
        if (user != "" && user != null) {
            setCookie("username", user, 365);
        }
    }
}
</script>
<!-- MailerLite Universal -->
<script>
(function(m,a,i,l,e,r){ m['MailerLiteObject']=e;function f(){
var c={ a:arguments,q:[]};var r=this.push(c);return "number"!=typeof r?r:f.bind(c.q);}
f.q=f.q||[];m[e]=m[e]||f.bind(f.q);m[e].q=m[e].q||f.q;r=a.createElement(i);
var _=a.getElementsByTagName(i)[0];r.async=1;r.src=l+'?v'+(~~(new Date().getTime()/1000000));
_.parentNode.insertBefore(r,_);})(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');

var ml_account = ml('accounts', '796699', 'y3k5j3k0c9', 'load');
</script>
<!-- End MailerLite Universal -->
</body>
</html>
