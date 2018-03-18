<?php
/**
* WP Post Template: geekiest couple
*/
?>
<html lang="en-US">
   <head>
   <meta charset="UTF-8">
   <meta name="generator" content="WordPress 4.6.1">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script type="text/javascript" src="http://bam.nr-data.net/1/ae0508e4dc?a=21842015&amp;v=974.7d740e1&amp;to=blxVZEVVV0JQBk0IW1cWdlNDXVZfHhVYBlFmX0VfWUAUQVACXA%3D%3D&amp;rst=1861&amp;ref=http://demo.athemes.com/moesia/&amp;ap=120&amp;be=643&amp;fe=463&amp;dc=230&amp;perf=%7B%22timing%22:%7B%22of%22:1475567799933,%22n%22:0,%22u%22:560,%22r%22:1,%22ue%22:560,%22re%22:289,%22f%22:289,%22dn%22:289,%22dne%22:289,%22c%22:289,%22ce%22:289,%22rq%22:300,%22rp%22:558,%22rpe%22:561,%22dl%22:600,%22di%22:873,%22ds%22:873,%22de%22:1103,%22dc%22:1105,%22l%22:1106,%22le%22:1117%7D,%22navigation%22:%7B%22rc%22:1%7D%7D&amp;at=QhtWEg1PREw%3D&amp;jsonp=NREUM.setToken">
   </script>
   <script src="http://js-agent.newrelic.com/nr-974.min.js">
   </script>
   <script type="text/javascript">
      window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[(new Date).getTime()].concat(u(arguments)),e?null:this,npri),e?void 0:this}}var i=t("handle"),a=t(2),u=t(3),c=t("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var s=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],p="api-",l=p+"ixn-";a(s,function(t,e){f[e]=o(p+e,!0,"api")}),f.addPageAction=o(p+"addPageAction",!0),e.exports=newrelic,f.interaction=function(){return(new r).get()};var d=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[Date.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){d[e]=o(l+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,(new Date).getTime()])}},{}],2:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],3:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?u(t,a,i):i()}function n(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),u=a.length,c=0;c<u;c++)a[c].apply(i,r);var s=f[m[n]];return s&&s.push([w,n,r,i]),i}function p(t,e){g[t]=l(t).concat(e)}function l(t){return g[t]||[]}function d(t){return s[t]=s[t]||o(n)}function v(t,e){c(t,function(t,n){e=e||"feature",m[n]=e,e in f||(f[e]=[])})}var g={},m={},w={on:p,emit:n,get:d,listeners:l,context:e,buffer:v};return w}function i(){return new r}var a="nr@context",u=t("gos"),c=t(2),f={},s={},p=e.exports=o();p.backlog=f},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!h++){var t=y.info=NREUM.info,e=s.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){c(m,function(e,n){t[e]||(t[e]=n)});var n="https"===g.split(":")[0]||t.sslForHttp;y.proto=n?"https://":"http://",u("mark",["onload",a()],null,"api");var r=s.createElement("script");r.src=y.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function o(){"complete"===s.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=t("handle"),c=t(2),f=window,s=f.document,p="addEventListener",l="attachEvent",d=f.XMLHttpRequest,v=d&&d.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:d,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},t(1);var g=""+location,m={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-974.min.js"},w=d&&v&&v[p]&&!/CriOS/.test(navigator.userAgent),y=e.exports={offset:a(),origin:g,features:{},xhrWrappable:w};s[p]?(s[p]("DOMContentLoaded",i,!1),f[p]("load",r,!1)):(s[l]("onreadystatechange",o),f[l]("onload",r)),u("mark",["firstbyte",a()],null,"api");var h=0},{}]},{},["loader"]);
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
   <title>Meet India’s geekiest couple: Kiran Jonnalagadda and Zainab Bawa</title>
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
	#content {
	   margin: 0 !important;
	   width: 100% !important;
	   padding: 0;
	}
	.site-content {
		max-width: 100% !important;
	}
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
		   display: inline-block !important;
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
		.dropcap { padding-top: 40px; }
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
         background: url('http://factordaily.com/wp-content/uploads/2017/01/KiranZainab-lead.jpg') no-repeat top center; 
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
       <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=419376571536241";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
                   <h2 class="banner-h2">   Meet India’s geekiest couple: Kiran Jonnalagadda and Zainab Bawa </h2>
                   <h4 class="banner-h4"> By Shrabonti Bagchi <span style="color: #aaa; font-size: 14px; text-shadow: none !important; line-height: 2"> <br /> January 16, 2017 </span> </h4> 


                </div>
            </div>
         </header>
         <div align="center">
          <?php fd_sharing_buttons(); ?>
         </div>
         <div id="content" class="site-content clearfix special-story">
            <div id="primary" class="fp-content-area">
               <main id="main" class="site-main" role="main">
                  <div class="entry-content">
                     <div id="pl-2040">
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="padding-left: 0px;padding-right: 0px;">
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                             <p class="dropcap">
                                               It’s the company’s sixth anniversary party, and HasGeek House is thrumming with activity, though it’s nowhere near as busy as it’s going to get in a couple of hours. People walk in and out of the small independent house in Bengaluru’s Domlur area that serves as headquarters for HasGeek.
                                             </p>
                                             <p>
                                                 On the top floor of the narrow house, in a room carved out of what used to be a terrace, Amelia Andersdotter, a 29-year-old Swedish politician, internet privacy activist and one-time member of the EU parliament, is giving a talk on the Swedish Pirate Party and its tumultuous history. The room is full of geeky men (yes, those stereotypes are unfortunately real, even though one of HasGeek’s co-founders is a woman), and the air is thick with questions about privacy, internet security and the differences between European and Indian privacy laws. 
                                             </p>
                                             <blockquote class="wow fadeInUp text-font-quotes animated" style="visibility: visible;">
                                           The room is full of geeky men, and the air is thick with questions about privacy, internet security and the differences between European and Indian privacy laws
                                       </blockquote>
                                            <p>
                                                On the ground floor of the house, two-and-a-half-year-old Amal Zaiki, dressed in a frilly pink frock, sits at a worktable and meticulously finishes a bowl of noodles while her mother, Zainab, talks to guests and coordinates food delivery for the party, which is getting larger by the minute. By the time Andersdotter has finished her talk and trooped down along with the audience, the ground floor of the house is full of people — at least a hundred have crammed into the small rooms and more have spilled over onto the stairs, kitchen and garden area. These are all geeks of one colour or the other — startup founders, developers at startups and established tech companies, freelance coders, design students, UI-UX designers, data and security experts, a tech journalist or two...   
                                            </p>
                                          </div>
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible;">
                                                <img src='http://factordaily.com/wp-content/uploads/2017/01/hasgeek_event_1.jpg' style="width: 100%;" />
                                                <cite class="wow fadeInUp animated" style="visibility: visible;">The audience at MLR Convention hall, Jayanagar, Bengaluru during a HasGeek conference</cite>
                                        </div>
                                       </div>
                                       
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
<!--
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
-->
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">
                                        <h3 class="widget-title" style="margin-top: 30px;"><span class="wow bounce" style="padding-top: 20px; animation-name: none;">Of conferences and conversations</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="padding-left: 0px;padding-right: 0px;">
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <p class="dropcap">But what is HasGeek? Chances are, unless you belong to the communities mentioned above, you’ve not heard of it or its founders, Kiran Jonnalagadda and Zainab Bawa, or have only a sketchy idea of what HasGeek does — like I did till I first met the duo a few months ago. </p>

