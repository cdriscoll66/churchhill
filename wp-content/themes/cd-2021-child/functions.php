<?php 

$cd_includes = array(
	'enqueue_files',
	'options_page',
	'cpt_registration',
	// 'register_sidebar'
   );
   
   
	   foreach ( $cd_includes as $file ) {
		   require_once get_stylesheet_directory() . '/inc/' . $file . '.php';
	   }
   





