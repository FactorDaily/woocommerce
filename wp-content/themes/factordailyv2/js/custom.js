
jQuery(window).load(function() {
		// Animate loader off screen
		jQuery(".se-pre-con").hide();
		//jQuery(".se-pre-con").fadeOut(500);


	});

 jQuery(document).ready(function($){
	var trigger = $('.hamburger'),
	overlay = $('.overlay'),
	isClosed = false;
		var full_bleed_height = $('.full-bleed-mobile').offset().top;
		console.log(full_bleed_height);
	
	trigger.click(function () {
		hamburger_cross();      
	});
	
	function hamburger_cross() {
	
		if (isClosed == true) {          
			overlay.hide();
			trigger.removeClass('is-open');
			trigger.addClass('is-closed');
			isClosed = false;
		} else {   
			overlay.show();
			trigger.removeClass('is-closed');
			trigger.addClass('is-open');
			isClosed = true;
		}
	}
	
	$('[data-toggle="offcanvas"]').click(function () {
	$('#wrapper').toggleClass('toggled');
	}); 
	$(document).scroll(function () {
	    var y = $(this).scrollTop();
	    if (y > 950 && y < ($(document).height() - 2000)) {
	        $('.other-stories-side').fadeIn();
	    }
	    else {
	        $('.other-stories-side').fadeOut();
	    }
	});
	$(document).scroll(function () {
	    var y = $(this).scrollTop();
	    if (y > 700 && y < ($(document).height() - 2000)) {
	        $('.sharing-desktop').fadeIn();
	    }
	    else {
		    $('.sharing-desktop').hide();
	    }
	});
	$(document).scroll(function () {
	    var y = $(this).scrollTop();
	    if (y > 120 && y < full_bleed_height-620) {
	        $('#anchor-point.social-visibility').fadeIn().css('display','flex');
	    }
	    else {
	        $('#anchor-point.social-visibility').fadeOut();
	    }
	});
});


jQuery(document).ready(function($){
	$("#contentmobile2").hide(); //hide your div initially
	$("#contentmobile").show();
    
    var topOfOthDiv = $("#anchor-point").offsetTop;
    $(window).scroll(function() {
        if($(window).scrollTop() > topOfOthDiv) { //scrolled past the other div?
            $("#contentmobile2").show(); //reached the desired point -- show div
            $("#contentmobile").hide();
            $("#anchor-point").prependTo("#social-sharing-append");
        }else {
	        $("#contentmobile2").hide(); //reached the desired point -- show div
            $("#contentmobile").show();
        }
    });
});

// ===== bootstrap carousel modification ====
jQuery(function ($) {
    $('.carousel').carousel();
    var caption = $('div.item:nth-child(1) .carousel-caption');
    $('.new-caption-area').html(caption.html());
    caption.css('display', 'none');

    $(".carousel").on('slide.bs.carousel', function (evt) {
        var caption = $('div.item:nth-child(' + ($(evt.relatedTarget).index() + 1) + ') .carousel-caption');
        $('.new-caption-area').html(caption.html());
        caption.css('display', 'none');
    });
});
	
//=== header animation by Animesh ====	
var height = jQuery(window).scrollTop()
if(height < 2){
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > 2){
		    jQuery('#contentasda').addClass("change-color");
		    jQuery('#contentmobile').addClass("change-color");
		    jQuery('#shrink-invisible').addClass("big-logo-animate");
			jQuery('#scroll-visible-toggle').addClass("logo-animation");
		    jQuery('#visible-button-toggle').addClass("visibility-toggle");
		    jQuery('.fdtopeventbar').addClass("make-visible");
		} 
		else{
			jQuery('#contentasda').removeClass("change-color");
			jQuery('#contentmobile').removeClass("change-color");
		    jQuery('#shrink-invisible').removeClass("big-logo-animate");
			jQuery('#scroll-visible-toggle').removeClass("logo-animation");
			jQuery('#visible-button-toggle').removeClass("visibility-toggle");
			jQuery('.fdtopeventbar').removeClass("make-visible");
		}
	});
} else {
	jQuery('#contentasda').addClass("change-color");
    jQuery('#contentmobile').addClass("change-color");
    jQuery('#shrink-invisible').addClass("big-logo-animate");
	jQuery('#scroll-visible-toggle').addClass("logo-animation");
	jQuery('#visible-button-toggle').addClass("visibility-toggle");
	jQuery('.fdtopeventbar').addClass("make-visible");
    jQuery(window).scroll(function() {
	if (jQuery(this).scrollTop() > 2){ 
	    jQuery('#contentasda').addClass("change-color");
	    jQuery('#contentmobile').addClass("change-color");
	    jQuery('#shrink-invisible').addClass("big-logo-animate");
		jQuery('#scroll-visible-toggle').addClass("logo-animation");
		jQuery('#visible-button-toggle').addClass("visibility-toggle");
		jQuery('.fdtopeventbar').addClass("make-visible");
	  }
	  else{
		jQuery('#contentasda').removeClass("change-color");
		jQuery('#contentmobile').removeClass("change-color");
	    jQuery('#shrink-invisible').removeClass("big-logo-animate");
		jQuery('#scroll-visible-toggle').removeClass("logo-animation");
		jQuery('#visible-button-toggle').removeClass("visibility-toggle");
		jQuery('.fdtopeventbar').removeClass("make-visible");
	  }
	});
}
	