<p>I found out that the bootstrapped company, started in 2010, organises some of the best technology conferences in India, built around themes such as developer operations (Rootconf), front-end engineering and design (Meta Refresh), data and analytics (Fifth Elephant, named after the invisible elephant in Terry Pratchett’s Discworld novels), Javascript (JSFoo), and Android (DroidconIN, part of a worldwide series of conferences focused on the Android ecosystem).</p>

<p>There will be two new ones in 2017: one on digital payments (50P Conference) and the other on scientific nutrition and “body hacking” (Kilter Con). There are also many smaller events, usually non-ticketed — hackathons, language-specific seminars, workshops, talks and social-impact events — that are organised or facilitated by the company. There’s an Open House every Friday, with a fridge full of beer and snacks on the table. Techies and other friends of HasGeek can walk in, grab a beer, and hang out with a variety of people with different passions — technology, writing, entrepreneurship; even feminism and social change.</p>
                                          </div>
                                       </div>
                                       <div>
                                            
                                        <div>
                                            <div class="text-font-family service-desc wow fadeInUp animated">
                                                <img src='http://factordaily.com/wp-content/uploads/2017/01/Kiran_Zainab_1-1.jpg' style="width: 100%;" />
                                                <cite class="wow fadeInUp animated" style="visibility: visible;">Zainab Bawa and Kiran Jonnalagadda at JSFoo, 2016. <span style="float: right;">Image: HasGeek<span><span class="cleaarfix"></span></cite>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 0px;">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <p>Apart from this, HasGeek also runs a jobs board called HasJob which sees hundreds of companies (mostly startups) and applicants from the tech community across India posting requirements every month.  </p>
                                            <p>All this is run by Zainab and Kiran with a team of 17 people and an army of volunteers.</p>
                                            <p>Running six major, multi-day, curated tech conferences — for which speakers are handpicked by an editorial board, taken through their paces, and rehearsed for at least three days; the entire process overseen by Zainab — is hardly a cakewalk. </p>
                                            <p>But, Kiran and Zainab’s achievement and influence are far larger: they help synergise a scattered tech ecosystem without being involved in the business of tech themselves; they bring geeks and tech aficionados together and give them a non-competitive space to talk about things that excite them — the latest programming language or the newest app development platform — and they do this with rigour, efficiency and integrity.</p>

                                          </div>
                                          <div class="text-font-family service-desc wow fadeInUp animated">
                                                <img src='http://factordaily.com/wp-content/uploads/2017/01/HasGeek_Hackathon.jpg' style="width: 100%;" />
                                                <cite class="wow fadeInUp animated" style="visibility: visible;">A midnight hackathon<span style="float: right;">Image: HasGeek<span><span class="cleaarfix"></span></cite>
                                            </div>
                                       </div>
                                        
                                        <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-top: 0px;">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <blockquote class="wow fadeInUp text-font-quotes animated" style="visibility: visible;">
                                            They have no stake in the ecosystem apart from starting great conversations, bringing technology solutions to the table, and bringing together people who can create great technological change in India
                                        </blockquote>
                                            <p>They have no stake in the entire ecosystem apart from starting conversations, bringing technology solutions to the table, and bringing people who can create great technological change in India together. They earn a living from this, but they have no ambition to discover the next great startup or become a unicorn or get funding for themselves or for other entrepreneurs.</p>
                                            <p>“I find engineers at ease in their conferences, and that’s not a trivial thing. There are some conferences where techies are not comfortable. There’s too much marketing talk, the technical quotient is not up there,” says Amod Malviya, co-founder, Udaan, and former CTO of Flipkart, who has attended and spoken at many HasGeek events.</p>    
                                            <p>“In these conferences, you are judged by the power of your idea, which is different from a networking conference. Even when I was in Flipkart, I didn’t wear the CTO hat; I was just another engineer in a community of engineers. There are many small things they do that make people feel at home, and this shows up in the kind of comfort people have exchanging points of view and ideas,” adds Malviya.</p>
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
                                        <h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">A new year, and a new acquisition </span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
                        <div class="panel-grid" id="pg-2040-10">
                           <div class="panel-grid-cell" id="pgc-2040-10-0">
                              <section id="services" class="services-area">
                                 <div class="container" style="padding-left: 0px;padding-right: 0px;">
                                    <div class="service col-md-offset-2 col-md-8 col-xs-12" >
                                        <p class="dropcap">
                                            The year 2017 is slated to be a big one for HasGeek. It’s gearing up to make its first acquisition — quite an achievement for a small, bootstrapped company within six years of its founding. The company being acquired, Belong, is a neighbourhood communities startup founded by Aravind RS and Gaurav Srivastava. </p>

                                        <blockquote class="wow fadeInUp text-font-quotes animated" style="visibility: visible;">
                                                HasGeek is gearing up to make its first acquisition — quite an achievement for a small, bootstrapped company within six years of its founding. The company being acquired, Belong, is a neighbourhood communities startup.
                                        </blockquote>
                                        <p>HasGeek was looking to build something similar to Belong to facilitate conversations at HasJobs and for speaker-audience interaction. Aravind, who had been a speaker at one of its conferences, was known to Kiran and Zainab. "Acquiring the technology will save us about a year of work,” says Kiran.</p>
                                    </div>
                                    <div>
                                        <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                            <img src='http://factordaily.com/wp-content/uploads/2017/01/fifthelephant-stage.jpg' style="width: 100%;" />
                                            <cite class="wow fadeInUp animated" style="visibility: visible;">A speaker at Fifth Elephant, 2016 edition. <span style="float: right;">Image: HasGeek<span><span class="cleaarfix"></span> </cite>
                                        </div>
                                    </div>
                                    <div class="service col-md-offset-2 col-md-8 col-xs-12">
                                        <p>
                                            They are adding a new event to the roster later this month: 50p, a conference on digital payments, which is bound to be super-relevant in the wake of demonetization and increasing government insistence on going cashless.</p>
    
    <p>The two also have a very geeky approach to fitness, and have been adherents of the <a href="http://factordaily.com/keto-diet-bangalore/" target="_blank" class="link-style">keto diet</a> for over a year now. Not used to doing things by half measures, and big fans of the quantified self, the couple is now organising an event in April around improving one’s body through better nutrition, fitness and habits, called KilterCon. The keto diet will feature in a big way, one assumes.</p>
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
                                        <h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">Jace meets Kiran meets Zainab</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="padding-left: 0px;padding-right: 0px;">
                                        <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding: 0px;" >
                                            <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                                <p class="dropcap" style="padding-top: 25px;">
                                                All this wouldn’t have happened if two remarkable people from two completely different worlds — one a self-taught coder, a Telugu boy from Bengaluru who dropped out of school; and the other a serious academic from a Muslim business family in Mumbai working on a PhD in the politics of land ownership — hadn’t met in the early 2000s.</p>
                                                <blockquote class="wow fadeInUp text-font-quotes animated" style="visibility: visible;">
                                                    Those who have known Kiran for a long time marvel at the change in his personality. Known as “Jace” to most people, he was a shy, intensely nerdy kid who loved computers and coding more than being around humans in real life
                                                </blockquote>
                                                <p>Those who have known Kiran for a long time marvel at the change in his personality. Known as ‘Jace’ to most people — a contraction of his full name, Kiran Chandra Jonnalagadda, or JC Kiran in school — he was a shy, intensely nerdy kid who loved computers and coding more than being around humans in real life, says Gourav Jaswal, who has known Kiran for 20 years and gave him his first real job as a writer at CHIP magazine. “Do people call him ‘Kiran’ now?” Jaswal sounds mildly surprised. “Back then, everyone used to call him Jace, including his dad. Only his mother and I called him Kiran.” Jaswal is the founder of the Goa-based startup incubator Prototyze.</p>
                                                <p style="float: left;">While he was still at school, Kiran hung out with people twice his age on early internet forums such as the bulletin board service (BBS) called CiX. This was perhaps India’s first BBS, started by Open Source evangelist the late Atul Chitnis, who was one of the mainstays of India’s first Free and Open Source conference, FOSS.in (formerly Linux Bangalore). [Read about CiX and how it spawned one of India’s earliest and longest-living mailing lists, SilkList <a href="http://factordaily.com/silk-indias-oldest-mailing-list-history-geek-culture/" target="_blank" class="link-style">[click here.]</a></p>
                                            </div>
                                       </div>
                                       
                                        <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding: 0px;">
                                            <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                                    <div style="width: 50%; float: left;">
                                                        <div class="text-font-family service-desc wow fadeInUp animated img-coc" style="visibility: visible;">
                                                            <img src='http://factordaily.com/wp-content/uploads/2017/01/tushargok_Twitter-.jpg' style="width: 100%;" />
                                                            <cite class="wow fadeInUp animated" style="visibility: visible;">A CHIP magazine cover from the late 90s. Image source: @tushargok on Twitter</cite>
                                                        </div>
                                                    </div>
                                                </p>
                                                
                                                <p>Most people who met ‘Jace’ were surprised to find he was actually a young boy. By then he had already developed an abiding love for open source software, and admits that he had a deep disdain for things like marketing and structured companies. “For me, software was the purest thing — and it was ruined by marketing. Windows was an inferior product that had done well because of marketing, and Linux was a superior product that nobody used because it wasn’t marketed,” he says. </p>
                                                <p>He has gradually changed his stance on this. “But, at that time, I was in the middle of my rebel’s education, and marketing was a bad word.” </p>
                                                <p>Rebel’s education is accurate. In 1998, he dropped out of his pre-university class (or PU; the equivalent of Class 11-12) and made his way to Mumbai. He had written an email to Jaswal, who was the editor of CHIP, saying he wanted to work at the magazine — it was one of the few havens at that time where a geeky kid could hang out with people who spoke the same language — and was with the magazine for over a year, writing and creating technology for it.</p>
                                            </div>
                                            <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                                <img src='http://factordaily.com/wp-content/uploads/2017/01/participant_DroidConIn_2016.jpg' style="width: 100%;" />
                                                <cite class="wow fadeInUp animated" style="visibility: visible;">A participant at DroidConIn, 2016. <span style="float: right;">Image: HasGeek<span><span class="cleaarfix"></span></cite>
                                            </div>
                                       </div>
                                        <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important">
                                            <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                                <p>“CHIP magazine struck a chord with nerdy kids. I used to get 40-100 emails a day, the vast majority from young people, many studying in engineering colleges, who wanted to meet us, talk to us,” recalls Jaswal. “Kiran wrote to me saying, ‘can I come work with you?’ He was the poster child for a computer geek. He might have been below the legal age to work.”
                                                </p>
                                                <p>Kiran was 17 years old. Nevertheless, he got the job, mainly because Jaswal felt he had “a formidable mind”: “He would write very precisely and with great authority on matters of technology. A lot of people I respect say he is one of the best technologists they have known.”</p>
                                                <blockquote class="wow fadeInUp text-font-quotes animated" style="visibility: visible;">
                                                    A lot of people I respect say he (Kiran) is one of the best technologists they have known — Gourav Jaswal, former editor of CHIP
                                                </blockquote>
                                                <p>A few months later, his mother called Jaswal and said Kiran hadn’t finished his PU degree and still had a paper to clear and could he please make sure that he came back and took it? Kiran cleared his PU after five attempts and never earned another formal degree in his life, although he was a technology consultant for two educational institutions in later years — the Institute of Bioinformatics in Bengaluru, where he designed the database, wrote most of the code, and built a technology team for the Human Protein Reference Database, and at the Institute of Genetic Medicine at Johns Hopkins University in the US, where he continued the work he had done at the former.</p>
                                                <blockquote class="wow fadeInUp text-font-quotes animated" style="visibility: visible;">
                                                    Although Zainab doesn’t seem to wear a religious identity on her sleeve, many of her writings over the years reflect her deep introspection over this identity
                                                </blockquote>
                                                <p>Meanwhile, Zainab was studying in Mumbai, majoring in sociology and anthropology, and simultaneously working as a researcher and activist on issues of urbanism and governance. She worked with Praja Foundation, a non-profit working in the area of accountable governance, in Mumbai on developing a handbook for citizens on urban governance; lived in Kashmir during an extremely violent period, doing research on youth, violence and conflict; and was part of the well-known Sarai project at the Centre for the Study of Developing Societies (CSDS) in New Delhi, arguably South Asia’s most prominent platform for research on the transformation of urban spaces, especially the intersection between cities, information, society, technology, and culture.</p>
                                                <p>Zainab comes from a Kutchi Muslim family of business people. Although she doesn’t seem to wear a religious identity on her sleeve, many of her writings over the years reflect her deep introspection over this identity — especially in a series of posts on the website Kafila.</p>
                                                <p>In one of the posts entitled ‘In the midst of blasts and fireworks across cities…’ in 2008, she wrote: “As there is no ‘city’ in the sense that we each make our own city and carve our own niches... so also there is no one universal feeling of vulnerability. Let me lay out some of the many vulnerable feelings that I feel from time to time these days: a). Being a woman in a live-in relationship with my boyfriend and a strange battle that has been going on between my mind, my boyfriend and his family; b). Being somewhat unemployed and attempting to work through meaningful relationships rather than work for money only (and that darn inflation); c). Taking the courageous risk of getting a house for myself in this city in the middle of my unemployment, an act that I am experiencing as a leap of faith, sometimes a great feeling and sometimes a scary feeling; d). The destiny of being Muslim at a time when bombs burst in Bangalore and Ahmedabad and who knows where else …; e). Figuring out the law and rules and regulations concerning various things and various relationships in a city whose language, both spoken and unspoken, I am still figuring out (what if I make mistakes …)..”</p>
                                                <blockquote class="wow fadeInUp text-font-quotes animated" style="visibility: visible;">
                                                    Zainab and Kiran first met through the mailing lists for Sarai and the Sarai Reader, a collection of research publications by Sarai Fellows.
                                                </blockquote>
                                                <p>Zainab and Kiran first met through the mailing lists for Sarai and the Sarai Reader, a collection of research publications by Sarai Fellows. Kiran had applied to Sarai for a new media fellowship, and was added to the Sarai Reader mailing list. They started dating when Zainab moved to Bangalore in 2006, to pursue a PhD at the Centre for the Study of Culture and Society on how land acquisitions in Indian cities for infrastructure development is impacting the economic lives of ordinary people. Around the same time, she was also a research fellow at the Centre for Internet and Society, and writing for online journals such as Kafila.</p>
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
                                        <h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;"> 'Functionality is an asset, but code is a liability' </span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
                        
                         <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="padding-left: 0px;padding-right: 0px;">
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12">
                                            <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                                <p class="dropcap">Kiran had taken up a consulting position with Comat Technologies — and he had his first brush with the government and government policies while working on the Karnataka government’s Nemmadi Project. Nemmadi, or the Rural Digital Services project, was started in 2004 as a project helping give rural citizens access to governance through telecentres, to help them with issuance of certificates such as death/birth, caste, income, residence; and to access state benefits. This was done through a public-private partnership model, with Comat Technologies as the private partner, and Kiran was responsible for coordinating with the technology team that operated 800 computerised centres in villages. </p>
                                            </div>
                                            <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                                <img src='http://factordaily.com/wp-content/uploads/2017/01/KiranZainab-table.jpg' style="width: 100%;" />
                                            </div>
                                       </div>
                                        <div class="service col-md-offset-2 col-md-8 col-xs-12">
                                            <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                                <p >Meanwhile, he had also been active on the Bengaluru Open Source scene, and was a part of the Linux Bangalore (subsequently FOSS.in) events. Open source held exciting potential but the general feeling was ‘how can you guys with your free software be better than an entire industry?’ says Kiran. “For us, these events were like a huddle corner because the outside world didn’t take us seriously. We needed a space where we could discuss the hardcore technology of Linux without having to constantly defend Linux... where we could feel free to speak up and not be criticised.” </p>
                                                <blockquote class="wow fadeInUp text-font-quotes animated" style="visibility: visible;">
                                                    Open source held exciting potential but the general feeling was ‘how can you guys with your free software be better than an entire industry?’ - Kiran.
                                                </blockquote>
                                                <p>At the same time, he felt that the FOSS.in events were a bit too structured and too conscious of the speaker-audience divide. “There was almost a  class division between the speaker and the audience. It was not a forum of equals,” he says. Wanting to break that wall, in 2006, he and a few other open source enthusiasts like Thejesh GN, co-founder of DataMeet, organised Bengaluru’s first Barcamp — user-generated “unconferences” for people to share and learn in an open environment. Zainab was an attendee and volunteer at some of them.</p>
                                            </div>
                                            <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                                <img src='http://factordaily.com/wp-content/uploads/2017/01/First_Barcamp_Bengaluru.jpg' style="width: 100%;" />
                                                <cite class="wow fadeInUp animated" style="visibility: visible;">First Barcamp in Bengaluru, April 2006, during a talk by Pete Deemer at Yahoo! office</cite>
                                            </div>
                                       </div>
                                        <div class="service col-md-offset-2 col-md-8 col-xs-12">
                                            <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                                <p >But after a few iterations of the non-profit Barcamps, Kiran started feeling that the quality of the talks could be improved. This was the time when TED Talks started becoming popular in India, and he was massively impressed by the quality of the talks and how they were documented and preserved. He felt that by their very looseness of structure and somewhat casual attitudes, Barcamps were losing out on institutional knowledge.</p>
                                            </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        
                        
            <!--        <div class="panel-grid" id="pg-2040-0">
                            <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="margin-bottom: 25px;">
                                        <h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">HasGeek: Geek central</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div> -->

                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="padding-left: 0px;padding-right: 0px;">
                                        <div class="service col-md-offset-2 col-md-8 col-xs-12">
                                            <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                                <p class="dropcap">Finally, in 2010, HasGeek was ready to take shape. Its first conference was in October 2010, at the IIM-Bangalore campus, on the topic HTML5. Unbelievable as this sounds today, Kiran had immense difficulty finding sponsors for this event — because no one was interested in developing better websites! The whole domain of website development and browser-based applications had stagnated — Kiran believes this was because of the dominance of Internet Explorer — but the scene was changing because Chrome had arrived.</p>
                                                
                                                
                                                <blockquote class="wow fadeInUp text-font-quotes animated" style="visibility: visible;">
                                                    The whole domain of website development and browser-based applications had stagnated but the scene was changing because Chrome had arrived
                                                </blockquote>
                                                
                                                <p>Given the lack of enthusiasm from sponsors, Kiran finally decided to put in the last of his savings — Rs 50,000 from a tax refund — and go ahead with the event (in the last minute, Microsoft plonked down some money for one of its evangelists to come and talk to an “outside audience” as a sponsored talk.) This conference, named DocType HTML5, went on to have five iterations in as many cities in India between October 2010 and February, 2011.</p>
                                            </div>
                                            <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                                <img src='http://factordaily.com/wp-content/uploads/2017/01/DocTYpeHTML5_event.jpg' style="width: 100%;" />
                                                <cite class="wow fadeInUp animated" style="text-align: center">DocTYpe HTML5 event in Pune in December 2010</cite>
                                            </div>
                                        </div>
                                        <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 45px !important">
                                            <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                                <p class="dropcap">HasGeek’s first event on Android took place in April 2011, and the company was on a roll, with four events in 2011. </p>
                                                <p>Zainab, who had been an attendee and occasional volunteer at the Barcamps, had a big role to play in the way HasGeek evolved. Though initially, her job was mainly to provide logistics support, soon she was approaching people for sponsorships, screening speakers, and deciding the flow of the events.</p>
                                                <blockquote class="wow fadeInUp text-font-quotes animated" style="visibility: visible;">
                                                    But idealism is not execution, nor is it a business. My response to problems is to solve them through technology. Zainab knew how to run an actual business — Kiran
                                                </blockquote>
                                                <p>“In Zainab’s hands, it became a big, more business-like organisation. I’ve always been somewhat of an idealist. I have ideas about how communities should exist,” says Kiran, who is a bit obsessed with community dynamics and has written extensive blogposts on different online communities and how they stack up against each other — from blogging platform LiveJournal (he was the first user from India) to the Sarai Reader mailing lists.</p>
                                                <p>“But idealism is not execution, nor is it a business. My response to problems is to solve them through technology. Zainab knew how to run an actual business, financially and as an organisation. She had the people skills, and the ability to set up an independent editorial team that would identify and vet speakers,” says Kiran, who wrote the code for a <a href="https://talkfunnel.com/" target="_blank" class="link-style">‘talkfunnel’</a> — an online programme that lets potential speakers propose talks and participants vote on them. This architecture is freely available on Github, and conferences (such as The Goa Project) and several companies use it for free to select speakers for their own events.</p>
                                                <p>“I also have strong interests in pedagogy, which is why I have taken up editorial very passionately at HasGeek,” says Zainab. “This combination of thinking-doing and hustling worked very well for us in the early years of HasGeek, when we were trying to establish proof of concept.” The combination of passion for technology and a rigorous, academic approach to the curation of speakers sets HasGeek events apart from similar events across the tech ecosystem in India. For instance, they don’t just approach the well-known “talking heads” or “thought-leaders”. More than 600 previously unknown speakers who had never stepped on a stage in their lives, have presented at HasGeek conferences. Several have gone on to become trainers. </p>
                                                <p>One of the things they are proudest of is the independence of their editorial process, which they have rigorously maintained, despite the events being sponsored by corporate entities. “Even though there are paid speaker slots in our conferences -- and this is clearly mentioned in the programme -- if someone is paying to be a speaker and isn’t good enough, they are categorically rejected,” says Zainab. Even for sponsored talks, if the main intention is to promote a product or company, it’s unacceptable. It has to benefit the community.</p>
                                                <p>"Functionality is an asset, but code is a liability," Kiran says, when I ask him why he does what he does. One of the reasons, he says, is to make sure that the community of Indian developers, and the companies they work for, share the liability of maintaining and updating code. "The maintenance cost of software is higher than its development cost," he adds.</p>
                                                <blockquote class="wow fadeInUp text-font-quotes animated" style="visibility: visible;">
                                                "Functionality is an asset, but code is a liability," Kiran says, when I ask him why he does what he does. "The maintenance cost of software is higher than its development cost."</blockquote>
                                                <p>“The work they are doing is absolutely magical. It is very, very important to the ecosystem. I am a big supporter and champion,” says Sharad Sharma, co-founder and governing council member of iSPIRT Foundation, the well-known software industry body and think-tank. “What they do is they bring expert technology practitioners to share their work with novice tech practitioners, and do it in a fairly selfless fashion, in a way that’s focused on social good and lifts the whole ecosystem up.” Sharma feels HasGeek’s work is in some ways complements iSPIRT’s work, which provides business support to the tech and startup industry to HasGeek’s technology support. </p>
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
                                        <h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">A feminist and a geek</span></h3>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="padding-left: 0px;padding-right: 0px;">
                                       <div class="service col-md-offset-2 col-md-8 col-xs-12">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                             <p class="dropcap">
                                               November 10, 2016. It was the first day of DroidConIn, a global conference for Android developers conducted in India by HasGeek. We were in the middle of a panel discussion on women in tech, moderated by Zainab. Towards the end of the talk, Amal, Kiran and Zainab’s 2.5 year old daughter, who was sitting in the front row of seats, showed signs of wanting to go to her mother. Someone held her up on to the stage and Zainab picked her up and kept talking, without dropping a single beat, as if it was the most natural thing in the world. </p>
        
                                          </div>
                                       </div>
                                       <div class="text-font-family service-desc wow fadeInUp animated bleed-image hidden-xs" style="clear: both;">
                                            <img src='http://factordaily.com/wp-content/uploads/2017/01/Zainabkid-collage.jpg' style="width: 100%;" />
                                            <cite class="wow fadeInUp animated" style="text-align: center">Zainab and Kiran’s daughter, now almost 3, has been a constant presence at HasGeek events and at their office. <span style="float: right;">Image: HasGeek<span><span class="cleaarfix"></span></cite>
                                        </div>
                                        <div class="text-font-family service-desc wow fadeInUp animated bleed-image visible-xs">
                                            <img src='http://factordaily.com/wp-content/uploads/2017/01/Zainabkid-collage-mob.jpg' style="width: 100%;" />
                                            <cite class="wow fadeInUp animated" style="text-align: center">Zainab and Kiran’s daughter, now almost 3, has been a constant presence at HasGeek events and at their office. <span style="float: right;">Image: HasGeek<span><span class="cleaarfix"></span></cite>
                                        </div>
                                        <div class="service col-md-offset-2 col-md-8 col-xs-12" >
                                            <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                                <p>
                                                    To her, it IS the most natural thing in the world. It also seems, to me, a perfect example of how the couple has blurred the boundaries between ‘work’ and ‘life’. Zainab believes that the exclusion of children from serious, adult spaces often makes us forget that someone, somewhere is taking care of them -- and it’s usually the mother. She feels it makes it easy for men in technology and other careers to not take up full responsibility as parents in favour of the more traditional role of ‘breadwinner’, and this is a loss for them, their children, their spouses, and for society. So, they have decided that all their conferences -- starting with the aforementioned DroidCon in November 2016 -- will have childcare centres equipped with toys, books, and an adult supervisor, so that mums and dads don’t have to miss the event because they couldn’t find anyone to babysit the kids. </p>
                                            </div>
                                       </div>
                                       <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; clear: both; ">
                                            <img src='http://factordaily.com/wp-content/uploads/2017/01/hasgeek_childrensplayarea.jpg' style="width: 100%;" />
                                            <cite class="wow fadeInUp animated" style="text-align: center">Starting at a conference last year, HasGeek has been creating child-care rooms at all the venues where parents can leave their kids while they are attending talks</cite>
                                        </div>
                                        <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 0px;">
                                            <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                                <p>Zainab tells me (and I remember this from the sixth anniversary event as well) that Amal is always at the office, and colleagues often babysit her when both parents are out on meetings. “Amal has been with me during sales meetings, interactions with clients, at conferences and every moment.  People may have been uncomfortable initially, she says, but over time they just got used to having meetings where Amal was being fed. “This has helped me appreciate the struggles that working mothers go through when raising a child and picking up their own careers.”</p>
                                                <blockquote class="wow fadeInUp text-font-quotes animated" style="visibility: visible;">
                                                Initially, I'd have to find ways to excuse myself to go elsewhere to breastfeed her (Amal, her daughter).  Subsequently, I'd just start feeding her during meetings and conversations — Zainab</blockquote>
                                                <p>These strong feminist beliefs shared by the couple have led them to consciously enable women to take part in tech conferences (which are usually overwhelmingly male) even if it means laying down certain ground rules that clearly spell out behavioural expectations. For instance, this notice is displayed prominently at all the events. These may seem like small measures, but they signal a refreshing change in culture.</p>
                                            </div>
                                       </div>
                                        <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important; padding-top: 0px;">
                                            <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; ">
                                                <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; width: 50%; float: right; padding-left: 20px;">
                                                    <img src='http://factordaily.com/wp-content/uploads/2017/01/Code_of_conduct.jpg' style="width: 100%;" />
                                                    <cite class="wow fadeInUp animated" style="text-align: center">This code of conduct notice spells out behavioural expectations at all the conferences</cite>
                                                </div>
                                                <p>Both partners have been exploring larger social issues along with their work. While Zainab collaborates on projects at the intersection of feminism and the digital world <a href="https://internetdemocracy.in/" target="_blank" class="link-style">(such as this one)</a> Kiran, who has always been a vocal supporter of internet privacy, net neutrality and free expression, has emerged as one of the strongest voices in the Indian internet space on these issues. He is the co-founder and volunteer trustee, along with other activists/writers like Apar Gupta, Aravind Ravi Sulekha, Karthik Balakrishnan, Nikhil Pahwa, Rachita Taneja, Raman Jit Singh Chima, and Rohin Dharmakumar, of the <a href="https://internetdemocracy.in/" target="_blank" class="link-style">Internet Freedom Foundation</a>, a not-for-profit organisation that aims to create research-backed support for online freedom and democracy and engage with the government in matters of policy and regulation. The foundation emerged from a more rag-tag collective, created mainly by forging connections with other like-minded people on Twitter during the savetheinternet.in campaign, which saw a big win in 2016 in upholding net neutrality in India when it forced the telecom regulator TRAI to hold an online public consultation on net neutrality during the <a href="https://internetfreedom.in/campaigns-savetheinternet/" target="_blank" class="link-style">Airtel zero-rating case</a>. The collective was also vocal during the debate over Facebook’s Free Basics</p>                                 
                                                <p>This is possibly one big step in Kiran’s evolution from geek to activist.</p>
                                                <p>“I find it very hard to pin my identity to something - say that I am a programmer and that’s my identity. I do not have an academic education. I love technology, but it’s like language... when you get good at that language, it becomes a means of expression. But   
