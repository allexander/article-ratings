<?php
        
namespace ArticleRatings\Admin;

$getGroupData = \ArticleRatings\PollGroups::showGroup($_GET['group-id']);

// Load views
require_once( AR_PLUGIN_DIR . '/admin/views/polls/poll-group-edit.v.php');