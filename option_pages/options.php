<?php
include_once 'option_page_save_settings.php';


add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_generate_menu' );
add_action('wp_ajax_flexi_settings', 'save_settings');

function theme_options_init()
{
	//initialize function if needed 
}


function theme_options_generate_menu()
{
	add_menu_page('Settings', 'Flexi Settings', 'administrator', __FILE__, 'flexi_settings_page','',61);
}


function flexi_settings_page()
{
	echo load_template(get_template_directory().'/option_pages/template/general_settings.php',true);
}

/*
 * Handles all the ajax requests .	
 */
function save_settings()
{
	$type = $_POST['txttype'];
	switch ($type)
	{
		case 'general_settings':
				echo save_general_settings($_POST);
				//echo 'in general settings';
			break;
	}
	die();
}

?>