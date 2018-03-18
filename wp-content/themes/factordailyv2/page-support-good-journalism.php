<?php
/*
* 
Template Name: Support Good Journalism
*
*/
get_header();
?>

<div class="wrap">


	<div class="donate-div" id="razor_response">
				
					<p><strong>Thank you for reading FactorDaily</strong></p>
<p>Our stories are put together with great care and effort by some of the smartest in the business. It costs us to bring you good journalism. If you like what you read here, consider donating. We don't have a paywall because we believe access to good journalism must be free, especially when it is in public interest, and not restricted to a few who can pay. Thanks.</p>
			  		<p><strong>I'd like to donate</strong></p>

			  		<input  id="amount"  type="hidden" name="num" value="500" ></input>
			  		<button   id="rzp-button" onClick="getvalue(this)"  class="abc" value="500" >&#8377; 500</button>
			  		
			  		<input id="amount1"  type="hidden" name="num" value="1000" ></input>
			  		<button id="rzp-button1" onClick="getvalue(this)" class="abc"  value="1000" >&#8377; 1000</button>
			  		
			  		<input id="amount2"  type="hidden" name="num" value="2000"></input>
			  		<button id="rzp-button2" onClick="getvalue(this)" class="abc"  value="2000">&#8377; 2000</button><br>
			  		
			  		<input id="amount3" class="payinput" placeholder="&#8377;  &nbsp;   Other amount"  type="text" name="num"></input><button id="rzp-button3" class="paybutton">Pay</button>

	<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
	<script>  
							
	function getvalue(razval) {	
//		form.preventDefault();
	  var amount = razval.value;
	  var amountInPaise = amount * 100;
	
		var options = {
		"key": "rzp_test_FQpO2IkkuG9vBl",
		"amount": amountInPaise,
		"name": "FactorDaily",
		"description": "Donation for independant journalism",
		"image": "/wp-content/themes/factordailyv2/images/logo.svg",
		"handler": function (response){
			document.getElementById("razor_response").innerHTML = '<h2 class="single-story-title">Thank you for your support!</h2><strong>Ask your friends too!</strong>  <p>&nbsp;</p><a href="mailto:?Subject=I support good journalism&amp;Body=I%20just%20made%20a%20contribution%20to%20support%20good%20journalism%20@factordaily.%20You%20should%20too!%20https://factordaily.com/support-good-journalism/"><i class="fa fa-envelope" aria-hidden="true"></i></a><a href="http://www.facebook.com/sharer.php?u=https://factordaily.com/support-good-journalism/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="https://plus.google.com/share?url=https://factordaily.com/support-good-journalism/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://factordaily.com/support-good-journalism/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="https://twitter.com/share?url=https://factordaily.com/support-good-journalism/&amp;text=I%20just%20made%20a%20contribution%20to%20support%20good%20journalism%20@factordaily.%20You%20should%20too!" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a><style>.donate-div .fa {font-size: 32px; margin: 10px 10px; color: #e3e3e3;}.donate-div a:hover .fa{	color: #333; }</style>';
			console.log(response.razorpay_payment_id);
		},
		"theme": {
			"color": "#F37254"
		},
	};
		
		var rzp1 = new Razorpay(options);

		rzp1.open();
		e.preventDefault();
	}

	document.getElementById("rzp-button3").addEventListener('click', function(e){

	  var amount = document.getElementById('amount3').value;
	  var amountInPaise = amount * 100;

		function fadeOutEffect() {
		var fadeTarget = document.getElementById("target");
		var fadeEffect = setInterval(function () {
			if (!fadeTarget.style.opacity) {
				fadeTarget.style.opacity = 1;
			}
			if (fadeTarget.style.opacity < 0.1) {
				clearInterval(fadeEffect);
			} else {
				fadeTarget.style.opacity -= 0.1;
			}
		}, 200);
	}

	  var options = {
		"key": "rzp_test_FQpO2IkkuG9vBl",
		"amount": amountInPaise,
		"name": "FactorDaily",
		"description": "Donation for independant journalism",
		"image": "/wp-content/themes/factordailyv2/images/logo.svg",
		"handler": function (response){
			document.getElementById("razor_response").innerHTML = '<h2 class="single-story-title">Thank you for your support!</h2><strong>Ask your friends too!</strong>  <p>&nbsp;</p><a href="mailto:?Subject=I support good journalism&amp;Body=I%20just%20made%20a%20contribution%20to%20support%20good%20journalism%20@factordaily.%20You%20should%20too!%20https://factordaily.com/support-good-journalism/"><i class="fa fa-envelope" aria-hidden="true"></i></a><a href="http://www.facebook.com/sharer.php?u=https://factordaily.com/support-good-journalism/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="https://plus.google.com/share?url=https://factordaily.com/support-good-journalism/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://factordaily.com/support-good-journalism/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="https://twitter.com/share?url=https://factordaily.com/support-good-journalism/&amp;text=I%20just%20made%20a%20contribution%20to%20support%20good%20journalism%20@factordaily.%20You%20should%20too!" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a><style>.donate-div .fa {font-size: 32px; margin: 10px 10px; color: #e3e3e3;}.donate-div a:hover .fa{	color: #333; }</style>';
//			console.log(response.razorpay_payment_id);
		},
		"theme": {
			"color": "#F37254"
		},
	};

	  var rzp1 = new Razorpay(options);

		rzp1.open();
		e.preventDefault();
	});

	</script>
