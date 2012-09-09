<?php



function save_general_settings($post_values)
{
	$flexi_tracking_code = stripslashes($post_values['flexi_tracking_code']);
	update_option('flexi_tracking_code',$flexi_tracking_code);
	return 'true';
}

?>