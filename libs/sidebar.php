<?php
class sidebar
{
	/*
	 * @fn Create Sidebar
	 * @params $args 
	 * $args = array(
		'name'          => sprintf(__('Sidebar %d'), $i ),
		'id'            => 'sidebar-$i',
		'description'   => '',
        'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>' ); 
		returns boolean
	 */
	function create_sidebar($args)
	{
		if ( function_exists('register_sidebar') )
			register_sidebar($args);
	}
	
	function remove_sidebar($atts)
	{
		
	}
}
?>