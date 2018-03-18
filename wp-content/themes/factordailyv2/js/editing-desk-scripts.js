//trigger on document ready
jQuery(document).ready(function($) {


  $('#stories-desk .sortable-list').sortable({
      connectWith: '#stories-desk .story', // this was .sortable-list
      placeholder: 'placeholder',
      item: '.sortable-item',
      cancel: 'img',
      start: function(e, ui) {
        var parent_item = ui.item.parent('ul').attr('data-parent-name');
        ui.item.attr('data-parent-name', parent_item);
      },
      receive: function(event, ui) {
        var page_item = $(this).children('li');
        page_item.children('.remove').addClass('active');
        $(page_item).parent('ul').parent('div').next('div').children('.ls-position-save').prop('disabled', false);
        var curr_id = $(page_item).parent('ul').attr('id');
        $(page_item).attr('id', curr_id);
       // $(page_item).parent('ul').addClass('noborder');
        if ($(this).children().length > 1) {
          $(ui.sender).sortable('cancel');
          $(this).removeClass('active');
          parent_name = $(ui.sender).children(this).attr('data-parent-name');
          $('ul[data-parent-name="drag-source-stories"]').prepend('<span class="message error">Remove the existing story</span>');
          $('.stories').prepend('<span class="message error">Remove the existing story</span>');
          $('.message').delay('1500').fadeOut();
        }
    
        $('.remove').click(function() {
          var remove_item = $(this).parent('li');
          $(this).removeClass('active');
          var post_id = $(this).parent('li').attr('data-page-id');
          //$(this).parent('li').prepend('<span class="spinner"></span>');
          $(this).parent('li').removeAttr('data-parent-name');
          $(this).parent('li').removeAttr('id');
          $('.ls_position_save').prop('disabled', false);
		 
          $('ul.drag-source').prepend(remove_item);
          $(page_item).parent('ul').removeClass('noborder');
        });

      }

    }


  );

  $('.remove').click(function() {
    var remove_item = $(this).parent('li');
    $(this).removeClass('active');
    var post_id = $(this).parent('li').attr('data-page-id');
    //$(this).parent('li').prepend('<span class="spinner"></span>');
    $(this).parent('li').removeAttr('data-parent-name');
    $(this).parent('li').removeAttr('id');
    if ($('.stories ul').children().length < 5) {
	  $('ls_position_save').prop('disabled', true);
    }
    $('ul.drag-source').prepend(remove_item);
  });

  $('.ls-position-save').click(function(event, ui) {
    var arr = [];
    $('.stories li').each(function(pageid, position) {
      var pageid = $(this).attr('data-page-id');
      var position = $(this).parent('ul').attr('data-position-id');
      arr[position] = pageid;
    });
	
    if ($('.stories ul').children().length < 5) {
      $('.stories').prepend('<span class="message error"><h2>Dashboard requires  5 stories</h2></span>');
      $('.message').delay('2000').fadeOut();
	  $('.ls_position_save').prop('disabled', true);
      return;
    	}else{
			$(this).html("<div id='loadFacebookG'><div id='blockG_1' class='facebook_blockG'></div><div id='blockG_2' class='facebook_blockG'></div><div id='blockG_3' class='facebook_blockG'></div></div>");	
		}

    $.post(
      ajaxurl, {
        'action': 'add_lsp',
        'positions': arr,
      },
      function(response) {
        location.reload(true);
        $('.stories').prepend('<h2 class="message"><span >' + response + '</span></h2>');
        $('ls_position_save').prop('disabled', true);
        $('.message').delay(3000).fadeOut();
        //$('.stories').addClass('noborder');
      }
    );
  })
  $('.ls-position-reset').click(function(event, ui) {
    if (confirm('Unsaved changes will be lost!')) {
      location.reload(true);
    }
  });


  //I think this can be improved
//Search 
$('#editor_search_form input').keyup(function(event) {
 
// prevent browser autocomplete
$(this).attr('autocomplete','off');
 
// get search term
var searchTerm = $(this).val();
var searchType = $('.sentence').val();
var originalContent = $('.drag-source').html();
// send request when the lenght is gt 2 letters

if(searchTerm.length > 2){
	$('.drag-source').prepend("<div id='loadFacebookG'><div id='blockG_1' class='facebook_blockG'></div><div id='blockG_2' class='facebook_blockG'></div><div id='blockG_3' class='facebook_blockG'></div></div>");
 
$.ajax({
url : '../wp-admin/admin-ajax.php',
type:"GET",
data:{
 
'action':'dhemy_ajax_search',
'term' :searchTerm,
},
success:function(result){
jQuery('.drag-source').html(result).fadeIn();
}
});

}
});

  // Uploading files for custom meta boxes
  var file_frame;

  jQuery.fn.upload_listing_image = function(button) {
    var button_id = button.attr('id');
    var field_id = button_id.replace('_button', '');

    // If the media frame already exists, reopen it.
    if (file_frame) {
      file_frame.open();
      return;
    }

    // Create the media frame.
    file_frame = wp.media.frames.file_frame = wp.media({
      title: jQuery(this).data('uploader_title'),
      button: {
        text: jQuery(this).data('uploader_button_text'),
      },
      multiple: false
    });

    // When an image is selected, run a callback.
    file_frame.on('select', function() {
      var attachment = file_frame.state().get('selection').first().toJSON();
      jQuery("#" + field_id).val(attachment.id);
      jQuery("#listingimagediv img").attr('src', attachment.url);
      jQuery('#listingimagediv img').show();
      jQuery('#' + button_id).attr('id', 'remove_listing_image_button');
      jQuery('#remove_listing_image_button').text('Remove listing image');
    });

    // Finally, open the modal
    file_frame.open();
  };

  jQuery('#listingimagediv').on('click', '#upload_listing_image_button', function(event) {
    event.preventDefault();
    jQuery.fn.upload_listing_image(jQuery(this));
  });

  jQuery('#listingimagediv').on('click', '#remove_listing_image_button', function(event) {
    event.preventDefault();
    jQuery('#upload_listing_image').val('');
    jQuery('#listingimagediv img').attr('src', '');
    jQuery('#listingimagediv img').hide();
    jQuery(this).attr('id', 'upload_listing_image_button');
    jQuery('#upload_listing_image_button').text('Set listing image');
  });


  //show the category list if the category template is selected
  $('#addcattopage').hide();
  $('select#page_template').change(function(e) {
    if ($(this).val() == 'page-templates/display-category.php') {
      $('#addcattopage').show();
    } else {
      $('#addcattopage').hide();
    }
  });

  // show tag list if Tag is enabled{
  if ($('input#banner_enable').is(':checked')) {
    $('.banner_tag_form').show();
  }
  $('#banner_enable').click(function() {
    if ($('input#banner_enable').is(':checked')) {
      $('.banner_tag_form').show();
    } else {
      $('.banner_tag_form').hide();
    };

  });
  // Add multiple select to tags drop down

  $('.banner_tag_form').attr('multiple', 'multiple');

$('.wp-admin .trash').click(function() {
	
	var r = confirm('Do you want to delete this article?');
	if(r == true) {
//do nothing
	}else{
	event.preventDefault();
	}
});


//Affiliate 

 // $('.affiliate-save').click(function(event, ui) {
//    var arr = [];
//    $('.stories li').each(function(pageid, position) {
//      var pageid = $(this).attr('data-u-id');
//      var position = $(this).parent('ul').attr('data-post-id');
//      arr[position] = pageid;
//	alert(arr);
//    });
//    $.post(
//      ajaxurl, {
//        'action': 'add_affiliate',
//        'affiliates': arr,
//      },
//      function(response) {
//        location.reload(true);
//        $('.stories').prepend('<h2 class="message"><span >' + response + '</span></h2>');
//        $('ls_position_save').prop('disabled', true);
//        $('.message').delay(3000).fadeOut();
//        //$('.stories').addClass('noborder');
//      }
//    );
//  })


}); // document.ready
