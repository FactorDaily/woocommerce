<?php
/**
* WP Post Template: My Post Template
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
      
      button, html input[type="button"], input[type="reset"], input[type="submit"]
      {
	      box-shadow: none !important;
	   }
      }
   </style>
   <link rel="profile" href="http://gmpg.org/xfn/11">
   <link rel="pingback" href="http://demo.athemes.com/moesia/xmlrpc.php">
   <title>Flipkart - Big Billion Days</title>
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
	   
   
   </style>
   <style id="moesia-style-inline-css" type="text/css">
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
      p::first-letter {
         float: left;
         font-size: 5em;
         margin: 0 .2em 0 0;
      }

      cite{ line-height: 1.5; font-size: 12px; padding: 0px !important; margin: 0px 10px !important}
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
      .menu-toggle { margin:40px 0;}
      @media only screen and (min-width: 1025px) { .has-banner,.has-banner::after { max-height:1440px; } }
      @media only screen and (min-width: 1199px) { .has-banner,.has-banner::after { max-height:1440px; } }
      @media only screen and (min-width: 991px) { .welcome-info { top:100px; } }
      @media only screen and (min-width: 1199px) { .welcome-info { top:100px; } }
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
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/scripts.js?ver=1"></script>
   <script type="text/javascript" src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/jquery.fitvids.js?ver=1"></script>
   <script src="https://use.typekit.net/rhw4osa.js"></script>
   <script>try{Typekit.load({ async: true });}catch(e){}</script>
   
   <!--[if lt IE 9]>
   <script src="http://demo-26ce.kxcdn.com/wp-content/themes/moesia/js/html5shiv.js"></script>
   <![endif]-->
   <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
   <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
   <style type="text/css">
      .has-banner-cover{
         height: 95%;
         background: url('http://fdthird.staging.wpengine.com/wp-content/uploads/2016/10/Binny_Bansal_Flipkart_Lead.jpg') no-repeat center center; 
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
      }

      @media only screen and (min-width: 1025px) {
         .services{display: table-cell}
      }	
      @media only screen and (max-width: 767px) {	
         .has-banner{
         /*          display: none; */
         }
      }	
      .panel-grid {border: none !important;}
      .services-area {padding: 10px 0px !important;}
   </style>
   <style type="text/css" media="all" id="siteorigin-panels-grids-wp_head">/* Layout 2040 */ #pg-2040-0 , #pg-2040-1 , #pg-2040-2 , #pg-2040-3 , #pg-2040-4 , #pg-2040-5 , #pg-2040-6 , #pg-2040-7 , #pg-2040-8 , #pg-2040-9 , #pl-2040 .panel-grid-cell .so-panel { margin-bottom:30px } #pg-2040-0 .panel-grid-cell , #pg-2040-1 .panel-grid-cell , #pg-2040-2 .panel-grid-cell , #pg-2040-3 .panel-grid-cell , #pg-2040-4 .panel-grid-cell , #pg-2040-5 .panel-grid-cell , #pg-2040-6 .panel-grid-cell , #pg-2040-7 .panel-grid-cell , #pg-2040-8 .panel-grid-cell , #pg-2040-9 .panel-grid-cell , #pg-2040-10 .panel-grid-cell { float:none } #pl-2040 .panel-grid-cell .so-panel:last-child { margin-bottom:0px } #pg-2040-0 , #pg-2040-1 , #pg-2040-2 , #pg-2040-3 , #pg-2040-4 , #pg-2040-5 , #pg-2040-6 , #pg-2040-7 , #pg-2040-8 , #pg-2040-9 , #pg-2040-10 { margin-left:-15px;margin-right:-15px } #pg-2040-0 .panel-grid-cell , #pg-2040-1 .panel-grid-cell , #pg-2040-2 .panel-grid-cell , #pg-2040-3 .panel-grid-cell , #pg-2040-4 .panel-grid-cell , #pg-2040-5 .panel-grid-cell , #pg-2040-6 .panel-grid-cell , #pg-2040-7 .panel-grid-cell , #pg-2040-8 .panel-grid-cell , #pg-2040-9 .panel-grid-cell , #pg-2040-10 .panel-grid-cell { padding-left:15px;padding-right:15px } @media (max-width:780px){ #pg-2040-0 .panel-grid-cell , #pg-2040-1 .panel-grid-cell , #pg-2040-2 .panel-grid-cell , #pg-2040-3 .panel-grid-cell , #pg-2040-4 .panel-grid-cell , #pg-2040-5 .panel-grid-cell , #pg-2040-6 .panel-grid-cell , #pg-2040-7 .panel-grid-cell , #pg-2040-8 .panel-grid-cell , #pg-2040-9 .panel-grid-cell , #pg-2040-10 .panel-grid-cell { float:none;width:auto } #pl-2040 .panel-grid , #pl-2040 .panel-grid-cell {  } #pl-2040 .panel-grid .panel-grid-cell-empty { display:none } #pl-2040 .panel-grid .panel-grid-cell-mobile-last { margin-bottom:0px }  } </style>
   
   <style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>

   </head>

   <body class="home page page-id-2040 page-template page-template-page_front-page page-template-page_front-page-php siteorigin-panels siteorigin-panels-home">
      <div id="page" class="hfeed site" style="visibility: visible;">

         <header class="has-banner-cover">

            <div class="welcome-info" style="z-index: 1;">
               <div class="welcome-title wow bounceInDown animated" style="visibility: visible; animation-name: bounceInDown;">Flipkart Big Billion Days</div>
               <div class="welcome-desc wow bounceInRight animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceInRight;">
                  Flipkart eyes online insurance and global supply chain amid talks to raise $1 bn by January
               </div>
            </div>

         </header>
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
		 
