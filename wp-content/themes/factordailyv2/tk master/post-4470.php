<?php
/**
* WP Post Template: flipkart fullbleed
*/
?>
<html lang="en-US">
   <head>

   <script type="text/javascript" src="http://bam.nr-data.net/1/ae0508e4dc?a=21842015&amp;v=974.7d740e1&amp;to=blxVZEVVV0JQBk0IW1cWdlNDXVZfHhVYBlFmX0VfWUAUQVACXA%3D%3D&amp;rst=1861&amp;ref=http://demo.athemes.com/moesia/&amp;ap=120&amp;be=643&amp;fe=463&amp;dc=230&amp;perf=%7B%22timing%22:%7B%22of%22:1475567799933,%22n%22:0,%22u%22:560,%22r%22:1,%22ue%22:560,%22re%22:289,%22f%22:289,%22dn%22:289,%22dne%22:289,%22c%22:289,%22ce%22:289,%22rq%22:300,%22rp%22:558,%22rpe%22:561,%22dl%22:600,%22di%22:873,%22ds%22:873,%22de%22:1103,%22dc%22:1105,%22l%22:1106,%22le%22:1117%7D,%22navigation%22:%7B%22rc%22:1%7D%7D&amp;at=QhtWEg1PREw%3D&amp;jsonp=NREUM.setToken">
   </script>
   <script src="http://js-agent.newrelic.com/nr-974.min.js">
   </script>
   <script type="text/javascript">
      window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[(new Date).getTime()].concat(u(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(2),u=t(3),c=t("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var s=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],p="api-",l=p+"ixn-";a(s,function(t,e){f[e]=o(p+e,!0,"api")}),f.addPageAction=o(p+"addPageAction",!0),e.exports=newrelic,f.interaction=function(){return(new r).get()};var d=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[Date.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){d[e]=o(l+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,(new Date).getTime()])}},{}],2:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],3:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?u(t,a,i):i()}function n(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),u=a.length,c=0;c<u;c++)a[c].apply(i,r);var s=f[m[n]];return s&&s.push([w,n,r,i]),i}function p(t,e){g[t]=l(t).concat(e)}function l(t){return g[t]||[]}function d(t){return s[t]=s[t]||o(n)}function v(t,e){c(t,function(t,n){e=e||"feature",m[n]=e,e in f||(f[e]=[])})}var g={},m={},w={on:p,emit:n,get:d,listeners:l,context:e,buffer:v};return w}function i(){return new r}var a="nr@context",u=t("gos"),c=t(2),f={},s={},p=e.exports=o();p.backlog=f},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!h++){var t=y.info=NREUM.info,e=s.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){c(m,function(e,n){t[e]||(t[e]=n)});var n="https"===g.split(":")[0]||t.sslForHttp;y.proto=n?"https://":"http://",u("mark",["onload",a()],null,"api");var r=s.createElement("script");r.src=y.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function o(){"complete"===s.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=t("handle"),c=t(2),f=window,s=f.document,p="addEventListener",l="attachEvent",d=f.XMLHttpRequest,v=d&&d.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:d,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},t(1);var g=""+location,m={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-974.min.js"},w=d&&v&&v[p]&&!/CriOS/.test(navigator.userAgent),y=e.exports={offset:a(),origin:g,features:{},xhrWrappable:w};s[p]?(s[p]("DOMContentLoaded",i,!1),f[p]("load",r,!1)):(s[l]("onreadystatechange",o),f[l]("onload",r)),u("mark",["firstbyte",a()],null,"api");var h=0},{}]},{},["loader"]);
   </script>
   
   
   <script type="text/javascript">
   window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/demo.athemes.com\/moesia\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.6.1"}};
   !function(a,b,c){function d(a){var c,d,e,f,g,h=b.createElement("canvas"),i=h.getContext&&h.getContext("2d"),j=String.fromCharCode;if(!i||!i.fillText)return!1;switch(i.textBaseline="top",i.font="600 32px Arial",a){case"flag":return i.fillText(j(55356,56806,55356,56826),0,0),!(h.toDataURL().length<3e3)&&(i.clearRect(0,0,h.width,h.height),i.fillText(j(55356,57331,65039,8205,55356,57096),0,0),c=h.toDataURL(),i.clearRect(0,0,h.width,h.height),i.fillText(j(55356,57331,55356,57096),0,0),d=h.toDataURL(),c!==d);case"diversity":return i.fillText(j(55356,57221),0,0),e=i.getImageData(16,16,1,1).data,f=e[0]+","+e[1]+","+e[2]+","+e[3],i.fillText(j(55356,57221,55356,57343),0,0),e=i.getImageData(16,16,1,1).data,g=e[0]+","+e[1]+","+e[2]+","+e[3],f!==g;case"simple":return i.fillText(j(55357,56835),0,0),0!==i.getImageData(16,16,1,1).data[0];case"unicode8":return i.fillText(j(55356,57135),0,0),0!==i.getImageData(16,16,1,1).data[0];case"unicode9":return i.fillText(j(55358,56631),0,0),0!==i.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity","unicode9"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
   </script>
   <script src="http://demo.athemes.com/moesia/wp-includes/js/wp-emoji-release.min.js?ver=4.6.1" type="text/javascript"></script>
   <style type="text/css">
      img.wp-smiley,
      img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 .07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
      }
      
      .fact-name {font-size: 14px !important;}
      
      .site-footer
      {
	      border-top: none !important;
	   }
      section .container, #audio-video, #tell-your-story 
      {
		    padding-top: 0px !important;
		    padding-bottom: 0px !important;
	  }
	  
	  #more-factors-section
	  { background-color: #0b0b0b !important;}
      
      button, html input[type="button"], input[type="reset"], input[type="submit"]
      {
	      box-shadow: none !important;
      }
      section .widget-title{margin-bottom: 10px !important;}
      
      .chatbot-button
      {background-color: #ef7e22 !important; color: white !important; font-size: 18px !important; border-radius: 50px; font-weight: 400; margin-top: 30px; }
   </style>
   <link rel="profile" href="http://gmpg.org/xfn/11">
   <link rel="pingback" href="http://demo.athemes.com/moesia/xmlrpc.php">
   <title>FactorDaily Year in Review: 2016</title>
   <link rel="dns-prefetch" href="//fonts.googleapis.com">
   <link rel="dns-prefetch" href="//s.w.org">
   <link rel="alternate" type="application/rss+xml" title="Moesia » Feed" href="http://demo.athemes.com/moesia/feed/">
   <link rel="alternate" type="application/rss+xml" title="Moesia » Comments Feed" href="http://demo.athemes.com/moesia/comments/feed/">
   <link rel="alternate" type="application/rss+xml" title="Moesia » Front Page Comments Feed" href="http://demo.athemes.com/moesia/front-page/feed/">
   <link rel="stylesheet" id="siteorigin-panels-front-css" href="http://demo-26ce.kxcdn.com/wp-content/plugins/siteorigin-panels/css/front.css?ver=2.4.15" type="text/css" media="all">
   <!--
   <link rel="stylesheet" id="moesia-fe-body-fonts-css" href="//fonts.googleapis.com/css?family=Roboto%3A400%2C400italic%2C700%2C700italic&amp;ver=4.6.1" type="text/css" media="all">
   <link rel="stylesheet" id="moesia-fe-headings-fonts-css" href="//fonts.googleapis.com/css?family=Roboto+Condensed%3A700&amp;ver=4.6.1" type="text/css" media="all">
   -->
   <link rel="stylesheet" id="moesia-style-css" href="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/style.css?ver=4.6.1" type="text/css" media="all">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="https://api.w.org/" href="http://demo.athemes.com/moesia/wp-json/">
   <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://demo.athemes.com/moesia/xmlrpc.php?rsd">
   <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://demo-26ce.kxcdn.com/wp-includes/wlwmanifest.xml">
   <link rel="canonical" href="http://demo.athemes.com/moesia/">
   <link rel="shortlink" href="http://demo.athemes.com/moesia/">
   <link rel="alternate" type="application/json+oembed" href="http://demo.athemes.com/moesia/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdemo.athemes.com%2Fmoesia%2F">
   <link rel="alternate" type="text/xml+oembed" href="http://demo.athemes.com/moesia/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdemo.athemes.com%2Fmoesia%2F&amp;format=xml">
   <!-- My Custom CSS -->
   <link rel="stylesheet" id="mccss_stylesheet" href="http://demo-26ce.kxcdn.com/wp-content/uploads/sites/25/my_custom_css/my_style_id-25.css?1467719257" type="text/css" media="all">
   <!-- My Custom CSS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   <link rel="stylesheet" href="http://fdthird.staging.wpengine.com/wp-content/themes/_tk-master/fd-style.css?ver=4.5.4" type="text/css" media="all">

  
  
   <style>
	.blockquote-area .widget-title {
		margin-bottom: 90px !important;
	}
	blockquote {
		border: 0 !important;
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
   	
   </style>
   <style id="moesia-style-inline-css" type="text/css">
	   a.link-style 
	   {
		   text-decoration: none;
		   position: relative;
		  color: red;
		}
		
/*
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
*/
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
         margin: 0 .1em .1em 0;
      }

      cite{ line-height: 1.5; font-size: 14px; padding: 0px !important; margin: 0px!important; text-align: center}
            cite p{font-size: 13px;}

      h1 { font-size:36px; }
      h2 { font-size:30px; }
      h3 { font-size: 33px !important; }
      h4 { font-size:18px !important; }
      h5 { font-size:14px; }
      h6 { font-size:12px; }
      body { font-size:14px; }
      @media (min-width: 499px) { section .widget-title, .panel.widget .widget-title, .so-panel.widget .widget-title { font-size:56px; } }
      .main-navigation li { font-size:14px; }
      .site-branding, .main-navigation li { padding-top:40px; padding-bottom:40px; }
      .menu-toggle { margin:40px 0;}
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
   <link rel="stylesheet" id="moesia-font-awesome-css" href="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/fonts/font-awesome.min.css?ver=4.6.1" type="text/css" media="all">
   <link rel="stylesheet" id="moesia-pretty-photo-css" href="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/inc/prettyphoto/css/prettyPhoto.min.css?ver=4.6.1" type="text/css" media="all">
   <link rel="stylesheet" id="moesia-animations-css" href="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/css/animate/animate.min.css?ver=4.6.1" type="text/css" media="all">
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/plugins/moesia-masonry-portfolio//lib/js/isotope.min.js?ver=1"></script>
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/waypoints.min.js?ver=1"></script>
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/slick.min.js?ver=1"></script>
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/carousel-init.js?ver=1"></script>
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/inc/prettyphoto/js/jquery.prettyPhoto.min.js?ver=1"></script>
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/inc/prettyphoto/js/prettyphoto-init.js?ver=1"></script>
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/wow.min.js?ver=1"></script>
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/wow-init.js?ver=1"></script>
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/jquery.sticky.js?ver=1"></script>
   <!-- <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/scripts.js?ver=1"></script> -->
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/jquery.fitvids.js?ver=1"></script>
   <script src="https://use.typekit.net/rhw4osa.js"></script>
   <script>try{Typekit.load({ async: true });}catch(e){}</script>
   <script>
	   jQuery(function(i){if(i(window).width()>1024){var n=i(window).height();i(".has-banner, .overlay").css("height",n),i(window).resize(function(){var n=i(window).height();i(".has-banner, .overlay").css("height",n)})}i(window).resize(function(){if("none"==i(".header-image").css("display")){var n=i(window).height();i(".has-banner, .overlay").css("height",n)}else i(".has-banner, .overlay").css("height","auto")})}),jQuery(function(i){i("#page").css("visibility","visible")}),jQuery(function(i){i(".sub-menu").hide(),i(".main-navigation .children").hide(),i(".menu-item").hover(function(){i(this).children(".sub-menu").slideDown()},function(){i(this).children(".sub-menu").hide()}),i(".main-navigation li").hover(function(){i(this).children(".main-navigation .children").slideDown()},function(){i(this).children(".main-navigation .children").hide()})}),jQuery(function(i){i(document).ready(function(){i("body").fitVids()})}),jQuery(function(i){i(".fact").waypoint(function(){i(".fact").each(function(){var n=i(this);i({Counter:0}).animate({Counter:n.attr("id")},{duration:5e3,easing:"swing",step:function(){n.text(Math.ceil(this.Counter))}})})},{offset:"90%",triggerOnce:!0}),i(".skill-bar").waypoint(function(){i(".skill-bar").each(function(){var n=i(this),e=i(this).attr("id"),t=e*n.width()/100;n.find("div").animate({width:t},1e3).html(e+"%&nbsp;")})},{offset:"90%",triggerOnce:!0})}),jQuery(function(i){i(window).bind("load",function(){i(".top-bar").sticky()})}),jQuery(function(i){i(".so-panel.widget, .panel.widget").addClass("container")}),jQuery(function(i){i(".social-area li a, .social-widget a").attr("target","_blank")}),jQuery(function(i){i('a[href*="#"]:not([href="#"],[class*="tab"] a,.wc-tabs a, .activity-content a)').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var n=i(this.hash),e=i(".top-bar").height();if(n=n.length?n:i("[name="+this.hash.slice(1)+"]"),"#site-navigation"!=this.hash&&i(window).width()>1024){if(n.length)return i("html,body").animate({scrollTop:n.offset().top-e+40},800),!1}else if(n.length)return i("html,body").animate({scrollTop:n.offset().top},800),!1}})}),jQuery(function(i){i(".nav-search").click(function(){i(".nav-search-box").addClass("search-visible")}),i(".search-close").click(function(){i(".nav-search-box").removeClass("search-visible")})});
	   
	</script>
   
   <!--[if lt IE 9]>
   <script src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/html5shiv.js"></script>
   <![endif]-->
   <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
   <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
   <style type="text/css">
      .has-banner-cover{
         height: 95%;
         background: url('http://factordaily.com/wp-content/uploads/2016/12/Yearender_lead.jpg') no-repeat top center; 
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
      }
      
      .entry-content h3 { padding-top: 0px !important}
        .action-area1 {
           display: block;	
           background: url('http://factordaily.com/wp-content/uploads/2016/12/future_lead.jpg') no-repeat;
           background-position: center center;
           background-size: cover;
           z-index: -1;
           padding: 300px 0px !important;
        }

        .action-area2 {
           display: block;	
           background: url('http://factordaily.com/wp-content/uploads/2016/12/Entrepreneurship-lead.jpg') no-repeat;
           background-position: center center;
           background-size: cover;
           z-index: -1;
           padding: 300px 0px !important;
        }
        
        .action-area3 {
           display: block;	
           background: url('http://factordaily.com/wp-content/uploads/2016/12/Disruptors_lead.jpg') no-repeat;
           background-position: center center;
           background-size: cover;
           z-index: -1;
           padding: 300px 0px !important;
        }
        
        .action-area4 {
           display: block;	
           background: url('http://factordaily.com/wp-content/uploads/2016/12/makers-lead.jpg') no-repeat;
           background-position: center center;
           background-size: cover;
           z-index: -1;
           padding: 300px 0px !important;
        }
        
        .action-area5 {
           display: block;	
           background: url('http://factordaily.com/wp-content/uploads/2016/12/Unicorns_lead-1.jpg') no-repeat;
           background-position: center center;
           background-size: cover;
           z-index: -1;
           padding: 300px 0px !important;
        }
        .action-area6 {
           display: block;	
           background: url('http://factordaily.com/wp-content/uploads/2016/12/Buzz_lead-1.jpg') no-repeat;
           background-position: center center;
           background-size: cover;
           z-index: -1;
           padding: 300px 0px !important;
        }
        .action-area7 {
           display: block;	
           background: url('http://factordaily.com/wp-content/uploads/2016/12/comments-lead.jpg') no-repeat;
           background-position: center center;
           background-size: cover;
           z-index: -1;
           padding: 300px 0px !important;
        }
        .action-area8 {
           display: block;	
           background: url('http://factordaily.com/wp-content/uploads/2016/12/Society_lead.jpg') no-repeat;
           background-position: center center;
           background-size: cover;
           z-index: -1;
           padding: 300px 0px !important;
        }
        .action-area9 {
           display: block;	
           background: url('http://factordaily.com/wp-content/uploads/2016/12/Access-lead.jpg') no-repeat;
           background-position: center center;
           background-size: cover;
           z-index: -1;
           padding: 300px 0px !important;
        }
        .action-area10 {
           display: block;	
           background: url('http://factordaily.com/wp-content/uploads/2016/12/Feminism-lead.jpg') no-repeat;
           background-position: center center;
           background-size: cover;
           z-index: -1;
           padding: 300px 0px !important;
        }
        .action-area11 {
           display: block;	
           background: url('http://factordaily.com/wp-content/uploads/2016/12/lifestyle_lead.jpg') no-repeat;
           background-position: center center;
           background-size: cover;
           z-index: -1;
           padding: 300px 0px !important;
        }
        .action-area12 {
           display: block;	
           background: url('http://factordaily.com/wp-content/uploads/2016/12/geekery_lead.jpg') no-repeat;
           background-position: center center;
           background-size: cover;
           z-index: -1;
           padding: 300px 0px !important;
        }
        .service {
	        padding-top: 35px !important;
        }

      @media only screen and (min-width: 1025px) {
         .services{display: table-cell}
         .width-dec
         { width: 70% !important}
         .mobileview {display: none;}
         
      }	
      @media only screen and (max-width: 767px) {	
         .has-banner{
         /*          display: none; */
         }
         .webview
         {display: none;}
         
         .action-area1 {
	          background: url('http://490z7i45htbb1f4tty9mdpi6.wpengine.netdna-cdn.com/wp-content/uploads/2016/10/Flipkart_Story_Inside_Pic11-500x260.jpg') no-repeat;
	          padding: 100px 0px !important;
        }
        
         .action-area2{
		 	background: url('http://490z7i45htbb1f4tty9mdpi6.wpengine.netdna-cdn.com/wp-content/uploads/2016/10/Flipkart_Story_Inside_Pic6-500x234.jpg') no-repeat;
		 	padding: 90px 0px !important;
        }
      }	
      .panel-grid {border: none !important;}
      .services-area {padding: 0px 0px !important;}
   </style>
   <style type="text/css" media="all" id="siteorigin-panels-grids-wp_head">/* Layout 2040 */ #pg-2040-0 , #pg-2040-1, #pg-2040-1-2, #pg-2040-2 , #pg-2040-3 , #pg-2040-4 , #pg-2040-5 , #pg-2040-6 , #pg-2040-7 , #pg-2040-8 , #pg-2040-9 , #pl-2040 .panel-grid-cell .so-panel { margin-bottom:30px } #pg-2040-0 .panel-grid-cell , #pg-2040-1 .panel-grid-cell, #pg-2040-1-2 .panel-grid-cell, #pg-2040-2 .panel-grid-cell , #pg-2040-3 .panel-grid-cell , #pg-2040-4 .panel-grid-cell , #pg-2040-5 .panel-grid-cell , #pg-2040-6 .panel-grid-cell , #pg-2040-7 .panel-grid-cell , #pg-2040-8 .panel-grid-cell , #pg-2040-9 .panel-grid-cell , #pg-2040-10 .panel-grid-cell { float:none } #pl-2040 .panel-grid-cell .so-panel:last-child { margin-bottom:0px } #pg-2040-0 , #pg-2040-1, #pg-2040-1-2  , #pg-2040-2 , #pg-2040-3 , #pg-2040-4 , #pg-2040-5 , #pg-2040-6 , #pg-2040-7 , #pg-2040-8 , #pg-2040-9 , #pg-2040-10 { margin-left:-15px;margin-right:-15px } #pg-2040-0 .panel-grid-cell , #pg-2040-1 .panel-grid-cell , #pg-2040-1-2 .panel-grid-cell , #pg-2040-2 .panel-grid-cell , #pg-2040-3 .panel-grid-cell , #pg-2040-4 .panel-grid-cell , #pg-2040-5 .panel-grid-cell , #pg-2040-6 .panel-grid-cell , #pg-2040-7 .panel-grid-cell , #pg-2040-8 .panel-grid-cell , #pg-2040-9 .panel-grid-cell , #pg-2040-10 .panel-grid-cell { padding-left:15px;padding-right:15px } @media (max-width:780px){ #pg-2040-0 .panel-grid-cell , #pg-2040-1 .panel-grid-cell, #pg-2040-1-2 .panel-grid-cell  , #pg-2040-2 .panel-grid-cell , #pg-2040-3 .panel-grid-cell , #pg-2040-4 .panel-grid-cell , #pg-2040-5 .panel-grid-cell , #pg-2040-6 .panel-grid-cell , #pg-2040-7 .panel-grid-cell , #pg-2040-8 .panel-grid-cell , #pg-2040-9 .panel-grid-cell , #pg-2040-10 .panel-grid-cell { float:none;width:auto } #pl-2040 .panel-grid , #pl-2040 .panel-grid-cell {  } #pl-2040 .panel-grid .panel-grid-cell-empty { display:none } #pl-2040 .panel-grid .panel-grid-cell-mobile-last { margin-bottom:0px }  } </style>
   
   <style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>
   <?php wp_head(); ?>
   </head>

   <body class="home page page-id-2040 page-template page-template-page_front-page page-template-page_front-page-php siteorigin-panels siteorigin-panels-home">
      <div id="page" class="hfeed site" style="visibility: visible;">
	  	<div class="container-fluid" style="height: 50px; background: black">
		  	<div style="height: 100%; width: 300px; padding-top: 5px;"> 
			  	<a href="http://factordaily.com"> 
			  	<img src="http://fdthird.staging.wpengine.com/wp-content/uploads/2016/10/FactorDailyLogo-03.png" width="30%" /> 
			  	</a> 
			</div>
	  	</div>
         <header class="has-banner-cover">
			<div style="position: relative; height: 100%; text-align: center;">
                <div style="position: absolute; bottom: 5%; padding: 10px 40px; width:100%;">
                   <h2 class="banner-h2">  FactorDaily Year in Review: 2016  </h2>
                   <h4 class="banner-h4"> By Team FactorDaily <span style="color: #aaa; font-size: 14px; text-shadow: none !important; line-height: 2"> <br /> December 31, 2016 </span> </h4> 


                </div>
            </div>
         </header>
          
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
									
                                       <h3 class="widget-title" style="padding-top: 50px !important;">
                                          <span class="wow bounce animated" style="visibility: visible; animation-name: bounce;">
                                          Top stories on FactorDaily this year</span>
                                       </h3>

                                       <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                             <p class="dropcap">
	                                             As we look back on one of the most important years in all our lives — 2016 is the year we started FactorDaily — we thought we would revisit stories we did in 2016 that defined us, challenged us, and brought us to together as a team. In this post, we’ve picked the best of our stories across different categories — not because WE are proud of them (we are), but because these deeply reported articles and opinion pieces and videos and interviews and newsbreaks also tell the story that we set out to narrate from the beginning of our journey with FactorDaily — how technology is changing, and how it is changing us.
                                             </p>
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        <div class="panel-grid" id="pg-2040-8">
                           <div class="panel-grid-cell" id="pgc-2040-8-0">
                               <section id="facts" class="facts-area" style="padding: 0px 0px 65px 0px;">
                                 <div class="container" style="padding: 0px 0px 15px 0px;">
                                    <h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">2016 in Numbers</span></h3>
                                    <div class="col-md-4 col-sm-4 col-xs-12" align="center">
                                       <span class="fact wow rotateIn" id="427" style="visibility: hidden; animation-name: none;">427</span>
                                       <div class="fact-name wow fadeInUp" style="visibility: hidden; animation-name: none;">High impact stories</div>
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-4 col-xs-12" align="center">
                                       <span class="fact wow rotateIn" id="80" style="visibility: hidden; animation-name: none;">80</span>
                                       <div class="fact-name wow fadeInUp" style="visibility: hidden; animation-name: none;">Well-produced videos</div>
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-4 col-xs-12" align="center">
                                       <span class="fact wow rotateIn" id="24" style="visibility: hidden; animation-name: none;">24</span>
                                       <div class="fact-name wow fadeInUp" style="visibility: hidden; animation-name: none;">Longform stories</div>
                                    </div>
                                 </div>
                              </section>
                           </div>
                        </div>
						
						<div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="margin-bottom: 25px;">
										<h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">The spirit of entrepreneurship</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
						
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
	                                    <div>
											<div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
												<img src='http://factordaily.com/wp-content/uploads/2016/12/Entrepreneurship-lead.jpg' />
											</div>
										</div>
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important">

                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <p class="dropcap">The journey of entrepreneurship is an arduous but exhilarating one. While most stories on startups focus on funding, expansions, management changes and profit and loss, there are many stories to be told about the human aspect of entrepreneurship — of the dreams, struggles and sacrifices of startup founders and their families and colleagues.</p>

<p>At FactorDaily, we covered both the sides of entrepreneurship in 2016. While some of our stories focussed on the business of running a startup — from entrepreneurial ventures that are making a dent in the universe to a behind-the-scenes look at one of India’s biggest online retail sales — others were about the near-death experiences of startups, and an especially poignant story about the death of a startup founder.</p>

<p>Here are our five top picks from stories of entrepreneurship this year:</p>
											<ul>
												<li> <a href="http://factordaily.com/inmobi-valuation-future/" target="_blank" class="link-style"> India’s first Unicorn InMobi is staring at an uncertain future</a></li>
												<li> <a href="http://factordaily.com/hello-azim-seth/" target="_blank" class="link-style">“Hello, Azim seth!” </a></li>
												<li> <a href="http://factordaily.com/dunzo-hyperlocal-concierge-app-killing-bengaluru/" target="_blank" class="link-style">Dunzo! How a hyperlocal concierge app is killing it in Bengaluru </a></li>
												<li> <a href="http://factordaily.com/attune-arvindkumar-alagarswamy/" target="_blank" class="link-style"> Death of a startup founder</a></li>
												<li> <a href="http://factordaily.com/flipkart_big_binny_days/" target="_blank" class="link-style"> Flipkart’s Big Binny Days</a></li>
											</ul>
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
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

						<div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="margin-bottom: 25px;">
										<h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">New kids on the disruption block</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
						
						<div class="panel-grid" id="pg-2040-10">
                           <div class="panel-grid-cell" id="pgc-2040-10-0">
						   	  <section id="services" class="services-area">
                                 <div class="container">
	                                 <div>
										<div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
											<img src='http://factordaily.com/wp-content/uploads/2016/12/Disruptors_lead.jpg' />
										</div>
									</div>
                                    <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important">
									<p class="dropcap">
										As technology continues on its eat-the-world rampage, disruption is all around us — from money to education, from entertainment to design, from food to ticketing, from manufacturing to development, from health to commerce, from artificial intelligence to connected devices…</p>

<p>Who are these disruptors? The stories of Mark Zuckerberg, Travis Kalanick, Brian Chesky, Sebastian Thurn and the likes have been told, as also those of Sachin Bansal, Vijay Shekhar Sharma, Sridhar Vembu, Naveen Tewari, and peers.</p>
<p>Who are the new kids on the disruption block? Here are five among the stories we did in 2016 on disruptors and their journeys:</p>
										<ul>
											<li> <a href="http://factordaily.com/tanmay-bakshi-ibm-watson/" target="_blank" class="link-style">Tanmay Bakshi, the youngest Watson programmer </a></li>
											<li> <a href="http://factordaily.com/dunzo-hyperlocal-concierge-app-killing-bengaluru/" target="_blank" class="link-style"> Dunzo! How a hyperlocal concierge app is killing it in Bengaluru</a></li>
											<li> <a href="http://factordaily.com/viral-shah-julia-computing/" target="_blank" class="link-style">Julia is killing it in the programming world. Meet its co-creator from India</a></li>
											<li> <a href="http://factordaily.com/carbon-capture-emissions/" target="_blank" class="link-style"> This Indian startup has made carbon capture and reuse sustainable</a></li>
											<li> <a href="http://factordaily.com/akshay-kothari-linkedin-india-2/" target="_blank" class="link-style">Akshay Kothari, the 30 yo steering LinkedIn’s second biggest market </a></li>
										</ul>
                                    </div>
                                 </div>
                              </section>
                           </div>
                        </div>
                        
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="margin-bottom: 25px;">
										<h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">Makers who made a noise</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
	                                    <div>
											<div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
												<img src='http://factordaily.com/wp-content/uploads/2016/12/makers-lead.jpg' />
											</div>
										</div>
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                             <p class="dropcap">
	                                             In 2016, we covered a lot of makers — people who’ve mixed technology with DIT and built interesting products. Some of them have been night and weekend projects that became serious startups and companies. Others are simply interesting products that were built for the joy of it.</p>

<p>In 2017, we’ll double down on our maker coverage simply because they inspire us. Given the right opportunities, we believe, they will do great things for the world. Here are the top maker stories we covered over the past year:</p>
												<ul>
													<li> <a href="http://factordaily.com/tjay-a-device-to-detect-epileptic-seizures/" target="_blank" class="link-style">This mom created a device to detect her son’s epileptic seizures</a></li>
													<li> <a href="http://factordaily.com/blink-smartwatch-india/" target="_blank" class="link-style"> Blink: A smartwatch from India</a></li>
													<li> <a href="http://factordaily.com/cool-device-helps-visually-impaired-people-read-printed-books/" target="_blank" class="link-style">This cool device helps visually impaired people read printed books</a></li>
													<li> <a href="http://factordaily.com/rise-legs-cane-prosthetics/" target="_blank" class="link-style">These guys have made low-cost prosthetics using cane. And they work </a></li>
													<li> <a href="http://factordaily.com/bangalore-based-startup-develops-worlds-safest-backpack-cyclists/" target="_blank" class="link-style">Bengaluru startup develops ‘world’s safest backpack’ for cyclists </a></li>
												</ul>
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="margin-bottom: 25px;">
										<h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">How India’s Unicorns fared</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
                        
                         <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
	                                    <div >
											<div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
												<img src='http://factordaily.com/wp-content/uploads/2016/12/Unicorns_lead-1.jpg' />
											</div>
										</div>
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                             <p class="dropcap">
	                                           India has had only a handful of unicorns — companies that have a valuation of over $1 billion. We attempted to understand and write about these companies in 2016. Instead of piecemeal coverage about various aspects of these companies, we tried to see the larger picture. Most of the stories were longform. Expect more of that in 2017. Meanwhile, here are our best Unicorn stories from 2016:</p>
	                                           <ul>
		                                           <li> <a href="http://factordaily.com/inmobi-valuation-future/" target="_blank" class="link-style">India’s first Unicorn InMobi is staring at an uncertain future </a></li>
													<li> <a href="http://factordaily.com/mu-sigma-founder-dhiraj-rajaram/" target="_blank" class="link-style">Mu Sigma’s summation of maladies and Dhiraj’s fight to fix it </a></li>
													<li> <a href="http://factordaily.com/flipkart_big_binny_days/" target="_blank" class="link-style"> Flipkart’s Big Binny Days</a></li>
													<li> <a href="http://factordaily.com/project-fixkart-binny-bansal-flipkart/" target="_blank" class="link-style">Project Fixkart (Part Deux): Early Signs that Binny Bansal’s Balm for Flipkart is Working </a></li>
	                                           </ul>
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="margin-bottom: 25px;">
										<h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">The future is here</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>

						<div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
	                                    <div >
											<div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
												<img src='http://factordaily.com/wp-content/uploads/2016/12/future_lead.jpg' />
											</div>
										</div>
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <p class="dropcap">Today, more than ever before, we think and talk about our future. We look at it in equal parts with fear and fascination. Fear, because we are witnessing the rampage of technology in breaking down the very ideas we’ve built our societies on. Fascination, because of the incredible positive impact we see and foresee due to the same technology.</p>

<p>The role of our Future coverage at FactorDaily is to address both these thoughts. The fear pushes us to approach the impact of technology with a certain scepticism and ask tough questions. The fascination drives us to connect the dots and see its bigger, more majestic impact, and sometimes even dwell in a dreamland.</p>

<p>Here are some of the pieces from 2016 that attempt to make sense of oncoming changes:</p>	
											<ul>
												<li> <a href="http://factordaily.com/artificial-intellgence-automation-india-jobless-future/" target="_blank" class="link-style"> We are heading towards a jobless future: is it good or bad? </a></li>
												<li> <a href="http://factordaily.com/dangers-of-artificial-intelligence/" target="_blank" class="link-style"> Biased bots: Artificial Intelligence will mirror human prejudices</a></li>
												<li> <a href="http://factordaily.com/isro-outsourcing-india/" target="_blank" class="link-style">ISRO, it is time you outsourced to get to the next orbit </a></li>
												<li> <a href="http://factordaily.com/team-indus-lab2moon/" target="_blank" class="link-style">Meet the space-crazed teenagers at India’s first private space mission </a></li>
												<li> <a href="http://factordaily.com/science-fictions-many-realities-elon-musk-simulated-reality/" target="_blank" class="link-style"> Science fiction’s many realities: Elon Musk, Simulated Reality and why there may be no spoon</a></li>
											</ul>
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="margin-bottom: 25px;">
										<h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">All in a day’s news</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
	                                    <div >
											<div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
												<img src='http://factordaily.com/wp-content/uploads/2016/12/Buzz_lead-1.jpg' />
											</div>
										</div>
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                             <p class="dropcap">
	                                           When we launched in 2016, tech and startups in India were already well covered by mainstream and niche publications. Only a few publications were vested in original reporting. The rest would spin the pieces, force an opinion, stuff it with keywords and push it out in a hurry. We steered clear of commodity news and noise. That gave us time and an opportunity to lead the news cycle in some cases. The last six months validated our view that fewer, impactful stories that aren’t already out there will give you the same results as many smaller stories aggregated from other outlets</p>

<p>We will spend most of our time next year doing that. We will also aggregate from other sources, with minimal human effort, to make sure that we cover the entire breadth of stories as technology goes mainstream in India. Here are some of our pieces that led the news cycle in 2016:</p>
											<ul>
												<li> <a href="http://factordaily.com/paid-tweets-demonetisation/" target="_blank" class="link-style">Paid tweets: Twitter users offered money to praise demonetisation </a></li>
												<li> <a href="http://factordaily.com/factordaily-interview-legion/" target="_blank" class="link-style">Exclusive: Interview with hacker group Legion </a></li>
												<li> <a href="http://factordaily.com/apple-store-open-delhi-bengaluru-delhi-end-2017/" target="_blank" class="link-style">Apple Stores to open in Delhi, Bengaluru and Mumbai before end-2017
 </a></li>
												<li> <a href="http://factordaily.com/amazon-prime-india/" target="_blank" class="link-style">Amazon India will invest $300 million in original Indian content for Prime </a></li>
												<li> <a href="http://factordaily.com/hyperloop-india/" target="_blank" class="link-style"> It’s confirmed: Hyperloop is in talks to run trials in India</a></li>
												<li> <a href="http://factordaily.com/alibaba-acquire-snapdeal/" target="_blank" class="link-style"> Alibaba in talks to acquire Snapdeal</a></li>
											</ul>		
																			
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="margin-bottom: 25px;">
										<h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">Comment is free (and fair)</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
	                                    <div >
											<div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
												<img src='http://factordaily.com/wp-content/uploads/2016/12/comments-lead.jpg' />
											</div>
										</div>
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                             <p class="dropcap">
	                                           In this era of constant, instant opinionating, we are rather old-fashioned in believing in ‘show, don’t tell’. Which means, we’d rather show you, through deep and incisive reportage, how technology is transforming our society, rather than hold forth on whatever the burning issue of the day is. Like Guardian editor CP Scott said, “Comment is free, but facts are sacred.”</p>

<p>That said, we do believe there are times when commentary is valuable as it allows us to pull back from facts and see the larger picture; it helps us make sense of things that are too complex to be narrated linearly. Some of our top comment pieces in 2016.
</p>
											<ul>
												<li> <a href="http://factordaily.com/social-media-world-conspiracy-theories-innuendo-gossip-paranoia-sheer-craziness-ram-guha/" target="_blank" class="link-style">Social media is a world of conspiracy theories, innuendo, gossip, paranoia, sheer craziness: Ram Guha </a></li>
												<li> <a href="http://factordaily.com/the-economics-of-food-delivery/" target="_blank" class="link-style">The leaky bucket of Indian food delivery startups </a></li>
												<li> <a href="http://factordaily.com/alan-kay-apple-steve-jobs/" target="_blank" class="link-style">Computing pioneer Alan Kay on AI, Apple and future </a></li>
												<li> <a href="http://factordaily.com/digital-payment-cashless-society-good-or-bad/" target="_blank" class="link-style">We are trying to become a cashless society — but is that a great idea? </a></li>
												<li> <a href="http://factordaily.com/brahman-naman-film-quizzing-culture/" target="_blank" class="link-style">Brahman Naman: The kind of film that makes you question if you are an asshole </a></li>
											</ul>
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="margin-bottom: 25px;">
										<h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">When tech met life</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>

                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
	                                    <div >
											<div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
												<img src='http://factordaily.com/wp-content/uploads/2016/12/Society_lead.jpg' />
											</div>
										</div>
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                             <p class="dropcap">
	                                          With technology going mainstream, the most interesting stories are the ones in which tech touches our everyday lives. We have read the story of a man finding his mother and his childhood village using Google Earth. Or, stories of adopted girls who found their birth mothers online. Or, how a murderer got caught thanks to his digital footprint (selfie, in this instance).</p>

<p>At FactorDaily, we were choosy when it came to picking stories where technology was central in a real life incident. We gravitated more towards stories that were leaving broadbrush strokes on life around us. Here are a few that made us smile in smug satisfaction:
</p>
												<ul>
													<li> <a href="http://factordaily.com/missing-puujita-13-female-found/" target="_blank" class="link-style"> Puujita, 13, F… Found!</a></li>
													<li> <a href="http://factordaily.com/internet-gaming-screen-addiction-in-india/" target="_blank" class="link-style">The deadly addiction in your home that you are aware of — and comfortable with </a></li>
													<li> <a href="http://factordaily.com/dabholkar-india-anti-superstition/" target="_blank" class="link-style">'They killed Dabholkar, but they couldn't kill his ideas' </a></li>
													<li> <a href="http://factordaily.com/clean-good-fun-female-indian-vloggers-found-identity-cliche/" target="_blank" class="link-style">Clean, good fun: Female Indian vloggers have found their identity in that cliché </a></li>
													<li> <a href="http://factordaily.com/twitter-helping-india-reboot-public-services-publicly/" target="_blank" class="link-style"> How Twitter is helping India reboot public services, publicly</a></li>

												</ul>
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="margin-bottom: 25px;">
										<h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">Our a11y coverage</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                         <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
	                                    <div >
											<div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
												<img src='http://factordaily.com/wp-content/uploads/2016/12/Access-lead.jpg' />
											</div>
										</div>
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                             <p class="dropcap">
	                                          More than 100 million people live with disability in India. When we started writing about technology that can help them (or tech that eludes them), it was only an experiment — mostly unplanned. However, we soon realised that our stories on challenges the disabled face while interacting with technology were far more important than we’d thought.</p>

<p>In 2017, we will strive to improve our reportage of accessibility (or the lack of it) and other issues surrounding disability in India. Moreover, we will try and make design and product changes that will make FactorDaily more accessible. Here are some of our best stories on accessibility from 2016:
</p>
											<ul>
												<li> <a href="http://factordaily.com/accessibility-in-technology-in-india/" target="_blank" class="link-style">The moral imperative and business case for accessibility in technology </a></li>
												<li> <a href="http://factordaily.com/technology-helps-visually-impaired-professor-br-alamelu/" target="_blank" class="link-style">Tech ninja B R Alamelu beats blindness to be an admired academic </a></li>
												<li> <a href="http://factordaily.com/tested-18-government-apps-citizens-found-accessibility-issues-disabled/" target="_blank" class="link-style">We tested 18 government apps, and most are not fully accessible to the disabled </a></li>
												<li> <a href="http://factordaily.com/v-shakthi-online-accessibility-activist/" target="_blank" class="link-style">What made V Shakthi India’s most followed accessibility activist </a></li>
												<li> <a href="http://factordaily.com/demonetisation-visually-impaired/" target="_blank" class="link-style">The demonetisation drive ignores India’s 15m visually impaired people </a></li>
											</ul>
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="margin-bottom: 25px;">
										<h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">The gender conversation</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
	                                    <div>
											<div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
												<img src='http://factordaily.com/wp-content/uploads/2016/12/Feminism-lead.jpg' />
											</div>
										</div>
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                             <p class="dropcap">
	                                          In recent years, gender equality has got a huge boost partly because of the many conversations that have been kickstarted in online spaces around gender issues. These conversations have encouraged many everyday feminists, who may not have had the opportunity to speak up in real-life environments, to talk about things that impact women the world over: from sexism in workplaces (even extremely regressive ones) and on social media, to normalising conversations about women’s bodies and bodily functions like menstruation.</p>

<p>At FactorDaily as well, we made a conscious choice to talk about gender issues through stories and opinion pieces that reveal the casual, unconscious sexism in our society. Here are some of these stories:</p>

											<ul>
												<li> <a href="http://factordaily.com/why-are-female-entrepreneurship-events-always-such-weep-fests/" target="_blank" class="link-style">Why are female entrepreneurship events always such weep-fests?</a></li>
												<li> <a href="http://factordaily.com/begum-rokeya-hossain-sultanas-dream-matrubhoomi-feminist-science-fiction/" target="_blank" class="link-style">A Splendid Revenge: A badass Bengali feminist from 116 years ago, and a land without women </a></li>
												<li> <a href="http://factordaily.com/agents-ishq-tell-stories-love-sex-desire-voices/" target="_blank" class="link-style">Tumse milke dil ka hai jo haal: Agents of ishq tell stories about love, sex, and desire in their own voices </a></li>
												<li> <a href="http://factordaily.com/stop-sending-sexist-jokes-whatsapp/" target="_blank" class="link-style">Uncleji, please stop sending sexist jokes on WhatsApp and take your Men’s Rights Activism elsewhere </a></li>
												<li> <a href="http://factordaily.com/khabar-lahariya-digital-publishing/" target="_blank" class="link-style"> India’s only all-woman rural newspaper has a new challenge: cracking digital publishing</a></li>
												<li> <a href="http://factordaily.com/japleen-pasricha-work-taken-down-facebook-instagram-censorship-womens-bodies/" target="_blank" class="link-style">Yet another artist’s work taken down: Why do FB, Instagram have a problem with women’s bodies? </a></li>
												<li> <a href="http://factordaily.com/wikipedia-male-bias-work-progress-india/" target="_blank" class="link-style">Changing Wikipedia’s (and society’s) male bias is work in progress </a></li>
											</ul>
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="margin-bottom: 25px;">
										<h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">Of life and living</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
  
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
	                                    <div >
											<div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
												<img src='http://factordaily.com/wp-content/uploads/2016/12/lifestyle_lead.jpg' />
											</div>
										</div>
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                             <p class="dropcap">
	                                          When we launched the ‘Lifestyle’ section on FactorDaily, our intent wasn’t to get into the milieu of gadget blogging. We wanted to write about products and services that help you live, work and play better. To that end, we brought to you stories about how Bengaluru’s geeks were losing weight or staying awake chasing deadlines with nootropics. As the year draws to a close, here are some of our best stories in life and living:</p>
	                                          	<ul>
	                                          		<li> <a href="http://factordaily.com/keto-diet-bangalore/" target="_blank" class="link-style">Keto: Why Bengaluru geeks love this rad new diet </a></li>
	                                          		<li> <a href="http://factordaily.com/nootropics-modafinil-india/" target="_blank" class="link-style">How a smart drug helped me evade sleep and gave me superpowers. Well, almost </a></li>
	                                          		<li> <a href="http://factordaily.com/virtual-reality-pornography-sex/" target="_blank" class="link-style"> VR porn will take you a big step closer to realising your sexual fantasies</a></li>
	                                          		<li> <a href="http://factordaily.com/inside-grindr-users-spill-good-bad-ugly-sexy-scary-secrets-gay-hookup-app/" target="_blank" class="link-style"> Inside Grindr: Indian users spill the good, bad, and ugly secrets of the gay hookup app</a></li>
	                                          		<li> <a href="http://factordaily.com/not-all-those-who-wander-are-lost-digital-nomads/" target="_blank" class="link-style"> The life and travels of a Digital Nomad: Not all those who wander are lost</a></li>
	                                          	</ul>
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="margin-bottom: 25px;">
										<h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">Sci-fi, biased bots and other geekery</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
	                                    <div >
											<div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
												<img src='http://factordaily.com/wp-content/uploads/2016/12/geekery_lead.jpg' />
											</div>
										</div>
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                             <p class="dropcap">
	                                          Now that bots and artificial intelligence (AI) are infiltrating our lives every which way and aren’t quite the stuff of some nebulous future, geekery is not the same anymore. You are dealing with things that are real and happening now, and speculation just isn’t as much fun.</p>
	                                          <p>
		                                          On the other hand, it’s a fallacious idea that geekery is only about robots and AI. Geeks, as somebody explained to me pretty succinctly this year, are people who are interested in the “underpinnings of things”; people who keep going deeper and deeper into topics that interest them. Some geekery stories we loved writing this year:
	                                          </p>
	                                          <ul>
		                                          <li><a href="http://factordaily.com/silk-indias-oldest-mailing-list-history-geek-culture/" target="_blank" class="link-style">Silk, India’s oldest general-interest mailing list, has been its Geek Central for 18 years</a></li>
		                                          <li> <a href="http://factordaily.com/dreams-stuff-made/" target="_blank" class="link-style">The dreams our stuff is made of </a></li>
		                                          <li> <a href="http://factordaily.com/dangers-of-artificial-intelligence/" target="_blank" class="link-style"> Biased bots: Artificial Intelligence will mirror human prejudices</a></li>
		                                          <li> <a href="http://factordaily.com/mr-robot-dark-dystopia-reality/" target="_blank" class="link-style">Mr. Robot is disturbing because its dark dystopia is pretty close to our reality </a></li>
		                                          <li> <a href="http://factordaily.com/the-genius-of-satyajit-rays-little-known-geekery/" target="_blank" class="link-style"> The genius of Satyajit Ray’s little-known geekery</a></li>
	                                          </ul >
	                                          <hr />
                                          </div>
											<div class="tail-text">
												Visuals by: Nikhil Raj
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

				<div class="tail-text" style="font: small;">
					
					
										
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
      <style type="text/css">
         .isotope-item {
            width: 25%;
         }
         .isotope-filters {
            display: table;
            padding: 0;
            margin: 30px auto;
            overflow: auto;
         }
         .isotope-filters li {
            list-style: none;
            float: left;
            border: 2px solid #333;
            padding: 5px 10px;
            margin: 5px;
         } 
         .isotope-filters li a {
            color: #333;
         }
         .isotope-container .isotope-item img {
            margin: 0 !important;
         }
         .isotope-item {
            overflow: hidden;
         }
         .isotope-overlay {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            left: -100%;
            background-color: rgba(0,0,0,0.6);
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
         }
         .iso-link {
            position: absolute;
            top: 0;
            right: -100%;
            font-size: 28px;
            padding: 0 20px;
            color: #fff;
            line-height: 1;
            border-left: 2px solid #fff;
            background-color: rgba(255,255,255,0.4);
            height: 100%;
            -webkit-transition: all 0.3s 0.1s !important;
            transition: all 0.3s 0.1s !important;
            text-align: center;         
         }
         .iso-link:hover {
            color: #333;
         }
         .iso-link .fa {
            position: relative;
            top: 40%;
         }
         .isotope-item:hover .isotope-overlay {
            left: 0;
         }
         .isotope-item:hover .iso-link {
            right: 0;
         }
         @media only screen and (max-width: 699px) {
            .isotope-item {
               width: 50%;
            }          
         }
         @media only screen and (max-width: 420px) {
            .isotope-item {
               width: 100%;
            }          
         }        
      </style>
      <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20"></script>
      <script type="text/javascript">
      /* <![CDATA[ */
      var _wpcf7 = {"loaderUrl":"http:\/\/demo.athemes.com\/moesia\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"sending":"Sending ..."};
      /* ]]> */
      </script>
      <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.5"></script>
      <script type="text/javascript">
      /* <![CDATA[ */
      var wc_add_to_cart_params = {"ajax_url":"\/moesia\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/moesia\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View Cart","cart_url":"http:\/\/demo.athemes.com\/moesia","is_cart":"","cart_redirect_after_add":"no"};
      /* ]]> */
      </script>
      <script type="text/javascript">
      /* <![CDATA[ */
      var wc_cart_fragments_params = {"ajax_url":"\/moesia\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/moesia\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
      /* ]]> */
      </script>

      <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/navigation.js?ver=20120206"></script>
      <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/skip-link-focus-fix.js?ver=20130115"></script>
      <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-includes/js/comment-reply.min.js?ver=4.6.1"></script>
      <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-includes/js/wp-embed.min.js?ver=4.6.1"></script>
      <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"ae0508e4dc","applicationID":"21842015","transactionName":"blxVZEVVV0JQBk0IW1cWdlNDXVZfHhVYBlFmX0VfWUAUQVACXA==","queueTime":0,"applicationTime":120,"atts":"QhtWEg1PREw=","errorBeacon":"bam.nr-data.net","agent":""}</script>
   </body>
</html>

<section id="follow" class="text-center">
   <div class="container width-dec">
      <div class="page-header">
	      <a href="http://factordaily.com"> 
			  	<img src="http://fdthird.staging.wpengine.com/wp-content/uploads/2016/10/FactorDailyLogo-03.png" width="12%"> 
		</a>

      </div>
   </div>
</section>
<footer id="colophon" class="site-footer" role="contentinfo">
   <?php // substitute the class "container-fluid" below if you want a wider content area ?>
   <section id="follow" class="text-center">
      <div class="container">
         <div class="row">
            <div class="site-footer-inner col-sm-12">
               <div>
                  <div class="row">
                     
                     <div class="col-sm-8 col-sm-offset-2 text-center">
                        <h5 class="text-center"><?php echo date('Y'); ?> © Copyright. All Rights Reserved Sourcecode Media Pvt. Ltd.</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div><!-- close .container -->
   </section>
</footer><!-- close #colophon -->
<script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
   ga('create', 'UA-73887847-1', 'auto');
   ga('send', 'pageview');
</script>
<!-- start Mixpanel --><script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
mixpanel.init("14e2b675fd49097684098dda466525f7");</script><!-- end Mixpanel -->