</div>
<div class="single">
<br>
<h2 class="single-story-title">Here are our latest stories if you have missed them! </h2>
  <br>
   <div class="lead-stories">
  	<?php 
		$the_query = new WP_Query( 
			array(
				'posts_per_page' => 5, 
				'order' => 'ASC', 
				'orderby' =>'meta_value_num', 
				'meta_key' => 'ls_position', 
				'fields' => 'ids', 
				'post_status' => 'publish', 
				'post_type' => array('fd_opinion','fd_news','post','fd_longform','shorthand_story')
			) );

		$i = 0 ;
		$lead_array=array();

	   ?>
<!--------Grid : Col1  Lead Story 1 ------------>
		<div class="row">
			<?php
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$i++;
			array_push($lead_array, get_the_ID());
			
	   		if($i == 1){
		   ?>	<div class="col-sm-8 col-xs-12 no-padding grid-item-1">
				<?php include( locate_template( 'content-lead-stories.php', false, false ) ); ?>	
				</div>
			<?php } ?>
						
			<?php if($i == 2  ){ ?>

<!--------Grid : Col2 ------------>
			<div class="col-sm-4 grid-item-2">
				<div class="rowx">
			<?php } ?>

			<?php if($i == 2 || $i == 3  ){ ?>
			
<!--------Grid : Col2 Lead Story 2 and 3    ------------>
				<div class="col-sm-12 col-xs-6 grid-item-23">
				<?php include( locate_template( 'content-lead-stories.php', false, false ) ); ?>
				</div>
			<?php } ?>
						
			<?php if($i == 3  ){ ?>
				</div>
			</div>
		<div class="clearfix" style="margin-bottom: 20px;"></div>
			<?php } ?>
		
			<?php if($i == 4 || $i == 5 ){ ?>
			
<!--------Grid : Row 2 Lead Story 4 and 5     ------------>			
				<div class="col-sm-6 grid-item-45" >
					<?php include( locate_template( 'content-lead-stories.php', false, false ) ); ?>
				</div>
			
			<?php } ?>
		
			<?php 
			endwhile ; 
			wp_reset_query();
			?>			
		</div>

	<div class="clearfix"></div>
	
</div><!-- lead-stories-->
</div>
</div>
<p>&nbsp;</p>
<?php get_footer() ; ?>