jQuery(document).ready(function($){
		/**
		 * Retrieve posts based on tags - Category template pages
		 */
		function get_posts($params) {

			$container = $('#container-async');
			$content   = $container.find('.content');
	        $status    = $container.find('.status');
var loading = "<div id='loadFacebookG'><div id='blockG_1' class='facebook_blockG'></div><div id='blockG_2' class='facebook_blockG'></div><div id='blockG_3' class='facebook_blockG'></div></div>" ;	
			
			$status.html(loading).fadeIn();

			$.ajax({
	            		url: bobz.ajax_url,
	            		data: {
	            		action: 'do_filter_posts',
						nonce: bobz.nonce,
						params: $params
	            		},
	            		type: 'post',
	            		dataType: 'json',
	            		success: function(data, textStatus, XMLHttpRequest) {
	            	
			            	if (data.status === 200) {
			            		$content.html(data.content);
			            	}
			            	else if (data.status === 201) {
			            		$content.html(data.message);	
			            	}
			            	else {
			            		$status.html(data.message);
			            	}
			         },
			         error: function(MLHttpRequest, textStatus, errorThrown) {
			         },
				complete: function(data, textStatus) {
					
					msg = textStatus;
					$('#loadFacebookG').remove();
	            	if (textStatus === 'success') {
	            		msg = data.responseJSON.found;
	            	}
				$('.filter-stories').fadeOut();
	            }
	        });
		}

		/**
		 * Bind get_posts to tag cloud and navigation
		 */
		$('#container-async').on('click', 'a[data-filter], .pagination a', function(event) {
			if(event.preventDefault) { event.preventDefault(); }
			$this = $(this);
			$('.close-button').fadeIn();
			//alert($this.parent().text());
			//$this.parent().addClass('active');
			//$this.parent().html(loading);
			/**
			 * Set filter active
			 */
			if($this.data('filter') == 'close-these-tags'){
				$this.closest('ul').find('span.active').removeClass('active');
				$content.html('');
				$('.filter-stories').fadeIn();
				return;

			}
			if ($this.data('filter')) {
				$this.closest('ul').find('span.active').removeClass('active');
				$this.parent('span').addClass('active');
				$page = $this.data('page');
			}
			else {
				/**
				 * Pagination
				 */
				$page = parseInt($this.attr('href').replace(/\D/g,''));
				$this = $('.nav-filter .active a');
			}
			

	        $params    = {
	        	'page' : $page,
	        	'tax'  : $this.data('filter'),
	        	'term' : $this.data('term'),
	        	'qty'  : $this.closest('#container-async').data('paged'),
				'category' : $this.data('category'),
	        };

	        // Run query
	        get_posts($params);
		});
	
	$('#nav_menu-4').addClass('hidden-xs');




// ===== Nothing beyond this please ====

/*
function openSearch() {
    document.getElementById("SearchNav").className = "search-overlay open-modal-search";
}

function closeSearch() {
    document.getElementById("SearchNav").className = "search-overlay";
}
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
*/
});
jQuery(document).ready(function($) {
    var img_count = $(".single .entry-content #central-content img").length;
    console.log(img_count);
    if( img_count > 0) {
	    $('.single .entry-content #central-content a img').after('<div class="image-zoom-overlay "><img src="/wp-content/themes/factordailyv2/images/zoom-in.svg" /><span>Click to Zoom</span></div>');
	    $('.single .entry-content #central-content a .image-zoom-overlay').after('<span class="mobile-zoom-img-btn"><img src="/wp-content/themes/factordailyv2/images/zoom-in.svg"/></span>');
    }
});

jQuery(document).ready(function($) {
	
	$('.clickzoom').magnificPopup({
  type: 'image',
  mainClass: 'mfp-with-zoom', 
	  gallery:{
		enabled:true
	  },
	  zoom: {
		enabled: true, 
		duration: 300, 
		easing: 'ease-in-out', 
		opener: function(openerElement) {
		  return openerElement.is('img') ? openerElement : openerElement.find('img');
		}
  	  }
	});

	$('.open-popup-link').magnificPopup({
		  type:'inline',
		  midClick: true 
		});
	
	
});

// Pop up for the social share - FB
function myFunction(event,w,h) {

	var left = (screen.width/2)-(w/2);
	var top = (screen.height/2)-(h/2);
  event.preventDefault();
  var href = event.currentTarget.getAttribute('href')

    var myWindow = window.open(href, "", "width=600,height=450,top=100,left="+left);
}

