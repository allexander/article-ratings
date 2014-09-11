<?php

namespace ArticleRatings\Admin\Profiles
{

	if(filter_input(INPUT_POST, 'action')){
		print_r( \ArticleRatings\Admin\Profiles\Profiles::Add() );
	}
	
	// Load add profile controller
	require_once( AR_PLUGIN_DIR . '/admin/views/profiles/profiles-add.v.php');

}