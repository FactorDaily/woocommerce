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

get_header(); 


if ( is_user_logged_in() ) {
    
    //$file = file_get_contents('http://gaia-286182187.us-east-1.elb.amazonaws.com/getusers', false, $context);
    //var_dump($file);
?>
	<div class="row" style="margin-top: 4%;">
	    <?php 
	          
	        global $current_user;
	        get_currentuserinfo();
	
	        $ch = curl_init();
	        curl_setopt($ch, CURLOPT_URL,"http://Gaia-286182187.us-east-1.elb.amazonaws.com/signup");
	        curl_setopt($ch, CURLOPT_POST, 1);
	        curl_setopt($ch, CURLOPT_POSTFIELDS,
	                    "email=".$current_user->user_email."&displayName=".$current_user->user_firstname."&senderId=".$current_user->ID."&platform=wordpress&password=password&role=1");
	        
	        
	        // in real life you should use something like:
	        // curl_setopt($ch, CURLOPT_POSTFIELDS, 
	        //          http_build_query(array('postvar1' => 'value1')));
	        
	        // receive server response ...
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	        
	        $server_output = curl_exec ($ch);
	        
	        curl_close ($ch);
	        
	
	        
	        $userArr = json_decode($server_output,true);
	        
	        $status = $userArr['responseMessage'];
	        
	    
	
	
	/*
	        if($status === "User already Exist in DB")
	        
	        {
	            header("Location: /");
	            die();
	        }
	*/
	
	
	        
	    ?>
	    
	    
<!--
	    <div style="padding-top: 10%;margin-top: 3%;background:url(<?php the_post_thumbnail_url('large');?>) no-repeat center center; background-size:cover">

	    </div>
-->
	    <div class="hidden-sm hidden-md hidden-xs">
		    <img src="<?php the_post_thumbnail_url('large');?>" alt="Smiley face" width="100%">
	    </div>
	</div>
	 
	<!-- Latest Factors -->
	<section class="row">
	        <div class="container" style="margin-top: 3%;">
	            <h1 class="page-title">
	                <?php 
	                    $welcomeLine = the_title()." ".$current_user->display_name;
	                    echo $welcomeLine;
	                 ?>
	            </h1>
	            <div class="row">
	                <blockquote><p style="padding: 0px 18px;">Thank you for signing up. You are now enrolled in the FactorDaily early access program. You will be one of the first to get access to our new features.</p></blockquote>
				    <p>&nbsp;</p>
				    <h1 align="center">
				        <a href="http://www.factordaily.com">
				            <button class="btn btn-landing" style="margin-bottom: 5px;">Continue Reading</button>
				        </a>
				        <a href="/contact-us/" target="_top">
					        <button class="btn btn-primary" style="margin-bottom: 5px;padding-right: 47px;padding-left: 47px;">Become a contributor</button>
						</a>
				    </h1>
	            </div>
	        </div>
	</section>

<?php }
    

    else {
        header("Location: /wp-login.php");
        die();
    }

    get_footer(); ?>    