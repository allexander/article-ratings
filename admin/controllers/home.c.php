<?php

    namespace ArticleRatings\Admin;

    if( filter_input(INPUT_POST, 'formName') == 'buildDatabase' && filter_input(INPUT_POST, 'build') == "1" )
    {
        //print_r( \ArticleRatings\Classes\dbTables::buildUserTables() );
        print_r( \ArticleRatings\Classes\Database::testFunction() );
    }
	
   // Load view
   require_once( AR_PLUGIN_DIR . '/admin/views/home/home.v.php');