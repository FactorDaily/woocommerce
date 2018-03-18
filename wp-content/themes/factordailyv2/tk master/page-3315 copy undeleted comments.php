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

<!-- 	for blockquote   -->
    <style>
	 .hero {
  background: url("http://fdthird.staging.wpengine.com/wp-content/uploads/2016/09/Wallmart_Flipkart-Lead.jpg") no-repeat center center ;
  background-size: cover;
  height: 90vh; }
  .hero:before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    opacity: .8; }
  .hero .intro {
    padding: 3rem;
    position: relative;
    top: 50%;
    transform: translateY(-50%); }
  .hero h1 {
    color: #fff;
    font-size: 1.5rem;
    line-height: 1.5em;
    letter-spacing: -0.025em;
    font-weight: 300;
    text-align: center; }
  .hero p {
    color: #fff;
    line-height: 1.75em;
    font-weight: 200;
    text-align: center;
    margin-bottom: 2rem; }
  @media only screen and (min-width: 40.063em) {
    .hero .tech-img {
      height: 18rem;
      width: 18rem; }
    .hero h1 {
      padding-top: 4.5rem;
      text-align: right;
      font-size: 2.5rem; }
    .hero p {
      text-align: right; } }
	.blockquote-area .widget-title {
		margin-bottom: 90px !important;
	}
	blockquote {
		border: 0 !important;
		font-size: 2em;
		font-family: "adelle", serif;
		line-height: 1.8em;
		color: #ed2b17;
	}
	blockquote:before{
		float: left !important;
		margin-right: 10px !important;
		font-family: FontAwesome !important;
		font-size: 30px !important;
		line-height: 1 !important;
		content: '\f10d' !important;
		color: #ff6b53 !important;
		width: auto !important;
	    height: auto !important;
	    background: none !important;
	}   
	
	p.dropcap::first-letter {
         float: left;
         font-size: 5em;
         margin: 0 .2em .2em 0;
    }
    
    p a, p a:hover{
	    color: #ff6b53;
    }
      
    section .widget-title {
	position: relative;
	margin-bottom: 60px;
	padding: 20px 0px 0px !important;
	border-bottom: 0;
	text-align: center;
	text-transform: uppercase;
	}
	
	section .widget-title::after {
	position: absolute;
	left: calc(50% - 3.5em);
	width: 7em;
	content: "";
	border-bottom: 6px double #ff6b53;
	bottom: -10px;
	}
      
    section .container{
	    padding: 0px !important;
    }
    
    .facts-area{
	    padding-bottom: 40px !important;
	    text-align: center;
    }
    
    .fact {
	font-size: 50px;
	border-bottom: 1px solid #ebebeb;
	font-family: 'Roboto Condensed', sans-serif;
	color: #ef7e22;
	}
	
	.action-area{
    display: block;	
	background-repeat: : no-repeat;
    background-position: center center;
	background-size: cover;
	z-index: -1;
	padding: 300px 0px !important;
   }
   
     cite p{ 
	     line-height: 1.2; 
	     font-size: 1em; 
	     padding: 5px !important; 
	     margin: 0px 5px 5px !important; 
	     text-align: center;
	     color: #888;
		 font-family: "brandon-grotesque";
		 text-decoration: none;
	     }
	
	.chatbot-button {
		background-color: #ef7e22 !important; 
		color: white !important; 
		font-size: 18px !important; 
		border-radius: 50px; 
		font-weight: 400; 
		margin-top: 30px; 
	}
	#cover
	{position: relative; height: 100%; text-align: center;}
	#title
	{position: absolute; bottom: 5%; padding: 10px 40px; width:100%;}
    
    @media only screen and (min-width: 1025px) { .has-banner,.has-banner::after { max-height:1440px; } }
    @media only screen and (min-width: 1199px) { .has-banner,.has-banner::after { max-height:1440px; } }
    @media only screen and (min-width: 991px) { .welcome-info { top:100px; } }
    @media only screen and (min-width: 1199px) { .welcome-info { top:100px; } }

	
	@media only screen and (max-width: 767px){ 
		
		.stats-chart{
			padding-bottom: 20px;
		}
	}
	
	.banner-h2, .banner-h4 {width: 50% !important; margin: 0px auto !important;}
	.banner-h2 {font-size: 60px; color: #fff; border-top: 1px #fff solid; padding: 20px 10px 0px; text-shadow: 1px 1px #999;}
    .banner-h4 {font-size: 30px; color: #fff;  border-bottom: 1px #fff solid; padding: 0px 10px 20px; font-weight: 200; text-shadow: 1px 0px #999; text-transform: none !important; }
    
    @media only screen and (max-width: 767px) {          
	         .banner-h2{
		         padding: 10px 0px 0px !important;
				 font-size: 40px !important;
	         }
	
	         .banner-h4 {font-size: 30px;}
            }

	
   </style>
   
   

<section class="hero">
  			<div id="cover">
                <div id="title">
                   <h2 class="banner-h2"> Flipkart’s Big Binny Days  </h2>
                   <h4 class="banner-h4"> By Pankaj Mishra and Jayadevan PK <span style="color: #aaa; font-size: 14px; text-shadow: none !important; line-height: 2"> <br /> October 7, 2016 </span> </h4> 


                </div>
            </div>
</section>



<!--   custon css
   <style id="moesia-style-inline-css" type="text/css">
	   a.link-style 
	   {
		   text-decoration: none;
		   position: relative;
		  color: red;
		}
		
		a.link-style:after {
		   content: '';
		   color: red;
		
		   width: 100%;
		   position: absolute;
		   left: 0;
		   bottom: 1px;
		
		   border-width: 0 0 1px;
		   border-style: solid;
		}
      h3 >span {border-bottom: 0px solid #333333 !important;}
      .text-font-family {font-family: "adelle",sans-serif; line-height: 25px; color: #4c4c4c; font-size: 16px;}
      .text-font-quotes {font-family: "adelle",sans-serif; line-height: 24px; color: #ed2b17; font-size: 22px;}
      .employee-name { color: #222; }
      .testimonials-area { background-color: #e7e7e7 !important; }
      .testimonials-area .widget-title { color: #444444; }
      .client-function { color: #ffffff; }
      .client-name { color: #222; }
      .skills-area { background-color: #ffeadb !important; }
      .skills-area .widget-title { color: #444444; }
      .facts-area { background-color: #fff !important; }
      .clients-area { background-color: #fff !important; }
      .blockquote-area { background-color: #fff !important; }
      .social-area .widget-title { color: #444444; }
      .projects-area { background-color: #fff !important; }
      .link-icon, .pp-icon { color: #ff6b53; }
      .action-area { background-color: #fff; }
      .action-text { color: #f7f7f7; }
      .call-to-action { box-shadow: 0 5px 0 #C2503D; }
      .welcome-title { color: #fff; }
      .welcome-button { box-shadow: 0 5px 0 #C2503D; }
      .welcome-button:active { box-shadow: 0 2px 0 #C2503D; }
      .entry-title, .entry-title a { color: #444; }
      .fact {color: #ef7e22}
      blockquote:before{color:#aaa}
      p.dropcap::first-letter {
         float: left;
         font-size: 5em;
         margin: 0 .2em .2em 0;
      }

      cite{ line-height: 1.5; font-size: 14px; padding: 0px !important; margin: 0px!important; text-align: center}
            cite p{font-size: 13px;}

      h1 { font-size:36px; }
      h2 { font-size:30px; }
      h3 { font-size: 26px !important; }
      h4 { font-size:18px !important; }
      h5 { font-size:14px; }
      h6 { font-size:12px; }
      body { font-size:14px; }
      @media (min-width: 499px) { section .widget-title, .panel.widget .widget-title, .so-panel.widget .widget-title { font-size:56px; } }
      .main-navigation li { font-size:14px; }
      .site-branding, .main-navigation li { padding-top:40px; padding-bottom:40px; }
      @media only screen and (min-width: 1025px) { .has-banner,.has-banner::after { max-height:1440px; } }
      @media only screen and (min-width: 1199px) { .has-banner,.has-banner::after { max-height:1440px; } }
      @media only screen and (min-width: 991px) { .welcome-info { top:100px; } }
      @media only screen and (min-width: 1199px) { .welcome-info { top:100px; } }
      
      /*******nsd*********/
      
         .banner-h2 {font-size: 60px; color: #fff; border-top: 1px #fff solid; padding: 20px 10px 0px; text-shadow: 1px 1px #999; width: auto !important}
         .banner-h4 {font-size: 30px; color: #fff;  border-bottom: 1px #fff solid; padding: 0px 10px 20px; font-weight: 200; text-shadow: 1px 0px #999; text-transform: none !important}
          @media only screen and (max-width: 767px) { 
          cite p{ line-height: 1.2 !important; padding: 0px !important; font-size: 12px;}
         
         .banner-h2{
	         padding: 10px 0px 0px !important;
           font-size: 40px !important;
         }

         .banner-h4 {font-size: 30px;}
            }
      
      
   </style>
-->
	
<!-- 	for stats. bar  -->
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/waypoints.min.js?ver=1"></script>
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/wow.min.js?ver=1"></script>
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/wow-init.js?ver=1"></script>
   <script>
	   jQuery(function(i){if(i(window).width()>1024){var n=i(window).height();i(".has-banner, .overlay").css("height",n),i(window).resize(function(){var n=i(window).height();i(".has-banner, .overlay").css("height",n)})}i(window).resize(function(){if("none"==i(".header-image").css("display")){var n=i(window).height();i(".has-banner, .overlay").css("height",n)}else i(".has-banner, .overlay").css("height","auto")})}),jQuery(function(i){i("#page").css("visibility","visible")}),jQuery(function(i){i(".sub-menu").hide(),i(".main-navigation .children").hide(),i(".menu-item").hover(function(){i(this).children(".sub-menu").slideDown()},function(){i(this).children(".sub-menu").hide()}),i(".main-navigation li").hover(function(){i(this).children(".main-navigation .children").slideDown()},function(){i(this).children(".main-navigation .children").hide()})}),jQuery(function(i){i(document).ready(function(){i("body").fitVids()})}),jQuery(function(i){i(".fact").waypoint(function(){i(".fact").each(function(){var n=i(this);i({Counter:0}).animate({Counter:n.attr("id")},{duration:5e3,easing:"swing",step:function(){n.text(Math.ceil(this.Counter))}})})},{offset:"90%",triggerOnce:!0}),i(".skill-bar").waypoint(function(){i(".skill-bar").each(function(){var n=i(this),e=i(this).attr("id"),t=e*n.width()/100;n.find("div").animate({width:t},1e3).html(e+"%&nbsp;")})},{offset:"90%",triggerOnce:!0})}),jQuery(function(i){i(window).bind("load",function(){i(".top-bar").sticky()})}),jQuery(function(i){i(".so-panel.widget, .panel.widget").addClass("container")}),jQuery(function(i){i(".social-area li a, .social-widget a").attr("target","_blank")}),jQuery(function(i){i('a[href*="#"]:not([href="#"],[class*="tab"] a,.wc-tabs a, .activity-content a)').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var n=i(this.hash),e=i(".top-bar").height();if(n=n.length?n:i("[name="+this.hash.slice(1)+"]"),"#site-navigation"!=this.hash&&i(window).width()>1024){if(n.length)return i("html,body").animate({scrollTop:n.offset().top-e+40},800),!1}else if(n.length)return i("html,body").animate({scrollTop:n.offset().top},800),!1}})}),jQuery(function(i){i(".nav-search").click(function(){i(".nav-search-box").addClass("search-visible")}),i(".search-close").click(function(){i(".nav-search-box").removeClass("search-visible")})});
	</script>

<!--
      <div id="page" class="hfeed site" style="visibility: visible;">
	  	<div class="container-fluid" style="height: 50px; background: black">
		  	<div style="height: 100%; width: 300px; padding-top: 5px;"> 
			  	<a href="http://factordaily.com"> 
			  	<img src="http://fdthird.staging.wpengine.com/wp-content/uploads/2016/10/FactorDailyLogo-03.png" width="30%" /> 
			  	</a> 
			</div>
	  	</div>
-->
	  	
	  	
<!-- 	  header bar with lead image -->
<!--
         <header class="has-banner-cover">
			<div style="position: relative; height: 100%; text-align: center;">
                <div style="position: absolute; bottom: 5%; padding: 10px 40px; width:100%;">
                   <h2 class="banner-h2"> Flipkart’s Big Binny Days  </h2>
                   <h4 class="banner-h4"> By Pankaj Mishra and Jayadevan PK <span style="color: #aaa; font-size: 14px; text-shadow: none !important; line-height: 2"> <br /> October 7, 2016 </span> </h4> 


                </div>
            </div>
         </header>
-->

<!-- nav bar fix on top jquery -->
<!--
		<script>
			$(window).scroll(function() {
				var windscroll = $('#content').position();
				var position = windscroll.top - $(document).scrollTop();
				if (position < 1) {
					$('#head-nav').css({'background':'black','-webkit-transition': '0.8s','transition': '0.8s'});
				} else {
					$('#head-nav').css('background','rgba(0,0,0,0)');
				}
			}).scroll();
		</script>
-->
		  
         <!-- #masthead -->		
          
         <div id="content" class="site-content clearfix ">
            <div id="primary" class="fp-content-area">
               <main id="main" class="site-main" role="main">
                  <div class="entry-content">
                     <div id="pl-2040">
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
									
                                       <h3 class="widget-title">
                                          Inside the controlled madness of Flipkart's Big Billion Days monster sale
                                       </h3>
                                       <!--
                                       <div class="service col-md-4 col-xs-6" style="vertical-align: middle">
                                       <span class="service-icon wow  animated" style="visibility: visible; animation-name: zoomInDown; background-color: rgba(0,0,0,0);width: auto;"> 								
                                       <img src="http://fdthird.staging.wpengine.com/wp-content/uploads/2016/10/33.jpeg" />
                                       </span>												

                                       </div>
                                       -->

                                       <div class="service col-md-offset-2 col-md-8 col-xs-12">
                                          <div class="text-font-family" style="visibility: visible; ">
                                             <i><p class="dropcap">At midnight on Thursday, October 6, 2016, online retailer Flipkart finished its annual Big Billion Days sale -- its third on the trot. The company, along with Myntra and Jabong, sold 15.5 million products, it said in a statement. Over 100,000 customers shopped for goods worth more than Rs 50,000. About 2.5 million smartphones were sold during this period, exceeding weekly total smartphone sales in India, the statement added. On a single day, October 3, the second day of this year’s Big Billion Days sale, the gross value of products sold topped Rs 1,400 crore — more than twice the value of goods it sold in the entire duration of last year's Big Billion Days sale.</p>

<p>Its closest rival, Amazon sold 15 million units (the largest selling unit was Amazon’s Prime, its annual subscription service for cheaper delivery and on demand video). The company, however, did not disclose the value of goods it sold. New Delhi based Snapdeal said it sold 11 million units during its five-day sale, without disclosing the total value of goods it sold. (These numbers are big for Flipkart and Indian e-commerce but pale in comparison to ecommerce in China. For instance, in 2015 November Single’s day, Alibaba sold goods worth $14.3 billion.)</p>

<p>The 2016 online festival sale battle seems to have been won squarely by Flipkart, reversing recent hits it took under an onslaught by Amazon. It will bring the mojo back to the company and increase the cred of CEO Binny Bansal in the company and among its backers.</p>

<p>This is the story of how the 2016 Big Billion Days sale was put together by a handful of Flipkart managers.</p></i>
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
<!--
                        <div class="panel-grid" id="pg-2040-1">
                           <div class="panel-grid-cell" id="pgc-2040-1-0">
                              <section id="call-to-action" class="action-area" style="padding: 139px 0;  display: block; background: url('http://factordaily.com/wp-content/uploads/2016/10/Flipkart_Story_Inside_Pic12.jpg') no-repeat; background-position: center top; background-attachment: fixed; background-size: cover; z-index: -1;">
                                 <div class="container" style="visibility: hidden">
                                    <div class="action-text wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                                    </div>

                                 </div>
                                </section>
                              <cite class="wow fadeInUp" style="visibility: hidden; animation-name: none;">Binny Bansal climbs on to a table to click a few pictures. It's 10 minutes past midnight. Photo: Rajesh Subramanian.</cite>
                           </div>
                        </div>
-->
                        
                        <div class="panel-grid" id="pg-2040-8">
                           <div class="panel-grid-cell" id="pgc-2040-8-0">
                               <section id="facts" class="facts-area">
                                 <div class="container">
                                    <h3 class="widget-title">
	                                    Big Billion statistics
	                                </h3>
                                    <div class="col-md-3 col-sm-3 col-xs-12 stats-chart">
                                       <span class="fact wow rotateIn" id="25" style="visibility: hidden; animation-name: none;">25</span>
                                       <div class="fact-name wow fadeInUp" style="visibility: hidden; animation-name: none;">Smart phones (Lakhs)</div>
                                    </div>
                                    
                                    <div class="col-md-3 col-sm-3 col-xs-12 stats-chart">
                                       <span class="fact wow rotateIn" id="155" style="visibility: hidden; animation-name: none;">155</span>
                                       <div class="fact-name wow fadeInUp" style="visibility: hidden; animation-name: none;">Total Units (Lakhs)</div>
                                    </div>
                                    
                                    <div class="col-md-3 col-sm-3 col-xs-12 stats-chart">
                                       <span class="fact wow rotateIn" id="140000" style="visibility: hidden; animation-name: none;">140000</span>
                                       <div class="fact-name wow fadeInUp" style="visibility: hidden; animation-name: none;">Sales on October 3 (Rs Lakhs)</div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12 stats-chart">
                                       <span class="fact wow rotateIn" id="100000" style="visibility: hidden; animation-name: none;">100000</span>
                                       <div class="fact-name wow fadeInUp" style="visibility: hidden; animation-name: none;">Customers above Rs 50K Shopping cart</div>
                                    </div>
                                 </div>
                              </section>
                           </div>
                        </div>
                        
                        
                        
                        <div id="pl-2040">
	                        <div class="panel-grid" id="pg-2040-0">
	                           <div class="panel-row-style-hello hello panel-row-style">
	                              <div class="panel-grid-cell" id="pgc-2040-0-0">
	                                 <section id="services" class="services-area">
	                                    <div class="container">
	                                       <div class="service col-md-offset-2 col-md-8 col-xs-12">
	                                          <div class="text-font-family" style="visibility: visible; ">
	                                            <p class="dropcap"> It’s a few minutes before midnight. Binny Bansal, the 33-year-old co-founder and CEO of Flipkart, climbs up on a table in the central hall and starts clicking pictures of the audience on his iPhone 6 plus. Employees have crowded around the table making the ‘sign of the horns’, a hand gesture popularised by Ronnie James Dio of metal band Black Sabbath.</p>

<p>The atmosphere is that of a rock concert. The audience, mostly young millennials in their 20s and few older employees are huddled in different corners. They are carrying cans of Red Bull, Coke and bottled water, taking selfies and screaming out every now and then.</p>

<p>
This is going to be a long night. Flipkart’s Big Billion Days sale, the biggest sale on its annual calendar, is about to start.</p>
<p>
Some context, first. Securities firm BofA Merrill Lynch estimates that India’s ecommerce market will grow to $62 billion by 2020, from about $18 billion now. India is the world’s fastest-growing major economy in the world and, arguably, is the only bright spot in <a href="https://www.worldbank.org/en/publication/global-economic-prospects" target="_blank" class="link-style">a waning global market</a>. Private consumption is the prime driver in that economy and retail demand is booming with predictions that it will more than double to $1.3 trillion by 2020. Malls, hypermarts, and department stores that comprise the so-called organised retail sector -- just 8% of total retail sales in India -- are struggling to acquire a meaningful and sustainable share of the barrelling business. It is online retailers such as Flipkart, Amazon, Snapdeal, ShopClues, and even newbie Big Basket that are busy drinking from the Indian retail firehose. </p>

<p> Flipkart, for all its bets gone wrong and an aggressive Amazon breathing down its neck, is the horse still leading the race.</p>


												</div>
											</div>
							<div class="col-md-offset-2 col-md-8 col-xs-12">
								<div class="text-font-family" style="visibility: visible; ">
									<img src='http://factordaily.com/wp-content/uploads/2016/10/Flipkart_Story_Inside_Pic4.jpg' />
									<cite><p><i>Fish eye view of a floor full of Flipsters as BBD 2016 begins.</i> Photo: Rajesh Subramanian</p></cite>
								</div>
							</div>
							<div class="service col-md-offset-2 col-md-8 col-xs-12">
								<div class="text-font-family" style="visibility: visible; ">
									
									
<p>Back to the pumped-up 200-and-something Flipsters (that’s what the e-commerce company’s employees call themselves). Just before the clock hits 00:00 hours October 2, the crowd starts its countdown. It could well be New Year’s eve on Bengaluru high street Brigade Road. 10, 9, 8, 7… 3, 2, 1, zeroooo...! The loud, long roar reverberates across the floor. It is hard not to soak up some of the energy in there. </p>
<p>
We are inside Flipkart’s 11-storied office on Bengaluru’s outer ring road. It’s a massive campus called Cessna Business Park housing some of the biggest tech companies including Cisco. Along with our colleagues Rajesh Subramanian and Nikhil Raj, whose storytelling craft is visual, we are on the ground to capture what Flipkart’s biggest critics are calling “an acid test” for India’s biggest startup.</p>



	                                          </div>
	                                       </div>
	                                    </div>    
	                                 </section>
	                              </div>
	                           </div>
	                        </div>
                        
<!--             stats graph   -->         

                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
										<h3 class="widget-title">
											MISSION BBD
										</h3>
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12">

                                          <div class="text-font-family">
                                             <p class="dropcap"> Outside the central hall on the first floor, where most of the action is taking place, there are “war rooms” named after some of the biggest sports icons: Tendulkar, Federer and so on. The biggest of these rooms is called “The Olympics.” It is right across a flight of stairs leading to the floor. 
	                                             The Olympics is the command centre for the Big Billion Days (BBD) sale. Inside, a crack team of Flipkart leaders including Kalyan Krishnamurthy, Samardeep Subandh, and Saikiran Krishnamurthy is on to analytics of the sale. CEO Bansal walks into the room and settles down in front of a giant screen which throws up numbers and charts. </p>


                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        <div class="panel-grid" id="pg-2040-1-2">
                           <div class="panel-grid-cell" id="pgc-2040-1-0">
                              <section id="call-to-action" class="action-area" style="background-image: url('http://factordaily.com/wp-content/uploads/2016/10/Flipkart_Story_Inside_Pic11.jpg')">
                                 <div class="container" style="visibility: hidden">
                                    <div class="action-text wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
	                                    
                                    </div>

                                 </div>
                                 <style type="text/css">

                                 </style>
                              </section>
                              <cite> <p> <i>Game on! Five minutes past midnight, anxious Flipsters stare at a screen with numbers how this year’s BBD is doing. Don’t miss the work-weary eyes.</i> Photo: Rajesh Subramanian.</p> </cite>
                           </div>
                        </div>
                        
                        
<!--   quotes section -->
                        <div class="panel-grid" id="pg-2040-10">
                           <div class="panel-grid-cell" id="pgc-2040-10-0">
                              <section id="services" class="services-area">
                                 <div class="container">
                                    <div class="service col-md-offset-2 col-md-8 col-xs-12">
<!--
                                       <blockquote class="wow fadeInUp text-font-quotes" style="visibility: hidden; animation-name: none;">
                                           “At Flipkart we should do at least 20x I remember saying,” s Binny on a 2013 idea to do a “single’s day” sale in India.
                                       </blockquote>
-->	
										<p>
Flipkart’s Big Billion Days sale is officially open. Now in its third edition, it’s bigger than ever. The stakes are higher than ever. Both Amazon and Snapdeal are running discounted sales during these days: Amazon’s Great Indian Festival runs October 1 to 5 and the Unbox Diwali Sale of Snapdeal October 2 to 5. And Bansal just can’t afford to lose this time. </p>
                                       <p>"We have to execute relentlessly. Make sure customers are getting the right selection, experience and delivery speeds," Bansal tells us in an interview in the wee hours of Sunday, October 2. It’s been two hours into the sale and nothing is broken yet. </p>
                                       <p>The idea of creating an annual discounted sale event, according to Bansal, came up when he was in Dubai along with Krishnamurthy, a top executive from Flipkart’s biggest investor Tiger Global, in 2013. Bansal remembers listening to an ecommerce entrepreneur who was planning to do ten to twenty times of normal sales during his company’s “single’s day” sale. </p> 
                                       
                                        <p>“At Flipkart we should do at least 20x I remember saying,” says Binny, on recalling a 2013 idea to do a “single’s day” sale in India.
</p>
											<p>
												But, it was a disaster. Nearly 1.5 million customers ended up buying from the retailer on October 6, 2014. At Flipkart, they were underprepared. “People were expecting 5x; what we got was 30x,” says Bansal. It literally broke Flipkart. Stocks ran out pretty quickly, cancellations were high, the website couldn’t take the traffic, warehouses got cluttered, it was mayhem at air cargo locations… . Customers were mad. </p><p>

Sachin Bansal, then CEO of Flipkart, had to apologise to customers. “...though we saw unprecedented interest in our products and traffic like never before, we also realized that we were not adequately prepared for the sheer scale of the event,” he wrote in a <a href="http://www.thehindu.com/business/Industry/flipkart-accepts-shoddy-performance-apologises-for-glitches/article6478831.ece" class="link-style" target="_blank">letter</a> to customers.</p>
<p>

Yet, it was clear that Flipkart was on to a good idea. It <a href="http://www.financialexpress.com/industry/companies/flipkarts-big-billion-days-sale-churns-out-300-million-gmv/153290/" target="_blank" class="link-style">sold</a> goods worth over $100 million in its first BBD. Its 2015 BBD didn’t have the outages of the previous years but it had its limitations because it was an app-only sale. Still, it sold goods worth over $300 million.</p><p>

Since then, Flipkart has been through a lot. The company has restructured the organisation twice, many old timers have left, and competition from Amazon has intensified. To top it all, the market had started to stagnate. <a href="http://factordaily.com/project-fixkart-binny-bansal-flipkart/" target="_blank" class="link-style">As we wrote earlier</a>, online retailers had shipped about 26 million units in the April-June 2016, just about the same as the previous two quarters. Bansal says this worries him and insists it is up to Flipkart, as the market leader, to lead efforts to grow the market again. </p>
<br />

<p>
 <blockquote> “At Flipkart we should do at least 20x I remember saying,” recalls Binny on a 2013 idea to do a “single’s day” sale in India.
</blockquote>
</p>

<p>The festival online sales are an important push in that revival. According to industry estimates, nearly one third of India’s online sales happens during India’s festive season starting at Navratra and running up to Diwali, which falls on October 30 this year.
											</p>
                                    </div>
                                 </div>
                              </section>
                           </div>
                        </div>
                        
<!--                      bleed image -->
<!--
                        <div class="panel-grid" id="pg-2040-1-2">
                           <div class="panel-grid-cell" id="pgc-2040-1-0">
                              <section id="call-to-action" class="action-area" style="padding: 300px 0;">
                                 <div class="container" style="visibility: hidden">
                                    <div class="action-text wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                                    </div>

                                 </div>
                                 <style type="text/css">
                                    .action-area {
                                       display: block;	
                                       background: url('http://fdthird.staging.wpengine.com/wp-content/uploads/2016/10/flipkart-inside2.jpg') no-repeat;
                                       background-position: center center;
                                       background-size: cover;
                                       z-index: -1;
                                    }
                                 </style>
                              </section>
                              <cite class="wow fadeInUp" style="visibility: hidden; animation-name: none;">It’s two weeks before LinkedIn chief executive officer Jeff Weiner’s visit Bengaluru. Product teams at the professional networking company’s new office in the city are logging in coffee.</cite>
                           </div>
                        </div>
-->


						<div class="panel-grid" id="pg-2040-10">
                           <div class="panel-grid-cell" id="pgc-2040-10-0">
						   	  <section id="services" class="services-area">
                                 <div class="container">
	                                 <h3 class="widget-title">
                                          SPRINTER ON A MARATHON
                                     </h3>
                                    <div class="service col-md-offset-2 col-md-8 col-xs-12">


									<p class="dropcap"> Most of the buildings on the campus are dark with limited security lighting. Flipkart’s technology headquarters is well lit with dozens of cabs parked outside to ferry employees at odd hours. An ambulance is stationed nearby.  The Hatti Kappi stall inside is doing brisk business. Nearly 200 mattresses have been brought in for employees to catch a nap when caffeine stops working.</p>
<p>
But sleep is not on anyone’s mind. Everyone in the building is in mission mode. The glass doors of all the conference rooms are marked as “war room” for different functions ranging from marketing to supply chain and seller services. There are five giant screens in the central hall splashed with numbers, counters and coloured line graphs showing sales of different products.  </p>
                                    </div>
                                 </div>
                              </section>
                           </div>
                        </div>
                        
                        
                        <div class="panel-grid" id="pg-2040-1-2">
                           <div class="panel-grid-cell" id="pgc-2040-1-0">
                              <section id="call-to-action" class="action-area" style="background-image: url('http://factordaily.com/wp-content/uploads/2016/10/Flipkart_Story_Inside_Pic6.jpg')">
                                 <div class="container" style="visibility: hidden">
                                    <div class="action-text wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                                    </div>

                                 </div>

                              </section>
                              <cite><p><i>The filter coffee shop inside Flipkart's canteen on the ground floor is doing brisk business in the wee hours of Sunday</i> Photo: Rajesh Subramanian.</p></cite>
                           </div>
                        </div>
                        
                        
                        <div id="pl-2040">
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
                                       
                                       <!--
                                       <div class="service col-md-4 col-xs-6" style="vertical-align: middle">
                                       <span class="service-icon wow  animated" style="visibility: visible; animation-name: zoomInDown; background-color: rgba(0,0,0,0);width: auto;"> 								
                                       <img src="http://fdthird.staging.wpengine.com/wp-content/uploads/2016/10/33.jpeg" />
                                       </span>												

                                       </div>
                                       -->

                                       <div class="service col-md-offset-2 col-md-8 col-xs-12">
                                          <div class="text-font-family" style="visibility: visible; ">

  <p> A team of Flipsters has been working on the BBD project since June this year. (BBD is short for Big Billion Day.) It has been trying to apply all the learnings from past failures. Like in all battles, it all comes down to planning, details and foot soldiers. Flipkart, too, relied on its young team of consumer marketers, crack engineers (many hired away from companies such as Google), and its homegrown logistics arm, eKart, to pull it off. </p><p>

Smrithi Ravichandran is the General officer commanding of BBD 2016, who is charge of all parts of the sale reporting into her, even those parts run by people senior to her. A 31-year-old consumer marketing professional, who joined Flipkart in September 2011, Ravichandran has got it all covered for what is her third BBD sale. For four months now, the mother of an 18-month-old has been obsessing over an Excel document with over 200 line items from across different functions. She says she has been working day and night since she took the BBD role in June ensuring everything works in sync. </p>

<p>
Ravichandran started picking and putting together a team for this year’s BBD sale right from the word go. “I spend a lot of time watching people in meetings and taking feedback on them.” She carries angst common to working mothers. “A few weeks ago, my son called me “aunty”, that’s how little time I have been spending with him,” she says.</p>

<p>
As we talk, she tells us about how she took up the Flipkart job five years ago. When a Flipkart headhunter called her, the first reaction was like “what’s ecommerce and who really does that?” Later she met Ankit Nagori (Flipkart’s Chief Business Officer who quit along with Myntra founder Mukesh Bansal in February 2016), followed by a meeting with Binny who she didn’t recognise at first.</p>

<p>
The 2014 BBD fiasco and the underwhelming effort the following year has helped Flipkart with lessons in what <i>not</i> to do. “We dream even now, but with much more business insights and learnings than ever before,” says Ravichandran.</p><p>

Her experience of working in various teams across categories helped her get ready for this year’s big sale, Ravichandran says. The BBD 2016 sale was a record measured in more ways than one. For her, it meant scaling up marketing, beefing up supply chain, fortifying technology, helping the seller ecosystem, and keeping the spirits of employees high. “It’s a lot of moving parts,” she says.</p>

							</div></div>
							<div class="col-md-offset-2 col-md-8 col-xs-12">
								<div class="text-font-family" style="visibility: visible; ">
									<img src='http://factordaily.com/wp-content/uploads/2016/10/Smrithi_Ravichandran_Flipkart.jpg' />
									<cite><p><i>Smrithi Ravichandran, Director - Category Design Management, was the general commanding the Big Billion Days sale operations. “A few weeks ago, my son called me “aunty”, that’s how little time I have been spending with him,” she says. </i>Photo: Rajesh Subramanian.</p></cite>
								</div>
							</div>
							<div class="service col-md-offset-2 col-md-8 col-xs-12">
								<div class="text-font-family" style="visibility: visible; ">
								<p>
Indeed. It not only requires Flipkart to be ready, but also have sellers, their manufacturers, truckers and flight operators locking step with it. The company uses buyer data gathered from its website and app to tell sellers on its platform what kind of clothing is trending, to start with. It then helps them raise loans, find manpower, and even source material from China.</p><p>

This year, the sale started on a weekend. The idea was to push large appliances, fashion and furniture. Such purchase decisions are usually made after buy-in from the whole family, which Flipkart believed was best done on a weekend when all family members are likely to be together.</p><p>

Company insiders and experts, at least four of them FactorDaily interviewed said the target has been to sell goods worth $500 million, almost $100 million during each of the five days of sale. Flipkart, however, said at the end of the sale that it exceeded internal targets by 40%. Early on, there were doubts, from the ranks of newer Flipkart employees, if such numbers could be pulled off, especially because e-commerce hasn’t grown a lot in the last year or so. </p><p>

For Ravichandran, the event is not just about numbers. “It’s also about converting ambitions you have about expanding the market and you can’t think small,” she says. Ravichandran, is a gold medalist from IIM-Kozhikode and has competed in national level athletics while in school. 
</p>
<p>
Some of those learnings included ensuring adequate technology infrastructure so the website and app didn’t crash during peak hours, and with hundreds of thousands of users attempting to buy at the same time. </p><p>

On the logistics front, ensuring that the products reach consumers in time is perhaps the biggest challenge. It involves lining up everything from cargo planes to trucks, two wheelers and tempos-- all with clockwork precision. Let’s do a quick calculation to size this up. Fifteen million units will take at least 100,000 delivery men to do the job over five days if they make, say, 30 deliveries a day. Even a 5% improvement in this yields 150,000 more deliveries a day.</p><p>

We meet Ravichandran at 9 pm on October 1, three hours away from the BBD.  She looks remarkably poised but you can sense a little anxiety and fear of failure inside her. She’s hoping that her team of top Flipsters from across different functions will help steer through the big day(s).</p><p>

Five days later, the BBD sale is winding down and Ravichandran is feeling like she is up for another BBD event. “I’ll be back on Wednesday,” she says on phone late Thursday evening. That’s a well deserved long weekend, courtesy Durga puja holidays.

</p>
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>



<!-- graph chart data -->
<!--
                        <div class="panel-grid" id="pg-2040-9">
                           <div class="panel-grid-cell" id="pgc-2040-9-0">
                              <section id="skills" class="skills-area">
                                 <div class="container">
                                    <div class="text-font-family skills-desc col-md-6 col-sm-6 wow fadeInLeft">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#039;s standard dummy text everything since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.					
                                    </div>
                                    <div class="skills-list col-md-6 col-sm-6">
                                       <div class="col-md-2 wow fadeIn" style="visibility: hidden; animation-name: none;">Coding:</div>
                                       <div class="skill-bar col-md-10" id="90">
                                          <div></div>
                                       </div>
                                       <div class="col-md-2 wow fadeIn" style="visibility: hidden; animation-name: none;">Design:</div>
                                       <div class="skill-bar col-md-10" id="85">
                                          <div></div>
                                       </div>
                                       <div class="col-md-2 wow fadeIn" style="visibility: hidden; animation-name: none;">Singing:</div>
                                       <div class="skill-bar col-md-10" id="100">
                                          <div></div>
                                       </div>
                                       <div class="col-md-2 wow fadeIn" style="visibility: hidden; animation-name: none;">Building:</div>
                                       <div class="skill-bar col-md-10" id="72">
                                          <div></div>
                                       </div>
                                       <div class="col-md-2 wow fadeIn" style="visibility: hidden; animation-name: none;">Demolishing:</div>
                                       <div class="skill-bar col-md-10" id="91">
                                          <div></div>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                           </div>
                        </div>
-->
                        
                        
                        <div id="pl-2040">
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
	                                    <h3 class="widget-title">
                                          ENGINEERING AT SCALE
                                       </h3>
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12">
                                          <div class="text-font-family" style="visibility: visible; ">
                                            <p class="dropcap">While we stand around and interact with Flipkart employees at midnight, we keep running into Binny. Right after the sale goes live, Binny walks up to us and shows his mobile screen running the Flipkart app. “We’re doing great, no signs of any breakdowns,” he says, smiling. During the first five minutes, Flipkart received the highest ever traffic in terms of concurrent users looking to buy products online, ten times more than any given day, the company later said in a statement. </p><p>

At the core, Flipkart is a massive engineering operation. Some of the biggest hits and even the misses can be attributed to how good or bad its engineering decisions have been. Take Flipkart’s disastrous “app only” strategy from a year ago, for instance. Because of the dogged stance of only allowing users to buy through its app, Flipkart lost out on an opportunity to gain from struggling rival Snapdeal’s losses. Amazon ended up gaining share from Snapdeal’s losses. </p><p>

Later, Flipkart hired a new breed of engineering talent from the Valley, most of them from Google, led by Punit Soni. That backfired as well.</p><p> 

Things are slowly beginning to change under Flipkart’s new engineering head Ravi Garikipati and Binny’s determined execution drive with the aim of getting customer experience back on its feet. </p>

										</div></div>
							<div class="col-md-offset-2 col-md-8 col-xs-12">
								<div class="text-font-family" style="visibility: visible; ">
									<img src='http://factordaily.com/wp-content/uploads/2016/10/Surojit_Chatterjee_Flipkart.jpg' />
									<cite><p> <i> A team under Surojit Chatterjee, a former Googler who now heads products at Flipkart, developed a feature that checks the condition of your phone while you are online and tells you the best price for it.</i> Photo: Rajesh Subramanian</p></cite>
								</div>
							</div>
							<div class="service col-md-offset-2 col-md-8 col-xs-12">
								<div class="text-font-family" style="visibility: visible; ">

<p>

Surojit Chatterjee, a former Googler who joined Flipkart in November 2015, shows us  a new feature developed by the engineering team that helps the company offer exchange offers for old phones on the fly. If an iPhone 6 user wants to trade in her phone for a new iPhone 7 on Flipkart, the feature runs checks on the existing phone to offer the best price. The software runs a check on several parameters such as battery, camera, Wi-Fi, volume button, GPS and speaker condition to determine the phone’s health. Earlier, the phones had to be returned after realising that the exchanged products weren't in working condition. Chatterjee used to lead product development for Google’s mobile advertising and search business. </p><p>

Amar Nagaram, vice president of engineering in charge of customer experience across different products, says the company has learnt its lessons from the failed app-only strategy and even in coping with  the challenges involving technology infrastructure. “We cannot go down, it's like a dead end for our customers,” he says. Nagaram, who worked at Walmart Labs for four and half years in the US before joining Flipkart, calls it a “code red” situation. </p><p>

With over 100 million registered shoppers, the number of concurrent users trying to buy at the same time can be quite high, and unmanageable if not adequately planned for. Flipkart has mobile apps that run on Android and iOS, a progressive web app for mobile phones and a desktop website. “The last two BBDs taught me what to look out for,” says Nagaram who leads a team of nearly 60 engineers who develop and support customer facing products at Flipkart. </p>



									</div></div>
							<div class="col-md-offset-2 col-md-8 col-xs-12">
								<div class="text-font-family" style="visibility: visible; ">
									<img src='http://factordaily.com/wp-content/uploads/2016/10/Amar_Nagaram_Flipkart.jpg' />
									<cite><p><i>Amar Nagaram, Vice President, Engineering, is the man behind all customer facing products run by Flipkart. The online retailer owes one to Nagaram and his team for the app and the website holding up during BBD 2016.</i> Photo: Nikhil Raj</p></cite>
								</div>
							</div>
							<div class="service col-md-offset-2 col-md-8 col-xs-12">
								<div class="text-font-family" style="visibility: visible; ">


<p>

Doing stress tests across server and other technology infrastructure was among several things on his to-do list. For instance, when multiple people are trying to buy the same item, the database which keeps a record of stocks has to be updated in near-realtime. The latency, or delay in updating the record, can create confusion as two different customers might end up ordering the same unit. </p><p>

In 2014, for instance, the focus was on customer experience and that led to packing in too many features. Now, the focus is on redundancy and Plan Bs, just in case things don't go as projected. For instance, during peak hours and unmanageable loads, some of the features such as recommendation do not load. “If recommendations degrade, we show fewer recommendations,” said Nagaram. </p><p>

A big bottleneck to digital adoption in India is the internet bandwidth. With an average connection speed of 2.8 Mbps, India is ranked at 115th position worldwide. Flipkart has shrunk the size of its Android mobile app to almost 5.6 MB, which it claims makes the app the lightest  among ecommerce apps. </p><p>

In BBD 2016, the site didn’t go down. <a href="http://www.isitdownrightnow.com/flipkart.com.html" target="_blank" class="link-style">isitdownrightnow.com</a>, which keeps track of websites that go down, says the site hasn’t gone down in the last seven days. This, strictly speaking, may not be true if one is to go by screenshots of server down messages for Flipkart, as also Amazon and Snapdeal posted on social media by users.</p>
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
                        
                        <div id="pl-2040">
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
                                       <h3 class="widget-title">
                                          The last mile
                                       </h3>
                                       <!--
                                       <div class="service col-md-4 col-xs-6" style="vertical-align: middle">
                                       <span class="service-icon wow  animated" style="visibility: visible; animation-name: zoomInDown; background-color: rgba(0,0,0,0);width: auto;"> 								
                                       <img src="http://fdthird.staging.wpengine.com/wp-content/uploads/2016/10/33.jpeg" />
                                       </span>												

                                       </div>
                                       -->

                                       <div class="service col-md-offset-2 col-md-8 col-xs-12">
                                          <div class="text-font-family" style="visibility: visible; ">
                                            <p class="dropcap"> The last few days have been a blur for Saikiran Krishnamurthy whose job is to make sure that the goods you order on Flipkart reach you in time. In the last two weeks, he’s been to Flipkart’s offices from Dankuni in Kolkata to Bhiwandi in Maharashtra. He made over 20 such visits, talking to the rank and file and taking stock of things. </p><p>

Krishnamurthy, a former McKinsey consultant cannot stop showing pictures of iPhone packages, electronics goods and even kitchenware, all packed up and lying across Flipkart’s massive warehouses --17 of them in all and with a spread of over four million square feet in expanse. Over one million square feet of warehouse space was added over just past few weeks, Krishnamurthy says. The warehouses are bursting at seams. “Everything at the supply chain is working at five to ten times the average scale.” </p>



										</div></div>
									<div class="col-md-offset-2 col-md-8 col-xs-12">
										<div class="text-font-family" style="visibility: visible; ">
											<img src='http://factordaily.com/wp-content/uploads/2016/10/Saikiran_Krishnamurthy_Flipkart.jpg' />
											<cite><p><i>Saikiran Krishnamurthy, Head - Ekart, Fulfillment and Customer Support, is the owner of four million sq. ft. warehouse space. Owner, as in, responsible for all delivery operations.</i> Photo: Rajesh Subramanian.</p></cite>
										</div>
									</div>
									<div class="service col-md-offset-2 col-md-8 col-xs-12">
										<div class="text-font-family" style="visibility: visible; ">



<p>

E-kart, the logistics arm of Flipkart that Krishnamurthy oversees, serves 5,000 pincodes in 700 cities. E-kart employs more than 30,000 people and also uses third party logistics players like Bluedart to deliver orders. “Our supply chain is built to serve with 99% reliability,” he tells us. Krishnamurthy has even put in place a Plan B of sorts, in case there is there are floods, heavy rains or a natural calamity. He’s been poring over weather reports and flight charts to book cargo space for Flipkart’s goods. </p><p>

Every time a package gets out for delivery in a warehouse, it has to pass six checks and a machine prints out a pink colored slip. The six checks include packaging, product specifications, product ratings, return ratio of the item, the seller’s ability to fulfil the order, and committed timelines.</p><p>

The entire process is powered by an algorithm developed by a team of Flipkart’s data scientists, which ensures that all variable factors including cancellations and quality are captured and accounted for. The promise is that each of the packages with “Flipkart Assured” badge will be delivered within two to four days of the order. </p>


												</div></div>
							<div class="col-md-offset-2 col-md-8 col-xs-12">
								<div class="text-font-family" style="visibility: visible; ">
									<img src='http://factordaily.com/wp-content/uploads/2016/10/Flipkart_Story_Inside_Pic9.jpg' />
									<cite><p><i>“Wishmaster” Ramesh has been hard at work on all BBD 2016 days and leaves Flipkart's HSR Layout “fulfilment centre” (read: warehouse) in Bangalore for deliveries on Wednesday.</i> Photo: Rajesh Subramanian</p></cite>
								</div>
							</div>
							
							
							<div class="service col-md-offset-2 col-md-8 col-xs-12">
								<div class="text-font-family" style="visibility: visible; ">
									<p>

“The pink slip for each package is like getting fired from the warehouse,” Krishnamurthy says jokingly. On Wednesday, we visited Flipkart’s delivery hub near HSR Layout in Bengaluru. Wishmasters, as Flipkart calls its delivery staff, are working double shifts to clear packages from the hub. </p><p>

Flipkart has added nearly 10,000 temporary workers to its delivery workforce of 30,000 across India to help with last mile delivery during BBD 2016.. This includes local kirana shop owners and people who had spare time to deliver packages and earn some money. “It’s an Uber for delivery,” says Krishnamurthy.</p><p> 

On Thursday evening, the last day of the sale, Krishnamurthy told FactorDaily on the phone that the company has already delivered nearly one million orders. But the job is still far from finished. With holidays coming up, a lot of goods are likely to pile up because customers don’t tend to be at home. </p>
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
<!--
                         <div class="panel-grid" id="pg-2040-1-2">
                           <div class="panel-grid-cell" id="pgc-2040-1-0">
                              <section id="call-to-action" class="action-area" style="padding: 300px 0;">
                                 <div class="container" style="visibility: hidden">
                                    <div class="action-text wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                                    </div>

                                 </div>
                                 <style type="text/css">
                                    .action-area {
                                       display: block;	
                                       background: url('http://fdthird.staging.wpengine.com/wp-content/uploads/2016/10/flipkart-inside2.jpg') no-repeat;
                                       background-position: center center;
                                       background-size: cover;
                                       z-index: -1;
                                    }
                                 </style>
                              </section>
                              <cite class="wow fadeInUp" style="visibility: hidden; animation-name: none;">It’s two weeks before LinkedIn chief executive officer Jeff Weiner’s visit Bengaluru. Product teams at the professional networking company’s new office in the city are logging in coffee.</cite>
                           </div>
                        </div>
-->

                        
                        
                                                
                        <div id="pl-2040">
	                        <div class="panel-grid" id="pg-2040-0">
	                           <div class="panel-row-style-hello hello panel-row-style">
	                              <div class="panel-grid-cell" id="pgc-2040-0-0">
	                                 <section id="services" class="services-area">
	                                    <div class="container">
		                                    <h3 class="widget-title">
	                                          A seller’s market, also the buyers
	                                       </h3>
	                                       <div class="service col-md-offset-2 col-md-8 col-xs-12">
	                                          <div class="text-font-family" style="visibility: visible; ">
	                                            <p class="dropcap">Paroma Chatterjee has been working on getting sellers ready since BBD 2015. There are nearly 100,000 sellers on the Flipkart platform now, she says. At the time of the last BBD sale in October 2015, the company had 50,000 sellers. Typically, some 80% of sales on Flipkart comes from 20% of sellers. One of the challenges Chatterjee has been able to deal with is to get sellers to foot the cost of discounting. “Last year the regulations allowed us to discount on behalf of the seller. Now the entire discount has to be footed by the seller,” says Chatterjee, who came to Flipkart from phone services leader Airtel.</p>
	                                            
	                                            </div></div>
									<div class="col-md-offset-2 col-md-8 col-xs-12">
										<div class="text-font-family" style="visibility: visible; ">
											<img src='http://factordaily.com/wp-content/uploads/2016/10/Paroma-Chatterjee_Flipkart.jpg' />
											<cite><p><i>Paroma Chatterjee, Director - Seller Ecosystem at Flipkart, has been stitching up deals and prepping sellers ahead of BBD 2016. Every week, she and her team receives enquiries from some 3,000 sellers who want to get on the Flipkart platform.</i> Photo: Nikhil Raj.</p>
		</cite>
										</div>
									</div>
									<div class="service col-md-offset-2 col-md-8 col-xs-12">
										<div class="text-font-family" style="visibility: visible; "> 
	                                            <p>

One thing that stood out in BBD 2016 was that Flipkart was able to offer some great deals — it had the lowest price for popular phones such as Apple iPhone 6S and Asus ZenFone 2 while Amazon had a lead in the consumer electronics category, <a href="http://www.financialexpress.com/industry/companies/online-sales-flipkart-offers-cheapest-mobile-phones-beats-amazon-snapdeal-on-days-2-and-3/407387/" class="link-style" target="_blank">according to RedSeer consulting</a> which studied prices across the three top ecommerce companies on October 2 and October 3. </p><p>

Working with sellers also means criss crossing the country -- from Amritsar to Tirupur. “We cover a lot of clusters, manufacturing hubs,” says Chatterjee. Once you have a seller, you need to train him and help him source, raise capital, and, generally, handhold him. Every week, nearly 3,000 sellers reach out to her team wanting to sell on Flipkart, according to Chatterjee. For context, Snapdeal has 300,000 sellers on its platform, of which <a href="http://www.moneycontrol.com/news/business/snapdeal-sells-11-mn-unitsits-festive-diwali-sale_7587621.html" target="_blank" class="link-style">only 66,000 sellers</a> made a sale.</p>
	                                          </div>
	                                       </div>
	                                    </div>    
	                                 </section>
	                              </div>
	                           </div>
	                        </div>
	                        
	                        <div id="pl-2040">
	                        <div class="panel-grid" id="pg-2040-0">
	                           <div class="panel-row-style-hello hello panel-row-style">
	                              <div class="panel-grid-cell" id="pgc-2040-0-0">
	                                 <section id="services" class="services-area">
	                                    <div class="container">
		                                    <h3 class="widget-title">
	                                          BBD: Big Binny Day
	                                       </h3>
	                                       <div class="service col-md-offset-2 col-md-8 col-xs-12">
	                                          <div class="text-font-family" style="visibility: visible; ">
	                                            <p class="dropcap"> Two hours after the sale kicks off we meet CEO Binny Bansal in a small conference room. Wearing a green hoodie and a pair of jeans, he sits cross legged looking overwhelmed. When Binny and Sachin started Flipkart in September 2007, they were a tiny startup running out of an apartment and didn’t think they would come this far. The nine years have been stupendous.</p><p>

“The next nine years are going to be completely different,” says Binny.</p><p>

Even raising additional funding for instance, will not be a purely financial decision. “We will look for strategic partners,” he says.</p>


												</div></div>
									<div class="col-md-offset-2 col-md-8 col-xs-12">
										<div class="text-font-family" style="visibility: visible; ">
											<a href="http://factordaily.com/binny-bansal-interview/" target="_blank"><img src='http://factordaily.com/wp-content/uploads/2016/10/BinnyBansal_interview_banner.jpg' /></a>
										</div>
									</div>
									<div class="service col-md-offset-2 col-md-8 col-xs-12">
										<div class="text-font-family" style="visibility: visible; ">



<p>

So, are the talks with Walmart on and can it turn out to be a strategic move? “...all this talk of Walmart investing in Flipkart -- is it a case of all smoke without fire,” we ask him. “Is there fire, is there smoke? At the moment it’s neither of those,” he replies, laughing. (Both our question and his answer were in Hindi.) As we wrote, Alibaba talks seems to have taken the backseat in talks for a stake in Flipkart since Walmart showed interest few weeks ago.</p><p>

A partnership with a Walmart or an Alibaba or someone else strategic is only a matter of time for Flipkart. It will need the backing of the deep balance sheet of a strategic partner to be able to ward off rival Amazon. The next few years will tell how that plays out. For now, Binny can breathe easy. The first Big Billion Day sale under his watch as CEO went off spectacularly well. He has to next ensure that this week's springboard will take Flipkart onto a fast-growth trajectory that will help it accelerate ahead of the market, and of course, Amazon.</p>
<hr /></div>	

				<div class="tail-text" style="font: small;">
					
					<p><i>Update: Edited on October 7, 2016 at 3:05 PM IST to correct a typographical error regarding the sales numbers for October 3. While an earlier version of this story put the number at Rs 14,000 lakhs, the actual number is Rs 1,40,000 lakhs and changes have been made to reflect this.</i></p>
					
					<p><i>Updated at 10.45 pm on October 7: Two changes have been made in the copy. A reporting error on Amazon Prime has been corrected in the copy. An earlier version of the story said 1/3rd of the total units sold, or one out of every 3 units, was a Prime membership, but in a later communication, Amazon did not confirm this and said that “paid Prime membership was the highest selling product in Amazon.in’s history during Great Indian Festival.”
Two forecasts for online retail in India were carried in an error that can be traced to editing on a new design template; there's only one now.
					</i></p>
										
				</div>

				<div class="tail-text">
	                  Edited By: Josey Puliyenthuruthel.
	              </div>
	              <div class="tail-text" style="font: small;">
	                  Disclosure: FactorDaily is owned by SourceCode Media, which counts Accel Partners, Blume Ventures and Vijay Shekhar Sharma among its investors. Accel Partners is an early investor in Flipkart. Vijay Shekhar Sharma is the founder of Paytm. None of FactorDaily’s investors have any influence on its reporting about India’s technology and startup ecosystem.
	             </div>
	                                          
	                                          
	                                       </div>
	                                    </div>    
	                                 </section>
	                              </div>
	                           </div>
	                        </div>
                     </div>
                     
                  </div>
                  
                  <!-- .entry-content -->
               </main>
               <!-- #main -->
            </div>
            <!-- #primary -->
         </div>
      </div>
      <!-- #page -->
<?php get_footer(); ?>