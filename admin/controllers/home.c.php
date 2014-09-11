<?php

	namespace ArticleRatings\Admin;

	if( filter_input(INPUT_POST, 'build') == "1" )
   {
		//print_r( \ArticleRatings\Admin\dbTables::buildUserTables() );
	}
	
   // Load view
   require_once( AR_PLUGIN_DIR . '/admin/views/home.v.php');