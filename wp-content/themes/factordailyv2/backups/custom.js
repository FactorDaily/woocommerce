  jQuery(document).ready(function($){	
$(window).scroll(function() {    
	var scroll = $(window).scrollTop();
	if (scroll >= 200) {
    	$(".head-scroll").addClass("sticky-head");
	}
});

	
//=== header animation by Himanshu ====	
	$(window).scroll(function() {
	if ($(this).scrollTop() > 1){ 
	    $('#contentasda').addClass("change-color");
	    $('#transform-img').removeClass("logo-transform");
	  }
	  else{
		$('#contentasda').removeClass("change-color");
	    $('#transform-img').addClass("logo-transform");
	  }
	});

		/**
		 * Retrieve posts
		 */
		function get_posts($params) {

			$container = $('.page');
			$content   = $container.find('.content');
	        	$status    = $container.find('.status');

			$status.text('<i class="fa fa-circle-o spin"></i>');

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

					$status.html(textStatus);
					
					/*console.log(MLHttpRequest);
					console.log(textStatus);
					console.log(errorThrown);*/
			         },
				complete: function(data, textStatus) {
					
					msg = textStatus;

	            	if (textStatus === 'success') {
	            		msg = data.responseJSON.found;
	            	}

	            	$status.text(''); // Fill in the messag if you want to show something there
	            	
	            	/*console.log(data);
	            	console.log(textStatus);*/
	            }
	        });
		}

		/**
		 * Bind get_posts to tag cloud and navigation
		 */
		$('#container-async').on('click', 'a[data-filter], .pagination a', function(event) {
			if(event.preventDefault) { event.preventDefault(); }

			$this = $(this);

			/**
			 * Set filter active
			 */
			if ($this.data('filter')) {
				$this.closest('ul').find('.active').removeClass('active');
				$this.parent('li').addClass('active');
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
	        };

	        // Run query
	        get_posts($params);
		});
		
		$('a[data-term="all-terms"]').trigger('click');	  
// ===== Nothing beyond this please ====
});