<?php

namespace ArticleRatings\Admin\Polls
{

	if(filter_input(INPUT_POST, 'action')){
         print_r( \ArticleRatings\Admin\Polls\Polls::Add() );
	}
	
	// Load add poll controller
	require_once( AR_PLUGIN_DIR . '/admin/views/polls/polls-add.v.php');

}