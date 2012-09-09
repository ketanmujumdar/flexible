jQuery('document').ready(function(){
	
	jQuery('#flexi_settings_doc a').click(function(){
		jQuery('.make_me_invisible').css('display','none');
		var page_name = jQuery(this).attr('href');
		var setting_page_name = page_name.split('#');
		jQuery('#'+setting_page_name[1]).slideDown('slow');
	});
	
	
	
//For saving the options into the database
	
	jQuery('#flexi_general_settings_from').submit(function(){
		var url = ajax_object.ajaxurl;
		jQuery.post(url,jQuery('#flexi_general_settings_from').serialize(), function(saved_status) {
			alert(saved_status); // alerts 'ajax submitted'
		});
		return false;
	});
	
});