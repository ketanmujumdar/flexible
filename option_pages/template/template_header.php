<?php

wp_enqueue_script( 'ajax-script', get_template_directory_uri().'/option_pages/js/settings.js', array('jquery'), 1.0 ); // jQuery will be included automaticall
//This will create a global variable for javascript ajax call
wp_localize_script( 'ajax-script', 'ajax_object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) ); // setting ajaxurl


?>
<div id="flexi_header">
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/option_pages/js/'; ?>interface.js"></script>


<link href="<?php echo get_template_directory_uri().'/option_pages/css/'; ?>option_doc_style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri().'/option_pages/css/'; ?>bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri().'/option_pages/css/'; ?>flexi_option_css.css" rel="stylesheet" type="text/css" />

</div>