I am spending more time on the Internet Freedom Foundation now, finding ways to engage with the government and policy,” says Kiran. His paper <a href="https://medium.com/@jackerhack/a-rant-on-aadhaar-6213e002f064" target="_blank" class="link-style">‘A Rant on Aadhar’</a> was widely circulated among policy-makers in Delhi recently. </p>
                                                <p>The only criticism they have faced, at times, is for not “thinking bigger”. Sharad Sharma articulates this as a failure to “ride the thermal” (a reference to the <a href="https://en.wikipedia.org/wiki/Thermal" target="_blank" class="link-style">atmospheric phenomenon</a>) of technology innovations coming from India and globalising them. “The only difference we have had is over this... every new technology has come from the west. This is the first time we have technology trends starting in India,” says Sharma. “HasGeek did the JuliaCon in 2015 (on the programming language Julia), and now Julia conferences are happening everywhere in the world. My push to them has been to take JuliaCon everywhere, and instead of riding foreign thermals coming into India, embrace India thermals. That option has been missed in Julia. That option was missed in UPI. They did a hackathon on UPI in February 2015, before others. But in one year, UPI has gone mainstream.” </p>
                                                <p>He wants them to “make earlier bets, take risks, catch a thermal in its infancy.”</p>

                                                <p>In fact, even as we speak, HasGeek, which is furiously gearing up for its upcoming payments conference, 50P, has locked horns with iSPIRT over <a href="http://indiastack.org/about/" target="_blank" class="link-style">IndiaStack</a>, which is backed by iSPIRT, that can potentially help developers create solutions for India’s digitally underserved. But Zainab and Kiran are not convinced about its security and privacy aspects.</p>

                                                <p>It’s a sign of a healthy ecosystem, though, that such fights don’t devolve into personal acrimony but remain in the sphere of ideas and data.</p>

                                                <p>Because data and ideas are, after all, like the invisible but omnipotent fifth elephant in Pratchett’s universe -- the oil that lubricates the digital world.</p>
                                            </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>  
                        <div align="center">
                          <?php fd_sharing_buttons(); ?>
                         </div>                   
                        
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container" style="padding-left: 0px;padding-right: 0px;">

                                       <div class="service col-md-offset-2 col-md-8 col-xs-12" style="padding-bottom: 65px !important">
                                            
                                            <div class="tail-text">
                                                <p><i>Correction: An earlier version of this story said 50p conference will be held in April. It will actually be held on 24-25 January, 2017. The story has been updated with this information.</i></p>
                                                <p><i>Correction: The story publishing date was initially wrongly mentioned as 'January 16, 2016' instead of 'January 16, 2017'. This has now been corrected</i></p>
                                                <p><i>Updated on 17.01.17 at 5.40 pm: A previous version of this story erroneously mentioned that the company HasGeek is acquiring was earlier called Scrollback. However, subsequent information revealed that the company is called Belong, and it has no association with Scrollback. The error is regretted.</i></p>
                                                <p><i>Correction: IndiaStack is not 'a set of open software protocols' as earlier mentioned, but an open API project.</i></p>
                                                Lead visuals by: Nikhil Raj
                                            </div>
                                            <div class="tail-text" style="font: small;">
                                                Disclosure: FactorDaily is owned by SourceCode Media, which counts Accel Partners, Blume Ventures and Vijay Shekhar Sharma among its investors. Accel Partners is an early investor in Flipkart. Vijay Shekhar Sharma is the founder of Paytm. None of FactorDaily’s investors have any influence on its reporting about India’s technology and startup ecosystem.
                                            </div>
                                            <div class="clearfix"> </div>
                                            <h5 class="add-comment" style="margin-top: 30px;"><i class="fa fa-plus-circle"></i> Add & View Comments</h5>

                                            <div class="fb-comments" data-href="http://factordaily.com/profile-kiran-jonnalagadda-zainab-bawa-hasgeek/" data-width="100%" data-numposts="5">    
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
         blockquote {
             margin-top: 32px;
             line-height: 1.5;
         }
         .bleed-image {
            width: 100vw;
            position: relative;
            margin-left: -50vw;
            height: auto;
            left: 50%;
         }
         p {
             font-weight: 400;
         }
         .img-coc {
             padding: 5px 35px 10px 0px;
         }
         .social-media-icons {
	         justify-content: center;
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
         @media only screen and (max-width: 470px) {
            blockquote {
               padding: 0px 30px;
            }          
            p {
                padding: 0px 20px;
            }
            .img-coc {
                padding: 5px 20px 10px 15px;
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
      </div>
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
for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.
&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
mixpanel.init("14e2b675fd49097684098dda466525f7");</script><!-- end Mixpanel -->