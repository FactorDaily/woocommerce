//trigger on document ready
jQuery(document).ready(function($) {

	//Remove affiliate from post Not working.
	$('.u_details li').click(function() { 
		alert('ok');
	});

	$('.show_posts p').click(function(){
	// select post
		if ($(this).parent().hasClass("selected_post")) {
		  $(this).parent().removeClass('selected_post');
		}else{
			$(this).parent().addClass('selected_post');
		}
	});

	// add affiliate users to the selected post
	$('.af_user').click(function() {
		// check whether there is any selected_post if not message
		var arr = $('.posts li.selected_post').attr('data-post-id');
		
		  if(arr > 0) {
			var uid = $(this).attr('data-uid');
			var puid = $('.selected_post .u_details').find('li').text();
			if(puid == uid) {
				console.log(puid);
				alert('user added');
				}else{
			var key = [$('.selected_post').attr('data-post-id')];
				$(key).each(function(){
					$('.selected_post .u_details').append('<li>'+uid+'<span class="u_remove" >x</span></li><input type="hidden" value="'+uid+'" name="pid_'+key+'[]">');

				});
						}
		 }else{
			alert('Select a post first');
		 }

	});
	


//=========document ready=======
}); // document.ready
