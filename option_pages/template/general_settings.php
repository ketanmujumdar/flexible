<?php
/*This page will contain all the basic things that can be configured via template
1.General Settings.
2. Layout Settings.
*/
?>
<?php echo load_template(get_template_directory().'/option_pages/template/template_header.php',true); ?>
	<!-- Need to load different template for the option pages -->
	<?php echo load_template(get_template_directory().'/option_pages/template/template_general_settings.php',true); ?>
<div>
</div>

<?php echo load_template(get_template_directory().'/option_pages/template/template_footer.php',true); ?>