<!--
         <nav class="navbar navbar-default navbar-fixed-top" id="head-nav" style="background:#262626;">
            <div class="container">
               <div class="navbar-header">





                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                  </button>
                  
                  <a class="navbar-brand" href="#">
	                  <img src="http://fdthird.staging.wpengine.com/wp-content/uploads/2016/10/FactorDailyLogo-03.png" align="top" />
                  </a>
                  
               </div>

               <div id="navbar" class="black navbar-collapse collapse" aria-expanded="false">
                  <ul class="nav navbar-nav">
                     <li class="active"><a href="#">Home</a></li>
                     <li><a href="#about">About</a></li>
                     <li><a href="#contact">Contact</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li><a href="#">Action</a></li>
                           <li><a href="#">Another action</a></li>
                           <li><a href="#">Something else here</a></li>
                           <li role="separator" class="divider"></li>
                           <li class="dropdown-header">Nav header</li>
                           <li><a href="#">Separated link</a></li>
                           <li><a href="#">One more separated link</a></li>
                        </ul>
                     </li>
                   </ul>
<!--
                  <ul class="nav navbar-nav navbar-right">
                  <li><a href="../navbar/">Default</a></li>
                  <li><a href="../navbar-static-top/">Static top</a></li>
                  <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
                  </ul>

               </div><!--/.nav-collapse 

            </div>
         </nav>  -->   
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
                                       <h3 class="widget-title" style="margin: 15px 0px 0px;">
                                          <span class="wow bounce animated" style="visibility: visible; animation-name: bounce;">
                                          Just a few minutes into the conversation</span>
                                       </h3>
                                       <!--
                                       <div class="service col-md-4 col-xs-6" style="vertical-align: middle">
                                       <span class="service-icon wow  animated" style="visibility: visible; animation-name: zoomInDown; background-color: rgba(0,0,0,0);width: auto;"> 								
                                       <img src="http://fdthird.staging.wpengine.com/wp-content/uploads/2016/10/33.jpeg" />
                                       </span>												

                                       </div>
                                       -->

                                       <div class="service col-md-offset-2 col-md-8 col-xs-12">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp; ">
                                             Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                             Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                             Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                             Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                          </div>
                                       </div>
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        <div class="panel-grid" id="pg-2040-1">
                           <div class="panel-grid-cell" id="pgc-2040-1-0">
                              <section id="call-to-action" class="action-area" style="padding: 139px 0;">
                                 <div class="container" style="visibility: hidden">
                                    <div class="action-text wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                                    </div>

                                 </div>
                                 <style type="text/css">
                                    .action-area {
                                       display: block;	
                                       background: url('http://fdthird.staging.wpengine.com/wp-content/uploads/2016/10/flipkart-inside2.jpg') no-repeat;
                                       background-position: center top;
                                       background-attachment: fixed;
                                       background-size: cover;
                                       z-index: -1;
                                    }
                                 </style>
                              </section>
                              <cite class="wow fadeInUp" style="visibility: hidden; animation-name: none;">It’s two weeks before LinkedIn chief executive officer Jeff Weiner’s visit Bengaluru. Product teams at the professional networking company’s new office in the city are logging in coffee.</cite>
                           </div>
                        </div>
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">                    
                                       <div class="service col-md-4 col-xs-6" style=" vertical-align: -124px">
                                          <span class="service-icon wow  animated" style="visibility: visible; animation-name: zoomInDown; background-color: rgba(0,0,0,0);width: auto;">
                                             <img src="http://fdthird.staging.wpengine.com/wp-content/uploads/2016/10/22.jpeg" />
                                          </span>
                                          <cite class="wow fadeInUp" style="visibility: hidden; animation-name: none;">It’s two weeks before LinkedIn chief executive officer Jeff Weiner’s visit Bengaluru.</cite>
                                       </div>
                                       <div class="service col-md-8 col-xs-12">
                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                             Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                             Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                             Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                             Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                              </div>
                           </div>
                        </div>
                        <div class="panel-grid" id="pg-2040-8">
                           <div class="panel-grid-cell" id="pgc-2040-8-0">
                              <section id="facts" class="facts-area" style="padding: 0px 0px 35px 0px;">
                                 <div class="container">
                                    <h3 class="widget-title"><span class="wow bounce" style="visibility: hidden; animation-name: none;">Big Billion statistics</span></h3>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                       <span class="fact wow rotateIn" id="46" style="visibility: hidden; animation-name: none;">0</span>
                                       <div class="fact-name wow fadeInUp" style="visibility: hidden; animation-name: none;">Employees</div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                       <span class="fact wow rotateIn" id="123" style="visibility: hidden; animation-name: none;">0</span>
                                       <div class="fact-name wow fadeInUp" style="visibility: hidden; animation-name: none;">Projects</div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                       <span class="fact wow rotateIn" id="98" style="visibility: hidden; animation-name: none;">0</span>
                                       <div class="fact-name wow fadeInUp" style="visibility: hidden; animation-name: none;">Dogs</div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                       <span class="fact wow rotateIn" id="34" style="visibility: hidden; animation-name: none;">0</span>
                                       <div class="fact-name wow fadeInUp" style="visibility: hidden; animation-name: none;">Offices</div>
                                    </div>
                                 </div>
                              </section>
                           </div>
                        </div>
                        <div class="panel-grid" id="pg-2040-0">
                           <div class="panel-row-style-hello hello panel-row-style">
                              <div class="panel-grid-cell" id="pgc-2040-0-0">
                                 <section id="services" class="services-area">
                                    <div class="container">

                                       <div class="service col-md-8 col-xs-12">

                                          <div class="text-font-family service-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                             <p>
                                                Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                             </p>
                                          </div>
                                       </div>

                                       <div class="service col-md-4 col-xs-6" style=" vertical-align: -124px">
                                          <span class="service-icon wow  animated" style="visibility: visible; animation-name: zoomInDown; background-color: rgba(0,0,0,0);width: auto;">
                                             <img src="http://fdthird.staging.wpengine.com/wp-content/uploads/2016/10/33.jpeg" />
                                          </span>
                                          <cite class="wow fadeInUp" style="visibility: hidden; animation-name: none;">It’s two weeks before LinkedIn chief executive officer Jeff Weiner’s visit Bengaluru.</cite>
                                       </div> 
                                    </div>    
                                 </section>
                              </div>
                           </div>
                        </div>
                        <div class="panel-grid" id="pg-2040-10">
                           <div class="panel-grid-cell" id="pgc-2040-10-0">
                              <section id="blockquote" class="blockquote-area" style="padding: 10px 0px;">
                                 <div class="container">
                                    <div class="bq-img col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-4 wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                       <img src="http://fdthird.staging.wpengine.com/wp-content/uploads/2016/10/Smriti.jpg">
                                    </div>
                                    <div class="bq-text col-md-6 col-sm-6 col-xs-6">
                                       <blockquote class="wow fadeInUp text-font-quotes" style="visibility: hidden; animation-name: none;">
                                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                       </blockquote>
                                    </div>
                                 </div>
                              </section>
                           </div>
                        </div>
                        <div class="panel-grid" id="pg-2040-9">
                           <div class="panel-grid-cell" id="pgc-2040-9-0">
                              <section id="skills" class="skills-area">
                                 <div class="container">
                                    <div class="text-font-family skills-desc col-md-6 col-sm-6 wow fadeInLeft" style="visibility: hidden; animation-name: none;">
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
<?php include('more-flipkart.php');?>
<style>
   .site-footer {background:black; margin-top:-200px; padding-top:200px;}
   .site-footer h3 {color:white; font-size:20px; margin:32px 0px 0px;}
   .footer-nav {border-bottom:1px solid #333333; padding-bottom:90px;}
   .footer-nav li {
      float: left;
      font-size:20px;
      padding-right: 15px;
      color: white;
      font-weight: 100;
      font-family: "brandon-grotesque",sans-serif;
      list-style-type:none;
   }
   .footer-nav ul {padding-left:0px; margin-left:15px;}
   .footer-nav li a {color:white;}
   /*.footer-nav li:after {content:"."; padding-left:25px;}*/
   .footer-nav li:last-child:after {content:none;}
   .site-footer h3 {color:white; font-size:20px !important; margin:32px 0px 0px;}
   .navbar-brand {
      height: 59px;
      margin-left: 64px;
      margin-top: 11px;
   }
   .navbar-brand img {height:100%;}
   #follow h3, .category h2, .category p {color:#4c4c4c;}
   #follow {background:black;}
   #follow h3 {color:white;}
   #fb-block h4, #tw-block h4, #li-block h4, #yt-block h4 {margin-top:25px; font-size:24px;}
   #fb-block {border-radius:10px; background:url(/wp-content/themes/_tk-master/images/bg_fb.jpg) -1px center; background:cover; height:300px; padding:42px 0px;margin-top: -25px;}
   #fb-block .circle {
      background:#3c5a99;
      display: table;
      vertical-align: middle;
      color:white;
      border:10px solid white;
   }
   #fb {
      background:#3c5a99;
      border-radius: 80px;
      border: 7px solid white;
      padding-top: 0px;
      padding-bottom: 0px;
      color: white;
      text-align: center;
      font-size: 20px;
   }

   #tw-block {
      border-radius: 10px;
      background: url(/wp-content/themes/_tk-master/images/bg_tw.jpg) center center;
      background: cover;
      height: 300px;
      padding: 42px 0px;
      margin-top: -25px;
   }
   #tw-block .circle {
      background:#2b9ae1;
      display: table;
      vertical-align: middle;
      color:white;
      border:10px solid white;
   }
   #tw {
      background: #2b9ae1;
      border-radius: 80px;
      border: 7px solid white;
      padding-top: 0px;
      padding-bottom: 0px;
      color: white;
      text-align: center;
      font-size: 20px;
   }
   #li-block {border-radius:10px; background:url(/wp-content/themes/_tk-master/images/bg_li.jpg) center center; background:cover; height:300px; padding:42px 0px; margin-top: -25px;}
   #li-block .circle {
      background:#0077b5;
      display: table;
      vertical-align: middle;
      color:white;
      border:10px solid white;
   }
   #li {
      background:#0077b5;     border-radius: 80px;
      border: 7px solid white;
      padding-top: 0px;
      padding-bottom: 0px;
      color: white;
      text-align: center;
      font-size: 20px;
   }

   #yt-block {border-radius:10px; background:url(/wp-content/themes/_tk-master/images/bg_yt.jpg) center center; background:cover; height:300px; padding:42px 0px;margin-top: -25px;}
   #yt-block .circle {
      background:#d82524;
      display: table;
      vertical-align: middle;
      color:white;
      border:10px solid white;
   }
   #yt {
      background:#d82524;     border-radius: 80px;
      border: 7px solid white;
      padding-top: 0px;
      padding-bottom: 0px;
      color: white;
      text-align: center;
      font-size: 20px;
   }
   @media screen and (max-width: 767px) {
      .page-header {
         padding-top:30px;
         border-bottom: 0px solid #eee;
      }
      .page-header h3 {border-color:white;}
      .page-header {border:0px;}
   }
