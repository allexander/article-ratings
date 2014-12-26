<?php
        
namespace ArticleRatings\Admin;

//d($_GET['group-id']);
$result = \ArticleRatings\PollGroups::deleteGroup($_GET['group-id']);

// Load views
//require_once( AR_PLUGIN_DIR . '/admin/views/polls/poll-group-delete.v.php');