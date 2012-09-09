<?php


/*
 * This page will save settings for the general settings page
 */

$flexi_tracking_code = $_POST['flexi_tracking_code'];
update_option('flexi_tracking_code',$flexi_tracking_code);

?>