</style>
<section id="follow" class="row text-center">
   <div class="container">
      <div class="page-header">
         <h3 class="text-center"><span>Follow <strong>Us</strong></span></h3>
      </div>
      <div class="col-sm-3 col-xs-3">
         <a href="https://www.facebook.com/FactorDaily">
            <img src="/wp-content/uploads/2016/09/mobile_fb.jpg" class="img-responsive visible-xs">
            <div class="col-sm-12 hidden-xs" id="fb-block">
               <div class="circle">
                  <div class="vertical-middle">
                     <i class="fa fa-3x fa-facebook"></i>
                  </div>
               </div>
               <h4 class="white">Like Us On Facebook</h4>
            </div>
         </a>
      </div>
      <div class="col-sm-3 col-xs-3">
         <a href="https://twitter.com/Factordaily">
            <img src="/wp-content/uploads/2016/09/mobile_tw.jpg" class="img-responsive visible-xs">
            <div class="col-sm-12 hidden-xs" id="tw-block">
               <div class="circle">
                  <div class="vertical-middle">
                     <i class="fa fa-3x fa-twitter"></i>
                  </div>
               </div>
               <h4 class="white">Follow Us On Twitter</h4>
            </div>
         </a>
      </div>
      <div class="col-sm-3 col-xs-3 text-center">
         <a href="https://www.linkedin.com/company/factordaily">
            <img src="/wp-content/uploads/2016/09/mobile_li.png" class="img-responsive visible-xs">
            <div class="col-sm-12 hidden-xs" id="li-block">
               <div class="circle">
                  <div class="vertical-middle">
                     <i class="fa fa-3x fa-linkedin"></i>
                  </div>
               </div>
               <h4 class="white">Follow Us On Linkedin</h4>
            </div>
         </a>
      </div>
      <div class="col-sm-3 col-xs-3 text-center">
         <a href="https://www.youtube.com/c/factordaily">
            <img src="/wp-content/uploads/2016/09/mobile_yt.png" class="img-responsive visible-xs">
            <div class="col-sm-12 hidden-xs" id="yt-block">
               <div class="circle">
                  <div class="vertical-middle">
                     <i class="fa fa-3x fa-youtube"></i>
                  </div>
               </div>
               <h4 class="white">Follow Us On YouTube</h4>
            </div>
         </a>
      </div>
   </div>
</section>
<footer id="colophon" class="site-footer" role="contentinfo">
   <?php // substitute the class "container-fluid" below if you want a wider content area ?>
   <section id="follow" class="row text-center">
      <div class="container">
         <div class="row">
            <div class="site-footer-inner col-sm-12">
               <div>
                  <div class="row">
                     <div class="col-sm-2 hidden-xs" style="margin-top: 33px">
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                           <img src="/wp-content/themes/_tk-master/images/factordaily.svg" style="max-width: 60%;">
                        </a>
                     </div>
                     <div class="col-sm-7 text-right">
                        <h3 class="text-center"><?php echo date('Y'); ?> © Copyright. All Rights Reserved Sourcecode Media Pvt. Ltd.</h3>
                     </div>
                     <div class="col-sm-3 text-center hidden-xs">
                        <h3 class="text-center">Design by sparklin.com</h3>
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